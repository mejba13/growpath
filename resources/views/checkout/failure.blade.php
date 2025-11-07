@extends('layouts.dashboard')

@section('page-title', 'Payment Failed')

@section('content')
<div class="min-h-screen bg-neutral-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-lg border border-neutral-200 overflow-hidden">
            <!-- Error Header -->
            <div class="bg-gradient-to-r from-danger to-red-700 text-white px-8 py-12 text-center">
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl font-bold mb-4">Payment Failed</h1>
                <p class="text-xl text-red-50">We couldn't process your payment</p>
            </div>

            <!-- Error Details -->
            <div class="px-8 py-8">
                <div class="space-y-6">
                    @if(session('error'))
                    <div class="bg-danger/10 border border-danger/20 rounded-xl p-6">
                        <h3 class="text-lg font-bold text-danger mb-2">Error Details</h3>
                        <p class="text-neutral-700">{{ session('error') }}</p>
                    </div>
                    @endif

                    <!-- Common Reasons -->
                    <div class="bg-neutral-50 rounded-xl p-6 border border-neutral-200">
                        <h3 class="text-lg font-bold text-primary-brand mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Common Reasons for Payment Failure
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-neutral-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-neutral-700">Insufficient funds in your account</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-neutral-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-neutral-700">Incorrect card information (number, CVV, expiration date)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-neutral-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-neutral-700">Card declined by your bank or card issuer</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-neutral-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-neutral-700">Card has expired or been deactivated</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-neutral-500 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-neutral-700">Billing address doesn't match card records</span>
                            </li>
                        </ul>
                    </div>

                    <!-- What to Do Next -->
                    <div class="bg-blue-50 rounded-xl p-6 border border-blue-200">
                        <h3 class="text-lg font-bold text-primary-brand mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                            What to Do Next
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-success mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">Double-check your card details and try again</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-success mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">Contact your bank to ensure there are no restrictions on your card</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-success mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">Try using a different payment method</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <a href="{{ route('checkout.pricing') }}"
                           class="flex-1 px-6 py-4 bg-gradient-to-r from-primary-accent to-blue-700 hover:from-blue-700 hover:to-primary-accent text-white font-semibold rounded-xl transition-all duration-300 hover:shadow-xl text-center inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            Try Again
                        </a>
                        <a href="{{ route('dashboard') }}"
                           class="flex-1 px-6 py-4 bg-white hover:bg-neutral-50 text-neutral-700 border-2 border-neutral-300 font-semibold rounded-xl transition-all duration-300 text-center inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support -->
        <div class="mt-8 text-center bg-white rounded-xl shadow-md border border-neutral-200 p-6">
            <h3 class="text-lg font-bold text-primary-brand mb-2">Need Assistance?</h3>
            <p class="text-neutral-600 mb-4">Our support team is here to help you resolve any payment issues.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 bg-primary-accent hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contact Support
                </a>
                <a href="{{ route('help-center') }}" class="inline-flex items-center justify-center px-6 py-3 bg-neutral-100 hover:bg-neutral-200 text-neutral-700 font-semibold rounded-lg transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Help Center
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
