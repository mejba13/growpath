@extends('layouts.dashboard')

@section('page-title', $prospect->company_name)

@section('content')
<div class="space-y-6">
    <!-- Back Button -->
    <div class="flex items-center justify-between">
        <a href="{{ route('prospects.index') }}" class="text-primary-accent hover:text-blue-600 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Prospects
        </a>
        <div class="flex gap-2">
            @can('update', $prospect)
                <x-ui.button variant="secondary" href="{{ route('prospects.edit', $prospect) }}">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit
                </x-ui.button>
            @endcan
            @can('delete', $prospect)
                <form action="{{ route('prospects.destroy', $prospect) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this prospect?')">
                    @csrf
                    @method('DELETE')
                    <x-ui.button variant="danger" type="submit">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Delete
                    </x-ui.button>
                </form>
            @endcan
        </div>
    </div>

    <!-- Header with Status -->
    <x-ui.card>
        <div class="flex items-start justify-between">
            <div>
                <h1 class="text-3xl font-bold text-primary-brand">{{ $prospect->company_name }}</h1>
                <div class="flex items-center gap-4 mt-3">
                    @php
                        $statusColors = [
                            'new' => 'info',
                            'contacted' => 'default',
                            'qualified' => 'warning',
                            'proposal' => 'warning',
                            'negotiation' => 'warning',
                            'won' => 'success',
                            'lost' => 'error',
                        ];
                        $priorityColors = [
                            'high' => 'error',
                            'medium' => 'warning',
                            'low' => 'default',
                        ];
                    @endphp
                    <x-ui.badge :variant="$statusColors[$prospect->status] ?? 'default'" size="lg">
                        {{ ucfirst($prospect->status) }}
                    </x-ui.badge>
                    <x-ui.badge :variant="$priorityColors[$prospect->priority]" size="lg">
                        {{ ucfirst($prospect->priority) }} Priority
                    </x-ui.badge>
                    @if($prospect->conversion_probability)
                        <x-ui.badge variant="info" size="lg">
                            {{ $prospect->conversion_probability }}% Conversion
                        </x-ui.badge>
                    @endif
                </div>
            </div>
        </div>
    </x-ui.card>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Company Information -->
            <x-ui.card title="Company Information">
                <dl class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Industry</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $prospect->industry ?: 'Not specified' }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Company Size</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $prospect->company_size ? $prospect->company_size . ' employees' : 'Not specified' }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Website</dt>
                        <dd class="mt-1 text-sm">
                            @if($prospect->website)
                                <a href="{{ $prospect->website }}" target="_blank" class="text-primary-accent hover:underline">
                                    {{ $prospect->website }}
                                </a>
                            @else
                                <span class="text-neutral-500">Not specified</span>
                            @endif
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Annual Revenue</dt>
                        <dd class="mt-1 text-sm text-primary-brand">
                            {{ $prospect->annual_revenue ? '$' . number_format($prospect->annual_revenue, 2) : 'Not specified' }}
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Source</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $prospect->source ?: 'Not specified' }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Location</dt>
                        <dd class="mt-1 text-sm text-primary-brand">
                            @php
                                $location = collect([$prospect->city, $prospect->state, $prospect->country])->filter()->implode(', ');
                            @endphp
                            {{ $location ?: 'Not specified' }}
                        </dd>
                    </div>
                </dl>
            </x-ui.card>

            <!-- Contact Information -->
            <x-ui.card title="Contact Information">
                <dl class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Contact Name</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $prospect->contact_name ?: 'Not specified' }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Email</dt>
                        <dd class="mt-1 text-sm">
                            @if($prospect->email)
                                <a href="mailto:{{ $prospect->email }}" class="text-primary-accent hover:underline">
                                    {{ $prospect->email }}
                                </a>
                            @else
                                <span class="text-neutral-500">Not specified</span>
                            @endif
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Phone</dt>
                        <dd class="mt-1 text-sm">
                            @if($prospect->phone)
                                <a href="tel:{{ $prospect->phone }}" class="text-primary-accent hover:underline">
                                    {{ $prospect->phone }}
                                </a>
                            @else
                                <span class="text-neutral-500">Not specified</span>
                            @endif
                        </dd>
                    </div>
                </dl>
            </x-ui.card>

            <!-- Notes -->
            @if($prospect->notes)
            <x-ui.card title="Notes">
                <p class="text-sm text-neutral-700 whitespace-pre-wrap">{{ $prospect->notes }}</p>
            </x-ui.card>
            @endif

            <!-- Follow-ups -->
            <x-ui.card title="Follow-Ups">
                @if($prospect->followUps->count() > 0)
                    <div class="space-y-3">
                        @foreach($prospect->followUps as $followUp)
                            <div class="p-4 border border-neutral-200 rounded-md {{ $followUp->status === 'completed' ? 'bg-neutral-50' : '' }}">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <h4 class="font-medium text-primary-brand">{{ $followUp->subject }}</h4>
                                            <x-ui.badge :variant="$followUp->status === 'completed' ? 'success' : ($followUp->status === 'cancelled' ? 'error' : 'warning')" size="sm">
                                                {{ ucfirst($followUp->status) }}
                                            </x-ui.badge>
                                        </div>
                                        <p class="text-sm text-neutral-600 mt-1">{{ $followUp->type ? ucfirst($followUp->type) : 'Task' }}</p>
                                        <p class="text-sm text-neutral-500 mt-1">
                                            Due: {{ $followUp->due_date->format('M d, Y') }}
                                            @if($followUp->due_time)
                                                at {{ $followUp->due_time }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8 text-neutral-500">
                        <p>No follow-ups scheduled</p>
                        <x-ui.button variant="secondary" size="sm" class="mt-4">
                            Schedule Follow-Up
                        </x-ui.button>
                    </div>
                @endif
            </x-ui.card>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Quick Stats -->
            <x-ui.card title="Quick Stats">
                <dl class="space-y-3">
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Created</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $prospect->created_at->format('M d, Y') }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Last Updated</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $prospect->updated_at->diffForHumans() }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Last Contacted</dt>
                        <dd class="mt-1 text-sm text-primary-brand">
                            {{ $prospect->last_contacted_at ? $prospect->last_contacted_at->format('M d, Y') : 'Never' }}
                        </dd>
                    </div>
                    @if($prospect->next_follow_up_at)
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Next Follow-Up</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $prospect->next_follow_up_at->format('M d, Y g:i A') }}</dd>
                    </div>
                    @endif
                </dl>
            </x-ui.card>

            <!-- Assigned To -->
            <x-ui.card title="Assignment">
                <div class="space-y-3">
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Owner</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $prospect->user->name }}</dd>
                    </div>
                    @if($prospect->assignedUser)
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Assigned To</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $prospect->assignedUser->name }}</dd>
                    </div>
                    @endif
                </div>
            </x-ui.card>

            <!-- Quick Actions -->
            <x-ui.card title="Quick Actions">
                <div class="space-y-2">
                    <x-ui.button variant="secondary" class="w-full justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Send Email
                    </x-ui.button>
                    <x-ui.button variant="secondary" class="w-full justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Schedule Follow-Up
                    </x-ui.button>
                    <x-ui.button variant="secondary" class="w-full justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Add Note
                    </x-ui.button>
                    @if($prospect->status !== 'won')
                    @can('update', $prospect)
                    <form action="{{ route('prospects.convert', $prospect) }}" method="POST" onsubmit="return confirm('Are you sure you want to convert this prospect to a client?')">
                        @csrf
                        <x-ui.button variant="primary" type="submit" class="w-full justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Convert to Client
                        </x-ui.button>
                    </form>
                    @endcan
                    @endif
                </div>
            </x-ui.card>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="fixed bottom-4 right-4 bg-success text-white px-6 py-4 rounded-md shadow-lg z-50" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        {{ session('success') }}
    </div>
@endif
@endsection
