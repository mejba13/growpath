@extends('layouts.app')

@section('title', 'Checkout - ' . $plan->name . ' Plan')

@section('content')
<div class="min-h-screen bg-neutral-50 py-12">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Button -->
        <div class="mb-8">
            <a href="{{ route('checkout.pricing') }}" class="inline-flex items-center text-primary-accent hover:text-blue-700 font-medium transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Plans
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
            <!-- Order Summary -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-8">
                    <h2 class="text-2xl font-bold text-primary-brand mb-6">Order Summary</h2>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4 pb-4 border-b border-neutral-200">
                            <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-primary-accent to-blue-700 rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-primary-brand">{{ $plan->name }} Plan</h3>
                                <p class="text-sm text-neutral-600">Monthly Subscription</p>
                            </div>
                        </div>

                        <div class="space-y-3 py-4">
                            @if($plan->max_prospects)
                            <div class="flex items-center gap-2 text-neutral-700">
                                <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ number_format($plan->max_prospects) }} prospects</span>
                            </div>
                            @else
                            <div class="flex items-center gap-2 text-neutral-700">
                                <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Unlimited prospects</span>
                            </div>
                            @endif

                            @if($plan->max_team_members)
                            <div class="flex items-center gap-2 text-neutral-700">
                                <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ $plan->max_team_members }} team members</span>
                            </div>
                            @else
                            <div class="flex items-center gap-2 text-neutral-700">
                                <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Unlimited team members</span>
                            </div>
                            @endif

                            @if($plan->features)
                                @foreach($plan->features as $feature)
                                <div class="flex items-center gap-2 text-neutral-700">
                                    <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ $feature }}</span>
                                </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="pt-4 border-t border-neutral-200 space-y-2">
                            <div class="flex justify-between text-neutral-700">
                                <span>Subtotal</span>
                                <span>${{ number_format($plan->price, 2) }}</span>
                            </div>
                            <div class="flex justify-between text-neutral-700">
                                <span>Trial Period</span>
                                <span class="text-success font-medium">14 days free</span>
                            </div>
                            <div class="flex justify-between items-center pt-2 border-t border-neutral-200">
                                <span class="text-lg font-bold text-primary-brand">Total Due Today</span>
                                <span class="text-2xl font-bold text-primary-brand">${{ number_format($plan->price, 2) }}</span>
                            </div>
                            <p class="text-xs text-neutral-500 mt-2">
                                After your 14-day free trial, you'll be charged ${{ number_format($plan->price, 2) }} monthly. Cancel anytime.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Trust Badges -->
                <div class="bg-white rounded-xl shadow-md border border-neutral-200 p-6">
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <div>
                                <p class="font-medium text-primary-brand">Secure Payment</p>
                                <p class="text-sm text-neutral-600">256-bit SSL encryption</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <p class="font-medium text-primary-brand">Money-Back Guarantee</p>
                                <p class="text-sm text-neutral-600">30-day full refund</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Form -->
            <div class="lg:col-span-3">
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-8">
                    <h2 class="text-2xl font-bold text-primary-brand mb-6">Payment Information</h2>

                    @if(session('error'))
                    <div class="mb-6 p-4 bg-danger/10 border border-danger/20 rounded-lg text-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form id="payment-form" action="{{ route('checkout.process', $plan) }}" method="POST">
                        @csrf

                        <!-- Billing Details -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-primary-brand mb-4">Billing Details</h3>
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label for="billing_name" class="block text-sm font-medium text-neutral-700 mb-2">
                                        Full Name
                                    </label>
                                    <input type="text"
                                           id="billing_name"
                                           name="billing_name"
                                           value="{{ old('billing_name', auth()->user()->name) }}"
                                           required
                                           class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-accent focus:border-primary-accent transition-colors">
                                    @error('billing_name')
                                    <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="billing_email" class="block text-sm font-medium text-neutral-700 mb-2">
                                        Email Address
                                    </label>
                                    <input type="email"
                                           id="billing_email"
                                           name="billing_email"
                                           value="{{ old('billing_email', auth()->user()->email) }}"
                                           required
                                           class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-accent focus:border-primary-accent transition-colors">
                                    @error('billing_email')
                                    <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Card Details -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-primary-brand mb-4">Card Information</h3>
                            <div id="card-element" class="p-4 border border-neutral-300 rounded-lg bg-neutral-50">
                                <!-- Stripe Elements will be inserted here -->
                            </div>
                            <div id="card-errors" class="mt-2 text-sm text-danger"></div>
                        </div>

                        <!-- Hidden field for payment method ID -->
                        <input type="hidden" id="payment_method_id" name="payment_method_id">

                        <!-- Submit Button -->
                        <button type="submit"
                                id="submit-button"
                                class="w-full px-6 py-4 bg-gradient-to-r from-primary-accent to-blue-700 hover:from-blue-700 hover:to-primary-accent text-white font-bold rounded-xl transition-all duration-300 hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2 hidden" id="spinner" viewBox="0 0 24 24" fill="none">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span id="button-text">Start Free Trial</span>
                        </button>

                        <p class="mt-4 text-center text-sm text-neutral-600">
                            By confirming your subscription, you agree to our
                            <a href="{{ route('terms') }}" class="text-primary-accent hover:underline" target="_blank">Terms of Service</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Initialize Stripe
    const stripe = Stripe('{{ config('services.stripe.key') }}');
    const elements = stripe.elements();

    // Custom styling for Stripe Elements
    const style = {
        base: {
            color: '#1e293b',
            fontFamily: 'system-ui, -apple-system, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#94a3b8'
            }
        },
        invalid: {
            color: '#dc2626',
            iconColor: '#dc2626'
        }
    };

    // Create card element
    const cardElement = elements.create('card', { style: style });
    cardElement.mount('#card-element');

    // Handle real-time validation errors
    cardElement.on('change', function(event) {
        const displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission
    const form = document.getElementById('payment-form');
    const submitButton = document.getElementById('submit-button');
    const buttonText = document.getElementById('button-text');
    const spinner = document.getElementById('spinner');

    form.addEventListener('submit', async function(event) {
        event.preventDefault();

        // Disable submit button and show loading state
        submitButton.disabled = true;
        buttonText.textContent = 'Processing...';
        spinner.classList.remove('hidden');
        spinner.classList.add('animate-spin');

        // Create payment method
        const { error, paymentMethod } = await stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
            billing_details: {
                name: document.getElementById('billing_name').value,
                email: document.getElementById('billing_email').value,
            }
        });

        if (error) {
            // Show error to user
            const errorElement = document.getElementById('card-errors');
            errorElement.textContent = error.message;

            // Re-enable submit button
            submitButton.disabled = false;
            buttonText.textContent = 'Start Free Trial';
            spinner.classList.add('hidden');
            spinner.classList.remove('animate-spin');
        } else {
            // Set payment method ID and submit form
            document.getElementById('payment_method_id').value = paymentMethod.id;
            form.submit();
        }
    });
</script>
@endpush
@endsection
