@extends('layouts.dashboard')

@section('page-title', 'Edit Blog Post')

@push('styles')
<style>
    .tiptap {
        min-height: 400px;
        border: 1px solid #e5e7eb;
        border-radius: 0 0 0.75rem 0.75rem;
        padding: 1.5rem;
        outline: none;
    }
    .tiptap:focus {
        border-color: #3B82F6;
    }
    .tiptap p.is-editor-empty:first-child::before {
        color: #adb5bd;
        content: attr(data-placeholder);
        float: left;
        height: 0;
        pointer-events: none;
    }
    .tiptap-menu {
        background: #f9fafb;
        border: 1px solid #e5e7eb;
        border-bottom: none;
        border-radius: 0.75rem 0.75rem 0 0;
        padding: 0.75rem;
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        align-items: center;
    }
    .tiptap-menu .divider {
        width: 1px;
        height: 1.5rem;
        background: #e5e7eb;
    }
    .menu-button {
        padding: 0.5rem 0.75rem;
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 0.375rem;
        cursor: pointer;
        font-size: 0.875rem;
        font-weight: 500;
        transition: all 0.15s;
    }
    .menu-button:hover {
        background: #e5e7eb;
    }
    .menu-button.is-active {
        background: #3B82F6;
        color: white;
        border-color: #3B82F6;
    }
    .tag-item {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 0.75rem;
        background: #EEF2FF;
        border: 1px solid #C7D2FE;
        border-radius: 0.5rem;
        font-size: 0.875rem;
    }
</style>
@endpush

