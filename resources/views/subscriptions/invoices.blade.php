@extends('layouts.app')

@section('title', 'Invoices - ' . $subscription->plan->name . ' Subscription')

@section('content')
<div class="min-h-screen bg-neutral-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <a href="{{ route('subscriptions.index') }}" class="inline-flex items-center text-primary-accent hover:text-blue-700 font-medium transition-colors mb-4">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Subscription
            </a>
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-bold text-primary-brand mb-2">Invoices</h1>
                    <p class="text-neutral-600">{{ $subscription->plan->name }} Subscription</p>
                </div>
            </div>
        </div>

        <!-- Invoices List -->
        <div class="bg-white rounded-2xl shadow-md border border-neutral-200 overflow-hidden">
            @if($invoices->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-neutral-50 border-b border-neutral-200">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Invoice</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Date</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Status</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-700">Amount</th>
                            <th class="px-6 py-4 text-right text-sm font-semibold text-neutral-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200">
                        @foreach($invoices as $invoice)
                        <tr class="hover:bg-neutral-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="flex-shrink-0 w-10 h-10 bg-primary-accent/10 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-primary-brand">{{ $invoice->invoice_number }}</p>
                                        <p class="text-sm text-neutral-600">{{ $subscription->plan->name }} Plan</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div>
                                    <p class="text-neutral-700 font-medium">{{ $invoice->issue_date->format('M d, Y') }}</p>
                                    @if($invoice->due_date)
                                    <p class="text-sm text-neutral-500">Due: {{ $invoice->due_date->format('M d, Y') }}</p>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $statusColors = [
                                        'paid' => 'bg-success/10 text-success border-success/20',
                                        'draft' => 'bg-neutral-100 text-neutral-700 border-neutral-300',
                                        'sent' => 'bg-info/10 text-info border-info/20',
                                        'overdue' => 'bg-danger/10 text-danger border-danger/20',
                                        'cancelled' => 'bg-neutral-100 text-neutral-600 border-neutral-300',
                                        'refunded' => 'bg-warning/10 text-warning border-warning/20',
                                    ];
                                    $statusColor = $statusColors[$invoice->status] ?? 'bg-neutral-100 text-neutral-700 border-neutral-300';
                                @endphp
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium border {{ $statusColor }}">
                                    {{ ucfirst($invoice->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="font-bold text-primary-brand">${{ number_format($invoice->total, 2) }}</p>
                                @if($invoice->paid_date)
                                <p class="text-sm text-neutral-500">Paid: {{ $invoice->paid_date->format('M d, Y') }}</p>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('subscriptions.invoices.download', $invoice->id) }}"
                                   class="inline-flex items-center px-4 py-2 bg-primary-accent hover:bg-blue-700 text-white font-medium rounded-lg transition-all duration-300 text-sm">
                                    <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    Download
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($invoices->hasPages())
            <div class="px-6 py-4 border-t border-neutral-200">
                {{ $invoices->links() }}
            </div>
            @endif

            @else
            <div class="text-center py-16">
                <div class="w-20 h-20 bg-neutral-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-neutral-700 mb-2">No Invoices Found</h3>
                <p class="text-neutral-500">Your invoices will appear here once they're generated.</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
