@extends('layouts.dashboard')

@push('styles')
<style>
    .tiptap-editor {
        min-height: 400px;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
        padding: 1rem;
    }
    .tiptap-editor:focus {
        outline: none;
        border-color: #3B82F6;
        ring: 3px;
        ring-color: rgba(59, 130, 246, 0.1);
    }
    .tiptap-menu {
        background: #f9fafb;
        border: 1px solid #e5e7eb;
        border-bottom: none;
        border-radius: 0.5rem 0.5rem 0 0;
        padding: 0.5rem;
        display: flex;
        flex-wrap: wrap;
        gap: 0.25rem;
    }
    .tiptap-menu button {
        padding: 0.5rem;
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 0.25rem;
        cursor: pointer;
    }
    .tiptap-menu button:hover {
        background: #e5e7eb;
    }
    .tiptap-menu button.is-active {
        background: #3B82F6;
        color: white;
    }
</style>
@endpush

@section('content')
<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ route('blog-posts.index') }}" class="text-primary-accent hover:text-blue-900 text-sm">
                ← Back to Posts
            </a>
            <h2 class="text-3xl font-bold text-primary-brand mt-2">Create New Blog Post</h2>
        </div>

        <form action="{{ route('blog-posts.store') }}" method="POST" class="bg-white rounded-lg shadow-md p-8">
            @csrf

            <!-- Title -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-neutral-700 mb-2">Title *</label>
                <input type="text" name="title" value="{{ old('title') }}" required
                       class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('title') border-error @enderror">
                @error('title')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Excerpt -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-neutral-700 mb-2">Excerpt</label>
                <textarea name="excerpt" rows="3"
                          class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">{{ old('excerpt') }}</textarea>
                <p class="text-xs text-neutral-500 mt-1">Brief summary of the post (optional)</p>
            </div>

            <!-- Content with Tiptap -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-neutral-700 mb-2">Content *</label>
                <div class="tiptap-menu" id="editor-menu"></div>
                <div class="tiptap-editor" id="editor"></div>
                <input type="hidden" name="content" id="content-input" required>
                @error('content')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category & Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-neutral-700 mb-2">Category</label>
                    <select name="category_id" class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                        <option value="">Uncategorized</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-neutral-700 mb-2">Status *</label>
                    <select name="status" required class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>
            </div>

            <!-- Tags -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-neutral-700 mb-2">Tags</label>
                <div class="flex flex-wrap gap-2">
                    @foreach($tags as $tag)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="rounded border-neutral-300 text-primary-accent focus:ring-primary-accent">
                            <span class="ml-2 text-sm text-neutral-700">{{ $tag->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="flex gap-4">
                <button type="submit" class="px-6 py-3 bg-primary-accent text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                    Create Post
                </button>
                <a href="{{ route('blog-posts.index') }}" class="px-6 py-3 bg-neutral-200 text-neutral-700 rounded-lg hover:bg-neutral-300 transition-colors font-semibold">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@tiptap/core@2.1.13/dist/index.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tiptap/starter-kit@2.1.13/dist/index.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const editor = new window.TiptapEditor.Editor({
        element: document.getElementById('editor'),
        extensions: [
            window.TiptapStarterKit.StarterKit,
        ],
        content: '{{ old('content', '<p>Start writing your blog post...</p>') }}',
        onUpdate: ({ editor }) => {
            document.getElementById('content-input').value = editor.getHTML();
        },
    });

    // Add menu buttons
    const menu = document.getElementById('editor-menu');
    const buttons = [
        { label: 'B', command: () => editor.chain().focus().toggleBold().run(), active: 'bold' },
        { label: 'I', command: () => editor.chain().focus().toggleItalic().run(), active: 'italic' },
        { label: 'H1', command: () => editor.chain().focus().toggleHeading({ level: 1 }).run(), active: 'heading' },
        { label: 'H2', command: () => editor.chain().focus().toggleHeading({ level: 2 }).run(), active: 'heading' },
        { label: 'List', command: () => editor.chain().focus().toggleBulletList().run(), active: 'bulletList' },
        { label: 'Quote', command: () => editor.chain().focus().toggleBlockquote().run(), active: 'blockquote' },
        { label: 'Code', command: () => editor.chain().focus().toggleCodeBlock().run(), active: 'codeBlock' },
    ];

    buttons.forEach(btn => {
        const button = document.createElement('button');
        button.type = 'button';
        button.textContent = btn.label;
        button.addEventListener('click', btn.command);
        menu.appendChild(button);
    });

    // Set initial content value
    document.getElementById('content-input').value = editor.getHTML();
});
</script>
@endpush
