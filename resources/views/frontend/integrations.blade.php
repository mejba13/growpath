@extends('layouts.frontend')

@section('title', 'Integrations - Connect Your Favorite Tools | GrowPath')
@section('description', 'Connect GrowPath CRM with your favorite business tools. Seamless integrations with popular platforms.')
@section('keywords', 'integrations, third-party apps, CRM integrations, email integration, calendar sync')

@section('content')
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-6">Integrations</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            Connect GrowPath with the tools you already use to streamline your workflow.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary-brand text-center mb-12">Popular Integrations</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="border border-neutral-200 rounded-lg p-8 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-white text-2xl font-bold">@</span>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-2">Email Integration</h3>
                <p class="text-neutral-600 mb-4">Connect Gmail, Outlook, and other email providers to sync communications.</p>
                <a href="#" class="text-primary-accent hover:underline text-sm font-semibold">Learn More →</a>
            </div>

            <div class="border border-neutral-200 rounded-lg p-8 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-white text-2xl font-bold">📅</span>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-2">Calendar Sync</h3>
                <p class="text-neutral-600 mb-4">Sync follow-ups with Google Calendar, Outlook Calendar, and more.</p>
                <a href="#" class="text-primary-accent hover:underline text-sm font-semibold">Learn More →</a>
            </div>

            <div class="border border-neutral-200 rounded-lg p-8 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-purple-600 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-white text-2xl font-bold">💬</span>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-2">Slack</h3>
                <p class="text-neutral-600 mb-4">Get notifications and updates directly in your Slack channels.</p>
                <a href="#" class="text-primary-accent hover:underline text-sm font-semibold">Learn More →</a>
            </div>

            <div class="border border-neutral-200 rounded-lg p-8 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-orange-600 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-white text-2xl font-bold">📊</span>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-2">Analytics</h3>
                <p class="text-neutral-600 mb-4">Connect with Google Analytics, Mixpanel, and other analytics tools.</p>
                <a href="#" class="text-primary-accent hover:underline text-sm font-semibold">Learn More →</a>
            </div>

            <div class="border border-neutral-200 rounded-lg p-8 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-red-600 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-white text-2xl font-bold">📄</span>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-2">Document Storage</h3>
                <p class="text-neutral-600 mb-4">Integrate with Dropbox, Google Drive, and OneDrive.</p>
                <a href="#" class="text-primary-accent hover:underline text-sm font-semibold">Learn More →</a>
            </div>

            <div class="border border-neutral-200 rounded-lg p-8 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mb-4">
                    <span class="text-white text-2xl font-bold">🔗</span>
                </div>
                <h3 class="text-xl font-semibold text-primary-brand mb-2">Zapier</h3>
                <p class="text-neutral-600 mb-4">Connect with 3,000+ apps through Zapier integration.</p>
                <a href="#" class="text-primary-accent hover:underline text-sm font-semibold">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-primary-accent text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-6">Need a Custom Integration?</h2>
        <p class="text-xl text-blue-100 mb-8">
            Our API makes it easy to build custom integrations with any platform.
        </p>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('api') }}" class="px-8 py-4 bg-white text-primary-accent rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                View API Docs
            </a>
            <a href="{{ route('contact') }}" class="px-8 py-4 bg-transparent border-2 border-white rounded-lg font-semibold hover:bg-white hover:text-primary-accent transition-colors">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection
