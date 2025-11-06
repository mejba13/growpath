@extends('layouts.frontend')

@section('title', 'CRM Features - Prospect, Pipeline & Client Management | GrowPath')
@section('description', 'Discover powerful CRM features including prospect management, sales pipeline tracking, follow-up automation, analytics, and team collaboration tools.')
@section('keywords', 'CRM features, prospect management, sales pipeline, task automation, client tracking, analytics, reporting, team collaboration')

@section('content')
<!-- Hero -->
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-6">Powerful CRM Features</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            Everything you need to manage prospects, track sales, and grow your business in one powerful platform.
        </p>
    </div>
</section>

<!-- Features Grid -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Feature 1 -->
            <div class="flex flex-col md:flex-row gap-6">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 bg-primary-accent bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-10 h-10 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-primary-brand mb-3">Prospect Management</h3>
                    <p class="text-neutral-600 mb-4">
                        Organize all your potential clients in one centralized database. Track company information, contact details, and interaction history with ease.
                    </p>
                    <ul class="space-y-2 text-neutral-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Custom fields for prospect data
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Advanced search and filtering
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Bulk operations and exports
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col md:flex-row gap-6">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 bg-success bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-10 h-10 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-primary-brand mb-3">Visual Sales Pipeline</h3>
                    <p class="text-neutral-600 mb-4">
                        Track your sales process with an intuitive Kanban board. Drag and drop deals through stages from first contact to closed-won.
                    </p>
                    <ul class="space-y-2 text-neutral-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Customizable pipeline stages
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Drag-and-drop interface
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Stage conversion metrics
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex flex-col md:flex-row gap-6">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 bg-warning bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-10 h-10 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-primary-brand mb-3">Smart Follow-Ups</h3>
                    <p class="text-neutral-600 mb-4">
                        Never miss an opportunity with automated reminders and task management. Schedule calls, emails, and meetings with ease.
                    </p>
                    <ul class="space-y-2 text-neutral-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Automated reminders
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Priority-based task sorting
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Overdue task tracking
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="flex flex-col md:flex-row gap-6">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 bg-info bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-10 h-10 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-primary-brand mb-3">Analytics & Reporting</h3>
                    <p class="text-neutral-600 mb-4">
                        Make data-driven decisions with comprehensive analytics. Track team performance, forecast revenue, and identify trends.
                    </p>
                    <ul class="space-y-2 text-neutral-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Real-time dashboards
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Revenue projections
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-success mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Exportable reports
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-neutral-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary-brand mb-6">Ready to Experience These Features?</h2>
        <p class="text-xl text-neutral-600 mb-8">Start your free 14-day trial today. No credit card required.</p>
        <a href="{{ route('register') }}" class="inline-block px-8 py-4 bg-primary-accent text-white rounded-lg font-semibold hover:bg-blue-700 transition-colors">
            Get Started Free
        </a>
    </div>
</section>
@endsection
