@extends('layouts.frontend')

@section('title', 'Documentation - Complete Guide to GrowPath CRM | GrowPath')
@section('description', 'Complete documentation for GrowPath CRM. Learn how to use all features, API integration, and best practices.')
@section('keywords', 'documentation, user guide, API docs, CRM guide, tutorials, developer documentation')

@section('content')
<!-- Hero -->
<section class="bg-primary-brand text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-bold mb-6">Documentation</h1>
        <p class="text-xl text-blue-100 max-w-3xl">
            Everything you need to know about using GrowPath CRM effectively.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Sidebar Navigation -->
            <aside class="lg:col-span-1">
                <nav class="sticky top-8 space-y-1">
                    <div class="mb-4">
                        <h3 class="font-semibold text-primary-brand mb-2">Getting Started</h3>
                        <ul class="space-y-1 pl-4 text-sm">
                            <li><a href="#introduction" class="text-neutral-600 hover:text-primary-accent">Introduction</a></li>
                            <li><a href="#quick-start" class="text-neutral-600 hover:text-primary-accent">Quick Start</a></li>
                            <li><a href="#account-setup" class="text-neutral-600 hover:text-primary-accent">Account Setup</a></li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h3 class="font-semibold text-primary-brand mb-2">Core Features</h3>
                        <ul class="space-y-1 pl-4 text-sm">
                            <li><a href="#prospects" class="text-neutral-600 hover:text-primary-accent">Prospects</a></li>
                            <li><a href="#clients" class="text-neutral-600 hover:text-primary-accent">Clients</a></li>
                            <li><a href="#follow-ups" class="text-neutral-600 hover:text-primary-accent">Follow-Ups</a></li>
                            <li><a href="#pipeline" class="text-neutral-600 hover:text-primary-accent">Pipeline</a></li>
                            <li><a href="#reports" class="text-neutral-600 hover:text-primary-accent">Reports</a></li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h3 class="font-semibold text-primary-brand mb-2">Administration</h3>
                        <ul class="space-y-1 pl-4 text-sm">
                            <li><a href="#team" class="text-neutral-600 hover:text-primary-accent">Team Management</a></li>
                            <li><a href="#permissions" class="text-neutral-600 hover:text-primary-accent">Permissions</a></li>
                            <li><a href="#settings" class="text-neutral-600 hover:text-primary-accent">Settings</a></li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h3 class="font-semibold text-primary-brand mb-2">Advanced</h3>
                        <ul class="space-y-1 pl-4 text-sm">
                            <li><a href="#api" class="text-neutral-600 hover:text-primary-accent">API Integration</a></li>
                            <li><a href="#webhooks" class="text-neutral-600 hover:text-primary-accent">Webhooks</a></li>
                            <li><a href="#import-export" class="text-neutral-600 hover:text-primary-accent">Import/Export</a></li>
                        </ul>
                    </div>
                </nav>
            </aside>

            <!-- Main Documentation Content -->
            <div class="lg:col-span-3">
                <div class="prose prose-lg max-w-none">
                    <!-- Introduction -->
                    <div id="introduction" class="mb-12">
                        <h2 class="text-3xl font-bold text-primary-brand mb-4">Introduction</h2>
                        <p class="text-neutral-700 mb-4">
                            GrowPath is a modern CRM platform designed to help businesses manage their sales pipeline, track prospects, and grow revenue. This documentation will guide you through all features and functionalities.
                        </p>
                        <div class="bg-blue-50 border-l-4 border-primary-accent p-4 mb-4">
                            <p class="text-sm"><strong>Note:</strong> This documentation is for GrowPath version 1.0. Features may vary based on your subscription plan.</p>
                        </div>
                    </div>

                    <!-- Quick Start -->
                    <div id="quick-start" class="mb-12">
                        <h2 class="text-3xl font-bold text-primary-brand mb-4">Quick Start</h2>
                        <h3 class="text-xl font-semibold text-primary-brand mb-3">1. Create Your Account</h3>
                        <p class="text-neutral-700 mb-4">
                            Sign up for a free 14-day trial at growpath.com/register. No credit card required.
                        </p>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">2. Set Up Your Profile</h3>
                        <ul class="list-disc list-inside text-neutral-700 mb-4">
                            <li>Complete your company information</li>
                            <li>Upload your logo</li>
                            <li>Configure your timezone and preferences</li>
                        </ul>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">3. Add Your First Prospect</h3>
                        <p class="text-neutral-700 mb-4">
                            Navigate to Prospects → Create New to add your first prospect. Fill in the required fields and click Save.
                        </p>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">4. Invite Team Members</h3>
                        <p class="text-neutral-700 mb-4">
                            Go to Team → Invite to add your team members and assign appropriate roles.
                        </p>
                    </div>

                    <!-- Prospects -->
                    <div id="prospects" class="mb-12">
                        <h2 class="text-3xl font-bold text-primary-brand mb-4">Prospect Management</h2>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">Creating Prospects</h3>
                        <p class="text-neutral-700 mb-4">
                            Prospects are potential customers in your sales pipeline. To create a prospect:
                        </p>
                        <ol class="list-decimal list-inside text-neutral-700 mb-4">
                            <li>Click "Prospects" in the navigation menu</li>
                            <li>Click "Create New Prospect" button</li>
                            <li>Fill in the required information:
                                <ul class="list-disc list-inside ml-6 mt-2">
                                    <li>Name, Email, Phone</li>
                                    <li>Company and Position</li>
                                    <li>Status (New, Contacted, Qualified, etc.)</li>
                                    <li>Priority (Low, Medium, High)</li>
                                    <li>Estimated Value</li>
                                </ul>
                            </li>
                            <li>Add notes if needed</li>
                            <li>Assign to a team member</li>
                            <li>Click "Save"</li>
                        </ol>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">Bulk Operations</h3>
                        <p class="text-neutral-700 mb-4">
                            You can perform actions on multiple prospects at once:
                        </p>
                        <ul class="list-disc list-inside text-neutral-700 mb-4">
                            <li>Select prospects using checkboxes</li>
                            <li>Choose action: Delete, Update Status, or Assign</li>
                            <li>Confirm the action</li>
                        </ul>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">Converting to Clients</h3>
                        <p class="text-neutral-700 mb-4">
                            When a prospect becomes a paying customer, convert them to a client:
                        </p>
                        <ol class="list-decimal list-inside text-neutral-700 mb-4">
                            <li>Open the prospect detail page</li>
                            <li>Click "Convert to Client"</li>
                            <li>Enter contract value and other client details</li>
                            <li>Click "Convert"</li>
                        </ol>
                    </div>

                    <!-- Pipeline -->
                    <div id="pipeline" class="mb-12">
                        <h2 class="text-3xl font-bold text-primary-brand mb-4">Sales Pipeline</h2>
                        <p class="text-neutral-700 mb-4">
                            The pipeline view provides a visual representation of your sales process. Prospects are organized into columns based on their status.
                        </p>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">Pipeline Stages</h3>
                        <ul class="list-disc list-inside text-neutral-700 mb-4">
                            <li><strong>New:</strong> Recently added prospects</li>
                            <li><strong>Qualified:</strong> Prospects that meet your criteria</li>
                            <li><strong>Proposal:</strong> Proposal sent to prospect</li>
                            <li><strong>Negotiation:</strong> In negotiation phase</li>
                            <li><strong>Won:</strong> Deal closed successfully</li>
                            <li><strong>Lost:</strong> Deal did not close</li>
                        </ul>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">Moving Prospects</h3>
                        <p class="text-neutral-700 mb-4">
                            Drag and drop prospects between columns to update their status. The system will automatically update the timestamp and log the change.
                        </p>
                    </div>

                    <!-- Reports -->
                    <div id="reports" class="mb-12">
                        <h2 class="text-3xl font-bold text-primary-brand mb-4">Reports & Analytics</h2>
                        <p class="text-neutral-700 mb-4">
                            Access comprehensive analytics to track your sales performance and make data-driven decisions.
                        </p>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">Available Reports</h3>
                        <ul class="list-disc list-inside text-neutral-700 mb-4">
                            <li><strong>Prospect Metrics:</strong> Total prospects, conversion rates, status breakdown</li>
                            <li><strong>Revenue Metrics:</strong> Pipeline value, average deal size, revenue projections</li>
                            <li><strong>Team Performance:</strong> Top performers, individual metrics, activity tracking</li>
                            <li><strong>Client Health:</strong> Contract values, health scores, renewal dates</li>
                        </ul>
                    </div>

                    <!-- Team Management -->
                    <div id="team" class="mb-12">
                        <h2 class="text-3xl font-bold text-primary-brand mb-4">Team Management</h2>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">Roles & Permissions</h3>
                        <p class="text-neutral-700 mb-4">GrowPath uses role-based access control:</p>

                        <div class="bg-neutral-50 rounded-lg p-4 mb-4">
                            <h4 class="font-semibold text-primary-brand mb-2">Owner</h4>
                            <p class="text-sm text-neutral-600">Full access to all features including billing and team management.</p>
                        </div>

                        <div class="bg-neutral-50 rounded-lg p-4 mb-4">
                            <h4 class="font-semibold text-primary-brand mb-2">Admin</h4>
                            <p class="text-sm text-neutral-600">Can manage prospects, clients, and team members. Cannot access billing.</p>
                        </div>

                        <div class="bg-neutral-50 rounded-lg p-4 mb-4">
                            <h4 class="font-semibold text-primary-brand mb-2">Manager</h4>
                            <p class="text-sm text-neutral-600">Can manage prospects and clients assigned to them or their team.</p>
                        </div>

                        <div class="bg-neutral-50 rounded-lg p-4 mb-4">
                            <h4 class="font-semibold text-primary-brand mb-2">Member</h4>
                            <p class="text-sm text-neutral-600">Can only manage prospects and clients assigned to them.</p>
                        </div>
                    </div>

                    <!-- API -->
                    <div id="api" class="mb-12">
                        <h2 class="text-3xl font-bold text-primary-brand mb-4">API Integration</h2>
                        <p class="text-neutral-700 mb-4">
                            GrowPath provides a RESTful API for integrating with your existing tools and workflows.
                        </p>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">Authentication</h3>
                        <div class="bg-neutral-900 text-white rounded-lg p-4 mb-4">
                            <pre class="text-sm"><code>curl -H "Authorization: Bearer YOUR_API_TOKEN" \
     https://api.growpath.com/v1/prospects</code></pre>
                        </div>

                        <h3 class="text-xl font-semibold text-primary-brand mb-3">Common Endpoints</h3>
                        <ul class="list-disc list-inside text-neutral-700 mb-4">
                            <li><code class="text-sm bg-neutral-100 px-2 py-1 rounded">GET /v1/prospects</code> - List all prospects</li>
                            <li><code class="text-sm bg-neutral-100 px-2 py-1 rounded">POST /v1/prospects</code> - Create a prospect</li>
                            <li><code class="text-sm bg-neutral-100 px-2 py-1 rounded">PUT /v1/prospects/:id</code> - Update a prospect</li>
                            <li><code class="text-sm bg-neutral-100 px-2 py-1 rounded">DELETE /v1/prospects/:id</code> - Delete a prospect</li>
                        </ul>

                        <p class="text-neutral-700 mb-4">
                            For complete API documentation, visit <a href="{{ route('api') }}" class="text-primary-accent hover:underline">our API page</a>.
                        </p>
                    </div>
                </div>

                <!-- Help CTA -->
                <div class="bg-primary-accent text-white rounded-lg p-8 mt-12 text-center">
                    <h3 class="text-2xl font-bold mb-4">Need More Help?</h3>
                    <p class="mb-6">Our support team is ready to assist you.</p>
                    <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-white text-primary-accent rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
