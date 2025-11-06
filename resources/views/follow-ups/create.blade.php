@extends('layouts.dashboard')

@section('page-title', 'Create Follow-Up')

@section('content')
<div class="max-w-3xl">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('follow-ups.index') }}" class="text-primary-accent hover:text-blue-600 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Follow-Ups
        </a>
    </div>

    <x-ui.card title="Create New Follow-Up">
        <form action="{{ route('follow-ups.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Prospect Selection -->
            <div>
                <label for="prospect_id" class="block text-sm font-medium text-neutral-700 mb-2">
                    Prospect <span class="text-error">*</span>
                </label>
                <select
                    name="prospect_id"
                    id="prospect_id"
                    required
                    class="w-full px-4 py-3 border @error('prospect_id') border-error @else border-neutral-300 @enderror rounded-md focus:ring-3 focus:ring-primary-accent"
                >
                    <option value="">Select a prospect</option>
                    @foreach($prospects as $prospect)
                        <option value="{{ $prospect->id }}" {{ (old('prospect_id', $selectedProspectId) == $prospect->id) ? 'selected' : '' }}>
                            {{ $prospect->company_name }} - {{ $prospect->contact_name }}
                        </option>
                    @endforeach
                </select>
                @error('prospect_id')
                    <p class="mt-1 text-sm text-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Type and Priority -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="type" class="block text-sm font-medium text-neutral-700 mb-2">
                        Type <span class="text-error">*</span>
                    </label>
                    <select name="type" id="type" required class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                        <option value="">Select type</option>
                        <option value="call" {{ old('type') == 'call' ? 'selected' : '' }}>Call</option>
                        <option value="email" {{ old('type') == 'email' ? 'selected' : '' }}>Email</option>
                        <option value="meeting" {{ old('type') == 'meeting' ? 'selected' : '' }}>Meeting</option>
                        <option value="demo" {{ old('type') == 'demo' ? 'selected' : '' }}>Demo</option>
                        <option value="proposal" {{ old('type') == 'proposal' ? 'selected' : '' }}>Proposal</option>
                        <option value="other" {{ old('type') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('type')
                        <p class="mt-1 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="priority" class="block text-sm font-medium text-neutral-700 mb-2">
                        Priority <span class="text-error">*</span>
                    </label>
                    <select name="priority" id="priority" required class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                        <option value="medium" {{ old('priority', 'medium') == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                        <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                    </select>
                    @error('priority')
                        <p class="mt-1 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Subject -->
            <div>
                <label for="subject" class="block text-sm font-medium text-neutral-700 mb-2">
                    Subject <span class="text-error">*</span>
                </label>
                <input
                    type="text"
                    name="subject"
                    id="subject"
                    value="{{ old('subject') }}"
                    required
                    placeholder="e.g., Follow-up call to discuss proposal"
                    class="w-full px-4 py-3 border @error('subject') border-error @else border-neutral-300 @enderror rounded-md focus:ring-3 focus:ring-primary-accent"
                >
                @error('subject')
                    <p class="mt-1 text-sm text-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-neutral-700 mb-2">Description</label>
                <textarea
                    name="description"
                    id="description"
                    rows="4"
                    placeholder="Add any additional details or notes..."
                    class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                >{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Due Date and Time -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="due_date" class="block text-sm font-medium text-neutral-700 mb-2">
                        Due Date <span class="text-error">*</span>
                    </label>
                    <input
                        type="date"
                        name="due_date"
                        id="due_date"
                        value="{{ old('due_date', now()->format('Y-m-d')) }}"
                        required
                        min="{{ now()->format('Y-m-d') }}"
                        class="w-full px-4 py-3 border @error('due_date') border-error @else border-neutral-300 @enderror rounded-md focus:ring-3 focus:ring-primary-accent"
                    >
                    @error('due_date')
                        <p class="mt-1 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="due_time" class="block text-sm font-medium text-neutral-700 mb-2">Due Time (Optional)</label>
                    <input
                        type="time"
                        name="due_time"
                        id="due_time"
                        value="{{ old('due_time') }}"
                        class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                    >
                    @error('due_time')
                        <p class="mt-1 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Hidden field for redirect context -->
            @if(request()->has('prospect_id'))
                <input type="hidden" name="redirect_to" value="prospect">
            @endif

            <!-- Form Actions -->
            <div class="flex items-center justify-end gap-4 pt-6 border-t border-neutral-200">
                <x-ui.button variant="secondary" type="button" onclick="window.history.back()">
                    Cancel
                </x-ui.button>
                <x-ui.button variant="primary" type="submit">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Create Follow-Up
                </x-ui.button>
            </div>
        </form>
    </x-ui.card>
</div>
@endsection
