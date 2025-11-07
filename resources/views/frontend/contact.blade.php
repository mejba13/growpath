@extends('layouts.frontend')

@section('title', 'Contact Us - Get in Touch with GrowPath AI Support Team')
@section('description', 'Have questions about GrowPath AI CRM? Contact our team for support, sales inquiries, or general questions. We are here to help!')
@section('keywords', 'contact GrowPath AI, customer support, sales inquiry, help center, get in touch')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-50 via-white to-blue-50 py-24 lg:py-32">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Eyebrow Badge -->
        <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-primary-accent/10 to-secondary-accent/10 backdrop-blur-sm border border-primary-accent/20 rounded-full px-4 py-2 mb-8 animate-fade-in">
            <span class="w-2 h-2 bg-gradient-to-r from-primary-accent to-secondary-accent rounded-full animate-pulse"></span>
            <span class="text-sm font-medium bg-gradient-to-r from-primary-accent to-secondary-accent bg-clip-text text-transparent">GET IN TOUCH</span>
        </div>

        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-primary-brand mb-6 leading-tight animate-slide-up">
            Let's Start a <span class="gradient-text">Conversation</span>
        </h1>
        <p class="text-xl lg:text-2xl text-neutral-600 max-w-3xl mx-auto leading-relaxed animate-slide-up">
            Have questions about GrowPath AI? We're here to help. Reach out to our team for support, sales inquiries, or just to say hello.
        </p>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-primary-accent/10 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-20 right-10 w-72 h-72 bg-secondary-accent/10 rounded-full blur-3xl -z-10"></div>
</section>

