<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Services\StripeService;
use App\Services\PayPalService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    protected $stripeService;
    protected $paypalService;

    public function __construct(StripeService $stripeService, PayPalService $paypalService)
    {
        $this->middleware('auth');
        $this->stripeService = $stripeService;
        $this->paypalService = $paypalService;
    }

    /**
     * Display user's subscription.
     */
    public function index()
    {
        $subscription = Subscription::where('user_id', auth()->id())
            ->where('company_id', auth()->user()->current_company_id)
            ->with(['plan', 'orders', 'payments'])
            ->latest()
            ->first();

        return view('subscriptions.index', compact('subscription'));
    }

    /**
     * Cancel the subscription.
     */
    public function cancel(Subscription $subscription)
    {
        // Verify ownership
        if ($subscription->user_id !== auth()->id()) {
            abort(403);
        }

        if ($subscription->isCancelled()) {
            return back()->with('error', 'Subscription is already cancelled.');
        }

        try {
            DB::beginTransaction();

            // Cancel on payment gateway
            if ($subscription->stripe_subscription_id) {
                $this->stripeService->cancelSubscription($subscription);
            } else {
                $this->paypalService->cancelSubscription($subscription);
            }

            // Update local record
            $subscription->cancel();

            DB::commit();

            return back()->with('success', 'Subscription cancelled successfully. You can continue using your plan until the end of the billing period.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Failed to cancel subscription: ' . $e->getMessage());
        }
    }

    /**
     * Resume a cancelled subscription.
     */
    public function resume(Subscription $subscription)
    {
        // Verify ownership
        if ($subscription->user_id !== auth()->id()) {
            abort(403);
        }

        if (!$subscription->isCancelled()) {
            return back()->with('error', 'Subscription is not cancelled.');
        }

        try {
            DB::beginTransaction();

            // Resume on payment gateway
            if ($subscription->stripe_subscription_id) {
                $this->stripeService->resumeSubscription($subscription);
            } else {
                $this->paypalService->resumeSubscription($subscription);
            }

            // Update local record
            $subscription->resume();

            DB::commit();

            return back()->with('success', 'Subscription resumed successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Failed to resume subscription: ' . $e->getMessage());
        }
    }

    /**
     * Show subscription invoices.
     */
    public function invoices(Subscription $subscription)
    {
        // Verify ownership
        if ($subscription->user_id !== auth()->id()) {
            abort(403);
        }

        $invoices = $subscription->invoices()
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('subscriptions.invoices', compact('subscription', 'invoices'));
    }

    /**
     * Download invoice PDF.
     */
    public function downloadInvoice($invoiceId)
    {
        $invoice = \App\Models\Invoice::findOrFail($invoiceId);

        // Verify ownership
        if ($invoice->user_id !== auth()->id()) {
            abort(403);
        }

        // TODO: Implement PDF generation
        // For now, return a simple view
        return view('subscriptions.invoice-pdf', compact('invoice'));
    }
}
