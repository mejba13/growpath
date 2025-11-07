<x-layouts.auth>
    <div class="flex flex-col gap-7">
        <x-auth-header :title="__('Join GrowPath')" :description="__('Create your account and start your growth journey')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <!-- Admin Approval Notice -->
        <div class="bg-blue-50/80 border border-blue-200/50 rounded-xl p-4 animate-fade-in">
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm text-blue-800 leading-relaxed">
                    {{ __('Your account will require admin approval before you can sign in. You\'ll receive an email once approved.') }}
                </p>
            </div>
        </div>

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-5 animate-fade-in">
            @csrf
            <!-- Name -->
            <div class="space-y-2">
                <flux:input
                    name="name"
                    :label="__('Full name')"
                    type="text"
                    required
                    autofocus
                    autocomplete="name"
                    :placeholder="__('Enter your full name')"
                    class="transition-all duration-300 hover:shadow-md focus-within:shadow-lg"
                />
            </div>

            <!-- Email Address -->
            <div class="space-y-2">
                <flux:input
                    name="email"
                    :label="__('Email address')"
                    type="email"
                    required
                    autocomplete="email"
                    placeholder="email@example.com"
                    class="transition-all duration-300 hover:shadow-md focus-within:shadow-lg"
                />
            </div>

            <!-- Password -->
            <div class="space-y-2">
                <flux:input
                    name="password"
                    :label="__('Password')"
                    type="password"
                    required
                    autocomplete="new-password"
                    :placeholder="__('Create a strong password')"
                    viewable
                    class="transition-all duration-300 hover:shadow-md focus-within:shadow-lg"
                />
            </div>

            <!-- Confirm Password -->
            <div class="space-y-2">
                <flux:input
                    name="password_confirmation"
                    :label="__('Confirm password')"
                    type="password"
                    required
                    autocomplete="new-password"
                    :placeholder="__('Re-enter your password')"
                    viewable
                    class="transition-all duration-300 hover:shadow-md focus-within:shadow-lg"
                />
            </div>

            <div class="flex items-center justify-end pt-2">
                <flux:button
                    type="submit"
                    variant="primary"
                    class="w-full bg-gradient-to-r from-primary-accent to-blue-600 hover:from-primary-accent/90 hover:to-blue-600/90 transform hover:scale-[1.02] transition-all duration-300 shadow-lg hover:shadow-xl"
                    data-test="register-user-button"
                >
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-neutral-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-4 bg-white/80 text-neutral-600">{{ __('Already have an account?') }}</span>
            </div>
        </div>

        <div class="text-center">
            <flux:link
                :href="route('login')"
                wire:navigate
                class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-primary-accent border-2 border-primary-accent/20 rounded-xl hover:border-primary-accent hover:bg-primary-accent/5 transition-all duration-300 transform hover:scale-[1.02]"
            >
                {{ __('Sign in instead') }}
            </flux:link>
        </div>
    </div>
</x-layouts.auth>
