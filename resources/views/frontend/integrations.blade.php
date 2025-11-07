@extends('layouts.frontend')

@section('title', 'Integrations - Connect Your Favorite Tools | GrowPath AI')
@section('description', 'Connect GrowPath AI CRM with your favorite business tools. Seamless integrations with popular platforms.')
@section('keywords', 'integrations, third-party apps, CRM integrations, email integration, calendar sync')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-50 via-white to-purple-50 py-24 lg:py-32">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Eyebrow Badge -->
        <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-secondary-accent/10 to-purple-600/10 backdrop-blur-sm border border-secondary-accent/20 rounded-full px-4 py-2 mb-8 animate-fade-in">
            <span class="w-2 h-2 bg-gradient-to-r from-secondary-accent to-purple-600 rounded-full animate-pulse"></span>
            <span class="text-sm font-medium bg-gradient-to-r from-secondary-accent to-purple-600 bg-clip-text text-transparent">SEAMLESS CONNECTIONS</span>
        </div>

        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-primary-brand mb-6 leading-tight animate-slide-up">
            Connect with Your <span class="bg-gradient-to-r from-secondary-accent to-purple-600 bg-clip-text text-transparent">Favorite Tools</span>
        </h1>
        <p class="text-xl lg:text-2xl text-neutral-600 max-w-3xl mx-auto leading-relaxed animate-slide-up">
            Streamline your workflow by integrating GrowPath AI CRM with the tools you already use every day.
        </p>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-secondary-accent/10 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-20 right-10 w-72 h-72 bg-purple-600/10 rounded-full blur-3xl -z-10"></div>
</section>

<!-- Integrations Grid -->
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-primary-brand mb-6">Popular Integrations</h2>
            <p class="text-xl text-neutral-600 max-w-2xl mx-auto">
                Connect GrowPath AI with leading platforms to enhance your productivity
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Email Integration -->
            <div class="group bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-blue-500 hover:shadow-2xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-3 group-hover:text-blue-600 transition-colors">Email Integration</h3>
                <p class="text-neutral-600 mb-6 leading-relaxed">Connect Gmail, Outlook, and other email providers to sync communications seamlessly.</p>
                <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group/link">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

            <!-- Calendar Sync -->
            <div class="group bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-success hover:shadow-2xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-success to-emerald-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-3 group-hover:text-success transition-colors">Calendar Sync</h3>
                <p class="text-neutral-600 mb-6 leading-relaxed">Sync follow-ups and meetings with Google Calendar, Outlook Calendar, and more.</p>
                <a href="#" class="inline-flex items-center text-success hover:text-emerald-700 font-semibold group/link">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

            <!-- Slack -->
            <div class="group bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-secondary-accent hover:shadow-2xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-secondary-accent to-purple-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-3 group-hover:text-secondary-accent transition-colors">Slack Integration</h3>
                <p class="text-neutral-600 mb-6 leading-relaxed">Get real-time notifications and updates directly in your Slack channels and workspaces.</p>
                <a href="#" class="inline-flex items-center text-secondary-accent hover:text-purple-700 font-semibold group/link">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

            <!-- Analytics -->
            <div class="group bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-warning hover:shadow-2xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-warning to-orange-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-3 group-hover:text-warning transition-colors">Analytics Tools</h3>
                <p class="text-neutral-600 mb-6 leading-relaxed">Connect with Google Analytics, Mixpanel, and other analytics platforms for insights.</p>
                <a href="#" class="inline-flex items-center text-warning hover:text-orange-700 font-semibold group/link">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

            <!-- Document Storage -->
            <div class="group bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-error hover:shadow-2xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-error to-red-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-3 group-hover:text-error transition-colors">Document Storage</h3>
                <p class="text-neutral-600 mb-6 leading-relaxed">Seamlessly integrate with Dropbox, Google Drive, OneDrive, and other storage platforms.</p>
                <a href="#" class="inline-flex items-center text-error hover:text-red-700 font-semibold group/link">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

            <!-- Zapier -->
            <div class="group bg-white border-2 border-neutral-100 rounded-2xl p-8 hover:border-primary-accent hover:shadow-2xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-accent to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-brand mb-3 group-hover:text-primary-accent transition-colors">Zapier Integration</h3>
                <p class="text-neutral-600 mb-6 leading-relaxed">Connect with 3,000+ apps through Zapier to automate your entire workflow.</p>
                <a href="#" class="inline-flex items-center text-primary-accent hover:text-blue-700 font-semibold group/link">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Custom Integration CTA -->
<section class="py-24 lg:py-32 bg-gradient-to-br from-primary-accent via-blue-600 to-secondary-accent text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl mb-8">
            <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
        </div>
        <h2 class="text-4xl lg:text-5xl font-bold mb-6">Need a Custom Integration?</h2>
        <p class="text-xl lg:text-2xl text-blue-100 mb-10 leading-relaxed">
            Our powerful API makes it easy to build custom integrations with any platform. Get started in minutes.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('api') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-accent rounded-xl font-semibold hover:bg-neutral-100 hover:scale-105 transition-all duration-300 shadow-xl">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span>View API Docs</span>
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white rounded-xl font-semibold hover:bg-white hover:text-primary-accent hover:scale-105 transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <span>Contact Us</span>
            </a>
        </div>
    </div>
</section>
@endsection
