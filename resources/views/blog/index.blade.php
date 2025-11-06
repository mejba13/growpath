@extends('layouts.dashboard')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6 flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-bold text-primary-brand">Blog Posts</h2>
                <p class="text-neutral-600 mt-1">Manage your blog content</p>
            </div>
            <a href="{{ route('blog-posts.create') }}" class="px-6 py-3 bg-primary-accent text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                Create New Post
            </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="text-sm text-neutral-600 mb-1">Total Posts</p>
                <p class="text-3xl font-bold text-primary-brand">{{ $stats['total'] }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="text-sm text-neutral-600 mb-1">Published</p>
                <p class="text-3xl font-bold text-success">{{ $stats['published'] }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="text-sm text-neutral-600 mb-1">Drafts</p>
                <p class="text-3xl font-bold text-warning">{{ $stats['draft'] }}</p>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-success bg-opacity-10 border border-success text-success px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Posts Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full divide-y divide-neutral-200">
                <thead class="bg-neutral-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase">Author</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase">Views</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-neutral-200">
                    @forelse($posts as $post)
                        <tr class="hover:bg-neutral-50">
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-neutral-900">{{ $post->title }}</div>
                                <div class="text-xs text-neutral-500">{{ Str::limit($post->excerpt, 50) }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-neutral-600">
                                {{ $post->category?->name ?? 'Uncategorized' }}
                            </td>
                            <td class="px-6 py-4 text-sm text-neutral-600">
                                {{ $post->author->name }}
                            </td>
                            <td class="px-6 py-4">
                                @if($post->status === 'published')
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-success bg-opacity-10 text-success">
                                        Published
                                    </span>
                                @else
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-warning bg-opacity-10 text-warning">
                                        Draft
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-neutral-600">
                                {{ $post->views }}
                            </td>
                            <td class="px-6 py-4 text-sm text-neutral-600">
                                {{ $post->created_at->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 text-sm font-medium">
                                <a href="{{ route('blog-posts.edit', $post) }}" class="text-primary-accent hover:text-blue-900 mr-3">Edit</a>
                                <form action="{{ route('blog-posts.destroy', $post) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this post?')" class="text-error hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-neutral-500">
                                No blog posts yet. Create your first post!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @if($posts->hasPages())
                <div class="px-6 py-4 border-t">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
