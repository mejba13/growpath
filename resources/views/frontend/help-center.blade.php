@extends('layouts.frontend')

@section('title', 'Help Center - Get Support & Find Answers | GrowPath AI')
@section('description', 'Find answers to common questions, video tutorials, and guides to help you get the most out of GrowPath AI CRM.')
@section('keywords', 'help center, support, tutorials, FAQ, guides, customer support, CRM help')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-50 via-white to-blue-50 py-24 lg:py-32">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Eyebrow Badge -->
        <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-primary-accent/10 to-secondary-accent/10 backdrop-blur-sm border border-primary-accent/20 rounded-full px-4 py-2 mb-8 animate-fade-in">
            <span class="w-2 h-2 bg-gradient-to-r from-primary-accent to-secondary-accent rounded-full animate-pulse"></span>
            <span class="text-sm font-medium bg-gradient-to-r from-primary-accent to-secondary-accent bg-clip-text text-transparent">SUPPORT & RESOURCES</span>
        </div>

        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-primary-brand mb-6 leading-tight animate-slide-up">
            How Can We <span class="gradient-text">Help You?</span>
        </h1>
        <p class="text-xl lg:text-2xl text-neutral-600 max-w-3xl mx-auto mb-12 leading-relaxed animate-slide-up">
            Find answers, learn best practices, and get the support you need to succeed with GrowPath AI.
        </p>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto">
            <div class="relative group">
                <input type="text" placeholder="Search for help articles..."
                       class="w-full px-6 py-5 pr-36 rounded-2xl text-neutral-900 placeholder-neutral-500 border-2 border-neutral-200 focus:border-primary-accent focus:ring-4 focus:ring-primary-accent/20 transition-all duration-300 shadow-lg">
                <button class="absolute right-2 top-2 px-8 py-3 bg-gradient-to-r from-primary-accent to-blue-600 text-white rounded-xl hover:shadow-xl hover:scale-105 transition-all duration-300 font-semibold">
                    Search
                </button>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-primary-accent/10 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-20 right-10 w-72 h-72 bg-secondary-accent/10 rounded-full blur-3xl -z-10"></div>
</section>

<!-- Popular Topics -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-brand text-center mb-12">Popular Topics</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Getting Started -->
            <div class="bg-white border border-neutral-200 rounded-lg p-8 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-primary-accent bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-4">Getting Started</h3>
                <ul class="space-y-3 text-neutral-600">
                    <li><a href="#" class="hover:text-primary-accent">Quick Start Guide</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Setting Up Your Account</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Adding Your First Prospect</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Inviting Team Members</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Importing Data</a></li>
                </ul>
            </div>

            <!-- Prospect Management -->
            <div class="bg-white border border-neutral-200 rounded-lg p-8 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-success bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-4">Prospect Management</h3>
                <ul class="space-y-3 text-neutral-600">
                    <li><a href="#" class="hover:text-primary-accent">Creating Prospects</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Managing Prospect Status</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Converting to Clients</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Bulk Operations</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Filtering & Searching</a></li>
                </ul>
            </div>

            <!-- Pipeline & Reports -->
            <div class="bg-white border border-neutral-200 rounded-lg p-8 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-secondary-accent bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-4">Pipeline & Reports</h3>
                <ul class="space-y-3 text-neutral-600">
                    <li><a href="#" class="hover:text-primary-accent">Using the Pipeline View</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Understanding Reports</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Revenue Forecasting</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Exporting Data</a></li>
                    <li><a href="#" class="hover:text-primary-accent">Custom Dashboards</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Video Tutorials -->
<section class="py-20 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-brand text-center mb-12">Video Tutorials</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="aspect-video bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                    <svg class="w-16 h-16 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-lg text-primary-brand mb-2">GrowPath AI Overview (5 min)</h3>
                    <p class="text-neutral-600 text-sm">Learn the basics of GrowPath AI CRM in just 5 minutes.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="aspect-video bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                    <svg class="w-16 h-16 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-lg text-primary-brand mb-2">Managing Prospects (8 min)</h3>
                    <p class="text-neutral-600 text-sm">Master prospect management and conversion.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="aspect-video bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center">
                    <svg class="w-16 h-16 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-lg text-primary-brand mb-2">Using the Pipeline (6 min)</h3>
                    <p class="text-neutral-600 text-sm">Visualize and manage your sales pipeline effectively.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-brand text-center mb-12">Frequently Asked Questions</h2>

        <div class="space-y-6">
            <div class="bg-neutral-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-primary-brand mb-2">How do I import my existing contacts?</h3>
                <p class="text-neutral-600">You can import contacts via CSV file. Go to Prospects → Import, upload your CSV file, and map the fields. Our system supports most common CRM export formats.</p>
            </div>

            <div class="bg-neutral-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-primary-brand mb-2">Can I customize the pipeline stages?</h3>
                <p class="text-neutral-600">Yes! The default stages (New, Qualified, Proposal, Negotiation, Won, Lost) can be customized in Settings → Pipeline Configuration to match your sales process.</p>
            </div>

            <div class="bg-neutral-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-primary-brand mb-2">How do I set up team permissions?</h3>
                <p class="text-neutral-600">GrowPath AI uses role-based permissions. Go to Team → Roles to assign users as Owner, Admin, Manager, or Member, each with different access levels.</p>
            </div>

            <div class="bg-neutral-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-primary-brand mb-2">What browsers are supported?</h3>
                <p class="text-neutral-600">GrowPath AI works on all modern browsers including Chrome, Firefox, Safari, and Edge. We recommend using the latest version for the best experience.</p>
            </div>

            <div class="bg-neutral-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-primary-brand mb-2">How often is data backed up?</h3>
                <p class="text-neutral-600">We automatically back up all data every 6 hours. Enterprise customers get real-time backups with point-in-time recovery options.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Support -->
<section class="py-20 bg-primary-accent text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-6">Still Need Help?</h2>
        <p class="text-xl text-blue-100 mb-8">
            Our support team is here to help you succeed with GrowPath AI.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-primary-accent rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Contact Support
            </a>
            <a href="#" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-primary-accent transition-colors">
                Schedule a Demo
            </a>
        </div>
    </div>
</section>
@endsection
