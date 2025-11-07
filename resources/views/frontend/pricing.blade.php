@extends('layouts.frontend')

@section('title', 'Pricing Plans - Affordable CRM for Every Business Size | GrowPath AI')
@section('description', 'Choose the perfect GrowPath AI CRM plan for your business. Transparent pricing with no hidden fees. Start with a 14-day free trial.')
@section('keywords', 'CRM pricing, affordable CRM, business plans, small business CRM, enterprise CRM, free trial')

@section('content')
<!-- Hero -->
<section class="relative bg-gradient-to-br from-primary-brand via-neutral-900 to-primary-brand text-white py-24 lg:py-32 overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary-accent rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-secondary-accent rounded-full blur-3xl animate-pulse" style="animation-delay: 1s"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Eyebrow -->
        <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full mb-8">
            <svg class="w-4 h-4 mr-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-sm font-semibold text-white">PRICING PLANS</span>
        </div>

        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-8 leading-tight">
            Simple, Transparent
            <span class="block bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent mt-2">Pricing</span>
        </h1>
        <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed mb-12">
            Choose the plan that fits your business needs. All plans include a 14-day free trial with no credit card required.
        </p>

        <!-- Trust Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full">
            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            <span class="text-white font-medium">30-day money-back guarantee</span>
        </div>
    </div>
</section>

