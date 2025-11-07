@extends('layouts.frontend')

@section('title', 'GrowPath AI - Modern CRM Software for Growing Businesses | Sales & Client Management')
@section('description', 'GrowPath AI is a powerful, easy-to-use CRM platform that helps businesses manage prospects, track sales pipelines, and grow revenue. Start your free trial today!')
@section('keywords', 'CRM software, customer relationship management, sales pipeline management, prospect tracking, client management, business growth tools, sales automation')

@push('structured-data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "SoftwareApplication",
  "name": "GrowPath AI",
  "applicationCategory": "BusinessApplication",
  "offers": {
    "@@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "aggregateRating": {
    "@@type": "AggregateRating",
    "ratingValue": "4.8",
    "ratingCount": "1250"
  }
}
</script>
@endpush

@section('content')
<!-- Hero Section with Carousel -->
<section class="relative overflow-hidden bg-white" x-data="heroCarousel()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <!-- Content Column -->
            <div class="lg:col-span-6 space-y-8">
                <!-- Eyebrow Text -->
                <div class="inline-flex items-center px-4 py-2 bg-neutral-100 rounded-full">
                    <svg class="w-4 h-4 mr-2 text-primary-accent" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <span class="text-sm font-medium text-neutral-700">Rated 4.8/5 by 1,250+ businesses</span>
                </div>

                <!-- Main Headline -->
                <div class="space-y-6">
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold text-primary-brand leading-[1.1] tracking-tight">
                        Transform Your
                        <span class="block text-primary-accent mt-2">Sales Pipeline</span>
                    </h1>
                    <p class="text-xl lg:text-2xl text-neutral-600 leading-relaxed max-w-xl">
                        The intelligent CRM platform that helps modern businesses track prospects, close deals faster, and accelerate revenue growth.
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="{{ route('register') }}"
                       class="group inline-flex items-center justify-center px-8 py-4 bg-primary-accent text-white text-lg font-semibold rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                        Start Free Trial
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ route('features') }}"
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-brand text-lg font-semibold rounded-xl border-2 border-neutral-300 hover:border-primary-accent hover:text-primary-accent transition-all duration-300">
                        Explore Features
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex flex-wrap items-center gap-x-8 gap-y-4 pt-8 text-sm text-neutral-500 border-t border-neutral-200">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>No credit card required</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>14-day free trial</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Cancel anytime</span>
                    </div>
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="lg:col-span-6">
                <div class="relative">
                    <!-- Carousel Container -->
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl bg-white">
                        <!-- Slides -->
                        <div class="relative aspect-[4/3]">
                            <template x-for="(slide, index) in slides" :key="index">
                                <div x-show="currentSlide === index"
                                     x-transition:enter="transition ease-out duration-500"
                                     x-transition:enter-start="opacity-0 translate-x-full"
                                     x-transition:enter-end="opacity-100 translate-x-0"
                                     x-transition:leave="transition ease-in duration-500"
                                     x-transition:leave-start="opacity-100 translate-x-0"
                                     x-transition:leave-end="opacity-0 -translate-x-full"
                                     class="absolute inset-0">
                                    <!-- Slide Content -->
                                    <div class="h-full flex flex-col" :class="slide.bgClass">
                                        <div class="flex-1 flex items-center justify-center p-8">
                                            <div class="text-center" :class="slide.textColorClass">
                                                <div x-html="slide.icon" class="w-24 h-24 mx-auto mb-6"></div>
                                                <h3 x-text="slide.title" class="text-2xl font-bold mb-3"></h3>
                                                <p x-text="slide.description" class="text-lg opacity-90"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <!-- Navigation Arrows -->
                        <button @click="previousSlide"
                                class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all duration-300 hover:scale-110 z-10">
                            <svg class="w-6 h-6 text-primary-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button @click="nextSlide"
                                class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition-all duration-300 hover:scale-110 z-10">
                            <svg class="w-6 h-6 text-primary-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <!-- Dots Indicator -->
                        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                            <template x-for="(slide, index) in slides" :key="index">
                                <button @click="currentSlide = index"
                                        class="w-3 h-3 rounded-full transition-all duration-300"
                                        :class="currentSlide === index ? 'bg-white w-8' : 'bg-white/50 hover:bg-white/75'">
                                </button>
                            </template>
                        </div>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute -top-8 -right-8 w-32 h-32 bg-primary-accent/10 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-secondary-accent/10 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Decoration -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-br from-neutral-50 to-transparent"></div>
    </div>
