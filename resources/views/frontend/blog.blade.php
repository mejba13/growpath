@extends('layouts.frontend')

@section('title', 'Blog - CRM Tips & Industry Insights | GrowPath AI')
@section('description', 'Read the GrowPath AI blog for CRM tips, sales strategies, and industry insights to grow your business.')
@section('keywords', 'CRM blog, sales tips, business growth, CRM best practices, sales strategies')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-50 via-white to-blue-50 py-24 lg:py-32">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Eyebrow Badge -->
        <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-primary-accent/10 to-secondary-accent/10 backdrop-blur-sm border border-primary-accent/20 rounded-full px-4 py-2 mb-8 animate-fade-in">
            <span class="w-2 h-2 bg-gradient-to-r from-primary-accent to-secondary-accent rounded-full animate-pulse"></span>
            <span class="text-sm font-medium bg-gradient-to-r from-primary-accent to-secondary-accent bg-clip-text text-transparent">INSIGHTS & RESOURCES</span>
        </div>

        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-primary-brand mb-6 leading-tight animate-slide-up">
            GrowPath AI <span class="gradient-text">Blog</span>
        </h1>
        <p class="text-xl lg:text-2xl text-neutral-600 max-w-3xl mx-auto leading-relaxed animate-slide-up">
            Tips, strategies, and insights to help you get the most out of your CRM and grow your business.
        </p>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-primary-accent/10 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-20 right-10 w-72 h-72 bg-secondary-accent/10 rounded-full blur-3xl -z-10"></div>
</section>

<!-- Blog Posts Section -->
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="group bg-white border-2 border-neutral-100 rounded-2xl overflow-hidden hover:border-primary-accent hover:shadow-2xl transition-all duration-300">
                        <!-- Featured Image -->
                        <div class="relative overflow-hidden aspect-video">
                            @if($post->featured_image)
                                <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-primary-accent via-blue-500 to-secondary-accent flex items-center justify-center">
                                    <svg class="w-20 h-20 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </div>
                            @endif
                            <!-- Category Badge -->
                            @if($post->category)
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-white/90 backdrop-blur-sm text-primary-accent text-xs font-bold rounded-full border border-primary-accent/20">
                                        {{ $post->category->name }}
                                    </span>
                                </div>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Meta -->
                            <div class="flex items-center gap-2 mb-4 text-sm text-neutral-500">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ $post->published_at->format('M d, Y') }}</span>
                                @if($post->reading_time)
                                    <span class="text-neutral-300">•</span>
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $post->reading_time }} min read</span>
                                @endif
                            </div>

                            <!-- Title -->
                            <h2 class="text-2xl font-bold text-primary-brand mb-3 line-clamp-2 group-hover:text-primary-accent transition-colors">
                                {{ $post->title }}
                            </h2>

                            <!-- Excerpt -->
                            <p class="text-neutral-600 mb-6 line-clamp-3 leading-relaxed">
                                {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}
                            </p>

                            <!-- Footer -->
                            <div class="flex items-center justify-between pt-4 border-t border-neutral-100">
                                <a href="{{ route('blog.show', $post->slug) }}" class="group/link inline-flex items-center text-primary-accent hover:text-blue-700 font-semibold transition-colors">
                                    <span>Read More</span>
                                    <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>
                                <div class="flex items-center gap-2 text-sm text-neutral-500">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <span>{{ $post->views }}</span>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            @if($posts->hasPages())
                <div class="mt-16">
                    {{ $posts->links() }}
                </div>
            @endif
        @else
            <div class="text-center py-20">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-neutral-100 to-neutral-200 rounded-2xl mb-6">
                    <svg class="w-10 h-10 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-4">No Blog Posts Yet</h3>
                <p class="text-xl text-neutral-600 mb-8">Check back soon for valuable insights and updates!</p>
                <a href="{{ route('home') }}" class="inline-flex items-center px-6 py-3 bg-primary-accent text-white rounded-xl font-semibold hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Back to Home</span>
                </a>
            </div>
        @endif
    </div>
</section>
@endsection
