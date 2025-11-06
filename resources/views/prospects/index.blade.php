@extends('layouts.dashboard')

@section('page-title', 'Prospects')

@section('content')
<div class="space-y-6">
    <!-- Header with Actions -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-primary-brand">Prospects</h2>
            <p class="text-neutral-600 mt-1">Manage and track your potential clients</p>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.button variant="secondary" href="{{ route('prospects.export', request()->query()) }}">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Export CSV
            </x-ui.button>
            @can('create-prospects')
            <x-ui.button variant="primary" href="{{ route('prospects.create') }}">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Prospect
            </x-ui.button>
            @endcan
        </div>
    </div>

    <!-- Search and Filters -->
    <x-ui.card :padding="false">
        <form action="{{ route('prospects.index') }}" method="GET" class="p-6 space-y-4">
            <!-- Search Bar -->
            <div>
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search prospects by company, contact, email..."
                    class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent focus:border-primary-accent"
                >
            </div>

            <!-- Filters -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <select name="status" class="px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                    <option value="">All Statuses</option>
                    <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                    <option value="contacted" {{ request('status') == 'contacted' ? 'selected' : '' }}>Contacted</option>
                    <option value="qualified" {{ request('status') == 'qualified' ? 'selected' : '' }}>Qualified</option>
                    <option value="proposal" {{ request('status') == 'proposal' ? 'selected' : '' }}>Proposal</option>
                    <option value="negotiation" {{ request('status') == 'negotiation' ? 'selected' : '' }}>Negotiation</option>
                    <option value="won" {{ request('status') == 'won' ? 'selected' : '' }}>Won</option>
                    <option value="lost" {{ request('status') == 'lost' ? 'selected' : '' }}>Lost</option>
                </select>

                <select name="priority" class="px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                    <option value="">All Priorities</option>
                    <option value="high" {{ request('priority') == 'high' ? 'selected' : '' }}>High</option>
                    <option value="medium" {{ request('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="low" {{ request('priority') == 'low' ? 'selected' : '' }}>Low</option>
                </select>

                <select name="industry" class="px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                    <option value="">All Industries</option>
                    @foreach($industries as $industry)
                        <option value="{{ $industry }}" {{ request('industry') == $industry ? 'selected' : '' }}>
                            {{ $industry }}
                        </option>
                    @endforeach
                </select>

                <select name="source" class="px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                    <option value="">All Sources</option>
                    @foreach($sources as $source)
                        <option value="{{ $source }}" {{ request('source') == $source ? 'selected' : '' }}>
                            {{ $source }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Filter Actions -->
            <div class="flex gap-2">
                <x-ui.button type="submit" variant="primary">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    Search
                </x-ui.button>
                @if(request()->hasAny(['search', 'status', 'priority', 'industry', 'source']))
                    <x-ui.button variant="secondary" href="{{ route('prospects.index') }}">
                        Clear Filters
                    </x-ui.button>
                @endif
            </div>
        </form>
    </x-ui.card>

    <!-- Prospects Table -->
    <x-ui.card :padding="false">
        @if($prospects->count() > 0)
            <div x-data="{
                selectedIds: [],
                selectAll: false,
                toggleAll() {
                    if (this.selectAll) {
                        this.selectedIds = {{ $prospects->pluck('id')->toJson() }};
                    } else {
                        this.selectedIds = [];
                    }
                }
            }">
                <!-- Bulk Action Bar -->
                <div x-show="selectedIds.length > 0" class="bg-primary-accent bg-opacity-10 border-b border-primary-accent px-6 py-3 flex items-center justify-between">
                    <span class="text-sm font-medium text-primary-brand">
                        <span x-text="selectedIds.length"></span> selected
                    </span>
                    <div class="flex items-center gap-3">
                        <!-- Bulk Update Status -->
                        <form method="POST" action="{{ route('prospects.bulk.update-status') }}" class="flex items-center gap-2">
                            @csrf
                            <template x-for="id in selectedIds" :key="id">
                                <input type="hidden" name="ids[]" :value="id">
                            </template>
                            <select name="status" required class="px-3 py-1 border border-neutral-300 rounded text-sm">
                                <option value="">Change Status</option>
                                <option value="new">New</option>
                                <option value="contacted">Contacted</option>
                                <option value="qualified">Qualified</option>
                                <option value="proposal">Proposal</option>
                                <option value="negotiation">Negotiation</option>
                                <option value="won">Won</option>
                                <option value="lost">Lost</option>
                            </select>
                            <button type="submit" class="px-3 py-1 bg-primary-accent text-white rounded text-sm hover:bg-blue-700">Update</button>
                        </form>

                        <!-- Bulk Delete -->
                        <form method="POST" action="{{ route('prospects.bulk.destroy') }}" onsubmit="return confirm('Are you sure you want to delete the selected prospects?')">
                            @csrf
                            <template x-for="id in selectedIds" :key="id">
                                <input type="hidden" name="ids[]" :value="id">
                            </template>
                            <button type="submit" class="px-3 py-1 bg-error text-white rounded text-sm hover:bg-red-700">Delete</button>
                        </form>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-neutral-50 border-b border-neutral-200">
                            <tr>
                                <th class="px-6 py-3 text-left">
                                    <input
                                        type="checkbox"
                                        x-model="selectAll"
                                        @change="toggleAll()"
                                        class="rounded text-primary-accent focus:ring-primary-accent"
                                    >
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-neutral-700 uppercase tracking-wider">Company</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-neutral-700 uppercase tracking-wider">Contact</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-neutral-700 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-neutral-700 uppercase tracking-wider">Priority</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-neutral-700 uppercase tracking-wider">Industry</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-neutral-700 uppercase tracking-wider">Last Contacted</th>
                                <th class="px-6 py-3 text-right text-xs font-semibold text-neutral-700 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-neutral-200">
                            @foreach($prospects as $prospect)
                                <tr class="hover:bg-neutral-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <input
                                            type="checkbox"
                                            value="{{ $prospect->id }}"
                                            x-model="selectedIds"
                                            class="rounded text-primary-accent focus:ring-primary-accent"
                                        >
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm font-medium text-primary-brand">
                                                <a href="{{ route('prospects.show', $prospect) }}" class="hover:text-primary-accent">
                                                    {{ $prospect->company_name }}
                                                </a>
                                            </div>
                                            @if($prospect->email)
                                                <div class="text-sm text-neutral-500">{{ $prospect->email }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-neutral-900">{{ $prospect->contact_name ?: '-' }}</div>
                                    @if($prospect->phone)
                                        <div class="text-sm text-neutral-500">{{ $prospect->phone }}</div>
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
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    {{ $prospect->industry ?: '-' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-500">
                                    {{ $prospect->last_contacted_at ? $prospect->last_contacted_at->format('M d, Y') : 'Never' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('prospects.show', $prospect) }}" class="text-primary-accent hover:text-blue-600">View</a>
                                        @can('update', $prospect)
                                            <a href="{{ route('prospects.edit', $prospect) }}" class="text-neutral-600 hover:text-neutral-900">Edit</a>
                                        @endcan
                                        @can('delete', $prospect)
                                            <form action="{{ route('prospects.destroy', $prospect) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this prospect?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-error hover:text-red-700">Delete</button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-neutral-200">
                    {{ $prospects->links() }}
                </div>
            </div>
        @else
            <div class="text-center py-12 text-neutral-500">
                <svg class="w-16 h-16 mx-auto mb-4 text-neutral-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <p class="text-lg font-medium">No prospects found</p>
                <p class="text-sm mt-2">
                    @if(request()->hasAny(['search', 'status', 'priority', 'industry', 'source']))
                        Try adjusting your filters or <a href="{{ route('prospects.index') }}" class="text-primary-accent hover:underline">clear all filters</a>
                    @else
                        Get started by adding your first prospect
                    @endif
                </p>
                @can('create-prospects')
                    <div class="mt-6">
                        <x-ui.button variant="primary" href="{{ route('prospects.create') }}">
                            Add Your First Prospect
                        </x-ui.button>
                    </div>
                @endcan
            </div>
        @endif
    </x-ui.card>
</div>

@if(session('success'))
    <div class="fixed bottom-4 right-4 bg-success text-white px-6 py-4 rounded-md shadow-lg" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        {{ session('success') }}
    </div>
@endif
@endsection
