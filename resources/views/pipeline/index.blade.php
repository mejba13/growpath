@extends('layouts.dashboard')

@section('page-title', 'Pipeline')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-primary-brand">Sales Pipeline</h1>
            <p class="mt-1 text-sm text-neutral-600">Visualize and manage your prospect pipeline</p>
        </div>
        <div class="flex items-center gap-3">
            <form method="GET" action="{{ route('pipeline.index') }}">
                <label class="flex items-center cursor-pointer">
                    <input
                        type="checkbox"
                        name="show_closed"
                        value="1"
                        {{ request('show_closed') ? 'checked' : '' }}
                        onchange="this.form.submit()"
                        class="mr-2 rounded text-primary-accent focus:ring-primary-accent"
                    >
                    <span class="text-sm text-neutral-700">Show Won/Lost</span>
                </label>
            </form>
            <x-ui.button variant="primary" href="{{ route('prospects.create') }}">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                New Prospect
            </x-ui.button>
        </div>
    </div>

    <!-- Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <x-ui.card :padding="false">
            <div class="p-4">
                <p class="text-sm font-medium text-neutral-600">Active Prospects</p>
                <p class="text-2xl font-bold text-primary-brand mt-1">{{ $metrics['total_active'] }}</p>
            </div>
        </x-ui.card>

        <x-ui.card :padding="false">
            <div class="p-4">
                <p class="text-sm font-medium text-neutral-600">Total Pipeline Value</p>
                <p class="text-2xl font-bold text-primary-brand mt-1">${{ number_format($metrics['total_value'], 0) }}</p>
            </div>
        </x-ui.card>

        <x-ui.card :padding="false">
            <div class="p-4">
                <p class="text-sm font-medium text-neutral-600">Weighted Value</p>
                <p class="text-2xl font-bold text-primary-brand mt-1">${{ number_format($metrics['weighted_value'], 0) }}</p>
            </div>
        </x-ui.card>

        <x-ui.card :padding="false">
            <div class="p-4">
                <p class="text-sm font-medium text-neutral-600">Win Rate</p>
                <p class="text-2xl font-bold text-primary-brand mt-1">{{ number_format($metrics['win_rate'], 1) }}%</p>
            </div>
        </x-ui.card>
    </div>

    <!-- Pipeline Board -->
    <div class="overflow-x-auto pb-4">
        <div class="inline-flex gap-4 min-w-full">
            @php
                $stages = [
                    'new' => ['label' => 'New', 'color' => 'bg-info', 'count' => $pipeline['new']->count()],
                    'contacted' => ['label' => 'Contacted', 'color' => 'bg-neutral-500', 'count' => $pipeline['contacted']->count()],
                    'qualified' => ['label' => 'Qualified', 'color' => 'bg-warning', 'count' => $pipeline['qualified']->count()],
                    'proposal' => ['label' => 'Proposal', 'color' => 'bg-secondary-accent', 'count' => $pipeline['proposal']->count()],
                    'negotiation' => ['label' => 'Negotiation', 'color' => 'bg-primary-accent', 'count' => $pipeline['negotiation']->count()],
                ];

                if (request('show_closed')) {
                    $stages['won'] = ['label' => 'Won', 'color' => 'bg-success', 'count' => $pipeline['won']->count()];
                    $stages['lost'] = ['label' => 'Lost', 'color' => 'bg-error', 'count' => $pipeline['lost']->count()];
                }
            @endphp

            @foreach($stages as $status => $stage)
                <div class="flex-shrink-0 w-80">
                    <x-ui.card :padding="false" class="h-full">
                        <!-- Column Header -->
                        <div class="{{ $stage['color'] }} text-white px-4 py-3 rounded-t-lg">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold">{{ $stage['label'] }}</h3>
                                <span class="bg-white bg-opacity-30 px-2 py-1 rounded text-sm font-medium">
                                    {{ $stage['count'] }}
                                </span>
                            </div>
                        </div>

                        <!-- Cards Container -->
                        <div class="p-3 space-y-3 min-h-[200px] max-h-[calc(100vh-400px)] overflow-y-auto">
                            @forelse($pipeline[$status] as $prospect)
                                <div class="bg-white border border-neutral-200 rounded-lg p-4 hover:shadow-md transition-shadow cursor-pointer"
                                     onclick="window.location.href='{{ route('prospects.show', $prospect) }}'">
                                    <!-- Prospect Card -->
                                    <div class="space-y-2">
                                        <h4 class="font-semibold text-primary-brand">{{ $prospect->company_name }}</h4>

                                        @if($prospect->contact_name)
                                            <p class="text-sm text-neutral-600">{{ $prospect->contact_name }}</p>
                                        @endif

                                        @if($prospect->annual_revenue)
                                            <p class="text-sm font-medium text-success">
                                                ${{ number_format($prospect->annual_revenue, 0) }}
                                            </p>
                                        @endif

                                        <div class="flex items-center justify-between pt-2 border-t border-neutral-100">
                                            <div class="flex items-center gap-2">
                                                @php
                                                    $priorityColors = [
                                                        'high' => 'error',
                                                        'medium' => 'warning',
                                                        'low' => 'default',
                                                    ];
                                                @endphp
                                                <x-ui.badge :variant="$priorityColors[$prospect->priority]" size="sm">
                                                    {{ ucfirst($prospect->priority) }}
                                                </x-ui.badge>

                                                @if($prospect->conversion_probability)
                                                    <span class="text-xs text-neutral-500">
                                                        {{ $prospect->conversion_probability }}%
                                                    </span>
                                                @endif
                                            </div>

                                            @if($prospect->assignedUser)
                                                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary-accent text-white flex items-center justify-center text-xs font-semibold"
                                                     title="{{ $prospect->assignedUser->name }}">
                                                    {{ $prospect->assignedUser->initials() }}
                                                </div>
                                            @endif
                                        </div>

                                        @if($prospect->next_follow_up_at)
                                            <div class="flex items-center text-xs text-neutral-500 mt-2">
                                                <svg class="w-3 h-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Follow-up: {{ $prospect->next_follow_up_at->format('M d') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-8 text-neutral-400">
                                    <svg class="w-12 h-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                    <p class="text-sm">No prospects</p>
                                </div>
                            @endforelse
                        </div>
                    </x-ui.card>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Legend -->
    <x-ui.card title="Pipeline Guide">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
            <div>
                <h4 class="font-semibold text-primary-brand mb-2">Early Stage</h4>
                <ul class="space-y-1 text-neutral-600">
                    <li><span class="font-medium">New:</span> Recently added prospects</li>
                    <li><span class="font-medium">Contacted:</span> Initial outreach made</li>
                    <li><span class="font-medium">Qualified:</span> Confirmed as valid opportunity</li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-primary-brand mb-2">Active Deals</h4>
                <ul class="space-y-1 text-neutral-600">
                    <li><span class="font-medium">Proposal:</span> Proposal sent to prospect</li>
                    <li><span class="font-medium">Negotiation:</span> In active negotiations</li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-primary-brand mb-2">Closed</h4>
                <ul class="space-y-1 text-neutral-600">
                    <li><span class="font-medium">Won:</span> Successfully converted to client</li>
                    <li><span class="font-medium">Lost:</span> Deal lost or prospect declined</li>
                </ul>
            </div>
        </div>
    </x-ui.card>
</div>

@if(session('success'))
    <div class="fixed bottom-4 right-4 bg-success text-white px-6 py-4 rounded-md shadow-lg z-50" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        {{ session('success') }}
    </div>
@endif
@endsection
