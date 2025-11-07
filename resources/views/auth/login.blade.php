<x-guest-layout>
    <div class="flex flex-col gap-7">
        <!-- Header -->
        <div class="flex w-full flex-col text-center mb-2 animate-fade-in">
            <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-neutral-900 to-neutral-700 bg-clip-text text-transparent mb-3">
                {{ __('Welcome back') }}
            </h1>
            <p class="text-base text-neutral-600 leading-relaxed">
                {{ __('Enter your credentials to access your account') }}
            </p>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl text-sm">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-xl text-sm">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5 animate-fade-in">
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
                    autocomplete="email"
                    placeholder="email@example.com"
                    class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent transition-all duration-300 hover:shadow-md focus:shadow-lg"
                />
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="relative space-y-2">
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium text-neutral-700">
                        {{ __('Password') }}
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-primary-accent hover:text-primary-accent/80 transition-colors duration-200">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="Enter your password"
                    class="w-full px-4 py-3 border border-neutral-300 rounded-xl focus:ring-2 focus:ring-primary-accent focus:border-transparent transition-all duration-300 hover:shadow-md focus:shadow-lg"
                />
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="w-4 h-4 text-primary-accent border-neutral-300 rounded focus:ring-2 focus:ring-primary-accent transition-all duration-200"
                />
                <label for="remember_me" class="ml-2 block text-sm text-neutral-700">
                    {{ __('Keep me signed in') }}
                </label>
            </div>

            <div class="flex items-center justify-end pt-2">
                <button
                    type="submit"
                    class="w-full px-6 py-3 bg-gradient-to-r from-primary-accent to-blue-600 text-white font-medium rounded-xl hover:from-primary-accent/90 hover:to-blue-600/90 transform hover:scale-[1.02] transition-all duration-300 shadow-lg hover:shadow-xl"
                >
                    {{ __('Sign in') }}
                </button>
            </div>
        </form>

        @if (Route::has('register'))
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-neutral-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white/80 text-neutral-600">{{ __('New to GrowPath AI?') }}</span>
                </div>
            </div>

            <div class="text-center">
                <a
                    href="{{ route('register') }}"
                    class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-primary-accent border-2 border-primary-accent/20 rounded-xl hover:border-primary-accent hover:bg-primary-accent/5 transition-all duration-300 transform hover:scale-[1.02]"
                >
                    {{ __('Create an account') }}
                </a>
            </div>
        @endif
    </div>
</x-guest-layout>
