<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Order;
use App\Models\Invoice;
use App\Services\StripeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    protected $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->middleware('auth');
        $this->stripeService = $stripeService;
    }

    /**
     * Display the pricing page.
     */
    public function pricing()
    {
        $plans = Plan::active()->ordered()->get();

        return view('checkout.pricing', compact('plans'));
    }

    /**
     * Show the checkout page for a specific plan.
     */
    public function show(Plan $plan)
    {
        if (!$plan->is_active) {
            return redirect()->route('pricing')
                ->with('error', 'This plan is not available.');
        }

        $intent = $this->stripeService->createPaymentIntent($plan, auth()->user());

        return view('checkout.show', [
            'plan' => $plan,
            'intent' => $intent,
            'clientSecret' => $intent->client_secret,
        ]);
    }

    /**
     * Process the checkout payment.
     */
    public function process(Request $request, Plan $plan)
    {
        $request->validate([
            'payment_method_id' => 'required|string',
            'billing_name' => 'required|string|max:255',
            'billing_email' => 'required|email',
        ]);

        try {
            DB::beginTransaction();

            $user = auth()->user();

            // Create Stripe subscription
            $stripeSubscription = $this->stripeService->createSubscription(
                $plan,
                $user,
                $request->payment_method_id
            );

            // Create local subscription record
            $subscription = $this->stripeService->createLocalSubscription(
                $stripeSubscription,
                $plan,
                $user
            );

            // Get the payment intent from the subscription
            $paymentIntent = $this->stripeService->retrievePaymentIntent(
                $stripeSubscription->latest_invoice->payment_intent
            );

            // Create order record
            $order = $this->stripeService->createLocalOrder(
                $paymentIntent,
                $plan,
                $user,
                $subscription
            );

            // Create payment record
            $payment = $this->stripeService->createLocalPayment(
                $paymentIntent,
                $order,
                $subscription
            );

            // Create invoice
            $invoice = $this->createInvoice($order, $plan, $request);

            DB::commit();

            return redirect()->route('checkout.success', $order)
                ->with('success', 'Payment successful! Your subscription is now active.');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Checkout failed: ' . $e->getMessage());

            return redirect()->route('checkout.failure')
                ->with('error', 'Payment failed: ' . $e->getMessage());
        }
    }

    /**
     * Show payment success page.
     */
    public function success(Order $order)
    {
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        return view('checkout.success', compact('order'));
    }

    /**
     * Show payment failure page.
     */
    public function failure()
    {
        return view('checkout.failure');
    }

    /**
     * Create an invoice for the order.
     */
    protected function createInvoice(Order $order, Plan $plan, Request $request): Invoice
    {
        return Invoice::create([
            'order_id' => $order->id,
            'subscription_id' => $order->subscription_id,
            'company_id' => $order->company_id,
            'user_id' => $order->user_id,
            'status' => 'paid',
            'issue_date' => now(),
            'due_date' => now(),
            'paid_date' => now(),
            'subtotal' => $order->subtotal,
            'tax' => $order->tax,
            'discount' => $order->discount,
            'total' => $order->total,
            'currency' => $order->currency,
            'billing_details' => [
                'name' => $request->billing_name,
                'email' => $request->billing_email,
                'company' => auth()->user()->currentCompany?->name,
            ],
            'line_items' => [
                [
                    'description' => "{$plan->name} Plan - Monthly Subscription",
                    'quantity' => 1,
                    'unit_price' => $plan->price,
                    'total' => $plan->price,
                ],
            ],
        ]);
    }
}
