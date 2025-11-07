<x-guest-layout>
    <div class="flex flex-col gap-7">
        <!-- Header -->
        <div class="flex w-full flex-col text-center mb-2 animate-fade-in">
            <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-neutral-900 to-neutral-700 bg-clip-text text-transparent mb-3">
                {{ __('Reset your password') }}
            </h1>
            <p class="text-base text-neutral-600 leading-relaxed">
                {{ __('No worries! Enter your email and we\'ll send you a reset link') }}
            </p>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl text-sm">
                {{ session('status') }}
            </div>
        @endif

        <!-- Help Notice -->
        <div class="bg-neutral-50/80 border border-neutral-200/50 rounded-xl p-4 animate-fade-in">
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-neutral-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
                <p class="text-sm text-neutral-700 leading-relaxed">
                    {{ __('Enter the email address associated with your account and we\'ll send you instructions to reset your password.') }}
                </p>
            </div>
        </div>

        <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-5 animate-fade-in">
            @csrf

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
                    autofocus
                    placeholder="email@example.com"
                    class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent transition-all duration-300 hover:shadow-md focus:shadow-lg"
                />
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end pt-2">
                <button
                    type="submit"
                    class="w-full px-6 py-3 bg-gradient-to-r from-primary-accent to-blue-600 text-white font-medium rounded-xl hover:from-primary-accent/90 hover:to-blue-600/90 transform hover:scale-[1.02] transition-all duration-300 shadow-lg hover:shadow-xl"
                >
                    {{ __('Send reset link') }}
                </button>
            </div>
        </form>

        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-neutral-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-4 bg-white/80 text-neutral-600">{{ __('Remember your password?') }}</span>
            </div>
        </div>

        <div class="text-center">
            <a
                href="{{ route('login') }}"
                class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-primary-accent border-2 border-primary-accent/20 rounded-xl hover:border-primary-accent hover:bg-primary-accent/5 transition-all duration-300 transform hover:scale-[1.02]"
            >
                {{ __('Back to sign in') }}
            </a>
        </div>
    </div>
</x-guest-layout>
