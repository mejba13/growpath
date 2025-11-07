@extends('layouts.app')

@section('title', 'My Subscription')

@section('content')
<div class="min-h-screen bg-neutral-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-primary-brand mb-2">My Subscription</h1>
            <p class="text-neutral-600">Manage your subscription and billing information</p>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-success/10 border border-success/20 rounded-lg text-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="mb-6 p-4 bg-danger/10 border border-danger/20 rounded-lg text-danger">
            {{ session('error') }}
        </div>
        @endif

        @if($subscription)
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Subscription Details -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Current Plan -->
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 overflow-hidden">
                    <div class="bg-gradient-to-r from-primary-accent to-blue-700 px-8 py-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-blue-100 text-sm mb-1">Current Plan</p>
                                <h2 class="text-3xl font-bold text-white">{{ $subscription->plan->name }}</h2>
                            </div>
                            <div class="text-right">
                                <p class="text-blue-100 text-sm mb-1">Monthly</p>
                                <p class="text-3xl font-bold text-white">${{ number_format($subscription->plan->price, 0) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="px-8 py-6">
                        <!-- Status Badge -->
                        <div class="mb-6">
                            @php
                                $statusColors = [
                                    'trial' => 'bg-info/10 text-info border-info/20',
                                    'active' => 'bg-success/10 text-success border-success/20',
                                    'cancelled' => 'bg-warning/10 text-warning border-warning/20',
                                    'expired' => 'bg-danger/10 text-danger border-danger/20',
                                    'past_due' => 'bg-warning/10 text-warning border-warning/20',
                                ];
                                $statusColor = $statusColors[$subscription->status] ?? 'bg-neutral-100 text-neutral-700 border-neutral-300';
                            @endphp
                            <div class="inline-flex items-center px-4 py-2 rounded-full border {{ $statusColor }} font-semibold">
                                <span class="w-2 h-2 rounded-full mr-2 {{ str_replace('/10', '', explode(' ', $statusColor)[0]) }}"></span>
                                {{ ucfirst($subscription->status) }}
                            </div>
                        </div>

                        <!-- Plan Features -->
                        <div class="mb-6">
                            <h3 class="text-lg font-bold text-primary-brand mb-4">Plan Features</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                @if($subscription->plan->max_prospects)
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-neutral-700">{{ number_format($subscription->plan->max_prospects) }} prospects</span>
                                </div>
                                @else
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-neutral-700">Unlimited prospects</span>
                                </div>
                                @endif

                                @if($subscription->plan->max_team_members)
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-neutral-700">{{ $subscription->plan->max_team_members }} team members</span>
                                </div>
                                @else
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-neutral-700">Unlimited team members</span>
                                </div>
                                @endif

                                @if($subscription->plan->features)
                                    @foreach($subscription->plan->features as $feature)
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-neutral-700">{{ $feature }}</span>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <!-- Billing Information -->
                        <div class="bg-neutral-50 rounded-xl p-6 border border-neutral-200">
                            <h3 class="text-lg font-bold text-primary-brand mb-4">Billing Information</h3>
                            <div class="space-y-3">
                                @if($subscription->onTrial())
                                <div class="flex justify-between">
                                    <span class="text-neutral-700">Trial Ends</span>
                                    <span class="font-semibold text-primary-brand">{{ $subscription->trial_ends_at?->format('M d, Y') }}</span>
                                </div>
                                @endif

                                <div class="flex justify-between">
                                    <span class="text-neutral-700">Current Period</span>
                                    <span class="font-semibold text-primary-brand">
                                        {{ $subscription->current_period_start?->format('M d') }} - {{ $subscription->current_period_end?->format('M d, Y') }}
                                    </span>
                                </div>

                                @if($subscription->next_payment_at && !$subscription->isCancelled())
                                <div class="flex justify-between">
                                    <span class="text-neutral-700">Next Payment</span>
                                    <span class="font-semibold text-primary-brand">{{ $subscription->next_payment_at->format('M d, Y') }}</span>
                                </div>
                                @endif

                                @if($subscription->isCancelled())
                                <div class="flex justify-between">
                                    <span class="text-neutral-700">Ends</span>
                                    <span class="font-semibold text-warning">{{ $subscription->ends_at?->format('M d, Y') }}</span>
                                </div>
                                @endif

                                @if($subscription->last_payment_at)
                                <div class="flex justify-between">
                                    <span class="text-neutral-700">Last Payment</span>
                                    <span class="font-semibold text-primary-brand">{{ $subscription->last_payment_at->format('M d, Y') }}</span>
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="mt-6 flex flex-col sm:flex-row gap-4">
                            @if(!$subscription->isCancelled())
                            <form action="{{ route('subscriptions.cancel', $subscription) }}" method="POST" class="flex-1"
                                  onsubmit="return confirm('Are you sure you want to cancel your subscription? You can continue using your plan until the end of the billing period.')">
                                @csrf
                                <button type="submit" class="w-full px-6 py-3 bg-white hover:bg-neutral-50 text-danger border-2 border-danger font-semibold rounded-xl transition-all duration-300">
                                    Cancel Subscription
                                </button>
                            </form>
                            @else
                            <form action="{{ route('subscriptions.resume', $subscription) }}" method="POST" class="flex-1">
                                @csrf
                                <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-success to-teal-600 hover:from-teal-600 hover:to-success text-white font-semibold rounded-xl transition-all duration-300 hover:shadow-xl">
                                    Resume Subscription
                                </button>
                            </form>
                            @endif

                            <a href="{{ route('checkout.pricing') }}" class="flex-1 px-6 py-3 bg-primary-accent hover:bg-blue-700 text-white font-semibold rounded-xl transition-all duration-300 text-center">
                                Change Plan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Recent Invoices -->
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-primary-brand">Recent Invoices</h3>
                        <a href="{{ route('subscriptions.invoices', $subscription) }}" class="text-primary-accent hover:text-blue-700 font-medium transition-colors">
                            View All
                        </a>
                    </div>

                    @if($subscription->invoices->count() > 0)
                    <div class="space-y-3">
                        @foreach($subscription->invoices->take(5) as $invoice)
                        <div class="flex items-center justify-between p-4 bg-neutral-50 rounded-xl border border-neutral-200 hover:border-primary-accent transition-colors">
                            <div class="flex items-center gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-primary-accent/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-primary-brand">{{ $invoice->invoice_number }}</p>
                                    <p class="text-sm text-neutral-600">{{ $invoice->issue_date->format('M d, Y') }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="text-right">
                                    <p class="font-bold text-primary-brand">${{ number_format($invoice->total, 2) }}</p>
                                    <p class="text-sm text-{{ $invoice->isPaid() ? 'success' : 'warning' }}">{{ ucfirst($invoice->status) }}</p>
                                </div>
                                <a href="{{ route('subscriptions.invoices.download', $invoice->id) }}" class="px-4 py-2 bg-primary-accent hover:bg-blue-700 text-white font-medium rounded-lg transition-colors text-sm">
                                    Download
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="text-center py-12">
                        <svg class="w-16 h-16 mx-auto text-neutral-300 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <p class="text-neutral-500">No invoices yet</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-6">
                    <h3 class="text-lg font-bold text-primary-brand mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <a href="{{ route('subscriptions.invoices', $subscription) }}" class="flex items-center gap-3 p-3 bg-neutral-50 hover:bg-primary-accent/5 rounded-lg transition-colors group">
                            <svg class="w-5 h-5 text-neutral-500 group-hover:text-primary-accent transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="text-neutral-700 group-hover:text-primary-brand transition-colors font-medium">View All Invoices</span>
                        </a>
                        <a href="{{ route('checkout.pricing') }}" class="flex items-center gap-3 p-3 bg-neutral-50 hover:bg-primary-accent/5 rounded-lg transition-colors group">
                            <svg class="w-5 h-5 text-neutral-500 group-hover:text-primary-accent transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                            </svg>
                            <span class="text-neutral-700 group-hover:text-primary-brand transition-colors font-medium">Upgrade Plan</span>
                        </a>
                        <a href="{{ route('contact') }}" class="flex items-center gap-3 p-3 bg-neutral-50 hover:bg-primary-accent/5 rounded-lg transition-colors group">
                            <svg class="w-5 h-5 text-neutral-500 group-hover:text-primary-accent transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-neutral-700 group-hover:text-primary-brand transition-colors font-medium">Contact Support</span>
                        </a>
                    </div>
                </div>

                <!-- Help & Support -->
                <div class="bg-gradient-to-br from-primary-accent to-blue-700 rounded-2xl shadow-md p-6 text-white">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Need Help?</h3>
                    <p class="text-blue-100 text-sm mb-4">Our support team is here to assist you with any questions.</p>
                    <a href="{{ route('help-center') }}" class="inline-flex items-center text-white hover:text-blue-50 font-medium transition-colors">
                        Visit Help Center
                        <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        @else
        <!-- No Subscription -->
        <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-12 text-center">
            <div class="max-w-md mx-auto">
                <div class="w-20 h-20 bg-neutral-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-primary-brand mb-4">No Active Subscription</h2>
                <p class="text-neutral-600 mb-8">
                    You don't have an active subscription yet. Choose a plan that fits your needs and start growing your business today.
                </p>
                <a href="{{ route('checkout.pricing') }}"
                   class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-accent to-blue-700 hover:from-blue-700 hover:to-primary-accent text-white font-semibold rounded-xl transition-all duration-300 hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    View Plans
                </a>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
