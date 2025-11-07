@extends('layouts.frontend')

@section('title', 'About GrowPath - Building Better CRM for Growing Businesses')
@section('description', 'Learn about GrowPath mission to help businesses grow through better customer relationship management. Meet our team and discover our story.')
@section('keywords', 'about GrowPath, CRM company, business growth, customer success, company mission, team')

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
            <svg class="w-4 h-4 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm font-semibold text-white">OUR STORY</span>
        </div>

        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-8 leading-tight">
            Building the Future of
            <span class="block bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent mt-2">Customer Relationships</span>
        </h1>
        <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
            We're on a mission to help businesses grow by providing simple, powerful CRM tools that actually work.
        </p>
    </div>
</section>

<!-- Story -->
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div>
                <div class="inline-flex items-center px-4 py-2 bg-primary-accent/10 rounded-full mb-6">
                    <span class="text-sm font-semibold text-primary-accent">OUR JOURNEY</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold text-primary-brand mb-8 leading-tight">
                    Born from Real Business Challenges
                </h2>
                <div class="space-y-6 text-lg text-neutral-600 leading-relaxed">
                    <p>
                        GrowPath was founded in 2024 with a simple belief: <strong class="text-primary-brand">managing customer relationships shouldn't be complicated</strong>. We saw too many businesses struggling with overly complex CRM systems that required extensive training and failed to deliver real value.
                    </p>
                    <p>
                        Our founders, experienced sales professionals and software engineers, came together to create a CRM that actually helps businesses grow. We focused on three core principles: <strong class="text-primary-brand">simplicity, power, and affordability</strong>.
                    </p>
                    <p>
                        Today, GrowPath serves thousands of businesses worldwide, helping them manage prospects, track sales pipelines, and close more deals. We're proud to be the CRM of choice for growing businesses.
                    </p>
                </div>
            </div>

            <!-- Visual Element -->
            <div class="relative">
                <div class="relative bg-gradient-to-br from-primary-accent/10 to-secondary-accent/10 rounded-2xl p-12 backdrop-blur-sm">
                    <div class="space-y-6">
                        <!-- Timeline Item -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-accent rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-primary-brand mb-2">2024 - Founded</h3>
                                <p class="text-neutral-600">Started with a mission to simplify CRM for growing businesses</p>
                            </div>
                        </div>

                        <!-- Timeline Item -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-success rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-primary-brand mb-2">10K+ Users</h3>
                                <p class="text-neutral-600">Trusted by businesses across 40+ countries worldwide</p>
                            </div>
                        </div>

                        <!-- Timeline Item -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-secondary-accent rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-primary-brand mb-2">Continuous Innovation</h3>
                                <p class="text-neutral-600">Regular updates and new features based on customer feedback</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Decorative Elements -->
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-primary-accent/20 rounded-full blur-2xl -z-10"></div>
                <div class="absolute -bottom-6 -left-6 w-40 h-40 bg-secondary-accent/20 rounded-full blur-2xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section class="py-24 lg:py-32 bg-neutral-50 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary-accent/5 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-accent/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <div class="inline-flex items-center px-4 py-2 bg-secondary-accent/10 rounded-full mb-6">
                <span class="text-sm font-semibold text-secondary-accent">CORE VALUES</span>
            </div>
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-primary-brand mb-6 leading-tight">
                What Drives Us
                <span class="block text-primary-accent mt-2">Every Day</span>
            </h2>
            <p class="text-xl text-neutral-600 leading-relaxed">
                Our mission and values guide everything we do, from product development to customer support.
            </p>
        </div>

        <!-- Values Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-neutral-100 hover:border-primary-accent hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">Simplicity First</h3>
                <p class="text-neutral-600 leading-relaxed">
                    We believe powerful tools should be easy to use. No unnecessary complexity, just features that work seamlessly and intuitively.
                </p>
            </div>

            <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-neutral-100 hover:border-success hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">Customer Success</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Your success is our success. We're deeply committed to helping every customer achieve their growth goals and exceed expectations.
                </p>
            </div>

            <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-neutral-100 hover:border-secondary-accent hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">Continuous Innovation</h3>
                <p class="text-neutral-600 leading-relaxed">
                    We're always improving, adding new features, and adapting to help businesses succeed in an ever-changing landscape.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="py-24 lg:py-32 bg-gradient-to-br from-primary-brand via-neutral-900 to-primary-brand relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary-accent rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-secondary-accent rounded-full blur-3xl animate-pulse" style="animation-delay: 1s"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full mb-6">
                <span class="text-sm font-semibold text-white">OUR IMPACT</span>
            </div>
            <h2 class="text-4xl sm:text-5xl font-bold text-white mb-4">By the Numbers</h2>
            <p class="text-xl text-blue-100">Real results from real businesses worldwide</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <!-- Stat 1 -->
            <div class="text-center group">
                <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <div class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent mb-2">
                        10K+
                    </div>
                    <div class="h-1 w-16 bg-gradient-to-r from-blue-400 to-cyan-300 mx-auto rounded-full"></div>
                </div>
                <div class="text-neutral-300 text-lg font-medium">Active Users</div>
                <p class="text-neutral-500 text-sm mt-2">Growing daily</p>
            </div>

            <!-- Stat 2 -->
            <div class="text-center group">
                <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <div class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent mb-2">
                        50M+
                    </div>
                    <div class="h-1 w-16 bg-gradient-to-r from-emerald-400 to-teal-300 mx-auto rounded-full"></div>
                </div>
                <div class="text-neutral-300 text-lg font-medium">Prospects Managed</div>
                <p class="text-neutral-500 text-sm mt-2">And counting</p>
            </div>

            <!-- Stat 3 -->
            <div class="text-center group">
                <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <div class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-purple-400 to-pink-300 bg-clip-text text-transparent mb-2">
                        98%
                    </div>
                    <div class="h-1 w-16 bg-gradient-to-r from-purple-400 to-pink-300 mx-auto rounded-full"></div>
                </div>
                <div class="text-neutral-300 text-lg font-medium">Customer Satisfaction</div>
                <p class="text-neutral-500 text-sm mt-2">Verified reviews</p>
            </div>

            <!-- Stat 4 -->
            <div class="text-center group">
                <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <div class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-amber-400 to-orange-300 bg-clip-text text-transparent mb-2">
                        40+
                    </div>
                    <div class="h-1 w-16 bg-gradient-to-r from-amber-400 to-orange-300 mx-auto rounded-full"></div>
                </div>
                <div class="text-neutral-300 text-lg font-medium">Countries Served</div>
                <p class="text-neutral-500 text-sm mt-2">Worldwide reach</p>
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
        <!-- Eyebrow -->
        <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full mb-8">
            <svg class="w-4 h-4 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm font-semibold text-white">JOIN US TODAY</span>
        </div>

        <!-- Headline -->
        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
            Join Thousands of
            <span class="block mt-2">Growing Businesses</span>
        </h2>

        <!-- Description -->
        <p class="text-xl lg:text-2xl text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed">
            Start managing your prospects better today with GrowPath and accelerate your business growth.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('register') }}"
               class="group inline-flex items-center justify-center px-10 py-5 bg-white text-primary-accent text-lg font-bold rounded-xl hover:bg-neutral-50 transition-all duration-300 shadow-2xl hover:shadow-3xl hover:scale-105">
                Start Free Trial
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center px-10 py-5 bg-white/10 backdrop-blur-sm text-white text-lg font-bold rounded-xl border-2 border-white/30 hover:bg-white/20 hover:border-white transition-all duration-300">
                Contact Sales
            </a>
        </div>

        <!-- Trust Indicators -->
        <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-4 text-white/90 mt-10">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-medium">No credit card required</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-medium">14-day free trial</span>
            </div>
        </div>
    </div>
</section>
@endsection
