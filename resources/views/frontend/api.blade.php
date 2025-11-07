@extends('layouts.frontend')

@section('title', 'API Documentation - Integrate with GrowPath | GrowPath')
@section('description', 'Integrate GrowPath CRM with your applications using our RESTful API. Complete API documentation for developers.')
@section('keywords', 'API, REST API, API documentation, integration, developer API, webhooks')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-900 via-neutral-800 to-primary-brand py-24 lg:py-32">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 bg-primary-accent rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary-accent rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Eyebrow Badge -->
        <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 mb-8 animate-fade-in">
            <span class="w-2 h-2 bg-gradient-to-r from-primary-accent to-secondary-accent rounded-full animate-pulse"></span>
            <span class="text-sm font-medium bg-gradient-to-r from-primary-accent to-secondary-accent bg-clip-text text-transparent">DEVELOPER RESOURCES</span>
        </div>

        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-white mb-6 leading-tight animate-slide-up">
            GrowPath <span class="bg-gradient-to-r from-primary-accent to-secondary-accent bg-clip-text text-transparent">API</span>
        </h1>
        <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl leading-relaxed animate-slide-up">
            Powerful RESTful API to integrate GrowPath with your existing tools and workflows. Build custom integrations and automate your CRM.
        </p>
    </div>
</section>

<!-- Documentation Section -->
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Sidebar Navigation -->
            <aside class="lg:col-span-1">
                <div class="lg:sticky lg:top-8 space-y-2">
                    <h3 class="text-sm font-bold text-primary-brand mb-4 uppercase tracking-wider">On This Page</h3>
                    <nav class="space-y-1">
                        <a href="#getting-started" class="group flex items-center px-3 py-2 text-neutral-700 hover:text-primary-accent hover:bg-neutral-50 rounded-lg transition-all duration-200">
                            <svg class="w-4 h-4 mr-3 opacity-0 -ml-7 group-hover:opacity-100 group-hover:ml-0 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                            <span>Getting Started</span>
                        </a>
                        <a href="#authentication" class="group flex items-center px-3 py-2 text-neutral-700 hover:text-primary-accent hover:bg-neutral-50 rounded-lg transition-all duration-200">
                            <svg class="w-4 h-4 mr-3 opacity-0 -ml-7 group-hover:opacity-100 group-hover:ml-0 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                            <span>Authentication</span>
                        </a>
                        <a href="#endpoints" class="group flex items-center px-3 py-2 text-neutral-700 hover:text-primary-accent hover:bg-neutral-50 rounded-lg transition-all duration-200">
                            <svg class="w-4 h-4 mr-3 opacity-0 -ml-7 group-hover:opacity-100 group-hover:ml-0 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                            <span>Endpoints</span>
                        </a>
                        <a href="#webhooks" class="group flex items-center px-3 py-2 text-neutral-700 hover:text-primary-accent hover:bg-neutral-50 rounded-lg transition-all duration-200">
                            <svg class="w-4 h-4 mr-3 opacity-0 -ml-7 group-hover:opacity-100 group-hover:ml-0 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                            <span>Webhooks</span>
                        </a>
                        <a href="#rate-limits" class="group flex items-center px-3 py-2 text-neutral-700 hover:text-primary-accent hover:bg-neutral-50 rounded-lg transition-all duration-200">
                            <svg class="w-4 h-4 mr-3 opacity-0 -ml-7 group-hover:opacity-100 group-hover:ml-0 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                            <span>Rate Limits</span>
                        </a>
                    </nav>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="lg:col-span-3">
                <!-- Getting Started -->
                <div id="getting-started" class="mb-16 scroll-mt-8">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-primary-accent to-blue-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-primary-brand">Getting Started</h2>
                    </div>
                    <p class="text-lg text-neutral-700 mb-6 leading-relaxed">
                        The GrowPath API is a RESTful API that allows you to programmatically interact with your CRM data. All API requests should be made to:
                    </p>
                    <div class="bg-neutral-900 text-white rounded-xl p-6 mb-6 border border-neutral-700">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-sm font-semibold text-neutral-400">BASE URL</span>
                        </div>
                        <pre class="text-primary-accent"><code>https://api.growpath.com/v1</code></pre>
                    </div>
                </div>

                <!-- Authentication -->
                <div id="authentication" class="mb-16 scroll-mt-8">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-secondary-accent to-purple-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-primary-brand">Authentication</h2>
                    </div>
                    <p class="text-lg text-neutral-700 mb-6 leading-relaxed">
                        All API requests require authentication using an API token. Include your token in the Authorization header:
                    </p>
                    <div class="bg-neutral-900 text-white rounded-xl p-6 mb-6 border border-neutral-700">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-sm font-semibold text-neutral-400">HEADER</span>
                        </div>
                        <pre class="text-emerald-400"><code>Authorization: Bearer YOUR_API_TOKEN</code></pre>
                    </div>
                    <div class="bg-blue-50 border-l-4 border-primary-accent rounded-r-xl p-6">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-primary-accent mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm text-neutral-700">
                                <strong class="font-semibold">Tip:</strong> Generate your API token from <strong>Settings → API Keys</strong> in your dashboard.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Endpoints -->
                <div id="endpoints" class="mb-16 scroll-mt-8">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-success to-emerald-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-primary-brand">Core Endpoints</h2>
                    </div>

                    <div class="space-y-6">
                        <!-- Prospects Endpoints -->
                        <div class="bg-white border-2 border-neutral-100 rounded-2xl p-6 hover:border-primary-accent hover:shadow-xl transition-all duration-300">
                            <h3 class="text-2xl font-bold text-primary-brand mb-6">Prospects</h3>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-bold bg-success/10 text-success border border-success/20 mr-4">GET</span>
                                    <div class="flex-1">
                                        <p class="font-mono text-sm font-semibold text-neutral-800 mb-1">/v1/prospects</p>
                                        <p class="text-sm text-neutral-600">List all prospects with pagination</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-bold bg-primary-accent/10 text-primary-accent border border-primary-accent/20 mr-4">POST</span>
                                    <div class="flex-1">
                                        <p class="font-mono text-sm font-semibold text-neutral-800 mb-1">/v1/prospects</p>
                                        <p class="text-sm text-neutral-600">Create a new prospect</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-bold bg-success/10 text-success border border-success/20 mr-4">GET</span>
                                    <div class="flex-1">
                                        <p class="font-mono text-sm font-semibold text-neutral-800 mb-1">/v1/prospects/:id</p>
                                        <p class="text-sm text-neutral-600">Get a specific prospect by ID</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-bold bg-warning/10 text-warning border border-warning/20 mr-4">PUT</span>
                                    <div class="flex-1">
                                        <p class="font-mono text-sm font-semibold text-neutral-800 mb-1">/v1/prospects/:id</p>
                                        <p class="text-sm text-neutral-600">Update an existing prospect</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-bold bg-error/10 text-error border border-error/20 mr-4">DELETE</span>
                                    <div class="flex-1">
                                        <p class="font-mono text-sm font-semibold text-neutral-800 mb-1">/v1/prospects/:id</p>
                                        <p class="text-sm text-neutral-600">Delete a prospect permanently</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Example Request -->
                        <div class="bg-neutral-900 border border-neutral-700 rounded-2xl overflow-hidden">
                            <div class="bg-neutral-800 px-6 py-3 border-b border-neutral-700">
                                <span class="text-sm font-semibold text-neutral-300">Example Request</span>
                            </div>
                            <div class="p-6">
