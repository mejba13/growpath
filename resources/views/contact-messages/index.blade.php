@extends('layouts.dashboard')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-6 flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-bold text-primary-brand">Contact Messages</h2>
                <p class="text-neutral-600 mt-1">Manage customer inquiries and contact form submissions</p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Total Messages</p>
                        <p class="text-3xl font-bold text-primary-brand">{{ $stats['total'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-primary-accent bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">New Messages</p>
                        <p class="text-3xl font-bold text-warning">{{ $stats['new'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-warning bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Read</p>
                        <p class="text-3xl font-bold text-info">{{ $stats['read'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-info bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Replied</p>
                        <p class="text-3xl font-bold text-success">{{ $stats['replied'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-success bg-opacity-10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-success bg-opacity-10 border border-success text-success px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Messages Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-neutral-200">
                    <thead class="bg-neutral-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Subject</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Assigned To</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-neutral-200">
                        @forelse($messages as $message)
                            <tr class="hover:bg-neutral-50 {{ $message->status === 'new' ? 'bg-blue-50' : '' }}">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-900">
                                    {{ $message->created_at->format('M d, Y') }}
                                    <div class="text-xs text-neutral-500">{{ $message->created_at->format('h:i A') }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        @if($message->status === 'new')
                                            <span class="w-2 h-2 bg-warning rounded-full mr-2"></span>
                                        @endif
                                        <div class="text-sm font-medium text-neutral-900">{{ $message->name }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-600">
                                    <a href="mailto:{{ $message->email }}" class="text-primary-accent hover:underline">
                                        {{ $message->email }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-sm text-neutral-900">
                                    {{ Str::limit($message->subject, 50) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($message->status === 'new')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-warning bg-opacity-10 text-warning">
                                            New
                                        </span>
                                    @elseif($message->status === 'read')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-info bg-opacity-10 text-info">
                                            Read
                                        </span>
                                    @elseif($message->status === 'replied')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-success bg-opacity-10 text-success">
                                            Replied
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-neutral-200 text-neutral-700">
                                            {{ ucfirst($message->status) }}
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-600">
                                    {{ $message->assignedUser?->name ?? '-' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('contact-messages.show', $message) }}" class="text-primary-accent hover:text-blue-900 mr-3">
                                        View
                                    </a>
                                    <form action="{{ route('contact-messages.destroy', $message) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-error hover:text-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center text-neutral-500">
                                    <svg class="w-12 h-12 mx-auto mb-4 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p class="text-lg font-medium">No contact messages yet</p>
                                    <p class="text-sm">Messages from your contact form will appear here.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($messages->hasPages())
                <div class="px-6 py-4 border-t border-neutral-200">
                    {{ $messages->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
