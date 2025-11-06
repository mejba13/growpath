@extends('layouts.dashboard')

@section('page-title', 'Add Prospect')

@section('content')
<div class="max-w-4xl">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('prospects.index') }}" class="text-primary-accent hover:text-blue-600 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Prospects
        </a>
    </div>

    <x-ui.card title="Add New Prospect">
        <form action="{{ route('prospects.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Company Information -->
            <div>
                <h3 class="text-lg font-semibold text-primary-brand mb-4">Company Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="md:col-span-2">
                        <label for="company_name" class="block text-sm font-medium text-neutral-700 mb-2">
                            Company Name <span class="text-error">*</span>
                        </label>
                        <input
                            type="text"
                            name="company_name"
                            id="company_name"
                            value="{{ old('company_name') }}"
                            required
                            class="w-full px-4 py-3 border rounded-md @error('company_name') border-error @else border-neutral-300 @enderror focus:ring-3 focus:ring-primary-accent"
                        >
                        @error('company_name')
                            <p class="mt-1 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="industry" class="block text-sm font-medium text-neutral-700 mb-2">Industry</label>
                        <input
                            type="text"
                            name="industry"
                            id="industry"
                            value="{{ old('industry') }}"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>

                    <div>
                        <label for="company_size" class="block text-sm font-medium text-neutral-700 mb-2">Company Size</label>
                        <select name="company_size" id="company_size" class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                            <option value="">Select size</option>
                            <option value="1-10" {{ old('company_size') == '1-10' ? 'selected' : '' }}>1-10 employees</option>
                            <option value="11-50" {{ old('company_size') == '11-50' ? 'selected' : '' }}>11-50 employees</option>
                            <option value="51-200" {{ old('company_size') == '51-200' ? 'selected' : '' }}>51-200 employees</option>
                            <option value="201-500" {{ old('company_size') == '201-500' ? 'selected' : '' }}>201-500 employees</option>
                            <option value="501-1000" {{ old('company_size') == '501-1000' ? 'selected' : '' }}>501-1000 employees</option>
                            <option value="1001+" {{ old('company_size') == '1001+' ? 'selected' : '' }}>1001+ employees</option>
                        </select>
                    </div>

                    <div>
                        <label for="website" class="block text-sm font-medium text-neutral-700 mb-2">Website</label>
                        <input
                            type="url"
                            name="website"
                            id="website"
                            value="{{ old('website') }}"
                            placeholder="https://example.com"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>

                    <div>
                        <label for="annual_revenue" class="block text-sm font-medium text-neutral-700 mb-2">Annual Revenue ($)</label>
                        <input
                            type="number"
                            name="annual_revenue"
                            id="annual_revenue"
                            value="{{ old('annual_revenue') }}"
                            min="0"
                            step="0.01"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div>
                <h3 class="text-lg font-semibold text-primary-brand mb-4">Contact Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="contact_name" class="block text-sm font-medium text-neutral-700 mb-2">Contact Name</label>
                        <input
                            type="text"
                            name="contact_name"
                            id="contact_name"
                            value="{{ old('contact_name') }}"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral-700 mb-2">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            class="w-full px-4 py-3 border @error('email') border-error @else border-neutral-300 @enderror rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-neutral-700 mb-2">Phone</label>
                        <input
                            type="tel"
                            name="phone"
                            id="phone"
                            value="{{ old('phone') }}"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div>
                <h3 class="text-lg font-semibold text-primary-brand mb-4">Location</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="city" class="block text-sm font-medium text-neutral-700 mb-2">City</label>
                        <input
                            type="text"
                            name="city"
                            id="city"
                            value="{{ old('city') }}"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>

                    <div>
                        <label for="state" class="block text-sm font-medium text-neutral-700 mb-2">State/Province</label>
                        <input
                            type="text"
                            name="state"
                            id="state"
                            value="{{ old('state') }}"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>

                    <div>
                        <label for="country" class="block text-sm font-medium text-neutral-700 mb-2">Country</label>
                        <input
                            type="text"
                            name="country"
                            id="country"
                            value="{{ old('country') }}"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>
                </div>
            </div>

            <!-- Prospect Details -->
            <div>
                <h3 class="text-lg font-semibold text-primary-brand mb-4">Prospect Details</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="status" class="block text-sm font-medium text-neutral-700 mb-2">Status <span class="text-error">*</span></label>
                        <select name="status" id="status" required class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                            <option value="new" {{ old('status', 'new') == 'new' ? 'selected' : '' }}>New</option>
                            <option value="contacted" {{ old('status') == 'contacted' ? 'selected' : '' }}>Contacted</option>
                            <option value="qualified" {{ old('status') == 'qualified' ? 'selected' : '' }}>Qualified</option>
                            <option value="proposal" {{ old('status') == 'proposal' ? 'selected' : '' }}>Proposal</option>
                            <option value="negotiation" {{ old('status') == 'negotiation' ? 'selected' : '' }}>Negotiation</option>
                        </select>
                    </div>

                    <div>
                        <label for="priority" class="block text-sm font-medium text-neutral-700 mb-2">Priority <span class="text-error">*</span></label>
                        <select name="priority" id="priority" required class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                            <option value="medium" {{ old('priority', 'medium') == 'medium' ? 'selected' : '' }}>Medium</option>
                            <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                            <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                        </select>
                    </div>

                    <div>
                        <label for="source" class="block text-sm font-medium text-neutral-700 mb-2">Source</label>
                        <input
                            type="text"
                            name="source"
                            id="source"
                            value="{{ old('source') }}"
                            placeholder="e.g., Referral, LinkedIn, Website"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>

                    <div>
                        <label for="conversion_probability" class="block text-sm font-medium text-neutral-700 mb-2">Conversion Probability (%)</label>
                        <input
                            type="number"
                            name="conversion_probability"
                            id="conversion_probability"
                            value="{{ old('conversion_probability') }}"
                            min="0"
                            max="100"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>

                    @if($users->count() > 1)
                    <div>
                        <label for="assigned_to" class="block text-sm font-medium text-neutral-700 mb-2">Assign To</label>
                        <select name="assigned_to" id="assigned_to" class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                            <option value="">Unassigned</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ old('assigned_to') == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @endif

                    <div>
                        <label for="next_follow_up_at" class="block text-sm font-medium text-neutral-700 mb-2">Next Follow-Up Date</label>
                        <input
                            type="datetime-local"
                            name="next_follow_up_at"
                            id="next_follow_up_at"
                            value="{{ old('next_follow_up_at') }}"
                            min="{{ now()->format('Y-m-d\TH:i') }}"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>

                    <div class="md:col-span-2">
                        <label for="notes" class="block text-sm font-medium text-neutral-700 mb-2">Notes</label>
                        <textarea
                            name="notes"
                            id="notes"
                            rows="4"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >{{ old('notes') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end gap-4 pt-6 border-t border-neutral-200">
                <x-ui.button variant="secondary" type="button" onclick="window.history.back()">
                    Cancel
                </x-ui.button>
                <x-ui.button variant="primary" type="submit">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Create Prospect
                </x-ui.button>
            </div>
        </form>
    </x-ui.card>
</div>
@endsection