<!-- Contact Section -->
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-16">
            <!-- Contact Form - Takes up 3 columns -->
            <div class="lg:col-span-3">
                <div class="mb-8">
                    <h2 class="text-3xl lg:text-4xl font-bold text-primary-brand mb-4">Send us a Message</h2>
                    <p class="text-lg text-neutral-600">Fill out the form below and we'll get back to you within 24 hours.</p>
                </div>

                @if(session('success'))
                    <div class="bg-gradient-to-r from-success/10 to-emerald-50 border border-success/30 text-success px-6 py-4 rounded-2xl mb-8 flex items-center space-x-3">
                        <svg class="w-6 h-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-primary-brand mb-2">
                                Your Name <span class="text-error">*</span>
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="w-full px-5 py-3.5 bg-white border-2 border-neutral-200 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-primary-accent transition-all duration-200 @error('name') border-error @enderror"
                                placeholder="John Doe"
                            >
                            @error('name')
                                <p class="text-error text-sm mt-2 flex items-center space-x-1">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>{{ $message }}</span>
                                </p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-primary-brand mb-2">
                                Email Address <span class="text-error">*</span>
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="w-full px-5 py-3.5 bg-white border-2 border-neutral-200 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-primary-accent transition-all duration-200 @error('email') border-error @enderror"
                                placeholder="john@example.com"
                            >
                            @error('email')
                                <p class="text-error text-sm mt-2 flex items-center space-x-1">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                    </div>

                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-primary-brand mb-2">
                            Subject <span class="text-error">*</span>
                        </label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            value="{{ old('subject') }}"
                            required
                            class="w-full px-5 py-3.5 bg-white border-2 border-neutral-200 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-primary-accent transition-all duration-200 @error('subject') border-error @enderror"
                            placeholder="How can we help you?"
                        >
                        @error('subject')
                            <p class="text-error text-sm mt-2 flex items-center space-x-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-primary-brand mb-2">
                            Message <span class="text-error">*</span>
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            required
                            class="w-full px-5 py-3.5 bg-white border-2 border-neutral-200 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-primary-accent transition-all duration-200 resize-none @error('message') border-error @enderror"
                            placeholder="Tell us more about your inquiry..."
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-error text-sm mt-2 flex items-center space-x-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="group w-full px-8 py-4 bg-gradient-to-r from-primary-accent to-blue-600 text-white rounded-xl font-semibold text-lg hover:shadow-2xl hover:scale-[1.02] transition-all duration-200 flex items-center justify-center space-x-2"
                    >
                        <span>Send Message</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>

                    <p class="text-sm text-neutral-500 text-center">
                        We respect your privacy. Your information will never be shared with third parties.
                    </p>
                </form>
            </div>

            <!-- Contact Information - Takes up 2 columns -->
            <div class="lg:col-span-2">
                <div class="sticky top-8 space-y-6">
                    <div>
                        <h2 class="text-2xl lg:text-3xl font-bold text-primary-brand mb-6">Contact Information</h2>
                    </div>

                    <!-- Contact Cards -->
                    <div class="space-y-4">
                        <!-- Email -->
                        <div class="group relative bg-white border-2 border-neutral-100 rounded-2xl p-6 hover:border-primary-accent hover:shadow-xl transition-all duration-200">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-14 h-14 bg-gradient-to-br from-primary-accent to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-200">
                                        <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-primary-brand mb-2">Email</h3>
                                    <a href="mailto:support@growpath.com" class="block text-neutral-700 hover:text-primary-accent transition-colors">support@growpath.com</a>
                                    <a href="mailto:sales@growpath.com" class="block text-neutral-700 hover:text-primary-accent transition-colors">sales@growpath.com</a>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="group relative bg-white border-2 border-neutral-100 rounded-2xl p-6 hover:border-success hover:shadow-xl transition-all duration-200">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-14 h-14 bg-gradient-to-br from-success to-emerald-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-200">
                                        <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-primary-brand mb-2">Phone</h3>
                                    <a href="tel:+15551234567" class="block text-neutral-700 hover:text-primary-accent transition-colors font-medium">+1 (555) 123-4567</a>
                                    <p class="text-sm text-neutral-500 mt-1">Mon-Fri 9am-6pm EST</p>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="group relative bg-white border-2 border-neutral-100 rounded-2xl p-6 hover:border-secondary-accent hover:shadow-xl transition-all duration-200">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-14 h-14 bg-gradient-to-br from-secondary-accent to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-200">
                                        <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-primary-brand mb-2">Office</h3>
                                    <p class="text-neutral-700">123 Business Street</p>
                                    <p class="text-neutral-700">San Francisco, CA 94102</p>
                                    <p class="text-neutral-700">United States</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="relative bg-gradient-to-br from-neutral-50 to-blue-50 rounded-2xl p-8 border-2 border-neutral-100 overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-primary-accent/10 rounded-full blur-2xl -z-10"></div>

                        <h3 class="text-xl font-bold text-primary-brand mb-6 flex items-center space-x-2">
                            <svg class="w-6 h-6 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Business Hours</span>
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-neutral-200">
                                <span class="font-medium text-neutral-700">Monday - Friday</span>
                                <span class="text-neutral-600">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-neutral-200">
                                <span class="font-medium text-neutral-700">Saturday</span>
                                <span class="text-neutral-600">10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="font-medium text-neutral-700">Sunday</span>
                                <span class="text-neutral-500">Closed</span>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-neutral-200">
                            <p class="text-sm text-neutral-600 flex items-center space-x-2">
                                <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>All times are Eastern Standard Time (EST)</span>
                            </p>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="bg-white rounded-2xl p-6 border-2 border-neutral-100">
                        <h3 class="text-lg font-bold text-primary-brand mb-4">Follow Us</h3>
                        <div class="flex space-x-3">
                            <a href="#" class="w-12 h-12 bg-neutral-100 rounded-xl flex items-center justify-center hover:bg-primary-accent hover:text-white text-neutral-600 transition-all duration-200 hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-neutral-100 rounded-xl flex items-center justify-center hover:bg-primary-accent hover:text-white text-neutral-600 transition-all duration-200 hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-neutral-100 rounded-xl flex items-center justify-center hover:bg-primary-accent hover:text-white text-neutral-600 transition-all duration-200 hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm3 8h-1.35c-.538 0-.65.221-.65.778V10h2l-.209 2H13v7h-3v-7H8v-2h2V7.692C10 5.923 10.931 5 13.029 5H15v3z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="py-16 bg-gradient-to-br from-neutral-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-12 text-center border-2 border-neutral-100">
            <div class="max-w-3xl mx-auto">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-primary-accent to-blue-600 rounded-2xl mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold text-primary-brand mb-4">Your Privacy Matters</h2>
                <p class="text-lg text-neutral-600 leading-relaxed">
                    We take data protection seriously. All communications are encrypted and your information is handled in accordance with industry best practices and privacy regulations.
                </p>
                <div class="mt-8 flex flex-wrap justify-center gap-6 text-sm">
                    <div class="flex items-center space-x-2 text-neutral-600">
                        <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>GDPR Compliant</span>
                    </div>
                    <div class="flex items-center space-x-2 text-neutral-600">
                        <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>256-bit Encryption</span>
                    </div>
                    <div class="flex items-center space-x-2 text-neutral-600">
                        <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>ISO 27001 Certified</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
