@extends('layouts.dashboard')

@section('page-title', 'Dashboard')

@section('content')
<div class="space-y-8">
    <!-- Welcome Message -->
    @php
        $user = auth()->user();
        $prospects = $user->prospects();
        $clients = $user->clients();
        $followUps = $user->followUps();

        $totalProspects = $prospects->count();
        $activeProspects = $prospects->active()->count();
        $totalClients = $clients->count();
        $followUpsToday = $followUps->dueToday()->count();
        $overdueFollowUps = $followUps->overdue()->count();

        $pipelineValue = $prospects->active()->sum('annual_revenue');
        $avgConversionProb = $prospects->active()->avg('conversion_probability') ?? 0;
        $weightedPipeline = $pipelineValue * ($avgConversionProb / 100);

        // Prospect stats by status
        $prospectsByStatus = $prospects->get()->groupBy('status')->map->count();
        $highPriorityProspects = $prospects->where('priority', 'high')->count();

        // Recent prospects (last 7 days)
        $recentProspects = $prospects->where('created_at', '>=', now()->subDays(7))->count();
        $prospectsLastMonth = $prospects->where('created_at', '>=', now()->subMonth())->where('created_at', '<', now()->subDays(7))->count();
        $prospectsGrowth = $prospectsLastMonth > 0 ? (($recentProspects - $prospectsLastMonth) / $prospectsLastMonth * 100) : 0;
    @endphp

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <x-ui.card :padding="false">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Total Prospects</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">{{ $totalProspects }}</p>
                    </div>
                    <div class="w-12 h-12 bg-primary-accent bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <span class="text-{{ $prospectsGrowth >= 0 ? 'success' : 'error' }} font-medium">
                        {{ $prospectsGrowth >= 0 ? '+' : '' }}{{ number_format($prospectsGrowth, 1) }}%
                    </span>
                    <span class="text-neutral-600 ml-2">vs last week</span>
                </div>
            </div>
        </x-ui.card>

        <x-ui.card :padding="false">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Active Clients</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">{{ $totalClients }}</p>
                    </div>
                    <div class="w-12 h-12 bg-success bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <span class="text-neutral-600">{{ $activeProspects }} active prospects</span>
                </div>
            </div>
        </x-ui.card>

        <x-ui.card :padding="false">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Follow-Ups Today</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">{{ $followUpsToday }}</p>
                    </div>
                    <div class="w-12 h-12 bg-warning bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    @if($overdueFollowUps > 0)
                        <span class="text-error font-medium">{{ $overdueFollowUps }} overdue</span>
                    @else
                        <span class="text-success font-medium">No overdue tasks</span>
                    @endif
                </div>
            </div>
        </x-ui.card>

        <x-ui.card :padding="false">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Pipeline Value</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">${{ number_format($weightedPipeline, 0) }}</p>
                    </div>
                    <div class="w-12 h-12 bg-secondary-accent bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-sm">
                    <span class="text-neutral-600">{{ number_format($avgConversionProb, 1) }}% avg conversion</span>
                </div>
            </div>
        </x-ui.card>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Prospects -->
        <x-ui.card title="Recent Prospects">
            @php
                $recentProspectsData = $prospects->orderBy('created_at', 'desc')->limit(5)->get();
            @endphp
            @if($recentProspectsData->count() > 0)
                <div class="space-y-3">
                    @foreach($recentProspectsData as $prospect)
                        <div class="flex items-center justify-between p-3 bg-neutral-50 rounded-md hover:bg-neutral-100 transition-colors">
                            <div class="flex-1">
                                <a href="{{ route('prospects.show', $prospect) }}" class="text-sm font-medium text-primary-brand hover:underline">
                                    {{ $prospect->company_name }}
                                </a>
                                <div class="flex items-center gap-2 mt-1">
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
                                    @endphp
                                    <x-ui.badge :variant="$statusColors[$prospect->status] ?? 'default'" size="sm">
                                        {{ ucfirst($prospect->status) }}
                                    </x-ui.badge>
                                    <span class="text-xs text-neutral-500">{{ $prospect->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4">
                    <x-ui.button variant="secondary" size="sm" href="{{ route('prospects.index') }}" class="w-full justify-center">
                        View All Prospects
                    </x-ui.button>
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-neutral-500 mb-4">No prospects yet</p>
                    <x-ui.button variant="primary" href="{{ route('prospects.create') }}">
                        <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add First Prospect
                    </x-ui.button>
                </div>
            @endif
        </x-ui.card>

        <!-- Upcoming Follow-Ups -->
        <x-ui.card title="Upcoming Follow-Ups">
            @php
                $upcomingFollowUps = $followUps->where('status', 'pending')
                    ->where('due_date', '>=', now())
                    ->orderBy('due_date', 'asc')
                    ->limit(5)
                    ->get();
            @endphp
            @if($upcomingFollowUps->count() > 0)
                <div class="space-y-3">
                    @foreach($upcomingFollowUps as $followUp)
                        <div class="flex items-start justify-between p-3 bg-neutral-50 rounded-md hover:bg-neutral-100 transition-colors">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-primary-brand">{{ $followUp->subject }}</p>
                                <div class="flex items-center gap-2 mt-1">
                                    @php
                                        $isToday = $followUp->due_date->isToday();
                                        $isTomorrow = $followUp->due_date->isTomorrow();
                                    @endphp
                                    <span class="text-xs {{ $isToday ? 'text-warning font-medium' : 'text-neutral-500' }}">
                                        @if($isToday)
                                            Today
                                        @elseif($isTomorrow)
                                            Tomorrow
                                        @else
                                            {{ $followUp->due_date->format('M d') }}
                                        @endif
                                        @if($followUp->due_time)
                                            at {{ $followUp->due_time }}
                                        @endif
                                    </span>
                                    @if($followUp->prospect)
                                        <span class="text-xs text-neutral-400">•</span>
                                        <span class="text-xs text-neutral-500">{{ $followUp->prospect->company_name }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4">
                    <x-ui.button variant="secondary" size="sm" href="{{ route('follow-ups.index') }}" class="w-full justify-center">
                        View All Follow-Ups
                    </x-ui.button>
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-neutral-500 mb-4">No upcoming follow-ups</p>
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

    <!-- Prospect Pipeline Overview -->
    <x-ui.card title="Prospect Pipeline">
        @if($prospectsByStatus->count() > 0)
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4">
                @foreach(['new', 'contacted', 'qualified', 'proposal', 'negotiation', 'won', 'lost'] as $status)
                    @php
                        $count = $prospectsByStatus[$status] ?? 0;
                        $colors = [
                            'new' => 'bg-info text-white',
                            'contacted' => 'bg-neutral-500 text-white',
                            'qualified' => 'bg-warning text-white',
                            'proposal' => 'bg-secondary-accent text-white',
                            'negotiation' => 'bg-primary-accent text-white',
                            'won' => 'bg-success text-white',
                            'lost' => 'bg-error text-white',
                        ];
                    @endphp
                    <div class="text-center">
                        <div class="{{ $colors[$status] }} rounded-lg p-4">
                            <p class="text-2xl font-bold">{{ $count }}</p>
                            <p class="text-xs mt-1 opacity-90">{{ ucfirst($status) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-neutral-500 py-8">No prospects in pipeline yet</p>
        @endif
    </x-ui.card>

    <!-- Quick Actions -->
    <x-ui.card title="Quick Actions">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <x-ui.button variant="primary" href="{{ route('prospects.create') }}" class="justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Prospect
            </x-ui.button>
            <x-ui.button variant="secondary" href="{{ route('follow-ups.create') }}" class="justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Schedule Follow-Up
            </x-ui.button>
            <x-ui.button variant="secondary" href="{{ route('prospects.index', ['priority' => 'high']) }}" class="justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                High Priority ({{ $highPriorityProspects }})
            </x-ui.button>
            <x-ui.button variant="secondary" href="{{ route('clients.index') }}" class="justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                View Clients
            </x-ui.button>
        </div>
    </x-ui.card>
</div>
@endsection