</section>

@push('scripts')
<script>
function heroCarousel() {
    return {
        currentSlide: 0,
        slides: [
            {
                title: 'Prospect Management',
                description: 'Track and nurture every lead with intelligent prospect management',
                bgClass: 'bg-gradient-to-br from-blue-500 to-blue-700',
                textColorClass: 'text-white',
                icon: '<svg class="w-full h-full text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>'
            },
            {
                title: 'Visual Pipeline',
                description: 'Visualize your sales journey from prospect to close',
                bgClass: 'bg-gradient-to-br from-emerald-500 to-teal-700',
                textColorClass: 'text-white',
                icon: '<svg class="w-full h-full text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>'
            },
            {
                title: 'Smart Analytics',
                description: 'Make data-driven decisions with powerful insights',
                bgClass: 'bg-gradient-to-br from-purple-500 to-indigo-700',
                textColorClass: 'text-white',
                icon: '<svg class="w-full h-full text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>'
            },
            {
                title: 'Team Collaboration',
                description: 'Work seamlessly with your team in real-time',
                bgClass: 'bg-gradient-to-br from-amber-500 to-orange-700',
                textColorClass: 'text-white',
                icon: '<svg class="w-full h-full text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>'
            }
        ],
        interval: null,
        init() {
            this.startAutoPlay();
        },
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            this.resetAutoPlay();
        },
        previousSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
            this.resetAutoPlay();
        },
        startAutoPlay() {
            this.interval = setInterval(() => {
                this.nextSlide();
            }, 5000);
        },
        resetAutoPlay() {
            clearInterval(this.interval);
            this.startAutoPlay();
        }
    }
}
</script>
@endpush

<!-- Features Overview -->
<section class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <div class="inline-flex items-center px-4 py-2 bg-primary-accent/10 rounded-full mb-6">
                <span class="text-sm font-semibold text-primary-accent">POWERFUL FEATURES</span>
            </div>
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-primary-brand mb-6 leading-tight">
                Everything You Need to
                <span class="text-primary-accent">Succeed</span>
            </h2>
            <p class="text-xl text-neutral-600 leading-relaxed">
                Comprehensive CRM features designed to help you manage customer relationships, track sales, and drive sustainable business growth.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            <!-- Feature 1 -->
            <div class="group relative bg-white rounded-2xl p-8 border border-neutral-200 hover:border-primary-accent transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary-accent/5 rounded-bl-[100px] -z-10 transition-all duration-300 group-hover:scale-150"></div>
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">Prospect Management</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Organize and track all your prospects in one centralized platform. Never lose a lead with intelligent tracking and automated follow-ups.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="group relative bg-white rounded-2xl p-8 border border-neutral-200 hover:border-success transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-success/5 rounded-bl-[100px] -z-10 transition-all duration-300 group-hover:scale-150"></div>
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">Visual Pipeline</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Visualize your entire sales process with an intuitive Kanban board. Track deals from prospect to close with complete transparency.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="group relative bg-white rounded-2xl p-8 border border-neutral-200 hover:border-warning transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-warning/5 rounded-bl-[100px] -z-10 transition-all duration-300 group-hover:scale-150"></div>
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">Task Management</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Never miss a follow-up opportunity. Schedule tasks, set intelligent reminders, and ensure timely engagement with every prospect.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="group relative bg-white rounded-2xl p-8 border border-neutral-200 hover:border-secondary-accent transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-secondary-accent/5 rounded-bl-[100px] -z-10 transition-all duration-300 group-hover:scale-150"></div>
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">Client Management</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Track contract values, monitor account health, and manage renewals seamlessly. Keep your clients satisfied and relationships growing.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="group relative bg-white rounded-2xl p-8 border border-neutral-200 hover:border-info transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-info/5 rounded-bl-[100px] -z-10 transition-all duration-300 group-hover:scale-150"></div>
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">Analytics & Insights</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Make data-driven decisions with comprehensive analytics. Track performance, forecast revenue accurately, and identify growth opportunities.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="group relative bg-white rounded-2xl p-8 border border-neutral-200 hover:border-error transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-error/5 rounded-bl-[100px] -z-10 transition-all duration-300 group-hover:scale-150"></div>
                <div class="w-16 h-16 bg-gradient-to-br from-rose-500 to-red-600 rounded-xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">Team Collaboration</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Work together seamlessly with your team. Assign prospects, share insights, and collaborate in real-time for maximum efficiency.
                </p>
            </div>
        </div>
    </div>

    <!-- Background Elements -->
    <div class="absolute top-20 left-0 w-72 h-72 bg-primary-accent/5 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-20 right-0 w-96 h-96 bg-secondary-accent/5 rounded-full blur-3xl -z-10"></div>
