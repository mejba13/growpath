@extends('layouts.dashboard')

@section('page-title', 'Team Member Details')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="{{ route('team.index') }}" class="text-neutral-600 hover:text-neutral-900">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <div>
                <h2 class="text-2xl font-bold text-primary-brand">{{ $user->name }}</h2>
                <p class="text-neutral-600 mt-1">{{ $user->email }}</p>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.button variant="secondary" href="{{ route('team.edit', $user) }}">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Edit Member
            </x-ui.button>
            @if($user->id !== auth()->id())
                <form action="{{ route('team.destroy', $user) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to remove this team member? Their data will be reassigned to you.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-error text-white rounded-md hover:bg-red-700 transition-colors">
                        Remove Member
                    </button>
                </form>
            @endif
        </div>
    </div>

    <!-- Profile Information -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Profile Card -->
        <x-ui.card>
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-24 h-24 rounded-full bg-primary-accent bg-opacity-10 mb-4">
                    <span class="text-4xl font-bold text-primary-accent">
                        {{ $user->initials() }}
                    </span>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand">{{ $user->name }}</h3>
                <p class="text-sm text-neutral-500 mt-1">{{ $user->email }}</p>

                <!-- Role Badge -->
                <div class="mt-4">
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
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-{{ $roleColor }} bg-opacity-10 text-{{ $roleColor }}">
                        {{ ucfirst($roleName) }}
                    </span>
                </div>

                <!-- Join Date -->
                <div class="mt-6 pt-6 border-t border-neutral-200">
                    <p class="text-sm text-neutral-600">Member Since</p>
                    <p class="text-lg font-semibold text-primary-brand mt-1">
                        {{ $user->created_at->format('M d, Y') }}
                    </p>
                </div>
            </div>
        </x-ui.card>

        <!-- Activity Stats -->
        <div class="lg:col-span-2 space-y-6">
            <x-ui.card>
                <h3 class="text-lg font-semibold text-primary-brand mb-4">Activity Overview</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center p-4 bg-info bg-opacity-5 rounded-lg">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-info bg-opacity-10 rounded-full mb-3">
                            <svg class="w-6 h-6 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <p class="text-3xl font-bold text-primary-brand">{{ $stats['total_prospects'] }}</p>
                        <p class="text-sm text-neutral-600 mt-1">Total Prospects</p>
                        <p class="text-xs text-success mt-2">{{ $stats['active_prospects'] }} active</p>
                    </div>

                    <div class="text-center p-4 bg-success bg-opacity-5 rounded-lg">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-success bg-opacity-10 rounded-full mb-3">
                            <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="text-3xl font-bold text-primary-brand">{{ $stats['won_prospects'] }}</p>
                        <p class="text-sm text-neutral-600 mt-1">Won Deals</p>
                        @if($stats['total_prospects'] > 0)
                            <p class="text-xs text-success mt-2">{{ number_format(($stats['won_prospects'] / $stats['total_prospects']) * 100, 1) }}% win rate</p>
                        @endif
                    </div>

                    <div class="text-center p-4 bg-secondary-accent bg-opacity-5 rounded-lg">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-secondary-accent bg-opacity-10 rounded-full mb-3">
                            <svg class="w-6 h-6 text-secondary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <p class="text-3xl font-bold text-primary-brand">{{ $stats['total_clients'] }}</p>
                        <p class="text-sm text-neutral-600 mt-1">Active Clients</p>
                    </div>
                </div>
            </x-ui.card>

            <x-ui.card>
                <h3 class="text-lg font-semibold text-primary-brand mb-4">Follow-up Performance</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-center gap-4">
                        <div class="flex-shrink-0 w-16 h-16 bg-info bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-primary-brand">{{ $stats['total_follow_ups'] }}</p>
                            <p class="text-sm text-neutral-600">Total Follow-ups</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="flex-shrink-0 w-16 h-16 bg-success bg-opacity-10 rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-primary-brand">{{ $stats['completed_follow_ups'] }}</p>
                            <p class="text-sm text-neutral-600">Completed</p>
                        </div>
                    </div>
                </div>

                @if($stats['total_follow_ups'] > 0)
                    <div class="mt-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-neutral-700">Completion Rate</span>
                            <span class="text-lg font-bold text-primary-brand">
                                {{ number_format(($stats['completed_follow_ups'] / $stats['total_follow_ups']) * 100, 1) }}%
                            </span>
                        </div>
                        <div class="w-full bg-neutral-200 rounded-full h-3">
                            <div class="bg-success h-3 rounded-full" style="width: {{ ($stats['completed_follow_ups'] / $stats['total_follow_ups']) * 100 }}%"></div>
                        </div>
                    </div>
                @endif
            </x-ui.card>
        </div>
    </div>

    <!-- Recent Activity -->
    <x-ui.card>
        <h3 class="text-lg font-semibold text-primary-brand mb-4">Recent Prospects</h3>
        @if($user->prospects()->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-neutral-50 border-b border-neutral-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Company</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Priority</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Created</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-neutral-200">
                        @foreach($user->prospects()->latest()->limit(10)->get() as $prospect)
                            <tr class="hover:bg-neutral-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-primary-brand">{{ $prospect->company_name }}</div>
                                    @if($prospect->contact_name)
                                        <div class="text-sm text-neutral-500">{{ $prospect->contact_name }}</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
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
                                    <x-ui.badge :variant="$statusColors[$prospect->status] ?? 'default'">
                                        {{ ucfirst($prospect->status) }}
                                    </x-ui.badge>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @php
                                        $priorityColors = [
                                            'high' => 'error',
                                            'medium' => 'warning',
                                            'low' => 'default',
                                        ];
                                    @endphp
                                    <x-ui.badge :variant="$priorityColors[$prospect->priority]">
                                        {{ ucfirst($prospect->priority) }}
                                    </x-ui.badge>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500">
                                    {{ $prospect->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('prospects.show', $prospect) }}" class="text-primary-accent hover:text-blue-700">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($user->prospects()->count() > 10)
                <div class="mt-4 text-center">
                    <a href="{{ route('prospects.index') }}" class="text-primary-accent hover:underline text-sm">
                        View all {{ $user->prospects()->count() }} prospects
                    </a>
                </div>
            @endif
        @else
            <p class="text-center text-neutral-500 py-8">No prospects assigned to this member yet.</p>
        @endif
    </x-ui.card>
</div>

@if(session('success'))
    <div class="fixed bottom-4 right-4 bg-success text-white px-6 py-4 rounded-md shadow-lg z-50" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        {{ session('success') }}
    </div>
@endif
@endsection
