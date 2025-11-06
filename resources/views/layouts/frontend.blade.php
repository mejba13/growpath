<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'GrowPath - Modern CRM Solution for Growing Businesses')</title>
    <meta name="description" content="@yield('description', 'GrowPath is a powerful CRM platform designed to help businesses manage prospects, track clients, and grow revenue. Start your free trial today.')">
    <meta name="keywords" content="@yield('keywords', 'CRM software, customer relationship management, sales pipeline, prospect management, client tracking, business growth')">
    <meta name="author" content="GrowPath">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'GrowPath - Modern CRM Solution')">
    <meta property="og:description" content="@yield('og_description', 'Powerful CRM platform for growing businesses')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'GrowPath - Modern CRM Solution')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Powerful CRM platform for growing businesses')">
    <meta name="twitter:image" content="{{ asset('images/twitter-image.jpg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Structured Data -->
    @stack('structured-data')

    @stack('styles')
</head>
<body class="font-sans antialiased bg-white">
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white border-b border-neutral-200" x-data="{ mobileMenuOpen: false }">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-primary-brand">
                        GrowPath
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-neutral-700 hover:text-primary-accent transition-colors {{ request()->routeIs('home') ? 'text-primary-accent font-semibold' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('features') }}" class="text-neutral-700 hover:text-primary-accent transition-colors {{ request()->routeIs('features') ? 'text-primary-accent font-semibold' : '' }}">
                        Features
                    </a>
                    <a href="{{ route('pricing') }}" class="text-neutral-700 hover:text-primary-accent transition-colors {{ request()->routeIs('pricing') ? 'text-primary-accent font-semibold' : '' }}">
                        Pricing
                    </a>
                    <a href="{{ route('about') }}" class="text-neutral-700 hover:text-primary-accent transition-colors {{ request()->routeIs('about') ? 'text-primary-accent font-semibold' : '' }}">
                        About
                    </a>
                    <a href="{{ route('contact') }}" class="text-neutral-700 hover:text-primary-accent transition-colors {{ request()->routeIs('contact') ? 'text-primary-accent font-semibold' : '' }}">
                        Contact
                    </a>
                </div>

                <!-- CTA Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-neutral-700 hover:text-primary-accent transition-colors">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-neutral-700 hover:text-primary-accent transition-colors">
                            Sign In
                        </a>
                        <a href="{{ route('register') }}" class="px-6 py-2 bg-primary-accent text-white rounded-md hover:bg-blue-700 transition-colors">
                            Get Started Free
                        </a>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-neutral-700 hover:text-primary-accent">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div x-show="mobileMenuOpen" x-cloak class="md:hidden py-4 border-t border-neutral-200">
                <div class="flex flex-col space-y-4">
                    <a href="{{ route('home') }}" class="text-neutral-700 hover:text-primary-accent transition-colors">Home</a>
                    <a href="{{ route('features') }}" class="text-neutral-700 hover:text-primary-accent transition-colors">Features</a>
                    <a href="{{ route('pricing') }}" class="text-neutral-700 hover:text-primary-accent transition-colors">Pricing</a>
                    <a href="{{ route('about') }}" class="text-neutral-700 hover:text-primary-accent transition-colors">About</a>
                    <a href="{{ route('contact') }}" class="text-neutral-700 hover:text-primary-accent transition-colors">Contact</a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-neutral-700 hover:text-primary-accent transition-colors">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-neutral-700 hover:text-primary-accent transition-colors">Sign In</a>
                        <a href="{{ route('register') }}" class="px-6 py-2 bg-primary-accent text-white rounded-md hover:bg-blue-700 transition-colors text-center">
                            Get Started Free
                        </a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-primary-brand text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">GrowPath</h3>
                    <p class="text-neutral-300 mb-4">
                        Modern CRM solution designed to help businesses grow faster and manage customer relationships effectively.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-neutral-300 hover:text-white transition-colors" aria-label="Twitter">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                        <a href="#" class="text-neutral-300 hover:text-white transition-colors" aria-label="LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-neutral-300 hover:text-white transition-colors" aria-label="Facebook">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Product Links -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Product</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('features') }}" class="text-neutral-300 hover:text-white transition-colors">Features</a></li>
                        <li><a href="{{ route('pricing') }}" class="text-neutral-300 hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="{{ route('api') }}" class="text-neutral-300 hover:text-white transition-colors">API</a></li>
                        <li><a href="{{ route('integrations') }}" class="text-neutral-300 hover:text-white transition-colors">Integrations</a></li>
                    </ul>
                </div>

                <!-- Company Links -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="text-neutral-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="{{ route('careers') }}" class="text-neutral-300 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="{{ route('blog') }}" class="text-neutral-300 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="{{ route('contact') }}" class="text-neutral-300 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Resources Links -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('help-center') }}" class="text-neutral-300 hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="{{ route('documentation') }}" class="text-neutral-300 hover:text-white transition-colors">Documentation</a></li>
                        <li><a href="{{ route('privacy-policy') }}" class="text-neutral-300 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}" class="text-neutral-300 hover:text-white transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-neutral-700 mt-12 pt-8 text-center text-neutral-300">
                <p>&copy; {{ date('Y') }} GrowPath. All rights reserved. Built with excellence for growing businesses.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
