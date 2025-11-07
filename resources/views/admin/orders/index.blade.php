@extends('layouts.dashboard')

@section('page-title', 'Orders Management')

@section('content')
<div class="min-h-screen bg-neutral-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-primary-brand mb-2">Orders Management</h1>
            <p class="text-neutral-600">View and manage all customer orders and subscriptions</p>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-success/10 border border-success/20 rounded-lg text-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md border border-neutral-200 p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm text-neutral-600">Total Revenue</p>
                    <div class="w-10 h-10 bg-success/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-primary-brand">${{ number_format($stats['total_revenue'], 2) }}</p>
            </div>

            <div class="bg-white rounded-xl shadow-md border border-neutral-200 p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm text-neutral-600">Total Orders</p>
                    <div class="w-10 h-10 bg-primary-accent/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-primary-brand">{{ number_format($stats['total_orders']) }}</p>
            </div>

            <div class="bg-white rounded-xl shadow-md border border-neutral-200 p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm text-neutral-600">Pending Orders</p>
                    <div class="w-10 h-10 bg-warning/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-primary-brand">{{ number_format($stats['pending_orders']) }}</p>
            </div>

            <div class="bg-white rounded-xl shadow-md border border-neutral-200 p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm text-neutral-600">Completed Orders</p>
                    <div class="w-10 h-10 bg-success/10 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-3xl font-bold text-primary-brand">{{ number_format($stats['completed_orders']) }}</p>
            </div>
        </div>

        <!-- Filters and Search -->
        <div class="bg-white rounded-xl shadow-md border border-neutral-200 p-6 mb-6">
            <form method="GET" action="{{ route('admin.orders.index') }}">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label for="search" class="block text-sm font-medium text-neutral-700 mb-2">Search</label>
                        <input type="text"
                               id="search"
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="Order number, customer..."
                               class="w-full px-4 py-2 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-accent focus:border-primary-accent">
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-neutral-700 mb-2">Status</label>
                        <select id="status"
                                name="status"
                                class="w-full px-4 py-2 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-accent focus:border-primary-accent">
                            <option value="">All Statuses</option>
                            <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="processing" {{ request('status') === 'processing' ? 'selected' : '' }}>Processing</option>
                            <option value="completed" {{ request('status') === 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="failed" {{ request('status') === 'failed' ? 'selected' : '' }}>Failed</option>
                            <option value="refunded" {{ request('status') === 'refunded' ? 'selected' : '' }}>Refunded</option>
                            <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>

                    <div>
                        <label for="date_from" class="block text-sm font-medium text-neutral-700 mb-2">Date From</label>
                        <input type="date"
                               id="date_from"
                               name="date_from"
                               value="{{ request('date_from') }}"
                               class="w-full px-4 py-2 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-accent focus:border-primary-accent">
                    </div>

                    <div>
                        <label for="date_to" class="block text-sm font-medium text-neutral-700 mb-2">Date To</label>
                        <input type="date"
                               id="date_to"
                               name="date_to"
                               value="{{ request('date_to') }}"
                               class="w-full px-4 py-2 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-accent focus:border-primary-accent">
                    </div>
                </div>

                <div class="flex items-center gap-4 mt-4">
                    <button type="submit" class="px-6 py-2 bg-primary-accent hover:bg-blue-700 text-white font-semibold rounded-lg transition-colors">
                        Apply Filters
                    </button>
                    <a href="{{ route('admin.orders.index') }}" class="px-6 py-2 bg-neutral-100 hover:bg-neutral-200 text-neutral-700 font-semibold rounded-lg transition-colors">
                        Clear Filters
                    </a>
                    <a href="{{ route('admin.orders.export', request()->query()) }}" class="ml-auto px-6 py-2 bg-success hover:bg-green-700 text-white font-semibold rounded-lg transition-colors inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Export CSV
                    </a>
                </div>
            </form>
        </div>

        <!-- Orders Table -->
        <div class="bg-white rounded-xl shadow-md border border-neutral-200 overflow-hidden">
            @if($orders->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-neutral-50 border-b border-neutral-200">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Order</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Customer</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Plan</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Amount</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Status</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Date</th>
                            <th class="px-6 py-4 text-right text-sm font-semibold text-neutral-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200">
                        @foreach($orders as $order)
                        <tr class="hover:bg-neutral-50 transition-colors">
                            <td class="px-6 py-4">
                                <div>
                                    <p class="font-semibold text-primary-brand">{{ $order->order_number }}</p>
                                    <p class="text-sm text-neutral-500">{{ ucfirst($order->type) }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <p class="font-medium text-neutral-700">{{ $order->user->name }}</p>
                                    <p class="text-sm text-neutral-500">{{ $order->user->email }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <p class="font-medium text-neutral-700">{{ $order->plan->name ?? 'N/A' }}</p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="font-bold text-primary-brand">${{ number_format($order->total, 2) }}</p>
                                <p class="text-sm text-neutral-500">{{ ucfirst($order->payment_method) }}</p>
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $statusColors = [
                                        'pending' => 'bg-warning/10 text-warning border-warning/20',
                                        'processing' => 'bg-info/10 text-info border-info/20',
                                        'completed' => 'bg-success/10 text-success border-success/20',
                                        'failed' => 'bg-danger/10 text-danger border-danger/20',
                                        'refunded' => 'bg-neutral-100 text-neutral-700 border-neutral-300',
                                        'cancelled' => 'bg-neutral-100 text-neutral-700 border-neutral-300',
                                    ];
                                    $statusColor = $statusColors[$order->status] ?? 'bg-neutral-100 text-neutral-700 border-neutral-300';
                                @endphp
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border {{ $statusColor }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-neutral-700">{{ $order->created_at->format('M d, Y') }}</p>
                                <p class="text-sm text-neutral-500">{{ $order->created_at->format('h:i A') }}</p>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('admin.orders.show', $order) }}"
                                   class="inline-flex items-center px-4 py-2 bg-primary-accent hover:bg-blue-700 text-white font-medium rounded-lg transition-all duration-300 text-sm">
                                    <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($orders->hasPages())
            <div class="px-6 py-4 border-t border-neutral-200">
                {{ $orders->links() }}
            </div>
            @endif

            @else
            <div class="text-center py-16">
                <div class="w-20 h-20 bg-neutral-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-neutral-700 mb-2">No Orders Found</h3>
                <p class="text-neutral-500">Orders will appear here when customers make purchases.</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
