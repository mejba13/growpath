@extends('layouts.frontend')

@section('title', 'About GrowPath - Building Better CRM for Growing Businesses')
@section('description', 'Learn about GrowPath mission to help businesses grow through better customer relationship management. Meet our team and discover our story.')
@section('keywords', 'about GrowPath, CRM company, business growth, customer success, company mission, team')

@section('content')
<!-- Hero -->
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-6">About GrowPath</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            We're on a mission to help businesses grow by providing simple, powerful CRM tools.
        </p>
    </div>
</section>

<!-- Story -->
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-brand mb-6">Our Story</h2>
        <div class="prose prose-lg text-neutral-600">
            <p class="mb-4">
                GrowPath was founded in 2024 with a simple belief: managing customer relationships shouldn't be complicated. We saw too many businesses struggling with overly complex CRM systems that required extensive training and failed to deliver real value.
            </p>
            <p class="mb-4">
                Our founders, experienced sales professionals and software engineers, came together to create a CRM that actually helps businesses grow. We focused on three core principles: simplicity, power, and affordability.
            </p>
            <p>
                Today, GrowPath serves thousands of businesses worldwide, helping them manage prospects, track sales pipelines, and close more deals. We're proud to be the CRM of choice for growing businesses.
            </p>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section class="py-20 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-brand text-center mb-12">Our Mission & Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-8 shadow-md text-center">
                <div class="w-16 h-16 bg-primary-accent bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-3">Simplicity First</h3>
                <p class="text-neutral-600">
                    We believe powerful tools should be easy to use. No unnecessary complexity, just features that work.
                </p>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-md text-center">
                <div class="w-16 h-16 bg-success bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-3">Customer Success</h3>
                <p class="text-neutral-600">
                    Your success is our success. We're committed to helping every customer achieve their growth goals.
                </p>
            </div>

            <div class="bg-white rounded-lg p-8 shadow-md text-center">
                <div class="w-16 h-16 bg-secondary-accent bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-3">Continuous Innovation</h3>
                <p class="text-neutral-600">
                    We're always improving, adding new features, and adapting to help businesses succeed.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-brand text-center mb-12">By the Numbers</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-5xl font-bold text-primary-accent mb-2">10K+</div>
                <div class="text-neutral-600">Active Users</div>
            </div>
            <div>
                <div class="text-5xl font-bold text-success mb-2">50M+</div>
                <div class="text-neutral-600">Prospects Managed</div>
            </div>
            <div>
                <div class="text-5xl font-bold text-secondary-accent mb-2">98%</div>
                <div class="text-neutral-600">Customer Satisfaction</div>
            </div>
            <div>
                <div class="text-5xl font-bold text-warning mb-2">40+</div>
                <div class="text-neutral-600">Countries Served</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-primary-accent">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Join Thousands of Growing Businesses</h2>
        <p class="text-xl text-blue-100 mb-8">
            Start managing your prospects better today with GrowPath.
        </p>
        <a href="{{ route('register') }}" class="inline-block px-8 py-4 bg-white text-primary-accent rounded-lg font-semibold hover:bg-gray-100 transition-colors">
            Start Free Trial
        </a>
    </div>
</section>
@endsection
