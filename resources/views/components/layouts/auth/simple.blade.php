<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-gradient-to-br from-neutral-50 via-white to-blue-50 antialiased">
        <!-- Background Pattern -->
        <div class="fixed inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-40 pointer-events-none"></div>

        <!-- Decorative Elements -->
        <div class="fixed top-20 left-10 w-72 h-72 bg-primary-accent/10 rounded-full blur-3xl pointer-events-none animate-float"></div>
        <div class="fixed bottom-20 right-10 w-72 h-72 bg-secondary-accent/10 rounded-full blur-3xl pointer-events-none animate-float" style="animation-delay: 2s;"></div>

        <div class="relative flex min-h-screen flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-md flex-col gap-8 animate-slide-up">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-3 font-medium group" wire:navigate>
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-primary-accent to-blue-600 rounded-2xl shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <x-app-logo-icon class="size-9 text-white" />
                    </div>
                    <span class="text-3xl font-bold bg-gradient-to-r from-primary-accent to-secondary-accent bg-clip-text text-transparent">GrowPath</span>
                    <span class="sr-only">{{ config('app.name', 'GrowPath') }}</span>
                </a>

                <!-- Auth Card -->
                <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border-2 border-white/50 p-8 md:p-10">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html>
