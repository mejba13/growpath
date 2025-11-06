@extends('layouts.dashboard')

@section('content')
<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-6 flex justify-between items-center">
            <div>
                <a href="{{ route('contact-messages.index') }}" class="text-primary-accent hover:text-blue-900 text-sm mb-2 inline-block">
                    ← Back to Contact Messages
                </a>
                <h2 class="text-3xl font-bold text-primary-brand">Contact Message Details</h2>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-success bg-opacity-10 border border-success text-success px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Message Details -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <div class="flex items-start justify-between mb-6">
                        <div>
                            <h3 class="text-xl font-semibold text-primary-brand mb-1">{{ $contactMessage->subject }}</h3>
                            <p class="text-sm text-neutral-500">Received {{ $contactMessage->created_at->diffForHumans() }}</p>
                        </div>
                        @if($contactMessage->status === 'new')
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-warning bg-opacity-10 text-warning">
                                New
                            </span>
                        @elseif($contactMessage->status === 'read')
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-info bg-opacity-10 text-info">
                                Read
                            </span>
                        @elseif($contactMessage->status === 'replied')
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-success bg-opacity-10 text-success">
                                Replied
                            </span>
                        @endif
                    </div>

                    <!-- Sender Info -->
                    <div class="border-t border-b border-neutral-200 py-4 mb-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-neutral-500">From</p>
                                <p class="font-medium text-neutral-900">{{ $contactMessage->name }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-neutral-500">Email</p>
                                <a href="mailto:{{ $contactMessage->email }}" class="font-medium text-primary-accent hover:underline">
                                    {{ $contactMessage->email }}
                                </a>
                            </div>
                            <div>
                                <p class="text-sm text-neutral-500">Date</p>
                                <p class="font-medium text-neutral-900">{{ $contactMessage->created_at->format('M d, Y h:i A') }}</p>
                            </div>
                            @if($contactMessage->read_at)
                                <div>
                                    <p class="text-sm text-neutral-500">Read At</p>
                                    <p class="font-medium text-neutral-900">{{ $contactMessage->read_at->format('M d, Y h:i A') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Message Content -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-neutral-700 mb-2">Message</h4>
                        <div class="bg-neutral-50 rounded-lg p-4">
                            <p class="text-neutral-800 whitespace-pre-wrap">{{ $contactMessage->message }}</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-3">
                        <a href="mailto:{{ $contactMessage->email }}?subject=Re: {{ $contactMessage->subject }}"
                           class="px-4 py-2 bg-primary-accent text-white rounded-md hover:bg-blue-700 transition-colors">
                            Reply via Email
                        </a>
                        @if($contactMessage->status !== 'replied')
                            <form action="{{ route('contact-messages.mark-replied', $contactMessage) }}" method="POST" class="inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="px-4 py-2 bg-success text-white rounded-md hover:bg-green-700 transition-colors">
                                    Mark as Replied
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

                <!-- Internal Notes -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-lg font-semibold text-primary-brand mb-4">Internal Notes</h4>
                    <form action="{{ route('contact-messages.update', $contactMessage) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="status" value="{{ $contactMessage->status }}">
                        <input type="hidden" name="assigned_to" value="{{ $contactMessage->assigned_to }}">

                        <textarea
                            name="internal_notes"
                            rows="4"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent"
                            placeholder="Add internal notes about this message..."
                        >{{ old('internal_notes', $contactMessage->internal_notes) }}</textarea>

                        <button type="submit" class="mt-3 px-4 py-2 bg-neutral-700 text-white rounded-md hover:bg-neutral-800 transition-colors">
                            Save Notes
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Update Status -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h4 class="text-lg font-semibold text-primary-brand mb-4">Update Status</h4>
                    <form action="{{ route('contact-messages.update', $contactMessage) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="internal_notes" value="{{ $contactMessage->internal_notes }}">

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-neutral-700 mb-2">Status</label>
                            <select name="status" class="w-full px-4 py-2 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                                <option value="new" {{ $contactMessage->status === 'new' ? 'selected' : '' }}>New</option>
                                <option value="read" {{ $contactMessage->status === 'read' ? 'selected' : '' }}>Read</option>
                                <option value="replied" {{ $contactMessage->status === 'replied' ? 'selected' : '' }}>Replied</option>
                                <option value="archived" {{ $contactMessage->status === 'archived' ? 'selected' : '' }}>Archived</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-neutral-700 mb-2">Assign To</label>
                            <select name="assigned_to" class="w-full px-4 py-2 border border-neutral-300 rounded-md focus:ring-3 focus:ring-primary-accent">
                                <option value="">Unassigned</option>
                                @foreach(\App\Models\User::all() as $user)
                                    <option value="{{ $user->id }}" {{ $contactMessage->assigned_to == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="w-full px-4 py-2 bg-primary-accent text-white rounded-md hover:bg-blue-700 transition-colors">
                            Update
                        </button>
                    </form>
                </div>

                <!-- Quick Info -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-lg font-semibold text-primary-brand mb-4">Quick Info</h4>
                    <dl class="space-y-3">
                        <div>
                            <dt class="text-sm text-neutral-500">Message ID</dt>
                            <dd class="text-sm font-medium text-neutral-900">#{{ $contactMessage->id }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-neutral-500">Submitted</dt>
                            <dd class="text-sm font-medium text-neutral-900">{{ $contactMessage->created_at->format('M d, Y') }}</dd>
                        </div>
                        @if($contactMessage->assignedUser)
                            <div>
                                <dt class="text-sm text-neutral-500">Assigned To</dt>
                                <dd class="text-sm font-medium text-neutral-900">{{ $contactMessage->assignedUser->name }}</dd>
                            </div>
                        @endif
                        @if($contactMessage->replied_at)
                            <div>
                                <dt class="text-sm text-neutral-500">Replied At</dt>
                                <dd class="text-sm font-medium text-neutral-900">{{ $contactMessage->replied_at->format('M d, Y') }}</dd>
                            </div>
                        @endif
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
