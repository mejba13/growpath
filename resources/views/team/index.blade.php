@extends('layouts.dashboard')

@section('page-title', 'Team Management')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-primary-brand">Team Management</h2>
            <p class="text-neutral-600 mt-1">Manage team members and their roles</p>
        </div>
        <div>
            <x-ui.button variant="primary" href="{{ route('team.create') }}">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Team Member
            </x-ui.button>
        </div>
    </div>

    <!-- Search and Filters -->
    <x-ui.card :padding="false">
        <form action="{{ route('team.index') }}" method="GET" class="p-6 space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search by name or email..."
                        class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                    >
                </div>
                <div>
                    <select name="role" class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                        <option value="">All Roles</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}" {{ request('role') == $role->name ? 'selected' : '' }}>
                                {{ ucfirst($role->name) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select name="status" class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                        <option value="">All Status</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending Approval</option>
                        <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                    </select>
                </div>
            </div>

            <div class="flex gap-2">
                <x-ui.button type="submit" variant="primary">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    Search
                </x-ui.button>
                @if(request()->hasAny(['search', 'role', 'status']))
                    <x-ui.button variant="secondary" href="{{ route('team.index') }}">
                        Clear Filters
                    </x-ui.button>
                @endif
            </div>
        </form>
    </x-ui.card>

    <!-- Team Members Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($users as $user)
            <x-ui.card>
                <div class="text-center">
                    <!-- Avatar -->
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-primary-accent bg-opacity-10 mb-4">
                        <span class="text-3xl font-bold text-primary-accent">
                            {{ $user->initials() }}
                        </span>
                    </div>

                    <!-- Name & Email -->
                    <h3 class="text-lg font-semibold text-primary-brand">{{ $user->name }}</h3>
                    <p class="text-sm text-neutral-500 mt-1">{{ $user->email }}</p>

                    <!-- Role & Status -->
                    <div class="mt-3 flex items-center justify-center gap-2 flex-wrap">
                        @php
                            $roleColors = [
                                'owner' => 'secondary-accent',
                                'admin' => 'primary-accent',
                                'manager' => 'warning',
                                'member' => 'info',
                            ];
                            $roleName = $user->roles->first()?->name ?? 'member';
                            $roleColor = $roleColors[$roleName] ?? 'info';
                        @endphp
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-{{ $roleColor }} bg-opacity-10 text-{{ $roleColor }}">
                            {{ ucfirst($roleName) }}
                        </span>

                        @if(!$user->is_approved)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-warning bg-opacity-10 text-warning">
                                Pending Approval
                            </span>
                        @endif
                    </div>

                    <!-- Stats -->
                    <div class="mt-6 pt-4 border-t border-neutral-200">
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div>
                                <p class="text-2xl font-bold text-primary-brand">{{ $user->prospects()->count() }}</p>
                                <p class="text-xs text-neutral-500 mt-1">Prospects</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-primary-brand">{{ $user->clients()->count() }}</p>
                                <p class="text-xs text-neutral-500 mt-1">Clients</p>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-6 space-y-2">
                        @if(!$user->is_approved && auth()->user()->isAdmin())
                            <!-- Approval Actions -->
                            <div class="flex items-center justify-center gap-2">
                                <form action="{{ route('team.approve', $user) }}" method="POST" class="flex-1">
                                    @csrf
                                    <button type="submit" class="w-full px-4 py-2 bg-success text-white rounded-md text-sm font-medium hover:bg-green-700 transition-colors">
                                        Approve
                                    </button>
                                </form>
                                <form action="{{ route('team.reject', $user) }}" method="POST" onsubmit="return confirm('Are you sure you want to reject this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 bg-error text-white rounded-md text-sm font-medium hover:bg-red-700 transition-colors">
                                        Reject
                                    </button>
                                </form>
                            </div>
                        @else
                            <!-- Regular Actions -->
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('team.show', $user) }}" class="flex-1 px-4 py-2 bg-primary-accent text-white rounded-md text-sm font-medium hover:bg-blue-700 transition-colors text-center">
                                    View Details
                                </a>
                                <a href="{{ route('team.edit', $user) }}" class="px-4 py-2 bg-neutral-200 text-neutral-700 rounded-md text-sm font-medium hover:bg-neutral-300 transition-colors">
                                    Edit
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </x-ui.card>
        @empty
            <div class="col-span-full">
                <x-ui.card>
                    <div class="text-center py-12">
                        <svg class="w-16 h-16 mx-auto mb-4 text-neutral-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <p class="text-lg font-medium text-neutral-900">No team members found</p>
                        @if(request()->hasAny(['search', 'role']))
                            <p class="text-sm text-neutral-500 mt-2">
                                Try adjusting your filters or <a href="{{ route('team.index') }}" class="text-primary-accent hover:underline">clear all filters</a>
                            </p>
                        @else
                            <p class="text-sm text-neutral-500 mt-2">Get started by adding your first team member</p>
                            <div class="mt-6">
                                <x-ui.button variant="primary" href="{{ route('team.create') }}">
                                    Add Team Member
                                </x-ui.button>
                            </div>
                        @endif
                    </div>
                </x-ui.card>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if($users->hasPages())
        <div class="mt-6">
            {{ $users->links() }}
        </div>
    @endif
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