@section('content')
<div class="py-8">
    <div class="max-w-5xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('blog-posts.index') }}" class="text-primary-accent hover:text-primary-accent/80 text-sm font-medium">
                ← Back to Posts
            </a>
            <h2 class="text-3xl font-bold text-primary-brand mt-2">Edit Blog Post</h2>
        </div>

        <form action="{{ route('blog-posts.update', $blogPost) }}" method="POST" class="bg-white rounded-xl shadow-lg p-8">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-neutral-700 mb-2">Title *</label>
                <input type="text" name="title" value="{{ old('title', $blogPost->title) }}" required
                       class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent @error('title') border-error @enderror">
                @error('title')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Excerpt -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-neutral-700 mb-2">Excerpt</label>
                <textarea name="excerpt" rows="3"
                          class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent">{{ old('excerpt', $blogPost->excerpt) }}</textarea>
                <p class="text-xs text-neutral-500 mt-1">Brief summary (optional)</p>
            </div>

            <!-- Content with Tiptap -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-neutral-700 mb-2">Content *</label>
                <div class="tiptap-menu"></div>
                <div class="tiptap" data-placeholder="Start writing your blog post..."></div>
                <input type="hidden" name="content" id="content-input" required>
                @error('content')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category & Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Category</label>
                    <div class="flex gap-2">
                        <select name="category_id" id="category-select" class="flex-1 px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent">
                            <option value="">Uncategorized</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $blogPost->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <button type="button" onclick="openCategoryModal()" class="px-4 py-3 bg-primary-accent text-white rounded-xl hover:bg-primary-accent/90 transition-colors font-semibold">
                            + New
                        </button>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Status *</label>
                    <select name="status" required class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent">
                        <option value="draft" {{ old('status', $blogPost->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $blogPost->status) == 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                </div>
            </div>

            <!-- Tags -->
            <div class="mb-6">
                <div class="flex items-center justify-between mb-2">
                    <label class="block text-sm font-semibold text-neutral-700">Tags</label>
                    <button type="button" onclick="openTagModal()" class="text-sm text-primary-accent hover:text-primary-accent/80 font-medium">
                        + Add New Tag
                    </button>
                </div>
                <div class="flex flex-wrap gap-2" id="tags-container">
                    @foreach($tags as $tag)
                        <label class="tag-item">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
                                   {{ $blogPost->tags->contains($tag->id) ? 'checked' : '' }}
                                   class="w-4 h-4 rounded border-neutral-300 text-primary-accent focus:ring-primary-accent">
                            <span>{{ $tag->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="flex gap-4 pt-4 border-t border-neutral-200">
                <button type="submit" class="px-6 py-3 bg-gradient-to-r from-primary-accent to-blue-600 text-white rounded-xl hover:from-primary-accent/90 hover:to-blue-600/90 transition-all font-semibold shadow-lg">
                    Update Post
                </button>
                <a href="{{ route('blog-posts.index') }}" class="px-6 py-3 bg-neutral-200 text-neutral-700 rounded-xl hover:bg-neutral-300 transition-colors font-semibold">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<!-- Category Modal -->
<div id="category-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-md">
        <h3 class="text-xl font-bold text-primary-brand mb-4">Create New Category</h3>
        <div class="mb-4">
            <label class="block text-sm font-semibold text-neutral-700 mb-2">Category Name *</label>
            <input type="text" id="new-category-name" class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent">
        </div>
        <div class="mb-4">
            <label class="block text-sm font-semibold text-neutral-700 mb-2">Description</label>
            <textarea id="new-category-description" rows="3" class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent"></textarea>
        </div>
        <div class="flex gap-3">
            <button onclick="createCategory()" class="flex-1 px-4 py-2 bg-primary-accent text-white rounded-xl hover:bg-primary-accent/90 font-semibold">
                Create
            </button>
            <button onclick="closeCategoryModal()" class="px-4 py-2 bg-neutral-200 text-neutral-700 rounded-xl hover:bg-neutral-300 font-semibold">
                Cancel
            </button>
        </div>
    </div>
</div>

<!-- Tag Modal -->
<div id="tag-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-md">
        <h3 class="text-xl font-bold text-primary-brand mb-4">Create New Tag</h3>
        <div class="mb-4">
            <label class="block text-sm font-semibold text-neutral-700 mb-2">Tag Name *</label>
            <input type="text" id="new-tag-name" class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent">
        </div>
        <div class="flex gap-3">
            <button onclick="createTag()" class="flex-1 px-4 py-2 bg-primary-accent text-white rounded-xl hover:bg-primary-accent/90 font-semibold">
                Create
            </button>
            <button onclick="closeTagModal()" class="px-4 py-2 bg-neutral-200 text-neutral-700 rounded-xl hover:bg-neutral-300 font-semibold">
                Cancel
            </button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="module">
import { Editor } from 'https://esm.sh/@tiptap/core';
import StarterKit from 'https://esm.sh/@tiptap/starter-kit';

let editor;
const existingContent = {!! json_encode(old('content', $blogPost->content)) !!};

document.addEventListener('DOMContentLoaded', function() {
    editor = new Editor({
        element: document.querySelector('.tiptap'),
        extensions: [StarterKit],
        content: existingContent,
        onUpdate: ({ editor }) => {
            document.getElementById('content-input').value = editor.getHTML();
        },
    });

    createMenu();
    document.getElementById('content-input').value = editor.getHTML();

    // Make editor and functions available globally
    window.editor = editor;
    window.openCategoryModal = openCategoryModal;
    window.closeCategoryModal = closeCategoryModal;
    window.createCategory = createCategory;
    window.openTagModal = openTagModal;
    window.closeTagModal = closeTagModal;
    window.createTag = createTag;
});

function createMenu() {
    const menu = document.querySelector('.tiptap-menu');

    const buttons = [
        { icon: 'B', title: 'Bold', command: () => editor.chain().focus().toggleBold().run(), isActive: () => editor.isActive('bold') },
        { icon: 'I', title: 'Italic', command: () => editor.chain().focus().toggleItalic().run(), isActive: () => editor.isActive('italic') },
        { icon: 'S', title: 'Strike', command: () => editor.chain().focus().toggleStrike().run(), isActive: () => editor.isActive('strike') },
        { divider: true },
        { icon: 'H1', title: 'Heading 1', command: () => editor.chain().focus().toggleHeading({ level: 1 }).run(), isActive: () => editor.isActive('heading', { level: 1 }) },
        { icon: 'H2', title: 'Heading 2', command: () => editor.chain().focus().toggleHeading({ level: 2 }).run(), isActive: () => editor.isActive('heading', { level: 2 }) },
        { icon: 'H3', title: 'Heading 3', command: () => editor.chain().focus().toggleHeading({ level: 3 }).run(), isActive: () => editor.isActive('heading', { level: 3 }) },
        { divider: true },
        { icon: '• List', title: 'Bullet List', command: () => editor.chain().focus().toggleBulletList().run(), isActive: () => editor.isActive('bulletList') },
        { icon: '1. List', title: 'Ordered List', command: () => editor.chain().focus().toggleOrderedList().run(), isActive: () => editor.isActive('orderedList') },
        { divider: true },
        { icon: '" Quote', title: 'Blockquote', command: () => editor.chain().focus().toggleBlockquote().run(), isActive: () => editor.isActive('blockquote') },
        { icon: '</> Code', title: 'Code Block', command: () => editor.chain().focus().toggleCodeBlock().run(), isActive: () => editor.isActive('codeBlock') },
        { divider: true },
        { icon: '↩ Undo', title: 'Undo', command: () => editor.chain().focus().undo().run() },
        { icon: '↪ Redo', title: 'Redo', command: () => editor.chain().focus().redo().run() },
    ];

    buttons.forEach(btn => {
        if (btn.divider) {
            const div = document.createElement('div');
            div.className = 'divider';
            menu.appendChild(div);
        } else {
            const button = document.createElement('button');
            button.type = 'button';
            button.className = 'menu-button';
            button.textContent = btn.icon;
            button.title = btn.title;
            button.addEventListener('click', btn.command);

            if (btn.isActive) {
                setInterval(() => {
                    button.classList.toggle('is-active', btn.isActive());
                }, 100);
            }

            menu.appendChild(button);
        }
    });
}

function openCategoryModal() {
    document.getElementById('category-modal').classList.remove('hidden');
    document.getElementById('category-modal').classList.add('flex');
}

function closeCategoryModal() {
    document.getElementById('category-modal').classList.add('hidden');
    document.getElementById('category-modal').classList.remove('flex');
    document.getElementById('new-category-name').value = '';
    document.getElementById('new-category-description').value = '';
}

async function createCategory() {
    const name = document.getElementById('new-category-name').value;
    const description = document.getElementById('new-category-description').value;

    if (!name) {
        alert('Please enter a category name');
        return;
    }

    try {
        const response = await fetch('{{ route('blog-categories.store') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ name, description })
        });

        const data = await response.json();

        if (data.success) {
            const select = document.getElementById('category-select');
            const option = document.createElement('option');
            option.value = data.category.id;
            option.textContent = data.category.name;
            option.selected = true;
            select.appendChild(option);

            closeCategoryModal();
            alert('Category created successfully!');
        }
    } catch (error) {
        alert('Error creating category');
        console.error(error);
    }
}

function openTagModal() {
    document.getElementById('tag-modal').classList.remove('hidden');
    document.getElementById('tag-modal').classList.add('flex');
}

function closeTagModal() {
    document.getElementById('tag-modal').classList.add('hidden');
    document.getElementById('tag-modal').classList.remove('flex');
    document.getElementById('new-tag-name').value = '';
}

async function createTag() {
    const name = document.getElementById('new-tag-name').value;

    if (!name) {
        alert('Please enter a tag name');
        return;
    }

    try {
        const response = await fetch('{{ route('blog-tags.store') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ name })
        });

        const data = await response.json();

        if (data.success) {
            const container = document.getElementById('tags-container');
            const label = document.createElement('label');
            label.className = 'tag-item';
            label.innerHTML = `
                <input type="checkbox" name="tags[]" value="${data.tag.id}" class="w-4 h-4 rounded border-neutral-300 text-primary-accent focus:ring-primary-accent" checked>
                <span>${data.tag.name}</span>
            `;
            container.appendChild(label);

            closeTagModal();
            alert('Tag created successfully!');
        }
    } catch (error) {
        alert('Error creating tag');
        console.error(error);
    }
}
</script>
@endpush
