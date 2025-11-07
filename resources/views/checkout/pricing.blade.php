@extends('layouts.app')

@section('title', 'Choose Your Plan')

@section('content')
<div class="min-h-screen bg-neutral-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl sm:text-5xl font-bold text-primary-brand mb-4">
                Choose Your Plan
            </h1>
            <p class="text-xl text-neutral-600 max-w-3xl mx-auto">
                Select the perfect plan for your business. All plans include a 14-day free trial.
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-6 max-w-7xl mx-auto">
            @foreach($plans as $plan)
            <div class="group relative bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 border-2
                {{ $plan->is_popular ? 'border-primary-accent lg:scale-105 bg-gradient-to-br from-primary-accent to-blue-700' : 'border-neutral-200 hover:border-neutral-300' }}
                p-8 flex flex-col">

                @if($plan->is_popular)
                <!-- Popular Badge -->
                <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                    <div class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                        ⭐ MOST POPULAR
                    </div>
                </div>
                @endif

                <div class="mb-6">
                    <h3 class="text-2xl font-bold {{ $plan->is_popular ? 'text-white' : 'text-primary-brand' }} mb-2">
                        {{ $plan->name }}
                    </h3>
                    <p class="{{ $plan->is_popular ? 'text-blue-100' : 'text-neutral-600' }}">
                        {{ $plan->description }}
                    </p>
                </div>

                <div class="mb-8">
                    <div class="flex items-baseline gap-2">
                        <span class="text-5xl font-bold {{ $plan->is_popular ? 'text-white' : 'text-primary-brand' }}">
                            ${{ number_format($plan->price, 0) }}
                        </span>
                        <span class="{{ $plan->is_popular ? 'text-blue-100' : 'text-neutral-600' }} text-lg">
                            /month
                        </span>
                    </div>
                    <p class="text-sm {{ $plan->is_popular ? 'text-blue-200' : 'text-neutral-500' }} mt-2">
                        Billed monthly
                    </p>
                </div>

                <a href="{{ route('checkout.show', $plan) }}"
                   class="group/btn w-full px-6 py-4 rounded-xl font-semibold transition-all duration-300 text-center mb-8 inline-flex items-center justify-center
                   {{ $plan->is_popular
                       ? 'bg-white text-primary-accent hover:scale-105 hover:shadow-xl'
                       : 'bg-primary-accent hover:bg-blue-700 text-white hover:shadow-lg' }}">
                    Get Started
                    <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>

                <div class="space-y-4 flex-grow">
                    @if($plan->max_prospects)
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 {{ $plan->is_popular ? 'bg-white/20' : 'bg-success/10' }} rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 {{ $plan->is_popular ? 'text-white' : 'text-success' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="{{ $plan->is_popular ? 'text-white' : 'text-neutral-700' }}">
                            {{ number_format($plan->max_prospects) }} prospects
                        </span>
                    </div>
                    @else
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 {{ $plan->is_popular ? 'bg-white/20' : 'bg-success/10' }} rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 {{ $plan->is_popular ? 'text-white' : 'text-success' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="{{ $plan->is_popular ? 'text-white' : 'text-neutral-700' }}">
                            Unlimited prospects
                        </span>
                    </div>
                    @endif

                    @if($plan->max_team_members)
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 {{ $plan->is_popular ? 'bg-white/20' : 'bg-success/10' }} rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 {{ $plan->is_popular ? 'text-white' : 'text-success' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="{{ $plan->is_popular ? 'text-white' : 'text-neutral-700' }}">
                            {{ $plan->max_team_members }} team members
                        </span>
                    </div>
                    @else
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 {{ $plan->is_popular ? 'bg-white/20' : 'bg-success/10' }} rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 {{ $plan->is_popular ? 'text-white' : 'text-success' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="{{ $plan->is_popular ? 'text-white' : 'text-neutral-700' }}">
                            Unlimited team members
                        </span>
                    </div>
                    @endif

                    @if($plan->features)
                        @foreach($plan->features as $feature)
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 {{ $plan->is_popular ? 'bg-white/20' : 'bg-success/10' }} rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 {{ $plan->is_popular ? 'text-white' : 'text-success' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="{{ $plan->is_popular ? 'text-white' : 'text-neutral-700' }}">
                                {{ $feature }}
                            </span>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <!-- Additional Info -->
        <div class="mt-16 text-center">
            <p class="text-neutral-600 text-lg mb-4">All plans include:</p>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-neutral-700">14-day free trial</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-neutral-700">No credit card required for trial</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-neutral-700">Cancel anytime</span>
                </div>
            </div>
        </div>

        <!-- Security Badge -->
        <div class="mt-12 text-center">
            <div class="inline-flex items-center gap-4 px-6 py-4 bg-white rounded-xl shadow-md border border-neutral-200">
                <svg class="w-8 h-8 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                <div class="text-left">
                    <p class="font-semibold text-primary-brand">Secure Payment Processing</p>
                    <p class="text-sm text-neutral-600">256-bit SSL encryption & PCI DSS compliant</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
