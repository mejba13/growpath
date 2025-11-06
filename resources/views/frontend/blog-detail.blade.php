@extends('layouts.frontend')

@section('title', $post->title . ' | GrowPath Blog')
@section('description', $post->excerpt ?? Str::limit(strip_tags($post->content), 160))
@section('keywords', $post->tags->pluck('name')->implode(', '))

@section('content')
<article class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-6 text-sm">
            <a href="{{ route('home') }}" class="text-primary-accent hover:underline">Home</a>
            <span class="text-neutral-400 mx-2">›</span>
            <a href="{{ route('blog') }}" class="text-primary-accent hover:underline">Blog</a>
            <span class="text-neutral-400 mx-2">›</span>
            <span class="text-neutral-600">{{ Str::limit($post->title, 50) }}</span>
        </nav>

        <!-- Category & Meta -->
        <div class="mb-6">
            @if($post->category)
                <span class="inline-block px-3 py-1 text-xs font-semibold bg-primary-accent text-white rounded-full mb-4">
                    {{ $post->category->name }}
                </span>
            @endif

            <h1 class="text-4xl md:text-5xl font-bold text-primary-brand mb-4">{{ $post->title }}</h1>

            <div class="flex items-center gap-4 text-sm text-neutral-600">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>{{ $post->author->name }}</span>
                </div>
                <span class="text-neutral-400">•</span>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>{{ $post->published_at->format('M d, Y') }}</span>
                </div>
                @if($post->reading_time)
                    <span class="text-neutral-400">•</span>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ $post->reading_time }} min read</span>
                    </div>
                @endif
                <span class="text-neutral-400">•</span>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span>{{ $post->views }} views</span>
                </div>
            </div>
        </div>

        <!-- Featured Image -->
        @if($post->featured_image)
            <div class="mb-8">
                <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full rounded-lg shadow-lg">
            </div>
        @endif

        <!-- Excerpt -->
        @if($post->excerpt)
            <div class="text-xl text-neutral-700 leading-relaxed mb-8 p-6 bg-neutral-50 rounded-lg border-l-4 border-primary-accent">
                {{ $post->excerpt }}
            </div>
        @endif

        <!-- Content -->
        <div class="prose prose-lg max-w-none mb-12">
            {!! $post->content !!}
        </div>

        <!-- Tags -->
        @if($post->tags->count() > 0)
            <div class="mb-12 pb-12 border-b border-neutral-200">
                <div class="flex items-center gap-3 flex-wrap">
                    <span class="text-sm font-semibold text-neutral-700">Tags:</span>
                    @foreach($post->tags as $tag)
                        <span class="px-3 py-1 text-sm bg-neutral-100 text-neutral-700 rounded-full hover:bg-neutral-200 transition-colors">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Share Section -->
        <div class="mb-12 pb-12 border-b border-neutral-200">
            <h3 class="text-lg font-semibold text-primary-brand mb-4">Share this article</h3>
            <div class="flex gap-4">
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog.show', $post->slug)) }}&text={{ urlencode($post->title) }}"
                   target="_blank"
                   class="px-4 py-2 bg-blue-400 text-white rounded-md hover:bg-blue-500 transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
                    </svg>
                    Twitter
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('blog.show', $post->slug)) }}"
                   target="_blank"
                   class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                    LinkedIn
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blog.show', $post->slug)) }}"
                   target="_blank"
                   class="px-4 py-2 bg-blue-800 text-white rounded-md hover:bg-blue-900 transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook
                </a>
            </div>
        </div>

        <!-- Author Box -->
        <div class="mb-12 p-6 bg-neutral-50 rounded-lg">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 bg-primary-accent rounded-full flex items-center justify-center text-white text-2xl font-bold">
                        {{ substr($post->author->name, 0, 1) }}
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-primary-brand mb-1">{{ $post->author->name }}</h4>
                    <p class="text-neutral-600 mb-2">Article Author</p>
                    <p class="text-sm text-neutral-700">Expert in CRM solutions and sales strategies, passionate about helping businesses grow through effective customer relationship management.</p>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Related Posts -->
@if($relatedPosts->count() > 0)
    <section class="py-12 bg-neutral-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-primary-brand mb-8">Related Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedPosts as $relatedPost)
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        @if($relatedPost->featured_image)
                            <img src="{{ asset($relatedPost->featured_image) }}" alt="{{ $relatedPost->title }}" class="h-48 w-full object-cover">
                        @else
                            <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                        @endif
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-2">
                                @if($relatedPost->category)
                                    <span class="text-xs font-semibold text-primary-accent">{{ $relatedPost->category->name }}</span>
                                    <span class="text-neutral-400">•</span>
                                @endif
                                <span class="text-sm text-neutral-500">{{ $relatedPost->published_at->format('M d, Y') }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-primary-brand mb-3 line-clamp-2">{{ $relatedPost->title }}</h3>
                            <a href="{{ route('blog.show', $relatedPost->slug) }}" class="text-primary-accent hover:underline font-semibold">Read More →</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endif

<!-- Newsletter CTA -->
<section class="py-20 bg-primary-accent text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-6">Subscribe to Our Newsletter</h2>
        <p class="text-xl text-blue-100 mb-8">
            Get CRM tips, best practices, and product updates delivered to your inbox.
        </p>
        <form class="max-w-md mx-auto flex gap-4">
            <input type="email" placeholder="Your email address"
                   class="flex-1 px-6 py-3 rounded-md text-neutral-900 focus:ring-3 focus:ring-white">
            <button type="submit" class="px-8 py-3 bg-white text-primary-accent rounded-md hover:bg-gray-100 transition-colors font-semibold">
                Subscribe
            </button>
        </form>
    </div>
</section>
@endsection

@push('styles')
<style>
    .prose h2 {
        font-size: 1.875rem;
        font-weight: 700;
        color: #1e3a8a;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }
    .prose h3 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1e3a8a;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
    }
    .prose p {
        margin-bottom: 1.25rem;
        line-height: 1.75;
        color: #374151;
    }
    .prose ul, .prose ol {
        margin-bottom: 1.25rem;
        padding-left: 1.5rem;
    }
    .prose li {
        margin-bottom: 0.5rem;
        color: #374151;
    }
    .prose blockquote {
        border-left: 4px solid #3B82F6;
        padding-left: 1rem;
        margin: 1.5rem 0;
        font-style: italic;
        color: #4B5563;
    }
    .prose code {
        background-color: #f3f4f6;
        padding: 0.125rem 0.375rem;
        border-radius: 0.25rem;
        font-size: 0.875rem;
        color: #1f2937;
    }
    .prose pre {
        background-color: #1f2937;
        color: #f9fafb;
        padding: 1rem;
        border-radius: 0.5rem;
        overflow-x: auto;
        margin: 1.5rem 0;
    }
    .prose pre code {
        background-color: transparent;
        color: inherit;
        padding: 0;
    }
    .prose a {
        color: #3B82F6;
        text-decoration: underline;
    }
    .prose a:hover {
        color: #1e40af;
    }
</style>
@endpush
