@extends('layouts.frontend')

@section('title', 'GrowPath - Modern CRM Software for Growing Businesses | Sales & Client Management')
@section('description', 'GrowPath is a powerful, easy-to-use CRM platform that helps businesses manage prospects, track sales pipelines, and grow revenue. Start your free trial today!')
@section('keywords', 'CRM software, customer relationship management, sales pipeline management, prospect tracking, client management, business growth tools, sales automation')

@push('structured-data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "SoftwareApplication",
  "name": "GrowPath",
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
<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-brand to-blue-900 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                    Grow Your Business with Smart CRM
                </h1>
                <p class="text-xl text-blue-100 mb-8">
                    GrowPath helps you manage prospects, track your sales pipeline, and close more deals. Powerful features, simple interface, built for growing businesses.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('register') }}" class="px-8 py-4 bg-white text-primary-brand rounded-lg font-semibold hover:bg-gray-100 transition-colors text-center">
                        Start Free Trial
                    </a>
                    <a href="{{ route('features') }}" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-primary-brand transition-colors text-center">
                        Explore Features
                    </a>
                </div>
                <p class="text-sm text-blue-200 mt-4">No credit card required • 14-day free trial • Cancel anytime</p>
            </div>
            <div class="hidden lg:block">
                <div class="bg-white rounded-lg shadow-2xl p-8">
                    <div class="aspect-video bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg flex items-center justify-center">
                        <div class="text-center text-neutral-600">
                            <svg class="w-24 h-24 mx-auto mb-4 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <p class="text-lg font-semibold">Dashboard Preview</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Overview -->
<section class="py-20 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-primary-brand mb-4">Everything You Need to Grow</h2>
            <p class="text-xl text-neutral-600 max-w-3xl mx-auto">
                Comprehensive CRM features designed to help you manage customer relationships, track sales, and drive business growth.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-primary-accent bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-3">Prospect Management</h3>
                <p class="text-neutral-600">
                    Organize and track all your prospects in one place. Never lose a lead with smart tracking and automated follow-ups.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-success bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-3">Sales Pipeline</h3>
                <p class="text-neutral-600">
                    Visualize your sales process with an intuitive Kanban board. Track deals from prospect to close with ease.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-warning bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-3">Task Management</h3>
                <p class="text-neutral-600">
                    Never miss a follow-up. Schedule tasks, set reminders, and ensure timely engagement with every prospect.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-secondary-accent bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-3">Client Management</h3>
                <p class="text-neutral-600">
                    Track contract values, monitor account health, and manage renewals. Keep your clients happy and growing.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-info bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-3">Analytics & Reports</h3>
                <p class="text-neutral-600">
                    Make data-driven decisions with comprehensive analytics. Track performance, forecast revenue, and identify opportunities.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-error bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-error" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-3">Team Collaboration</h3>
                <p class="text-neutral-600">
                    Work together seamlessly. Assign prospects, share notes, and collaborate with your team in real-time.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-5xl font-bold text-primary-accent mb-2">10K+</div>
                <div class="text-neutral-600">Active Users</div>
            </div>
            <div>
                <div class="text-5xl font-bold text-success mb-2">98%</div>
                <div class="text-neutral-600">Satisfaction Rate</div>
            </div>
            <div>
                <div class="text-5xl font-bold text-secondary-accent mb-2">50M+</div>
                <div class="text-neutral-600">Prospects Managed</div>
            </div>
            <div>
                <div class="text-5xl font-bold text-warning mb-2">24/7</div>
                <div class="text-neutral-600">Support</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-primary-brand mb-4">Trusted by Growing Businesses</h2>
            <p class="text-xl text-neutral-600">See what our customers have to say about GrowPath</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-8 shadow-md">
                <div class="flex items-center mb-4">
                    <div class="flex text-warning space-x-1">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                </div>
                <p class="text-neutral-600 mb-4">"GrowPath transformed how we manage our sales pipeline. We've increased our conversion rate by 35% in just 3 months!"</p>
                <div class="font-semibold text-primary-brand">Sarah Johnson</div>
                <div class="text-sm text-neutral-500">CEO, TechStart Inc</div>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-md">
                <div class="flex items-center mb-4">
                    <div class="flex text-warning space-x-1">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                </div>
                <p class="text-neutral-600 mb-4">"The analytics and reporting features are incredible. We now have complete visibility into our sales pipeline."</p>
                <div class="font-semibold text-primary-brand">Michael Chen</div>
                <div class="text-sm text-neutral-500">Sales Director, Global Solutions</div>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-md">
                <div class="flex items-center mb-4">
                    <div class="flex text-warning space-x-1">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                </div>
                <p class="text-neutral-600 mb-4">"Easy to use, powerful features, and excellent support. GrowPath is everything we needed in a CRM."</p>
                <div class="font-semibold text-primary-brand">Emily Rodriguez</div>
                <div class="text-sm text-neutral-500">Founder, Innovate LLC</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary-accent">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Ready to Grow Your Business?</h2>
        <p class="text-xl text-blue-100 mb-8">
            Join thousands of businesses using GrowPath to manage their sales pipeline and close more deals.
        </p>
        <a href="{{ route('register') }}" class="inline-block px-8 py-4 bg-white text-primary-accent rounded-lg font-semibold hover:bg-gray-100 transition-colors">
            Start Your Free Trial
        </a>
        <p class="text-sm text-blue-200 mt-4">No credit card required • 14-day free trial</p>
    </div>
</section>
@endsection
