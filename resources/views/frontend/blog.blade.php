@extends('layouts.frontend')

@section('title', 'Blog - CRM Tips & Industry Insights | GrowPath')
@section('description', 'Read the GrowPath blog for CRM tips, sales strategies, and industry insights to grow your business.')
@section('keywords', 'CRM blog, sales tips, business growth, CRM best practices, sales strategies')

@section('content')
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-bold mb-6">Blog</h1>
        <p class="text-xl text-blue-100 max-w-3xl">
            Tips, strategies, and insights to help you get the most out of your CRM.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        @if($post->featured_image)
                            <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="h-48 w-full object-cover">
                        @else
                            <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                        @endif
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-2">
                                @if($post->category)
                                    <span class="text-xs font-semibold text-primary-accent">{{ $post->category->name }}</span>
                                    <span class="text-neutral-400">•</span>
                                @endif
                                <span class="text-sm text-neutral-500">{{ $post->published_at->format('M d, Y') }}</span>
                                @if($post->reading_time)
                                    <span class="text-neutral-400">•</span>
                                    <span class="text-sm text-neutral-500">{{ $post->reading_time }} min read</span>
                                @endif
                            </div>
                            <h2 class="text-2xl font-bold text-primary-brand mb-3 line-clamp-2">{{ $post->title }}</h2>
                            <p class="text-neutral-600 mb-4 line-clamp-3">
                                {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="{{ route('blog.show', $post->slug) }}" class="text-primary-accent hover:underline font-semibold">Read More →</a>
                                <div class="flex items-center gap-4 text-sm text-neutral-500">
                                    <span>{{ $post->views }} views</span>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            @if($posts->hasPages())
                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            @endif
        @else
            <div class="text-center py-12">
                <p class="text-xl text-neutral-600">No blog posts available yet. Check back soon!</p>
            </div>
        @endif
    </div>
</section>

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
