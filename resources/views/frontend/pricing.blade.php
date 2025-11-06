@extends('layouts.frontend')

@section('title', 'Pricing Plans - Affordable CRM for Every Business Size | GrowPath')
@section('description', 'Choose the perfect GrowPath CRM plan for your business. Transparent pricing with no hidden fees. Start with a 14-day free trial.')
@section('keywords', 'CRM pricing, affordable CRM, business plans, small business CRM, enterprise CRM, free trial')

@section('content')
<!-- Hero -->
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-6">Simple, Transparent Pricing</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            Choose the plan that fits your business needs. All plans include 14-day free trial.
        </p>
    </div>
</section>

<!-- Pricing Cards -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Starter Plan -->
            <div class="bg-white rounded-lg shadow-lg p-8 border-2 border-neutral-200">
                <h3 class="text-2xl font-bold text-primary-brand mb-2">Starter</h3>
                <div class="mb-6">
                    <span class="text-5xl font-bold text-primary-brand">$29</span>
                    <span class="text-neutral-600">/month</span>
                </div>
                <p class="text-neutral-600 mb-6">Perfect for small teams getting started</p>
                <a href="{{ route('register') }}" class="block w-full px-6 py-3 bg-neutral-200 text-neutral-700 rounded-lg font-semibold hover:bg-neutral-300 transition-colors text-center mb-6">
                    Start Free Trial
                </a>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">500 prospects</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">3 team members</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">Basic reporting</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">Email support</span>
                    </li>
                </ul>
            </div>

            <!-- Professional Plan (Popular) -->
            <div class="bg-white rounded-lg shadow-xl p-8 border-2 border-primary-accent relative transform scale-105">
                <div class="absolute top-0 right-0 bg-primary-accent text-white px-3 py-1 rounded-bl-lg rounded-tr-lg text-sm font-semibold">
                    Popular
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-2">Professional</h3>
                <div class="mb-6">
                    <span class="text-5xl font-bold text-primary-brand">$79</span>
                    <span class="text-neutral-600">/month</span>
                </div>
                <p class="text-neutral-600 mb-6">For growing businesses</p>
                <a href="{{ route('register') }}" class="block w-full px-6 py-3 bg-primary-accent text-white rounded-lg font-semibold hover:bg-blue-700 transition-colors text-center mb-6">
                    Start Free Trial
                </a>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">2,000 prospects</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">10 team members</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">Advanced reporting</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">API access</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">Priority support</span>
                    </li>
                </ul>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-white rounded-lg shadow-lg p-8 border-2 border-neutral-200">
                <h3 class="text-2xl font-bold text-primary-brand mb-2">Enterprise</h3>
                <div class="mb-6">
                    <span class="text-5xl font-bold text-primary-brand">$199</span>
                    <span class="text-neutral-600">/month</span>
                </div>
                <p class="text-neutral-600 mb-6">For large organizations</p>
                <a href="{{ route('contact') }}" class="block w-full px-6 py-3 bg-neutral-200 text-neutral-700 rounded-lg font-semibold hover:bg-neutral-300 transition-colors text-center mb-6">
                    Contact Sales
                </a>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">Unlimited prospects</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">Unlimited team members</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">Custom integrations</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">Dedicated support</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-neutral-700">Custom training</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-neutral-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-brand text-center mb-12">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-lg font-semibold text-primary-brand mb-2">Can I change plans later?</h3>
                <p class="text-neutral-600">Yes! You can upgrade or downgrade your plan at any time. Changes take effect immediately.</p>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-lg font-semibold text-primary-brand mb-2">What payment methods do you accept?</h3>
                <p class="text-neutral-600">We accept all major credit cards (Visa, MasterCard, American Express) and PayPal.</p>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-lg font-semibold text-primary-brand mb-2">Is there a long-term contract?</h3>
                <p class="text-neutral-600">No. All plans are month-to-month. You can cancel anytime with no penalties.</p>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-lg font-semibold text-primary-brand mb-2">Do you offer refunds?</h3>
                <p class="text-neutral-600">Yes! We offer a 30-day money-back guarantee. If you're not satisfied, we'll refund your payment.</p>
            </div>
        </div>
    </div>
</section>
@endsection
