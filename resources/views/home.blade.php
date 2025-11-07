@extends('layouts.landing')

@section('title', 'GrowPath AI - Client Hunting SaaS Platform')
@section('description', 'Discover, organize, and convert high-value clients with GrowPath AI. Systematic client hunting made simple.')

@section('content')
<div x-data="landing()">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-brand via-primary-brand to-neutral-800 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>

        <div class="relative max-w-full-width mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Transform Prospects Into
                    <span class="text-primary-accent">High-Value Clients</span>
                </h1>
                <p class="text-xl md:text-2xl text-neutral-200 mb-8 leading-relaxed">
                    Empower your team to systematically identify, track, and convert opportunities through intelligent client hunting tools and data-driven insights.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-ui.button variant="primary" size="lg" href="{{ route('register') }}">
                        Start Free Trial
                    </x-ui.button>
                    <x-ui.button variant="secondary" size="lg" href="#features" class="!border-white !text-white hover:!bg-white hover:!text-primary-brand">
                        Learn More
                    </x-ui.button>
                </div>
                <p class="mt-6 text-neutral-300">
                    14-day free trial • No credit card required
                </p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 bg-white">
        <div class="max-w-full-width mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary-brand mb-4">
                    Everything You Need to Hunt Clients
                </h2>
                <p class="text-xl text-neutral-600 max-w-3xl mx-auto">
                    Streamline your sales process with powerful features designed for modern client hunting.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-ui.card>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-primary-accent rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-primary-brand mb-2">Prospect Management</h3>
                        <p class="text-neutral-600">Organize and track all your potential clients in one centralized database.</p>
                    </div>
                </x-ui.card>

                <x-ui.card>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-secondary-accent rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-primary-brand mb-2">Smart Follow-Ups</h3>
                        <p class="text-neutral-600">Never miss an opportunity with automated reminders and task tracking.</p>
                    </div>
                </x-ui.card>

                <x-ui.card>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-success rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-primary-brand mb-2">Pipeline Visualization</h3>
                        <p class="text-neutral-600">See your entire sales pipeline at a glance with intuitive Kanban boards.</p>
                    </div>
                </x-ui.card>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-24 bg-neutral-50">
        <div class="max-w-full-width mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary-brand mb-4">
                    Simple, Transparent Pricing
                </h2>
                <p class="text-xl text-neutral-600">
                    Choose the plan that fits your team's needs
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <x-ui.card>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-primary-brand mb-2">Starter</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-primary-brand">$29</span>
                            <span class="text-neutral-600">/month</span>
                        </div>
                        <p class="text-neutral-600 mb-6">Perfect for small teams</p>
                        <x-ui.button variant="secondary" class="w-full mb-6">Get Started</x-ui.button>
                        <ul class="text-left space-y-3 text-neutral-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                500 prospects
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                3 team members
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Basic reporting
                            </li>
                        </ul>
                    </div>
                </x-ui.card>

                <x-ui.card class="ring-2 ring-primary-accent relative">
                    <x-ui.badge variant="info" class="absolute top-4 right-4">Popular</x-ui.badge>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-primary-brand mb-2">Professional</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-primary-brand">$79</span>
                            <span class="text-neutral-600">/month</span>
                        </div>
                        <p class="text-neutral-600 mb-6">For growing businesses</p>
                        <x-ui.button variant="primary" class="w-full mb-6">Get Started</x-ui.button>
                        <ul class="text-left space-y-3 text-neutral-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                2,000 prospects
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                10 team members
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Advanced reporting
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                API access
                            </li>
                        </ul>
                    </div>
                </x-ui.card>

                <x-ui.card>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-primary-brand mb-2">Enterprise</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-primary-brand">$199</span>
                            <span class="text-neutral-600">/month</span>
                        </div>
                        <p class="text-neutral-600 mb-6">For large organizations</p>
                        <x-ui.button variant="secondary" class="w-full mb-6">Contact Sales</x-ui.button>
                        <ul class="text-left space-y-3 text-neutral-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Unlimited prospects
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Unlimited team members
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Custom integrations
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Dedicated support
                            </li>
                        </ul>
                    </div>
                </x-ui.card>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-24 bg-primary-brand text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Ready to Transform Your Client Hunting?
            </h2>
            <p class="text-xl text-neutral-200 mb-8">
                Join hundreds of businesses growing with GrowPath AI
            </p>
            <x-ui.button variant="primary" size="lg" href="{{ route('register') }}">
                Start Your Free Trial
            </x-ui.button>
        </div>
    </section>
</div>
@endsection
