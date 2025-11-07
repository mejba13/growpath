<x-layouts.auth>
    <div class="flex flex-col gap-7">
        <x-auth-header :title="__('Welcome back')" :description="__('Enter your credentials to access your account')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6 animate-fade-in">
            @csrf

            <!-- Email Address -->
            <div class="space-y-2">
                <flux:input
                    name="email"
                    :label="__('Email address')"
                    type="email"
                    required
                    autofocus
                    autocomplete="email"
                    placeholder="email@example.com"
                    class="transition-all duration-300 hover:shadow-md focus-within:shadow-lg"
                />
            </div>

            <!-- Password -->
            <div class="relative space-y-2">
                <flux:input
                    name="password"
                    :label="__('Password')"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Enter your password')"
                    viewable
                    class="transition-all duration-300 hover:shadow-md focus-within:shadow-lg"
                />

                @if (Route::has('password.request'))
                    <flux:link class="absolute top-0 text-sm end-0 hover:text-primary-accent transition-colors duration-200" :href="route('password.request')" wire:navigate>
                        {{ __('Forgot password?') }}
                    </flux:link>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <flux:checkbox name="remember" :label="__('Keep me signed in')" :checked="old('remember')" class="transition-all duration-200" />
            </div>

            <div class="flex items-center justify-end pt-2">
                <flux:button
                    variant="primary"
                    type="submit"
                    class="w-full bg-gradient-to-r from-primary-accent to-blue-600 hover:from-primary-accent/90 hover:to-blue-600/90 transform hover:scale-[1.02] transition-all duration-300 shadow-lg hover:shadow-xl"
                    data-test="login-button"
                >
                    {{ __('Sign in') }}
                </flux:button>
            </div>
        </form>

        @if (Route::has('register'))
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-neutral-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white/80 text-neutral-600">{{ __('New to GrowPath?') }}</span>
                </div>
            </div>

            <div class="text-center">
                <flux:link
                    :href="route('register')"
                    wire:navigate
                    class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-primary-accent border-2 border-primary-accent/20 rounded-xl hover:border-primary-accent hover:bg-primary-accent/5 transition-all duration-300 transform hover:scale-[1.02]"
                >
                    {{ __('Create an account') }}
                </flux:link>
            </div>
        @endif
    </div>
</x-layouts.auth>
