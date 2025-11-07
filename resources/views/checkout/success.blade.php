@extends('layouts.dashboard')

@section('page-title', 'Payment Successful')

@section('content')
<div class="min-h-screen bg-neutral-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-lg border border-neutral-200 overflow-hidden">
            <!-- Success Header -->
            <div class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white px-8 py-12 text-center">
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl font-bold mb-4">Payment Successful!</h1>
                <p class="text-xl text-emerald-50">Your subscription has been activated</p>
            </div>

            <!-- Order Details -->
            <div class="px-8 py-8">
                <div class="space-y-6">
                    <!-- Order Number -->
                    <div class="flex items-center justify-between pb-6 border-b border-neutral-200">
                        <div>
                            <p class="text-sm text-neutral-600 mb-1">Order Number</p>
                            <p class="text-xl font-bold text-primary-brand">{{ $order->order_number }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-neutral-600 mb-1">Order Date</p>
                            <p class="text-xl font-bold text-primary-brand">{{ $order->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>

                    <!-- Plan Details -->
                    <div class="bg-neutral-50 rounded-xl p-6 border border-neutral-200">
                        <h3 class="text-lg font-bold text-primary-brand mb-4">Subscription Details</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-neutral-700">Plan</span>
                                <span class="font-semibold text-primary-brand">{{ $order->plan->name }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-neutral-700">Billing Cycle</span>
                                <span class="font-semibold text-primary-brand">Monthly</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-neutral-700">Trial Period</span>
                                <span class="font-semibold text-success">14 days free</span>
                            </div>
                            <div class="flex justify-between pt-3 border-t border-neutral-200">
                                <span class="text-neutral-700">Amount Paid</span>
                                <span class="text-xl font-bold text-primary-brand">${{ number_format($order->total, 2) }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Next Steps -->
                    <div class="bg-blue-50 rounded-xl p-6 border border-blue-200">
                        <h3 class="text-lg font-bold text-primary-brand mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            What's Next?
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-success mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">A confirmation email has been sent to <strong>{{ $order->user->email }}</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-success mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">Your 14-day free trial starts now - no charges until {{ $order->subscription->trial_ends_at?->format('M d, Y') }}</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-success mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">You can manage your subscription anytime from your account settings</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <a href="{{ route('dashboard') }}"
                           class="flex-1 px-6 py-4 bg-gradient-to-r from-primary-accent to-blue-700 hover:from-blue-700 hover:to-primary-accent text-white font-semibold rounded-xl transition-all duration-300 hover:shadow-xl text-center inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Go to Dashboard
                        </a>
                        <a href="{{ route('subscriptions.index') }}"
                           class="flex-1 px-6 py-4 bg-white hover:bg-neutral-50 text-primary-accent border-2 border-primary-accent font-semibold rounded-xl transition-all duration-300 text-center inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            View Subscription
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Help -->
        <div class="mt-8 text-center">
            <p class="text-neutral-600 mb-4">Need help getting started?</p>
            <a href="{{ route('help-center') }}" class="inline-flex items-center text-primary-accent hover:text-blue-700 font-medium transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Visit Help Center
            </a>
        </div>
    </div>
</div>
@endsection