</section>

<!-- Stats Section -->
<section class="py-20 lg:py-24 bg-gradient-to-br from-primary-brand via-neutral-900 to-primary-brand relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary-accent rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-secondary-accent rounded-full blur-3xl animate-pulse" style="animation-delay: 1s"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
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
                        98%
                    </div>
                    <div class="h-1 w-16 bg-gradient-to-r from-emerald-400 to-teal-300 mx-auto rounded-full"></div>
                </div>
                <div class="text-neutral-300 text-lg font-medium">Satisfaction Rate</div>
                <p class="text-neutral-500 text-sm mt-2">Verified reviews</p>
            </div>

            <!-- Stat 3 -->
            <div class="text-center group">
                <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <div class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-purple-400 to-pink-300 bg-clip-text text-transparent mb-2">
                        50M+
                    </div>
                    <div class="h-1 w-16 bg-gradient-to-r from-purple-400 to-pink-300 mx-auto rounded-full"></div>
                </div>
                <div class="text-neutral-300 text-lg font-medium">Prospects Managed</div>
                <p class="text-neutral-500 text-sm mt-2">And counting</p>
            </div>

            <!-- Stat 4 -->
            <div class="text-center group">
                <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <div class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-amber-400 to-orange-300 bg-clip-text text-transparent mb-2">
                        24/7
                    </div>
                    <div class="h-1 w-16 bg-gradient-to-r from-amber-400 to-orange-300 mx-auto rounded-full"></div>
                </div>
                <div class="text-neutral-300 text-lg font-medium">Support</div>
                <p class="text-neutral-500 text-sm mt-2">Always available</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-24 lg:py-32 bg-neutral-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <div class="inline-flex items-center px-4 py-2 bg-success/10 rounded-full mb-6">
                <span class="text-sm font-semibold text-success">CUSTOMER STORIES</span>
            </div>
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-primary-brand mb-6 leading-tight">
                Trusted by
                <span class="text-primary-accent">Growing Businesses</span>
            </h2>
            <p class="text-xl text-neutral-600">
                See what our customers have to say about their experience with GrowPath AI
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-neutral-100 hover:border-primary-accent hover:-translate-y-2">
                <!-- Quote Icon -->
                <div class="w-12 h-12 bg-primary-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-primary-accent" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>

                <!-- Stars -->
                <div class="flex items-center mb-6">
                    <div class="flex text-warning space-x-1">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>
                </div>

                <!-- Testimonial Text -->
                <p class="text-neutral-700 text-lg leading-relaxed mb-8">
                    "GrowPath AI transformed how we manage our sales pipeline. We've increased our conversion rate by 35% in just 3 months!"
                </p>

                <!-- Author -->
                <div class="flex items-center pt-6 border-t border-neutral-100">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                        SJ
                    </div>
                    <div>
                        <div class="font-bold text-primary-brand">Sarah Johnson</div>
                        <div class="text-sm text-neutral-500">CEO, TechStart Inc</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-neutral-100 hover:border-success hover:-translate-y-2">
                <!-- Quote Icon -->
                <div class="w-12 h-12 bg-success/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-success" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>

                <!-- Stars -->
                <div class="flex items-center mb-6">
                    <div class="flex text-warning space-x-1">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>
                </div>

                <!-- Testimonial Text -->
                <p class="text-neutral-700 text-lg leading-relaxed mb-8">
                    "The analytics and reporting features are incredible. We now have complete visibility into our sales pipeline."
                </p>

                <!-- Author -->
                <div class="flex items-center pt-6 border-t border-neutral-100">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                        MC
                    </div>
                    <div>
                        <div class="font-bold text-primary-brand">Michael Chen</div>
                        <div class="text-sm text-neutral-500">Sales Director, Global Solutions</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-neutral-100 hover:border-secondary-accent hover:-translate-y-2">
                <!-- Quote Icon -->
                <div class="w-12 h-12 bg-secondary-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-secondary-accent" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>

                <!-- Stars -->
                <div class="flex items-center mb-6">
                    <div class="flex text-warning space-x-1">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>
                </div>

                <!-- Testimonial Text -->
                <p class="text-neutral-700 text-lg leading-relaxed mb-8">
                    "Easy to use, powerful features, and excellent support. GrowPath AI is everything we needed in a CRM."
                </p>

                <!-- Author -->
                <div class="flex items-center pt-6 border-t border-neutral-100">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                        ER
                    </div>
                    <div>
                        <div class="font-bold text-primary-brand">Emily Rodriguez</div>
                        <div class="text-sm text-neutral-500">Founder, Innovate LLC</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary-accent/5 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-accent/5 rounded-full blur-3xl -z-10"></div>
