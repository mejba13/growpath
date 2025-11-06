@extends('layouts.dashboard')

@section('page-title', 'Application Settings')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <!-- Header -->
    <div>
        <h2 class="text-2xl font-bold text-primary-brand">Application Settings</h2>
        <p class="text-neutral-600 mt-1">Configure global application settings and preferences</p>
    </div>

    <!-- Settings Form -->
    <form action="{{ route('settings.update') }}" method="POST" class="space-y-6">
        @csrf
        @method('PATCH')

        <!-- General Settings -->
        <x-ui.card>
            <h3 class="text-lg font-semibold text-primary-brand mb-4">General Settings</h3>
            <div class="space-y-6">
                <!-- Company Name -->
                <div>
                    <label for="company_name" class="block text-sm font-medium text-neutral-700 mb-2">
                        Company Name <span class="text-error">*</span>
                    </label>
                    <input
                        type="text"
                        id="company_name"
                        name="company_name"
                        value="{{ old('company_name', $settings['company_name']) }}"
                        required
                        class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('company_name') border-error @enderror"
                    >
                    <p class="text-sm text-neutral-500 mt-1">This will be displayed throughout the application</p>
                    @error('company_name')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Currency -->
                <div>
                    <label for="currency" class="block text-sm font-medium text-neutral-700 mb-2">
                        Currency <span class="text-error">*</span>
                    </label>
                    <select
                        id="currency"
                        name="currency"
                        required
                        class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('currency') border-error @enderror"
                    >
                        <option value="USD" {{ old('currency', $settings['currency']) == 'USD' ? 'selected' : '' }}>USD ($)</option>
                        <option value="EUR" {{ old('currency', $settings['currency']) == 'EUR' ? 'selected' : '' }}>EUR (€)</option>
                        <option value="GBP" {{ old('currency', $settings['currency']) == 'GBP' ? 'selected' : '' }}>GBP (£)</option>
                        <option value="CAD" {{ old('currency', $settings['currency']) == 'CAD' ? 'selected' : '' }}>CAD ($)</option>
                        <option value="AUD" {{ old('currency', $settings['currency']) == 'AUD' ? 'selected' : '' }}>AUD ($)</option>
                    </select>
                    @error('currency')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Timezone -->
                <div>
                    <label for="timezone" class="block text-sm font-medium text-neutral-700 mb-2">
                        Timezone <span class="text-error">*</span>
                    </label>
                    <select
                        id="timezone"
                        name="timezone"
                        required
                        class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('timezone') border-error @enderror"
                    >
                        @php
                            $timezones = [
                                'America/New_York' => 'Eastern Time (ET)',
                                'America/Chicago' => 'Central Time (CT)',
                                'America/Denver' => 'Mountain Time (MT)',
                                'America/Los_Angeles' => 'Pacific Time (PT)',
                                'America/Phoenix' => 'Arizona (MST)',
                                'America/Anchorage' => 'Alaska (AKT)',
                                'Pacific/Honolulu' => 'Hawaii (HST)',
                                'UTC' => 'UTC',
                                'Europe/London' => 'London (GMT/BST)',
                                'Europe/Paris' => 'Paris (CET/CEST)',
                                'Asia/Tokyo' => 'Tokyo (JST)',
                                'Australia/Sydney' => 'Sydney (AEST/AEDT)',
                            ];
                        @endphp
                        @foreach($timezones as $value => $label)
                            <option value="{{ $value }}" {{ old('timezone', $settings['timezone']) == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @error('timezone')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Date Format -->
                <div>
                    <label for="date_format" class="block text-sm font-medium text-neutral-700 mb-2">
                        Date Format <span class="text-error">*</span>
                    </label>
                    <select
                        id="date_format"
                        name="date_format"
                        required
                        class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('date_format') border-error @enderror"
                    >
                        <option value="M d, Y" {{ old('date_format', $settings['date_format']) == 'M d, Y' ? 'selected' : '' }}>
                            M d, Y ({{ now()->format('M d, Y') }})
                        </option>
                        <option value="d/m/Y" {{ old('date_format', $settings['date_format']) == 'd/m/Y' ? 'selected' : '' }}>
                            d/m/Y ({{ now()->format('d/m/Y') }})
                        </option>
                        <option value="Y-m-d" {{ old('date_format', $settings['date_format']) == 'Y-m-d' ? 'selected' : '' }}>
                            Y-m-d ({{ now()->format('Y-m-d') }})
                        </option>
                    </select>
                    @error('date_format')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </x-ui.card>

        <!-- Prospect & Pipeline Settings -->
        <x-ui.card>
            <h3 class="text-lg font-semibold text-primary-brand mb-4">Prospect & Pipeline Settings</h3>
            <div class="space-y-6">
                <!-- Default Prospect Priority -->
                <div>
                    <label for="default_prospect_priority" class="block text-sm font-medium text-neutral-700 mb-2">
                        Default Prospect Priority <span class="text-error">*</span>
                    </label>
                    <select
                        id="default_prospect_priority"
                        name="default_prospect_priority"
                        required
                        class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('default_prospect_priority') border-error @enderror"
                    >
                        <option value="low" {{ old('default_prospect_priority', $settings['default_prospect_priority']) == 'low' ? 'selected' : '' }}>Low</option>
                        <option value="medium" {{ old('default_prospect_priority', $settings['default_prospect_priority']) == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="high" {{ old('default_prospect_priority', $settings['default_prospect_priority']) == 'high' ? 'selected' : '' }}>High</option>
                    </select>
                    <p class="text-sm text-neutral-500 mt-1">Default priority when creating new prospects</p>
                    @error('default_prospect_priority')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Follow-up Reminder Days -->
                <div>
                    <label for="follow_up_reminder_days" class="block text-sm font-medium text-neutral-700 mb-2">
                        Follow-up Reminder Days <span class="text-error">*</span>
                    </label>
                    <input
                        type="number"
                        id="follow_up_reminder_days"
                        name="follow_up_reminder_days"
                        value="{{ old('follow_up_reminder_days', $settings['follow_up_reminder_days']) }}"
                        min="0"
                        max="30"
                        required
                        class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('follow_up_reminder_days') border-error @enderror"
                    >
                    <p class="text-sm text-neutral-500 mt-1">How many days before a follow-up is due should users be reminded</p>
                    @error('follow_up_reminder_days')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </x-ui.card>

        <!-- Notification Settings -->
        <x-ui.card>
            <h3 class="text-lg font-semibold text-primary-brand mb-4">Notification Settings</h3>
            <div class="space-y-4">
                <!-- Enable Email Notifications -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input
                            type="checkbox"
                            id="enable_email_notifications"
                            name="enable_email_notifications"
                            value="1"
                            {{ old('enable_email_notifications', $settings['enable_email_notifications']) ? 'checked' : '' }}
                            class="w-4 h-4 text-primary-accent border-neutral-300 rounded focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>
                    <div class="ml-3">
                        <label for="enable_email_notifications" class="text-sm font-medium text-neutral-700">
                            Enable Email Notifications
                        </label>
                        <p class="text-sm text-neutral-500">Send email notifications for important events like overdue follow-ups</p>
                    </div>
                </div>
            </div>
        </x-ui.card>

        <!-- Actions -->
        <div class="flex items-center justify-end gap-3">
            <x-ui.button type="button" variant="secondary" href="{{ route('dashboard') }}">
                Cancel
            </x-ui.button>
            <x-ui.button type="submit" variant="primary">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Save Settings
            </x-ui.button>
        </div>
    </form>
</div>

@if(session('success'))
    <div class="fixed bottom-4 right-4 bg-success text-white px-6 py-4 rounded-md shadow-lg z-50" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="fixed bottom-4 right-4 bg-error text-white px-6 py-4 rounded-md shadow-lg z-50" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        {{ session('error') }}
    </div>
@endif
@endsection
