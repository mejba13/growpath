@extends('layouts.dashboard')

@section('page-title', $client->company_name)

@section('content')
<div class="space-y-6">
    <!-- Back Button -->
    <div class="flex items-center justify-between">
        <a href="{{ route('clients.index') }}" class="text-primary-accent hover:text-blue-600 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Clients
        </a>
        <div class="flex gap-2">
            @can('update', $client)
                <x-ui.button variant="secondary" href="{{ route('clients.edit', $client) }}">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit
                </x-ui.button>
            @endcan
            @can('delete', $client)
                <form action="{{ route('clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this client? This action cannot be undone.')">
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
                <h1 class="text-3xl font-bold text-primary-brand">{{ $client->company_name }}</h1>
                <div class="flex items-center gap-4 mt-3">
                    @php
                        $paymentStatusColors = [
                            'current' => 'success',
                            'overdue' => 'error',
                            'cancelled' => 'default',
                        ];
                        $healthColor = 'default';
                        if ($client->account_health_score >= 80) {
                            $healthColor = 'success';
                        } elseif ($client->account_health_score >= 50) {
                            $healthColor = 'warning';
                        } else {
                            $healthColor = 'error';
                        }
                    @endphp
                    <x-ui.badge :variant="$paymentStatusColors[$client->payment_status] ?? 'default'" size="lg">
                        {{ ucfirst($client->payment_status) }} Payment
                    </x-ui.badge>
                    @if($client->account_health_score)
                        <x-ui.badge :variant="$healthColor" size="lg">
                            Health Score: {{ $client->account_health_score }}%
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
                        <dd class="mt-1 text-sm text-primary-brand">{{ $client->industry ?: 'Not specified' }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Company Size</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $client->company_size ? $client->company_size . ' employees' : 'Not specified' }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Converted From</dt>
                        <dd class="mt-1 text-sm">
                            @if($client->prospect)
                                <a href="{{ route('prospects.show', $client->prospect) }}" class="text-primary-accent hover:underline">
                                    View Original Prospect
                                </a>
                            @else
                                <span class="text-neutral-500">N/A</span>
                            @endif
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Converted On</dt>
                        <dd class="mt-1 text-sm text-primary-brand">
                            {{ $client->converted_at ? $client->converted_at->format('M d, Y g:i A') : 'Not specified' }}
                        </dd>
                    </div>
                </dl>
            </x-ui.card>

            <!-- Contract Information -->
            <x-ui.card title="Contract Information">
                <dl class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Contract Value</dt>
                        <dd class="mt-1 text-lg font-semibold text-primary-brand">
                            {{ $client->contract_value ? '$' . number_format($client->contract_value, 2) : 'Not specified' }}
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Payment Status</dt>
                        <dd class="mt-1">
                            <x-ui.badge :variant="$paymentStatusColors[$client->payment_status] ?? 'default'">
                                {{ ucfirst($client->payment_status) }}
                            </x-ui.badge>
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Contract Start Date</dt>
                        <dd class="mt-1 text-sm text-primary-brand">
                            {{ $client->contract_start_date ? $client->contract_start_date->format('M d, Y') : 'Not specified' }}
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Contract End Date</dt>
                        <dd class="mt-1 text-sm text-primary-brand">
                            {{ $client->contract_end_date ? $client->contract_end_date->format('M d, Y') : 'Not specified' }}
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Renewal Date</dt>
                        <dd class="mt-1 text-sm text-primary-brand">
                            {{ $client->renewal_date ? $client->renewal_date->format('M d, Y') : 'Not specified' }}
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Contract Duration</dt>
                        <dd class="mt-1 text-sm text-primary-brand">
                            @if($client->contract_start_date && $client->contract_end_date)
                                {{ $client->contract_start_date->diffInMonths($client->contract_end_date) }} months
                            @else
                                Not specified
                            @endif
                        </dd>
                    </div>
                </dl>
            </x-ui.card>

            <!-- Services Purchased -->
            @if($client->services_purchased && count($client->services_purchased) > 0)
            <x-ui.card title="Services Purchased">
                <div class="flex flex-wrap gap-2">
                    @foreach($client->services_purchased as $service)
                        <span class="px-3 py-1 bg-primary-accent bg-opacity-10 text-primary-accent rounded-full text-sm font-medium">
                            {{ $service }}
                        </span>
                    @endforeach
                </div>
            </x-ui.card>
            @endif

            <!-- Notes -->
            @if($client->notes)
            <x-ui.card title="Notes">
                <p class="text-sm text-neutral-700 whitespace-pre-wrap">{{ $client->notes }}</p>
            </x-ui.card>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Quick Stats -->
            <x-ui.card title="Quick Stats">
                <dl class="space-y-3">
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Account Health Score</dt>
                        <dd class="mt-1">
                            @if($client->account_health_score)
                                <div class="flex items-center">
                                    <div class="flex-1 bg-neutral-200 rounded-full h-2 mr-3">
                                        <div class="bg-{{ $healthColor }} h-2 rounded-full" style="width: {{ $client->account_health_score }}%"></div>
                                    </div>
                                    <span class="text-sm font-semibold text-primary-brand">{{ $client->account_health_score }}%</span>
                                </div>
                            @else
                                <span class="text-sm text-neutral-500">Not set</span>
                            @endif
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Created</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $client->created_at->format('M d, Y') }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Last Updated</dt>
                        <dd class="mt-1 text-sm text-primary-brand">{{ $client->updated_at->diffForHumans() }}</dd>
                    </div>
                    @if($client->renewal_date)
                    <div>
                        <dt class="text-sm font-medium text-neutral-600">Days Until Renewal</dt>
                        <dd class="mt-1 text-sm text-primary-brand">
                            @php
                                $daysUntilRenewal = now()->diffInDays($client->renewal_date, false);
                            @endphp
                            @if($daysUntilRenewal > 0)
                                {{ $daysUntilRenewal }} days
                            @elseif($daysUntilRenewal === 0)
                                Today
                            @else
                                {{ abs($daysUntilRenewal) }} days ago
                            @endif
                        </dd>
                    </div>
                    @endif
                </dl>
            </x-ui.card>

            <!-- Account Owner -->
            <x-ui.card title="Account Owner">
                <div class="flex items-center">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary-accent text-white flex items-center justify-center font-semibold">
                        {{ $client->user->initials() }}
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-primary-brand">{{ $client->user->name }}</p>
                        <p class="text-xs text-neutral-500">{{ $client->user->email }}</p>
                    </div>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Add Note
                    </x-ui.button>
                    <x-ui.button variant="secondary" class="w-full justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        View Analytics
                    </x-ui.button>
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
