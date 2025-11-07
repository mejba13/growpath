@extends('layouts.frontend')

@section('title', 'CRM Features - Prospect, Pipeline & Client Management | GrowPath')
@section('description', 'Discover powerful CRM features including prospect management, sales pipeline tracking, follow-up automation, analytics, and team collaboration tools.')
@section('keywords', 'CRM features, prospect management, sales pipeline, task automation, client tracking, analytics, reporting, team collaboration')

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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
            </svg>
            <span class="text-sm font-semibold text-white">PLATFORM FEATURES</span>
        </div>

        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-8 leading-tight">
            Powerful CRM
            <span class="block bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent mt-2">Features</span>
        </h1>
        <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
            Everything you need to manage prospects, track sales, and grow your business in one powerful, intuitive platform.
        </p>
    </div>
</section>

<!-- Features Grid -->
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-24">
            <!-- Feature 1 - Left -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div>
                    <div class="inline-flex items-center px-4 py-2 bg-primary-accent/10 rounded-full mb-6">
                        <span class="text-sm font-semibold text-primary-accent">PROSPECT MANAGEMENT</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-primary-brand mb-6 leading-tight">
                        Organize Every Prospect
                    </h2>
                    <p class="text-xl text-neutral-600 mb-8 leading-relaxed">
                        Organize all your potential clients in one centralized database. Track company information, contact details, and interaction history with complete visibility.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Custom fields for prospect data</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Advanced search and filtering</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Bulk operations and exports</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-primary-accent/10 to-blue-50 rounded-2xl p-12 aspect-[4/3] flex items-center justify-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary-accent to-blue-600 rounded-2xl flex items-center justify-center shadow-2xl">
                            <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-primary-accent/20 rounded-full blur-2xl -z-10"></div>
                </div>
            </div>

            <!-- Feature 2 - Right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="order-2 lg:order-1 relative">
                    <div class="bg-gradient-to-br from-success/10 to-emerald-50 rounded-2xl p-12 aspect-[4/3] flex items-center justify-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-success to-emerald-600 rounded-2xl flex items-center justify-center shadow-2xl">
                            <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-success/20 rounded-full blur-2xl -z-10"></div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center px-4 py-2 bg-success/10 rounded-full mb-6">
                        <span class="text-sm font-semibold text-success">SALES PIPELINE</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-primary-brand mb-6 leading-tight">
                        Visualize Your Sales
                    </h2>
                    <p class="text-xl text-neutral-600 mb-8 leading-relaxed">
                        Track your sales process with an intuitive Kanban board. Drag and drop deals through stages from first contact to closed-won with complete transparency.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Customizable pipeline stages</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Drag-and-drop interface</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Stage conversion metrics</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 3 - Left -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div>
                    <div class="inline-flex items-center px-4 py-2 bg-warning/10 rounded-full mb-6">
                        <span class="text-sm font-semibold text-warning">TASK AUTOMATION</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-primary-brand mb-6 leading-tight">
                        Never Miss a Follow-Up
                    </h2>
                    <p class="text-xl text-neutral-600 mb-8 leading-relaxed">
                        Never miss an opportunity with automated reminders and smart task management. Schedule calls, emails, and meetings with complete ease.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Automated reminders</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Priority-based task sorting</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Overdue task tracking</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-warning/10 to-amber-50 rounded-2xl p-12 aspect-[4/3] flex items-center justify-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-warning to-orange-600 rounded-2xl flex items-center justify-center shadow-2xl">
                            <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-warning/20 rounded-full blur-2xl -z-10"></div>
                </div>
            </div>

            <!-- Feature 4 - Right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="order-2 lg:order-1 relative">
                    <div class="bg-gradient-to-br from-info/10 to-cyan-50 rounded-2xl p-12 aspect-[4/3] flex items-center justify-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-info to-cyan-600 rounded-2xl flex items-center justify-center shadow-2xl">
                            <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-info/20 rounded-full blur-2xl -z-10"></div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center px-4 py-2 bg-info/10 rounded-full mb-6">
                        <span class="text-sm font-semibold text-info">ANALYTICS & INSIGHTS</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-primary-brand mb-6 leading-tight">
                        Data-Driven Decisions
                    </h2>
                    <p class="text-xl text-neutral-600 mb-8 leading-relaxed">
                        Make intelligent, data-driven decisions with comprehensive analytics. Track team performance, forecast revenue, and identify trends that matter.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Real-time dashboards</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Revenue projections</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-success/10 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg text-neutral-700">Exportable reports</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative py-24 lg:py-32 bg-gradient-to-br from-primary-accent via-blue-600 to-secondary-accent overflow-hidden">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-72 h-72 bg-white rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-white rounded-full blur-3xl animate-pulse" style="animation-delay: 1.5s"></div>
    </div>

    <!-- Content -->
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full mb-8">
            <svg class="w-4 h-4 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm font-semibold text-white">GET STARTED TODAY</span>
        </div>

        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
            Ready to Experience
            <span class="block mt-2">These Features?</span>
        </h2>

        <p class="text-xl lg:text-2xl text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed">
            Start your free 14-day trial today. No credit card required, no commitment necessary.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('register') }}"
               class="group inline-flex items-center justify-center px-10 py-5 bg-white text-primary-accent text-lg font-bold rounded-xl hover:bg-neutral-50 transition-all duration-300 shadow-2xl hover:shadow-3xl hover:scale-105">
                Get Started Free
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center px-10 py-5 bg-white/10 backdrop-blur-sm text-white text-lg font-bold rounded-xl border-2 border-white/30 hover:bg-white/20 hover:border-white transition-all duration-300">
                Schedule Demo
            </a>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-4 text-white/90 mt-10">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-medium">14-day free trial</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-medium">Full feature access</span>
            </div>
        </div>
    </div>
</section>
@endsection