<!-- Pricing Cards -->
<section class="py-24 lg:py-32 bg-neutral-50 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary-accent/5 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-accent/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-6 max-w-7xl mx-auto">
            <!-- Starter Plan -->
            <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 border-2 border-neutral-200 hover:border-neutral-300 p-8 flex flex-col">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold text-primary-brand mb-2">Starter</h3>
                    <p class="text-neutral-600">Perfect for small teams getting started</p>
                </div>

                <div class="mb-8">
                    <div class="flex items-baseline gap-2">
                        <span class="text-5xl font-bold text-primary-brand">$29</span>
                        <span class="text-neutral-600 text-lg">/month</span>
                    </div>
                    <p class="text-sm text-neutral-500 mt-2">Billed monthly</p>
                </div>

                @auth
                <a href="{{ route('checkout.pricing') }}" class="group/btn w-full px-6 py-4 bg-neutral-100 hover:bg-neutral-200 text-primary-brand rounded-xl font-semibold transition-all duration-300 text-center mb-8 inline-flex items-center justify-center">
                    Start Free Trial
                    <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                @else
                <a href="{{ route('register') }}?redirect=checkout" class="group/btn w-full px-6 py-4 bg-neutral-100 hover:bg-neutral-200 text-primary-brand rounded-xl font-semibold transition-all duration-300 text-center mb-8 inline-flex items-center justify-center">
                    Start Free Trial
                    <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                @endauth

                <div class="space-y-4 flex-grow">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-neutral-700">500 prospects</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-neutral-700">3 team members</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-neutral-700">Basic reporting</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-neutral-700">Email support</span>
                    </div>
                </div>
            </div>

            <!-- Professional Plan (Popular) -->
            <div class="group relative bg-gradient-to-br from-primary-accent to-blue-700 rounded-2xl shadow-2xl p-8 flex flex-col transform lg:scale-105 border-2 border-primary-accent">
                <!-- Popular Badge -->
                <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                    <div class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                        ⭐ MOST POPULAR
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-2xl font-bold text-white mb-2">Professional</h3>
                    <p class="text-blue-100">For growing businesses</p>
                </div>

                <div class="mb-8">
                    <div class="flex items-baseline gap-2">
                        <span class="text-5xl font-bold text-white">$79</span>
                        <span class="text-blue-100 text-lg">/month</span>
                    </div>
                    <p class="text-sm text-blue-200 mt-2">Billed monthly</p>
                </div>

                @auth
                <a href="{{ route('checkout.pricing') }}" class="group/btn w-full px-6 py-4 bg-white text-primary-accent rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-xl text-center mb-8 inline-flex items-center justify-center">
                    Start Free Trial
                    <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                @else
                <a href="{{ route('register') }}?redirect=checkout" class="group/btn w-full px-6 py-4 bg-white text-primary-accent rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-xl text-center mb-8 inline-flex items-center justify-center">
                    Start Free Trial
                    <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                @endauth

                <div class="space-y-4 flex-grow">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-white/20 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-white">2,000 prospects</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-white/20 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-white">10 team members</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-white/20 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-white">Advanced reporting</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-white/20 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-white">API access</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-white/20 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-white">Priority support</span>
                    </div>
                </div>
            </div>

            <!-- Enterprise Plan -->
            <div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 border-2 border-neutral-200 hover:border-secondary-accent p-8 flex flex-col">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold text-primary-brand mb-2">Enterprise</h3>
                    <p class="text-neutral-600">For large organizations</p>
                </div>

                <div class="mb-8">
                    <div class="flex items-baseline gap-2">
                        <span class="text-5xl font-bold text-primary-brand">$199</span>
                        <span class="text-neutral-600 text-lg">/month</span>
                    </div>
                    <p class="text-sm text-neutral-500 mt-2">Billed monthly</p>
                </div>

                <a href="{{ route('contact') }}" class="group/btn w-full px-6 py-4 bg-gradient-to-r from-secondary-accent to-purple-700 text-white rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-xl text-center mb-8 inline-flex items-center justify-center">
                    Contact Sales
                    <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>

                <div class="space-y-4 flex-grow">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-secondary-accent/10 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-neutral-700">Unlimited prospects</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-secondary-accent/10 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-neutral-700">Unlimited team members</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-secondary-accent/10 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-neutral-700">Custom integrations</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-secondary-accent/10 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-neutral-700">Dedicated support</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-secondary-accent/10 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-neutral-700">Custom training</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="mt-16 text-center">
            <p class="text-neutral-600 text-lg mb-4">All plans include:</p>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-neutral-700">14-day free trial</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-neutral-700">No credit card required</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-neutral-700">Cancel anytime</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-info/10 rounded-full mb-6">
                <span class="text-sm font-semibold text-info">FAQ</span>
            </div>
            <h2 class="text-4xl sm:text-5xl font-bold text-primary-brand mb-6">
                Frequently Asked
                <span class="block text-primary-accent mt-2">Questions</span>
            </h2>
            <p class="text-xl text-neutral-600">
                Everything you need to know about our pricing and plans
            </p>
        </div>

        <!-- FAQ Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="group bg-neutral-50 rounded-2xl p-8 border border-neutral-200 hover:border-primary-accent hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 bg-primary-accent/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary-brand mb-3">Can I change plans later?</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Yes! You can upgrade or downgrade your plan at any time. Changes take effect immediately and we'll prorate your billing.
                </p>
            </div>

            <div class="group bg-neutral-50 rounded-2xl p-8 border border-neutral-200 hover:border-success hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 bg-success/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary-brand mb-3">What payment methods do you accept?</h3>
                <p class="text-neutral-600 leading-relaxed">
                    We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and wire transfers for Enterprise plans.
                </p>
            </div>

            <div class="group bg-neutral-50 rounded-2xl p-8 border border-neutral-200 hover:border-secondary-accent hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 bg-secondary-accent/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary-brand mb-3">Is there a long-term contract?</h3>
                <p class="text-neutral-600 leading-relaxed">
                    No. All plans are month-to-month with no long-term commitments. You can cancel anytime with no penalties or cancellation fees.
                </p>
            </div>

            <div class="group bg-neutral-50 rounded-2xl p-8 border border-neutral-200 hover:border-warning hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 bg-warning/10 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary-brand mb-3">Do you offer refunds?</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Yes! We offer a 30-day money-back guarantee on all plans. If you're not satisfied for any reason, we'll refund your payment in full.
                </p>
            </div>
        </div>

        <!-- Additional CTA -->
        <div class="mt-16 text-center bg-gradient-to-r from-neutral-50 to-neutral-100 rounded-2xl p-8 border border-neutral-200">
            <h3 class="text-2xl font-bold text-primary-brand mb-4">Still have questions?</h3>
            <p class="text-neutral-600 mb-6">Our team is here to help you find the perfect plan for your business.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 bg-primary-accent hover:bg-blue-700 text-white font-semibold rounded-xl transition-all duration-300 hover:scale-105 shadow-lg">
                Contact Sales Team
                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
