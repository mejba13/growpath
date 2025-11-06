@extends('layouts.dashboard')

@section('page-title', 'Reports & Analytics')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-primary-brand">Reports & Analytics</h2>
            <p class="text-neutral-600 mt-1">Comprehensive insights into your sales performance</p>
        </div>
    </div>

    <!-- Date Range Filter -->
    <x-ui.card>
        <form method="GET" action="{{ route('reports.index') }}" class="flex flex-wrap items-end gap-4">
            <div class="flex-1 min-w-[200px]">
                <label for="start_date" class="block text-sm font-medium text-neutral-700 mb-2">Start Date</label>
                <input
                    type="date"
                    id="start_date"
                    name="start_date"
                    value="{{ $startDate }}"
                    class="w-full px-4 py-2 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                >
            </div>
            <div class="flex-1 min-w-[200px]">
                <label for="end_date" class="block text-sm font-medium text-neutral-700 mb-2">End Date</label>
                <input
                    type="date"
                    id="end_date"
                    name="end_date"
                    value="{{ $endDate }}"
                    class="w-full px-4 py-2 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                >
            </div>
            <div>
                <x-ui.button type="submit" variant="primary">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Update Report
                </x-ui.button>
            </div>
        </form>
    </x-ui.card>

    <!-- Prospect Metrics -->
    <div>
        <h3 class="text-lg font-semibold text-primary-brand mb-4">Prospect Performance</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <x-ui.card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Total Prospects</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">{{ number_format($prospectMetrics['total']) }}</p>
                        <p class="text-sm text-neutral-500 mt-1">
                            <span class="text-success font-medium">+{{ $prospectMetrics['new_this_period'] }}</span> this period
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-info bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
            </x-ui.card>

            <x-ui.card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Active Prospects</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">{{ number_format($prospectMetrics['active']) }}</p>
                        <p class="text-sm text-neutral-500 mt-1">In pipeline</p>
                    </div>
                    <div class="w-12 h-12 bg-warning bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                </div>
            </x-ui.card>

            <x-ui.card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Won Deals</p>
                        <p class="text-3xl font-bold text-success mt-2">{{ number_format($prospectMetrics['won']) }}</p>
                        <p class="text-sm text-neutral-500 mt-1">
                            <span class="text-error">{{ number_format($prospectMetrics['lost']) }}</span> lost
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-success bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </x-ui.card>

            <x-ui.card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Conversion Rate</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">{{ number_format($prospectMetrics['conversion_rate'], 1) }}%</p>
                        <p class="text-sm text-neutral-500 mt-1">Win rate</p>
                    </div>
                    <div class="w-12 h-12 bg-primary-accent bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                </div>
            </x-ui.card>
        </div>
    </div>

    <!-- Client Metrics -->
    <div>
        <h3 class="text-lg font-semibold text-primary-brand mb-4">Client Overview</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <x-ui.card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Total Clients</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">{{ number_format($clientMetrics['total']) }}</p>
                        <p class="text-sm text-neutral-500 mt-1">
                            <span class="text-success font-medium">+{{ $clientMetrics['new_this_period'] }}</span> this period
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-secondary-accent bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>
            </x-ui.card>

            <x-ui.card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Contract Value</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">${{ number_format($clientMetrics['total_contract_value'], 0) }}</p>
                        <p class="text-sm text-neutral-500 mt-1">Total value</p>
                    </div>
                    <div class="w-12 h-12 bg-success bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </x-ui.card>

            <x-ui.card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Avg Health Score</p>
                        <p class="text-3xl font-bold text-primary-brand mt-2">{{ number_format($clientMetrics['avg_health_score'], 0) }}%</p>
                        <p class="text-sm text-neutral-500 mt-1">Account health</p>
                    </div>
                    <div class="w-12 h-12 bg-info bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
            </x-ui.card>

            <x-ui.card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Payment Status</p>
                        <p class="text-3xl font-bold text-success mt-2">{{ number_format($clientMetrics['current_payment']) }}</p>
                        <p class="text-sm text-error mt-1">{{ $clientMetrics['overdue_payment'] }} overdue</p>
                    </div>
                    <div class="w-12 h-12 bg-warning bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                </div>
            </x-ui.card>
        </div>
    </div>

    <!-- Follow-up Metrics & Revenue Projection -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Follow-up Metrics -->
        <x-ui.card>
            <h3 class="text-lg font-semibold text-primary-brand mb-4">Follow-up Activity</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between pb-3 border-b border-neutral-200">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-info bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-neutral-600">Total Follow-ups</p>
                            <p class="text-2xl font-bold text-primary-brand">{{ number_format($followUpMetrics['total']) }}</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between pb-3 border-b border-neutral-200">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-success bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-neutral-600">Completed</p>
                            <p class="text-2xl font-bold text-success">{{ number_format($followUpMetrics['completed']) }}</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between pb-3 border-b border-neutral-200">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-warning bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-neutral-600">Pending</p>
                            <p class="text-2xl font-bold text-warning">{{ number_format($followUpMetrics['pending']) }}</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-error bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-error" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-neutral-600">Overdue</p>
                            <p class="text-2xl font-bold text-error">{{ number_format($followUpMetrics['overdue']) }}</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-neutral-200">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-neutral-700">Completion Rate</span>
                        <span class="text-lg font-bold text-primary-brand">{{ number_format($followUpMetrics['completion_rate'], 1) }}%</span>
                    </div>
                    <div class="w-full bg-neutral-200 rounded-full h-2 mt-2">
                        <div class="bg-success h-2 rounded-full" style="width: {{ $followUpMetrics['completion_rate'] }}%"></div>
                    </div>
                </div>
            </div>
        </x-ui.card>

        <!-- Revenue Projection -->
        <x-ui.card>
            <h3 class="text-lg font-semibold text-primary-brand mb-4">Revenue Projection</h3>
            <div class="text-center py-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-success bg-opacity-10 rounded-full mb-4">
                    <svg class="w-10 h-10 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="text-sm text-neutral-600 mb-2">Weighted Pipeline Value</p>
                <p class="text-5xl font-bold text-success mb-2">${{ number_format($revenueProjection, 0) }}</p>
                <p class="text-sm text-neutral-500">Based on active prospects and conversion probability</p>
            </div>

            <!-- Prospects by Status Breakdown -->
            <div class="mt-6 pt-6 border-t border-neutral-200">
                <h4 class="text-sm font-semibold text-neutral-700 mb-3">Prospects by Status</h4>
                <div class="space-y-2">
                    @foreach($prospectsByStatus as $status => $count)
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full
                                    @if($status === 'won') bg-success
                                    @elseif($status === 'lost') bg-error
                                    @elseif($status === 'new') bg-info
                                    @else bg-warning
                                    @endif
                                "></span>
                                <span class="text-neutral-700">{{ ucfirst($status) }}</span>
                            </div>
                            <span class="font-medium text-primary-brand">{{ $count }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-ui.card>
    </div>

    <!-- Prospects by Priority -->
    <x-ui.card>
        <h3 class="text-lg font-semibold text-primary-brand mb-4">Prospects by Priority</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php
                $priorityConfig = [
                    'high' => ['color' => 'error', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    'medium' => ['color' => 'warning', 'icon' => 'M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    'low' => ['color' => 'info', 'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                ];
            @endphp

            @foreach(['high', 'medium', 'low'] as $priority)
                <div class="text-center p-6 bg-{{ $priorityConfig[$priority]['color'] }} bg-opacity-5 rounded-lg border border-{{ $priorityConfig[$priority]['color'] }} border-opacity-20">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-{{ $priorityConfig[$priority]['color'] }} bg-opacity-10 rounded-full mb-3">
                        <svg class="w-6 h-6 text-{{ $priorityConfig[$priority]['color'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $priorityConfig[$priority]['icon'] }}" />
                        </svg>
                    </div>
                    <p class="text-sm text-neutral-600 mb-1">{{ ucfirst($priority) }} Priority</p>
                    <p class="text-3xl font-bold text-primary-brand">{{ $prospectsByPriority[$priority] ?? 0 }}</p>
                </div>
            @endforeach
        </div>
    </x-ui.card>

    <!-- Prospects Over Time Chart -->
    <x-ui.card>
        <h3 class="text-lg font-semibold text-primary-brand mb-4">Prospects Created (Last 12 Months)</h3>
        <div class="overflow-x-auto">
            <div class="min-w-[600px]">
                @php
                    $maxCount = !empty($prospectsOverTime) ? max($prospectsOverTime) : 1;
                @endphp
                <div class="space-y-3">
                    @forelse($prospectsOverTime as $month => $count)
                        <div class="flex items-center gap-4">
                            <div class="w-24 text-sm text-neutral-600 font-medium">
                                {{ \Carbon\Carbon::parse($month . '-01')->format('M Y') }}
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-3">
                                    <div class="flex-1 bg-neutral-200 rounded-full h-8">
                                        <div
                                            class="bg-primary-accent h-8 rounded-full flex items-center justify-end px-3"
                                            style="width: {{ ($count / $maxCount) * 100 }}%"
                                        >
                                            <span class="text-white text-sm font-medium">{{ $count }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-neutral-500 py-8">No data available for the selected period</p>
                    @endforelse
                </div>
            </div>
        </div>
    </x-ui.card>

    <!-- Top Performers -->
    @if(!empty($topPerformers) && $topPerformers->count() > 0)
        <x-ui.card>
            <h3 class="text-lg font-semibold text-primary-brand mb-4">Top Performers (This Period)</h3>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-neutral-50 border-b border-neutral-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Rank</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Team Member</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Won Deals</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-neutral-200">
                        @foreach($topPerformers as $index => $performer)
                            <tr class="hover:bg-neutral-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        @if($index === 0)
                                            <span class="inline-flex items-center justify-center w-8 h-8 bg-warning bg-opacity-20 text-warning rounded-full font-bold">
                                                #1
                                            </span>
                                        @else
                                            <span class="inline-flex items-center justify-center w-8 h-8 bg-neutral-100 text-neutral-600 rounded-full font-semibold">
                                                #{{ $index + 1 }}
                                            </span>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 bg-primary-accent bg-opacity-10 rounded-full flex items-center justify-center">
                                            <span class="text-primary-accent font-semibold">
                                                {{ substr($performer->user->name ?? 'Unknown', 0, 1) }}
                                            </span>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-primary-brand">{{ $performer->user->name ?? 'Unknown' }}</div>
                                            <div class="text-sm text-neutral-500">{{ $performer->user->email ?? '' }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-success">{{ $performer->total_prospects }} deals</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-ui.card>
    @endif
</div>
@endsection
