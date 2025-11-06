@extends('layouts.frontend')

@section('title', 'API Documentation - Integrate with GrowPath | GrowPath')
@section('description', 'Integrate GrowPath CRM with your applications using our RESTful API. Complete API documentation for developers.')
@section('keywords', 'API, REST API, API documentation, integration, developer API, webhooks')

@section('content')
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-bold mb-6">API Documentation</h1>
        <p class="text-xl text-blue-100 max-w-3xl">
            Powerful API to integrate GrowPath with your existing tools and workflows.
        </p>
    </div>
</section>

<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <aside class="lg:col-span-1">
                <nav class="sticky top-8 space-y-4">
                    <a href="#getting-started" class="block text-neutral-700 hover:text-primary-accent">Getting Started</a>
                    <a href="#authentication" class="block text-neutral-700 hover:text-primary-accent">Authentication</a>
                    <a href="#endpoints" class="block text-neutral-700 hover:text-primary-accent">Endpoints</a>
                    <a href="#webhooks" class="block text-neutral-700 hover:text-primary-accent">Webhooks</a>
                    <a href="#rate-limits" class="block text-neutral-700 hover:text-primary-accent">Rate Limits</a>
                    <a href="#errors" class="block text-neutral-700 hover:text-primary-accent">Error Handling</a>
                </nav>
            </aside>

            <div class="lg:col-span-3">
                <div id="getting-started" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-brand mb-4">Getting Started</h2>
                    <p class="text-neutral-700 mb-4">
                        The GrowPath API is a RESTful API that allows you to programmatically interact with your CRM data. All API requests should be made to:
                    </p>
                    <div class="bg-neutral-900 text-white rounded-lg p-4 mb-4">
                        <pre><code>https://api.growpath.com/v1</code></pre>
                    </div>
                </div>

                <div id="authentication" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-brand mb-4">Authentication</h2>
                    <p class="text-neutral-700 mb-4">
                        All API requests require authentication using an API token. Include your token in the Authorization header:
                    </p>
                    <div class="bg-neutral-900 text-white rounded-lg p-4 mb-4">
                        <pre><code>Authorization: Bearer YOUR_API_TOKEN</code></pre>
                    </div>
                    <p class="text-neutral-700 mb-4">
                        Generate your API token from Settings → API Keys in your dashboard.
                    </p>
                </div>

                <div id="endpoints" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-brand mb-4">Core Endpoints</h2>

                    <div class="space-y-6">
                        <div class="border border-neutral-200 rounded-lg p-6">
                            <h3 class="text-xl font-semibold text-primary-brand mb-3">Prospects</h3>
                            <div class="space-y-4">
                                <div>
                                    <p class="font-mono text-sm bg-neutral-50 p-2 rounded">GET /v1/prospects</p>
                                    <p class="text-sm text-neutral-600 mt-2">List all prospects</p>
                                </div>
                                <div>
                                    <p class="font-mono text-sm bg-neutral-50 p-2 rounded">POST /v1/prospects</p>
                                    <p class="text-sm text-neutral-600 mt-2">Create a new prospect</p>
                                </div>
                                <div>
                                    <p class="font-mono text-sm bg-neutral-50 p-2 rounded">GET /v1/prospects/:id</p>
                                    <p class="text-sm text-neutral-600 mt-2">Get a specific prospect</p>
                                </div>
                                <div>
                                    <p class="font-mono text-sm bg-neutral-50 p-2 rounded">PUT /v1/prospects/:id</p>
                                    <p class="text-sm text-neutral-600 mt-2">Update a prospect</p>
                                </div>
                                <div>
                                    <p class="font-mono text-sm bg-neutral-50 p-2 rounded">DELETE /v1/prospects/:id</p>
                                    <p class="text-sm text-neutral-600 mt-2">Delete a prospect</p>
                                </div>
                            </div>
                        </div>

                        <div class="border border-neutral-200 rounded-lg p-6">
                            <h3 class="text-xl font-semibold text-primary-brand mb-3">Example Request</h3>
                            <div class="bg-neutral-900 text-white rounded-lg p-4">
<pre><code>curl -X POST https://api.growpath.com/v1/prospects \
  -H "Authorization: Bearer YOUR_API_TOKEN" \
  -H "Content-Type: application/json" \
  -d '{
    "name": "John Doe",
    "email": "john@example.com",
    "company": "Acme Inc",
    "status": "new",
    "value": 5000
  }'</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="webhooks" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-brand mb-4">Webhooks</h2>
                    <p class="text-neutral-700 mb-4">
                        Subscribe to real-time events in your CRM:
                    </p>
                    <ul class="list-disc list-inside text-neutral-700 mb-4">
                        <li>prospect.created</li>
                        <li>prospect.updated</li>
                        <li>prospect.converted</li>
                        <li>client.created</li>
                        <li>follow_up.completed</li>
                    </ul>
                </div>

                <div id="rate-limits" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary-brand mb-4">Rate Limits</h2>
                    <ul class="list-disc list-inside text-neutral-700">
                        <li>Starter Plan: 100 requests/minute</li>
                        <li>Professional Plan: 500 requests/minute</li>
                        <li>Enterprise Plan: 2000 requests/minute</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
