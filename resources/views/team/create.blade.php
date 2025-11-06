@extends('layouts.dashboard')

@section('page-title', 'Add Team Member')

@section('content')
<div class="max-w-2xl mx-auto space-y-6">
    <!-- Header -->
    <div class="flex items-center gap-4">
        <a href="{{ route('team.index') }}" class="text-neutral-600 hover:text-neutral-900">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
        <div>
            <h2 class="text-2xl font-bold text-primary-brand">Add Team Member</h2>
            <p class="text-neutral-600 mt-1">Invite a new member to join your team</p>
        </div>
    </div>

    <!-- Form -->
    <x-ui.card>
        <form action="{{ route('team.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-neutral-700 mb-2">
                    Full Name <span class="text-error">*</span>
                </label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('name') border-error @enderror"
                >
                @error('name')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-neutral-700 mb-2">
                    Email Address <span class="text-error">*</span>
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('email') border-error @enderror"
                >
                @error('email')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Role -->
            <div>
                <label for="role" class="block text-sm font-medium text-neutral-700 mb-2">
                    Role <span class="text-error">*</span>
                </label>
                <select
                    id="role"
                    name="role"
                    required
                    class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('role') border-error @enderror"
                >
                    <option value="">Select a role...</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->name }}" {{ old('role') == $role->name ? 'selected' : '' }}>
                            {{ ucfirst($role->name) }}
                        </option>
                    @endforeach
                </select>
                <p class="text-sm text-neutral-500 mt-1">This determines what the user can access and do in the system</p>
                @error('role')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-neutral-700 mb-2">
                    Password <span class="text-error">*</span>
                </label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent @error('password') border-error @enderror"
                >
                <p class="text-sm text-neutral-500 mt-1">Minimum 8 characters</p>
                @error('password')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-neutral-700 mb-2">
                    Confirm Password <span class="text-error">*</span>
                </label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                >
            </div>

            <!-- Role Descriptions -->
            <div class="bg-info bg-opacity-5 border border-info border-opacity-20 rounded-md p-4">
                <h4 class="text-sm font-semibold text-primary-brand mb-2">Role Descriptions</h4>
                <ul class="space-y-2 text-sm text-neutral-600">
                    <li><strong>Owner:</strong> Full system access with all permissions</li>
                    <li><strong>Admin:</strong> Can manage team, view all data, and configure settings</li>
                    <li><strong>Manager:</strong> Can view all prospects/clients and manage follow-ups</li>
                    <li><strong>Member:</strong> Can only view and manage their own prospects/clients</li>
                </ul>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-end gap-3 pt-6 border-t border-neutral-200">
                <x-ui.button type="button" variant="secondary" href="{{ route('team.index') }}">
                    Cancel
                </x-ui.button>
                <x-ui.button type="submit" variant="primary">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Team Member
                </x-ui.button>
            </div>
        </form>
    </x-ui.card>
</div>
@endsection
