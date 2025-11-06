<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        // Save contact message to database
        ContactMessage::create($validated);

        // TODO: Send email notification to admin

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    /**
     * Display all contact messages in dashboard.
     */
    public function index()
    {
        $messages = ContactMessage::with('assignedUser')
            ->latest()
            ->paginate(20);

        $stats = [
            'total' => ContactMessage::count(),
            'new' => ContactMessage::where('status', 'new')->count(),
            'read' => ContactMessage::where('status', 'read')->count(),
            'replied' => ContactMessage::where('status', 'replied')->count(),
        ];

        return view('contact-messages.index', compact('messages', 'stats'));
    }

    /**
     * Show individual contact message.
     */
    public function show(ContactMessage $contactMessage)
    {
        $contactMessage->load('assignedUser');
        $contactMessage->markAsRead();

        return view('contact-messages.show', compact('contactMessage'));
    }

    /**
     * Update contact message status.
     */
    public function update(Request $request, ContactMessage $contactMessage)
    {
        $validated = $request->validate([
            'status' => ['required', 'in:new,read,replied,archived'],
            'assigned_to' => ['nullable', 'exists:users,id'],
            'internal_notes' => ['nullable', 'string', 'max:5000'],
        ]);

        $contactMessage->update($validated);

        return back()->with('success', 'Contact message updated successfully.');
    }

    /**
     * Mark message as replied.
     */
    public function markAsReplied(ContactMessage $contactMessage)
    {
        $contactMessage->markAsReplied();

        return back()->with('success', 'Message marked as replied.');
    }

    /**
     * Delete contact message.
     */
    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()->route('contact-messages.index')
            ->with('success', 'Contact message deleted successfully.');
    }
}