<pre class="text-white text-sm"><code>curl -X POST https://api.growpath.com/v1/prospects \
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

                <!-- Webhooks -->
                <div id="webhooks" class="mb-16 scroll-mt-8">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-warning to-orange-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-primary-brand">Webhooks</h2>
                    </div>
                    <p class="text-lg text-neutral-700 mb-6 leading-relaxed">
                        Subscribe to real-time events in your CRM and get instant notifications:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center px-4 py-3 bg-neutral-50 rounded-xl border border-neutral-200">
                            <svg class="w-5 h-5 text-success mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-mono text-sm text-neutral-700">prospect.created</span>
                        </div>
                        <div class="flex items-center px-4 py-3 bg-neutral-50 rounded-xl border border-neutral-200">
                            <svg class="w-5 h-5 text-success mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-mono text-sm text-neutral-700">prospect.updated</span>
                        </div>
                        <div class="flex items-center px-4 py-3 bg-neutral-50 rounded-xl border border-neutral-200">
                            <svg class="w-5 h-5 text-success mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-mono text-sm text-neutral-700">prospect.converted</span>
                        </div>
                        <div class="flex items-center px-4 py-3 bg-neutral-50 rounded-xl border border-neutral-200">
                            <svg class="w-5 h-5 text-success mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-mono text-sm text-neutral-700">client.created</span>
                        </div>
                        <div class="flex items-center px-4 py-3 bg-neutral-50 rounded-xl border border-neutral-200">
                            <svg class="w-5 h-5 text-success mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-mono text-sm text-neutral-700">follow_up.completed</span>
                        </div>
                    </div>
                </div>

                <!-- Rate Limits -->
                <div id="rate-limits" class="mb-16 scroll-mt-8">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-error to-red-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-primary-brand">Rate Limits</h2>
                    </div>
                    <p class="text-lg text-neutral-700 mb-6 leading-relaxed">
                        API rate limits vary by plan tier to ensure optimal performance for all users:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-gradient-to-br from-neutral-50 to-blue-50 border-2 border-neutral-200 rounded-2xl p-6 text-center">
                            <div class="text-4xl font-bold text-primary-brand mb-2">100</div>
                            <div class="text-sm text-neutral-600 mb-1">requests/minute</div>
                            <div class="text-xs font-semibold text-neutral-500 uppercase tracking-wider">Starter Plan</div>
                        </div>
                        <div class="bg-gradient-to-br from-primary-accent/10 to-blue-50 border-2 border-primary-accent rounded-2xl p-6 text-center">
                            <div class="text-4xl font-bold text-primary-accent mb-2">500</div>
                            <div class="text-sm text-neutral-600 mb-1">requests/minute</div>
                            <div class="text-xs font-semibold text-primary-accent uppercase tracking-wider">Professional</div>
                        </div>
                        <div class="bg-gradient-to-br from-secondary-accent/10 to-purple-50 border-2 border-secondary-accent rounded-2xl p-6 text-center">
                            <div class="text-4xl font-bold text-secondary-accent mb-2">2000</div>
                            <div class="text-sm text-neutral-600 mb-1">requests/minute</div>
                            <div class="text-xs font-semibold text-secondary-accent uppercase tracking-wider">Enterprise</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
