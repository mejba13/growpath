@extends('layouts.frontend')

@section('title', 'Contact Us - Get in Touch with GrowPath Support Team')
@section('description', 'Have questions about GrowPath CRM? Contact our team for support, sales inquiries, or general questions. We are here to help!')
@section('keywords', 'contact GrowPath, customer support, sales inquiry, help center, get in touch')

@section('content')
<!-- Hero -->
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-6">Get in Touch</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-primary-brand mb-6">Send us a Message</h2>
                
                @if(session('success'))
                    <div class="bg-success bg-opacity-10 border border-success text-success px-4 py-3 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-neutral-700 mb-2">
                            Your Name <span class="text-error">*</span>
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('name') border-error @enderror"
                        >
                        @error('name')
                            <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral-700 mb-2">
                            Email Address <span class="text-error">*</span>
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('email') border-error @enderror"
                        >
                        @error('email')
                            <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-medium text-neutral-700 mb-2">
                            Subject <span class="text-error">*</span>
                        </label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            value="{{ old('subject') }}"
                            required
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('subject') border-error @enderror"
                        >
                        @error('subject')
                            <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-neutral-700 mb-2">
                            Message <span class="text-error">*</span>
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            required
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('message') border-error @enderror"
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full px-6 py-3 bg-primary-accent text-white rounded-lg font-semibold hover:bg-blue-700 transition-colors"
                    >
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-primary-brand mb-6">Contact Information</h2>
                
                <div class="space-y-6">
                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-primary-accent bg-opacity-10 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-primary-brand">Email</h3>
                            <p class="text-neutral-600">support@growpath.com</p>
                            <p class="text-neutral-600">sales@growpath.com</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-success bg-opacity-10 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-primary-brand">Phone</h3>
                            <p class="text-neutral-600">+1 (555) 123-4567</p>
                            <p class="text-sm text-neutral-500">Mon-Fri 9am-6pm EST</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-warning bg-opacity-10 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-primary-brand">Office</h3>
                            <p class="text-neutral-600">123 Business Street</p>
                            <p class="text-neutral-600">San Francisco, CA 94102</p>
                            <p class="text-neutral-600">United States</p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-info bg-opacity-10 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-primary-brand">Follow Us</h3>
                            <div class="flex space-x-4 mt-2">
                                <a href="#" class="text-neutral-600 hover:text-primary-accent transition-colors">Twitter</a>
                                <a href="#" class="text-neutral-600 hover:text-primary-accent transition-colors">LinkedIn</a>
                                <a href="#" class="text-neutral-600 hover:text-primary-accent transition-colors">Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="mt-8 bg-neutral-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-primary-brand mb-4">Business Hours</h3>
                    <div class="space-y-2 text-neutral-600">
                        <div class="flex justify-between">
                            <span>Monday - Friday</span>
                            <span>9:00 AM - 6:00 PM EST</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Saturday</span>
                            <span>10:00 AM - 4:00 PM EST</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