</section>

<!-- CTA Section -->
<section class="relative py-24 lg:py-32 bg-gradient-to-br from-primary-accent via-blue-600 to-secondary-accent overflow-hidden">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-72 h-72 bg-white rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-white rounded-full blur-3xl animate-pulse" style="animation-delay: 1.5s"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-white rounded-full blur-3xl animate-pulse" style="animation-delay: 0.75s"></div>
    </div>

    <!-- Content -->
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <!-- Eyebrow -->
        <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full mb-8">
            <svg class="w-4 h-4 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm font-semibold text-white">START YOUR JOURNEY TODAY</span>
        </div>

        <!-- Headline -->
        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
            Ready to Transform Your
            <span class="block mt-2">Sales Process?</span>
        </h2>

        <!-- Description -->
        <p class="text-xl lg:text-2xl text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed">
            Join thousands of businesses using GrowPath AI to manage their sales pipeline, close more deals, and accelerate revenue growth.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-10">
            <a href="{{ route('register') }}"
               class="group inline-flex items-center justify-center px-10 py-5 bg-white text-primary-accent text-lg font-bold rounded-xl hover:bg-neutral-50 transition-all duration-300 shadow-2xl hover:shadow-3xl hover:scale-105">
                Start Your Free Trial
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center px-10 py-5 bg-white/10 backdrop-blur-sm text-white text-lg font-bold rounded-xl border-2 border-white/30 hover:bg-white/20 hover:border-white transition-all duration-300">
                Talk to Sales
            </a>
        </div>

        <!-- Trust Indicators -->
        <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-4 text-white/90">
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
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-medium">Setup in minutes</span>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-white/50 to-transparent"></div>
</section>
@endsection
