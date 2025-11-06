@extends('layouts.frontend')

@section('title', 'Careers - Join Our Team | GrowPath')
@section('description', 'Join the GrowPath team! Explore career opportunities and help us build the future of CRM.')
@section('keywords', 'careers, jobs, employment, work at GrowPath, job openings')

@section('content')
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-6">Join Our Team</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            Help us build the future of customer relationship management.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary-brand mb-6">Why Join GrowPath?</h2>
        <p class="text-xl text-neutral-600 mb-12">
            We're a fast-growing SaaS company dedicated to helping businesses succeed. Join us and make an impact!
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-accent bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-lg text-primary-brand mb-2">Fast Growth</h3>
                <p class="text-neutral-600">Be part of a rapidly scaling company</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-success bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-lg text-primary-brand mb-2">Great Team</h3>
                <p class="text-neutral-600">Work with talented, passionate people</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-secondary-accent bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-lg text-primary-brand mb-2">Remote First</h3>
                <p class="text-neutral-600">Work from anywhere in the world</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-brand text-center mb-12">Open Positions</h2>

        <div class="max-w-4xl mx-auto space-y-6">
            <div class="bg-white rounded-lg shadow-md p-8 hover:shadow-lg transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-semibold text-primary-brand mb-2">Senior Full Stack Developer</h3>
                        <p class="text-neutral-600">Engineering • Remote • Full-time</p>
                    </div>
                    <span class="px-4 py-2 bg-success bg-opacity-10 text-success rounded-full text-sm font-semibold">Remote</span>
                </div>
                <p class="text-neutral-700 mb-4">
                    We're looking for an experienced full stack developer to help build and scale our CRM platform. You'll work with Laravel, Vue.js, and modern cloud technologies.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-primary-accent text-white rounded-md hover:bg-blue-700 transition-colors">
                    Apply Now
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-8 hover:shadow-lg transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-semibold text-primary-brand mb-2">Product Designer</h3>
                        <p class="text-neutral-600">Design • Remote • Full-time</p>
                    </div>
                    <span class="px-4 py-2 bg-success bg-opacity-10 text-success rounded-full text-sm font-semibold">Remote</span>
                </div>
                <p class="text-neutral-700 mb-4">
                    Join our design team to create beautiful, intuitive user experiences. Experience with SaaS products and design systems is a plus.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-primary-accent text-white rounded-md hover:bg-blue-700 transition-colors">
                    Apply Now
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-md p-8 hover:shadow-lg transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-semibold text-primary-brand mb-2">Customer Success Manager</h3>
                        <p class="text-neutral-600">Customer Success • Remote • Full-time</p>
                    </div>
                    <span class="px-4 py-2 bg-success bg-opacity-10 text-success rounded-full text-sm font-semibold">Remote</span>
                </div>
                <p class="text-neutral-700 mb-4">
                    Help our customers achieve success with GrowPath. You'll onboard new users, provide training, and ensure customer satisfaction.
                </p>
                <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-primary-accent text-white rounded-md hover:bg-blue-700 transition-colors">
                    Apply Now
                </a>
            </div>
        </div>

        <div class="text-center mt-12">
            <p class="text-neutral-600 mb-4">Don't see a position that fits?</p>
            <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-neutral-200 text-neutral-700 rounded-md hover:bg-neutral-300 transition-colors font-semibold">
                Send Us Your Resume
            </a>
        </div>
    </div>
</section>
@endsection
