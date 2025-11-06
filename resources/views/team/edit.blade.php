@extends('layouts.dashboard')

@section('page-title', 'Edit Team Member')

@section('content')
<div class="max-w-2xl mx-auto space-y-6">
    <!-- Header -->
    <div class="flex items-center gap-4">
        <a href="{{ route('team.show', $user) }}" class="text-neutral-600 hover:text-neutral-900">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
        <div>
            <h2 class="text-2xl font-bold text-primary-brand">Edit Team Member</h2>
            <p class="text-neutral-600 mt-1">Update {{ $user->name }}'s information</p>
        </div>
    </div>

    <!-- Basic Information Form -->
    <x-ui.card>
        <h3 class="text-lg font-semibold text-primary-brand mb-4">Basic Information</h3>
        <form action="{{ route('team.update', $user) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-neutral-700 mb-2">
                    Full Name <span class="text-error">*</span>
                </label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $user->name) }}"
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
                    value="{{ old('email', $user->email) }}"
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
                    @foreach($roles as $role)
                        <option value="{{ $role->name }}" {{ old('role', $user->roles->first()?->name) == $role->name ? 'selected' : '' }}>
                            {{ ucfirst($role->name) }}
                        </option>
                    @endforeach
                </select>
                <p class="text-sm text-neutral-500 mt-1">This determines what the user can access and do in the system</p>
                @error('role')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-end gap-3 pt-6 border-t border-neutral-200">
                <x-ui.button type="button" variant="secondary" href="{{ route('team.show', $user) }}">
                    Cancel
                </x-ui.button>
                <x-ui.button type="submit" variant="primary">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Update Information
                </x-ui.button>
            </div>
        </form>
    </x-ui.card>

    <!-- Password Update Form -->
    <x-ui.card>
        <h3 class="text-lg font-semibold text-primary-brand mb-4">Update Password</h3>
        <form action="{{ route('team.update-password', $user) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')

            <!-- New Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-neutral-700 mb-2">
                    New Password <span class="text-error">*</span>
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
                    Confirm New Password <span class="text-error">*</span>
                </label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                >
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-end gap-3 pt-6 border-t border-neutral-200">
                <x-ui.button type="submit" variant="primary">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    Update Password
                </x-ui.button>
            </div>
        </form>
    </x-ui.card>

    <!-- Danger Zone -->
    @if($user->id !== auth()->id())
        <x-ui.card>
            <h3 class="text-lg font-semibold text-error mb-4">Danger Zone</h3>
            <div class="bg-error bg-opacity-5 border border-error border-opacity-20 rounded-md p-4">
                <div class="flex items-start justify-between">
                    <div>
                        <h4 class="text-sm font-semibold text-error">Remove Team Member</h4>
                        <p class="text-sm text-neutral-600 mt-1">
                            Once you remove this team member, their data will be reassigned to you and they will lose access to the system.
                        </p>
                    </div>
                    <form action="{{ route('team.destroy', $user) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this team member? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-4 px-4 py-2 bg-error text-white rounded-md hover:bg-red-700 transition-colors whitespace-nowrap">
                            Remove Member
                        </button>
                    </form>
                </div>
            </div>
        </x-ui.card>
    @endif
</div>

@if(session('success'))
    <div class="fixed bottom-4 right-4 bg-success text-white px-6 py-4 rounded-md shadow-lg z-50" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        {{ session('success') }}
    </div>
@endif
@endsection
