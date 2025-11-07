@extends('layouts.app')

@section('title', 'Order Details - ' . $order->order_number)

@section('content')
<div class="min-h-screen bg-neutral-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Button -->
        <div class="mb-8">
            <a href="{{ route('admin.orders.index') }}" class="inline-flex items-center text-primary-accent hover:text-blue-700 font-medium transition-colors mb-4">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Orders
            </a>
            <h1 class="text-4xl font-bold text-primary-brand mb-2">Order {{ $order->order_number }}</h1>
            <p class="text-neutral-600">{{ $order->created_at->format('F d, Y \a\t h:i A') }}</p>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-success/10 border border-success/20 rounded-lg text-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Order Details -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Order Status -->
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-8">
                    <h2 class="text-2xl font-bold text-primary-brand mb-6">Order Status</h2>

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

                    <div class="mb-6">
                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold border {{ $statusColor }}">
                            <span class="w-2 h-2 rounded-full mr-2 {{ str_replace('/10', '', explode(' ', $statusColor)[0]) }}"></span>
                            {{ ucfirst($order->status) }}
                        </span>
                    </div>

                    <!-- Update Status Form -->
                    <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="space-y-4">
                        @csrf
                        @method('PATCH')

                        <div>
                            <label for="status" class="block text-sm font-medium text-neutral-700 mb-2">Update Status</label>
                            <select id="status"
                                    name="status"
                                    class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-accent focus:border-primary-accent">
                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                                <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="failed" {{ $order->status === 'failed' ? 'selected' : '' }}>Failed</option>
                                <option value="refunded" {{ $order->status === 'refunded' ? 'selected' : '' }}>Refunded</option>
                                <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </div>

                        <div>
                            <label for="notes" class="block text-sm font-medium text-neutral-700 mb-2">Admin Notes</label>
                            <textarea id="notes"
                                      name="notes"
                                      rows="4"
                                      class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary-accent focus:border-primary-accent"
                                      placeholder="Add notes about this order...">{{ old('notes', $order->notes) }}</textarea>
                        </div>

                        <button type="submit"
                                class="w-full px-6 py-3 bg-primary-accent hover:bg-blue-700 text-white font-semibold rounded-xl transition-all duration-300">
                            Update Order
                        </button>
                    </form>
                </div>

                <!-- Order Items -->
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-8">
                    <h2 class="text-2xl font-bold text-primary-brand mb-6">Order Details</h2>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-neutral-50 rounded-xl border border-neutral-200">
                            <div class="flex items-center gap-4">
                                <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-primary-accent to-blue-700 rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-primary-brand text-lg">{{ $order->plan->name ?? 'N/A' }} Plan</p>
                                    <p class="text-sm text-neutral-600">{{ ucfirst($order->type) }} Subscription</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-bold text-primary-brand">${{ number_format($order->total, 2) }}</p>
                            </div>
                        </div>

                        <!-- Pricing Breakdown -->
                        <div class="bg-neutral-50 rounded-xl p-6 border border-neutral-200 space-y-3">
                            <div class="flex justify-between text-neutral-700">
                                <span>Subtotal</span>
                                <span class="font-medium">${{ number_format($order->subtotal, 2) }}</span>
                            </div>

                            @if($order->discount > 0)
                            <div class="flex justify-between text-success">
                                <span>Discount</span>
                                <span class="font-medium">-${{ number_format($order->discount, 2) }}</span>
                            </div>
                            @endif

                            @if($order->tax > 0)
                            <div class="flex justify-between text-neutral-700">
                                <span>Tax</span>
                                <span class="font-medium">${{ number_format($order->tax, 2) }}</span>
                            </div>
                            @endif

                            <div class="flex justify-between items-center pt-3 border-t border-neutral-200">
                                <span class="text-lg font-bold text-primary-brand">Total</span>
                                <span class="text-2xl font-bold text-primary-brand">${{ number_format($order->total, 2) }} {{ strtoupper($order->currency) }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Information -->
                @if($order->payments->count() > 0)
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-8">
                    <h2 class="text-2xl font-bold text-primary-brand mb-6">Payment Information</h2>

                    <div class="space-y-4">
                        @foreach($order->payments as $payment)
                        <div class="p-4 bg-neutral-50 rounded-xl border border-neutral-200">
                            <div class="flex items-center justify-between mb-3">
                                <div>
                                    <p class="font-semibold text-primary-brand">{{ $payment->transaction_id }}</p>
                                    <p class="text-sm text-neutral-600">{{ ucfirst($payment->payment_gateway) }}</p>
                                </div>
                                @php
                                    $paymentStatusColors = [
                                        'pending' => 'bg-warning/10 text-warning border-warning/20',
                                        'succeeded' => 'bg-success/10 text-success border-success/20',
                                        'failed' => 'bg-danger/10 text-danger border-danger/20',
                                    ];
                                    $paymentStatusColor = $paymentStatusColors[$payment->status] ?? 'bg-neutral-100 text-neutral-700 border-neutral-300';
                                @endphp
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border {{ $paymentStatusColor }}">
                                    {{ ucfirst($payment->status) }}
                                </span>
                            </div>

                            <div class="grid grid-cols-2 gap-4 text-sm">
                                @if($payment->card_brand)
                                <div>
                                    <p class="text-neutral-600">Card</p>
                                    <p class="font-medium text-neutral-700">{{ ucfirst($payment->card_brand) }} ****{{ $payment->card_last4 }}</p>
                                </div>
                                @endif

                                <div>
                                    <p class="text-neutral-600">Amount</p>
                                    <p class="font-bold text-primary-brand">${{ number_format($payment->amount, 2) }}</p>
                                </div>

                                <div>
                                    <p class="text-neutral-600">Date</p>
                                    <p class="font-medium text-neutral-700">{{ $payment->created_at->format('M d, Y h:i A') }}</p>
                                </div>

                                @if($payment->error_message)
                                <div class="col-span-2">
                                    <p class="text-neutral-600">Error</p>
                                    <p class="font-medium text-danger">{{ $payment->error_message }}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Customer Information -->
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-6">
                    <h3 class="text-lg font-bold text-primary-brand mb-4">Customer Information</h3>
                    <div class="space-y-3">
                        <div>
                            <p class="text-sm text-neutral-600 mb-1">Name</p>
                            <p class="font-semibold text-neutral-700">{{ $order->user->name }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-neutral-600 mb-1">Email</p>
                            <p class="font-semibold text-neutral-700">{{ $order->user->email }}</p>
                        </div>

                        @if($order->user->currentCompany)
                        <div>
                            <p class="text-sm text-neutral-600 mb-1">Company</p>
                            <p class="font-semibold text-neutral-700">{{ $order->user->currentCompany->name }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Billing Details -->
                @if($order->billing_details)
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-6">
                    <h3 class="text-lg font-bold text-primary-brand mb-4">Billing Address</h3>
                    <div class="space-y-2 text-sm text-neutral-700">
                        @foreach($order->billing_details as $key => $value)
                        <p><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ $value }}</p>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Subscription Details -->
                @if($order->subscription)
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-6">
                    <h3 class="text-lg font-bold text-primary-brand mb-4">Subscription</h3>
                    <div class="space-y-3">
                        <div>
                            <p class="text-sm text-neutral-600 mb-1">Status</p>
                            <p class="font-semibold text-neutral-700">{{ ucfirst($order->subscription->status) }}</p>
                        </div>

                        @if($order->subscription->current_period_end)
                        <div>
                            <p class="text-sm text-neutral-600 mb-1">Next Billing</p>
                            <p class="font-semibold text-neutral-700">{{ $order->subscription->current_period_end->format('M d, Y') }}</p>
                        </div>
                        @endif

                        <a href="{{ route('subscriptions.index') }}" class="inline-flex items-center text-primary-accent hover:text-blue-700 font-medium text-sm transition-colors">
                            View Subscription
                            <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endif

                <!-- Invoice -->
                @if($order->invoice)
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-6">
                    <h3 class="text-lg font-bold text-primary-brand mb-4">Invoice</h3>
                    <div class="space-y-3">
                        <div>
                            <p class="text-sm text-neutral-600 mb-1">Invoice Number</p>
                            <p class="font-semibold text-neutral-700">{{ $order->invoice->invoice_number }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-neutral-600 mb-1">Status</p>
                            <p class="font-semibold text-neutral-700">{{ ucfirst($order->invoice->status) }}</p>
                        </div>

                        <a href="{{ route('subscriptions.invoices.download', $order->invoice->id) }}"
                           class="inline-flex items-center px-4 py-2 bg-primary-accent hover:bg-blue-700 text-white font-medium rounded-lg transition-all duration-300 text-sm w-full justify-center">
                            <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Download Invoice
                        </a>
                    </div>
                </div>
                @endif

                <!-- Order Timeline -->
                <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-6">
                    <h3 class="text-lg font-bold text-primary-brand mb-4">Order Timeline</h3>
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <div class="flex-shrink-0 w-8 h-8 bg-success/10 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-neutral-700">Order Created</p>
                                <p class="text-sm text-neutral-500">{{ $order->created_at->format('M d, Y h:i A') }}</p>
                            </div>
                        </div>

                        @if($order->paid_at)
                        <div class="flex gap-3">
                            <div class="flex-shrink-0 w-8 h-8 bg-success/10 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-neutral-700">Payment Received</p>
                                <p class="text-sm text-neutral-500">{{ $order->paid_at->format('M d, Y h:i A') }}</p>
                            </div>
                        </div>
                        @endif

                        @if($order->updated_at != $order->created_at)
                        <div class="flex gap-3">
                            <div class="flex-shrink-0 w-8 h-8 bg-info/10 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-neutral-700">Last Updated</p>
                                <p class="text-sm text-neutral-500">{{ $order->updated_at->format('M d, Y h:i A') }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
