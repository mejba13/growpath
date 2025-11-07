<x-guest-layout>
    <div class="flex flex-col gap-6">
        <!-- Header -->
        <div class="flex w-full flex-col text-center mb-2 animate-fade-in">
            <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-neutral-900 to-neutral-700 bg-clip-text text-transparent mb-3">
                {{ __('Join GrowPath AI') }}
            </h1>
            <p class="text-base text-neutral-600 leading-relaxed">
                {{ __('Create your account and start your growth journey') }}
            </p>
        </div>

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

        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4 animate-fade-in">
            @csrf

            <!-- Name -->
            <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-neutral-700">
                    {{ __('Full name') }}
                </label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Enter your full name"
                    class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent transition-all duration-300 hover:shadow-md focus:shadow-lg"
                />
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="space-y-2">
                <label for="email" class="block text-sm font-medium text-neutral-700">
                    {{ __('Email address') }}
                </label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    placeholder="email@example.com"
                    class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent transition-all duration-300 hover:shadow-md focus:shadow-lg"
                />
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="space-y-2">
                <label for="password" class="block text-sm font-medium text-neutral-700">
                    {{ __('Password') }}
                </label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    placeholder="Create a strong password"
                    class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent transition-all duration-300 hover:shadow-md focus:shadow-lg"
                />
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="space-y-2">
                <label for="password_confirmation" class="block text-sm font-medium text-neutral-700">
                    {{ __('Confirm password') }}
                </label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Re-enter your password"
                    class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent transition-all duration-300 hover:shadow-md focus:shadow-lg"
                />
                @error('password_confirmation')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end pt-2">
                <button
                    type="submit"
                    class="w-full px-6 py-3 bg-gradient-to-r from-primary-accent to-blue-600 text-white font-medium rounded-xl hover:from-primary-accent/90 hover:to-blue-600/90 transform hover:scale-[1.02] transition-all duration-300 shadow-lg hover:shadow-xl"
                >
                    {{ __('Create account') }}
                </button>
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
            <a
                href="{{ route('login') }}"
                class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-primary-accent border-2 border-primary-accent/20 rounded-xl hover:border-primary-accent hover:bg-primary-accent/5 transition-all duration-300 transform hover:scale-[1.02]"
            >
                {{ __('Sign in instead') }}
            </a>
        </div>
    </div>
</x-guest-layout>
