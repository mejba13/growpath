@extends('layouts.dashboard')

@section('page-title', 'Follow-Ups')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-primary-brand">Follow-Ups</h1>
            <p class="mt-1 text-sm text-neutral-600">Manage your tasks and follow-up schedule</p>
        </div>
        <x-ui.button variant="primary" href="{{ route('follow-ups.create') }}">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            New Follow-Up
        </x-ui.button>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <x-ui.card :padding="false">
            <div class="p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Total</p>
                        <p class="text-2xl font-bold text-primary-brand mt-1">{{ $stats['total'] }}</p>
                    </div>
                    <div class="w-10 h-10 bg-primary-accent bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                </div>
            </div>
        </x-ui.card>

        <x-ui.card :padding="false">
            <div class="p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Due Today</p>
                        <p class="text-2xl font-bold text-warning mt-1">{{ $stats['today'] }}</p>
                    </div>
                    <div class="w-10 h-10 bg-warning bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </x-ui.card>

        <x-ui.card :padding="false">
            <div class="p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Overdue</p>
                        <p class="text-2xl font-bold text-error mt-1">{{ $stats['overdue'] }}</p>
                    </div>
                    <div class="w-10 h-10 bg-error bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-error" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                </div>
            </div>
        </x-ui.card>

        <x-ui.card :padding="false">
            <div class="p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Pending</p>
                        <p class="text-2xl font-bold text-primary-brand mt-1">{{ $stats['pending'] }}</p>
                    </div>
                    <div class="w-10 h-10 bg-secondary-accent bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </x-ui.card>
    </div>

    <!-- Filters -->
    <x-ui.card :padding="false">
        <div class="p-6">
            <form method="GET" action="{{ route('follow-ups.index') }}" class="space-y-4">
                <div class="flex gap-4">
                    <div class="flex-1">
                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Search follow-ups..."
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                        >
                    </div>
                    <button type="submit" class="px-6 py-3 bg-primary-accent text-white rounded-md hover:bg-blue-700 transition-colors">
                        Search
                    </button>
                    @if(request()->hasAny(['search', 'status', 'type', 'priority', 'date_filter']))
                        <a href="{{ route('follow-ups.index') }}" class="px-6 py-3 bg-neutral-200 text-neutral-700 rounded-md hover:bg-neutral-300 transition-colors">
                            Clear
                        </a>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <select name="status" class="w-full px-4 py-2 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                            <option value="">All Statuses</option>
                            <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="completed" {{ request('status') === 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>

                    <div>
                        <select name="type" class="w-full px-4 py-2 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                            <option value="">All Types</option>
                            <option value="call" {{ request('type') === 'call' ? 'selected' : '' }}>Call</option>
                            <option value="email" {{ request('type') === 'email' ? 'selected' : '' }}>Email</option>
                            <option value="meeting" {{ request('type') === 'meeting' ? 'selected' : '' }}>Meeting</option>
                            <option value="demo" {{ request('type') === 'demo' ? 'selected' : '' }}>Demo</option>
                            <option value="proposal" {{ request('type') === 'proposal' ? 'selected' : '' }}>Proposal</option>
                            <option value="other" {{ request('type') === 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>

                    <div>
                        <select name="priority" class="w-full px-4 py-2 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                            <option value="">All Priorities</option>
                            <option value="high" {{ request('priority') === 'high' ? 'selected' : '' }}>High</option>
                            <option value="medium" {{ request('priority') === 'medium' ? 'selected' : '' }}>Medium</option>
                            <option value="low" {{ request('priority') === 'low' ? 'selected' : '' }}>Low</option>
                        </select>
                    </div>

                    <div>
                        <select name="date_filter" class="w-full px-4 py-2 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                            <option value="">All Dates</option>
                            <option value="today" {{ request('date_filter') === 'today' ? 'selected' : '' }}>Due Today</option>
                            <option value="week" {{ request('date_filter') === 'week' ? 'selected' : '' }}>This Week</option>
                            <option value="overdue" {{ request('date_filter') === 'overdue' ? 'selected' : '' }}>Overdue</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </x-ui.card>

    <!-- Follow-Ups List -->
    <x-ui.card :padding="false">
        @if($followUps->count() > 0)
            <div class="divide-y divide-neutral-200">
                @foreach($followUps as $followUp)
                    <div class="p-6 hover:bg-neutral-50 transition-colors">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <h3 class="text-lg font-semibold text-primary-brand">{{ $followUp->subject }}</h3>
                                    @php
                                        $statusColors = [
                                            'pending' => 'warning',
                                            'completed' => 'success',
                                            'cancelled' => 'default',
                                        ];
                                        $priorityColors = [
                                            'high' => 'error',
                                            'medium' => 'warning',
                                            'low' => 'default',
                                        ];
                                        $typeIcons = [
                                            'call' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
                                            'email' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                                            'meeting' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
                                            'demo' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z',
                                            'proposal' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                                            'other' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                                        ];
                                    @endphp
                                    <x-ui.badge :variant="$statusColors[$followUp->status] ?? 'default'" size="sm">
                                        {{ ucfirst($followUp->status) }}
                                    </x-ui.badge>
                                    <x-ui.badge :variant="$priorityColors[$followUp->priority]" size="sm">
                                        {{ ucfirst($followUp->priority) }}
                                    </x-ui.badge>
                                    <div class="flex items-center text-neutral-500">
                                        <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $typeIcons[$followUp->type] ?? $typeIcons['other'] }}" />
                                        </svg>
                                        <span class="text-xs">{{ ucfirst($followUp->type) }}</span>
                                    </div>
                                </div>

                                @if($followUp->description)
                                    <p class="text-sm text-neutral-600 mb-3">{{ Str::limit($followUp->description, 150) }}</p>
                                @endif

                                <div class="flex items-center gap-4 text-sm text-neutral-500">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span>{{ $followUp->due_date->format('M d, Y') }}</span>
                                        @if($followUp->due_time)
                                            <span class="ml-1">at {{ $followUp->due_time }}</span>
                                        @endif
                                    </div>
                                    @if($followUp->prospect)
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                            <a href="{{ route('prospects.show', $followUp->prospect) }}" class="text-primary-accent hover:underline">
                                                {{ $followUp->prospect->company_name }}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="flex items-center gap-2 ml-4">
                                <x-ui.button variant="secondary" size="sm" href="{{ route('follow-ups.edit', $followUp) }}">
                                    Edit
                                </x-ui.button>
                                <form action="{{ route('follow-ups.destroy', $followUp) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <x-ui.button variant="danger" size="sm" type="submit">
                                        Delete
                                    </x-ui.button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="px-6 py-4 border-t border-neutral-200">
                {{ $followUps->links() }}
            </div>
        @else
            <div class="text-center py-12 px-4">
                <svg class="w-16 h-16 mx-auto mb-4 text-neutral-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <h3 class="text-lg font-medium text-neutral-900 mb-2">No follow-ups found</h3>
                <p class="text-neutral-500 mb-4">
                    @if(request()->hasAny(['search', 'status', 'type', 'priority', 'date_filter']))
                        Try adjusting your filters or search query.
                    @else
                        Get started by creating your first follow-up.
                    @endif
                </p>
                <x-ui.button variant="primary" href="{{ route('follow-ups.create') }}">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Create Follow-Up
                </x-ui.button>
            </div>
        @endif
    </x-ui.card>
</div>

@if(session('success'))
    <div class="fixed bottom-4 right-4 bg-success text-white px-6 py-4 rounded-md shadow-lg z-50" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        {{ session('success') }}
    </div>
@endif
@endsection
