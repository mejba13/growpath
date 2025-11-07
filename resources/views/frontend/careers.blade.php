@extends('layouts.frontend')

@section('title', 'Careers - Join Our Team | GrowPath')
@section('description', 'Join the GrowPath team! Explore career opportunities and help us build the future of CRM.')
@section('keywords', 'careers, jobs, employment, work at GrowPath, job openings')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-50 via-white to-purple-50 py-24 lg:py-32">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Eyebrow Badge -->
        <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-secondary-accent/10 to-purple-600/10 backdrop-blur-sm border border-secondary-accent/20 rounded-full px-4 py-2 mb-8 animate-fade-in">
            <span class="w-2 h-2 bg-gradient-to-r from-secondary-accent to-purple-600 rounded-full animate-pulse"></span>
            <span class="text-sm font-medium bg-gradient-to-r from-secondary-accent to-purple-600 bg-clip-text text-transparent">WE'RE HIRING</span>
        </div>

        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-primary-brand mb-6 leading-tight animate-slide-up">
            Join Our <span class="bg-gradient-to-r from-secondary-accent to-purple-600 bg-clip-text text-transparent">Amazing Team</span>
        </h1>
        <p class="text-xl lg:text-2xl text-neutral-600 max-w-3xl mx-auto leading-relaxed animate-slide-up">
            Help us build the future of customer relationship management. Work with talented people, solve challenging problems, and make a real impact.
        </p>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-secondary-accent/10 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-20 right-10 w-72 h-72 bg-purple-600/10 rounded-full blur-3xl -z-10"></div>
</section>

<!-- Why Join Section -->
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-primary-brand mb-6">Why Join GrowPath?</h2>
            <p class="text-xl text-neutral-600 max-w-3xl mx-auto">
                We're a fast-growing SaaS company dedicated to helping businesses succeed. Join us and make an impact!
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Benefit 1 -->
            <div class="group relative bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-primary-accent hover:shadow-2xl transition-all duration-300">
                <div class="absolute -top-6 left-8">
                    <div class="w-14 h-14 bg-gradient-to-br from-primary-accent to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-2xl font-bold text-primary-brand mb-3">Fast Growth</h3>
                    <p class="text-neutral-600 leading-relaxed">Be part of a rapidly scaling company where your contributions directly impact our success and trajectory.</p>
                </div>
            </div>

            <!-- Benefit 2 -->
            <div class="group relative bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-success hover:shadow-2xl transition-all duration-300">
                <div class="absolute -top-6 left-8">
                    <div class="w-14 h-14 bg-gradient-to-br from-success to-emerald-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-2xl font-bold text-primary-brand mb-3">Great Team</h3>
                    <p class="text-neutral-600 leading-relaxed">Work alongside talented, passionate people who are committed to excellence and continuous learning.</p>
                </div>
            </div>

            <!-- Benefit 3 -->
            <div class="group relative bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-secondary-accent hover:shadow-2xl transition-all duration-300">
                <div class="absolute -top-6 left-8">
                    <div class="w-14 h-14 bg-gradient-to-br from-secondary-accent to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-2xl font-bold text-primary-brand mb-3">Remote First</h3>
                    <p class="text-neutral-600 leading-relaxed">Work from anywhere in the world with flexible hours and a culture built around trust and results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions Section -->
<section class="py-24 lg:py-32 bg-gradient-to-br from-neutral-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-primary-brand mb-6">Open Positions</h2>
            <p class="text-xl text-neutral-600">Join our team and help shape the future of CRM</p>
        </div>

        <div class="max-w-4xl mx-auto space-y-6">
            <!-- Position 1 -->
            <div class="group bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-primary-accent hover:shadow-2xl transition-all duration-300">
                <div class="flex flex-col lg:flex-row lg:justify-between lg:items-start gap-4 mb-6">
                    <div class="flex-1">
                        <h3 class="text-2xl lg:text-3xl font-bold text-primary-brand mb-3 group-hover:text-primary-accent transition-colors">
                            Senior Full Stack Developer
                        </h3>
                        <div class="flex flex-wrap items-center gap-3 text-neutral-600">
                            <span class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>Engineering</span>
                            </span>
                            <span class="text-neutral-300">•</span>
                            <span>Full-time</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="px-4 py-2 bg-gradient-to-r from-success/10 to-emerald-50 text-success rounded-full text-sm font-bold border border-success/20">
                            🌍 Remote
                        </span>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    We're looking for an experienced full stack developer to help build and scale our CRM platform. You'll work with Laravel, Vue.js, and modern cloud technologies to create amazing user experiences.
                </p>
                <a href="{{ route('contact') }}" class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-accent to-blue-600 text-white rounded-xl font-semibold hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <span>Apply Now</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

            <!-- Position 2 -->
            <div class="group bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-secondary-accent hover:shadow-2xl transition-all duration-300">
                <div class="flex flex-col lg:flex-row lg:justify-between lg:items-start gap-4 mb-6">
                    <div class="flex-1">
                        <h3 class="text-2xl lg:text-3xl font-bold text-primary-brand mb-3 group-hover:text-secondary-accent transition-colors">
                            Product Designer
                        </h3>
                        <div class="flex flex-wrap items-center gap-3 text-neutral-600">
                            <span class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                                <span>Design</span>
                            </span>
                            <span class="text-neutral-300">•</span>
                            <span>Full-time</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="px-4 py-2 bg-gradient-to-r from-success/10 to-emerald-50 text-success rounded-full text-sm font-bold border border-success/20">
                            🌍 Remote
                        </span>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    Join our design team to create beautiful, intuitive user experiences that delight customers. Experience with SaaS products and design systems is a plus.
                </p>
                <a href="{{ route('contact') }}" class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-secondary-accent to-purple-600 text-white rounded-xl font-semibold hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <span>Apply Now</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

            <!-- Position 3 -->
            <div class="group bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-success hover:shadow-2xl transition-all duration-300">
                <div class="flex flex-col lg:flex-row lg:justify-between lg:items-start gap-4 mb-6">
                    <div class="flex-1">
                        <h3 class="text-2xl lg:text-3xl font-bold text-primary-brand mb-3 group-hover:text-success transition-colors">
                            Customer Success Manager
                        </h3>
                        <div class="flex flex-wrap items-center gap-3 text-neutral-600">
                            <span class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span>Customer Success</span>
                            </span>
                            <span class="text-neutral-300">•</span>
                            <span>Full-time</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="px-4 py-2 bg-gradient-to-r from-success/10 to-emerald-50 text-success rounded-full text-sm font-bold border border-success/20">
                            🌍 Remote
                        </span>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    Help our customers achieve success with GrowPath. You'll onboard new users, provide training, and ensure customer satisfaction throughout their journey.
                </p>
                <a href="{{ route('contact') }}" class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-success to-emerald-600 text-white rounded-xl font-semibold hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <span>Apply Now</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- No Position Fits -->
        <div class="mt-16 text-center">
            <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-12 max-w-3xl mx-auto border-2 border-neutral-100">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-primary-accent to-blue-600 rounded-2xl mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-primary-brand mb-4">Don't See a Perfect Fit?</h3>
                <p class="text-lg text-neutral-600 mb-8 leading-relaxed">
                    We're always looking for talented individuals to join our team. Send us your resume and we'll keep you in mind for future opportunities.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-neutral-900 text-white rounded-xl font-semibold hover:bg-neutral-800 hover:scale-105 transition-all duration-300 shadow-lg">
                    <span>Send Us Your Resume</span>
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
