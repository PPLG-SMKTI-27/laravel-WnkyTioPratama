<x-guest-layout>
    <div class="space-y-6">
        <div class="text-center">
            <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                Welcome back
            </h1>
            <p class="mt-2 text-sm text-slate-300">
                Login khusus owner untuk mengelola portfolio.
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-2 text-sm text-slate-200" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-300" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-300" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between gap-4">
                <label for="remember_me" class="inline-flex items-center gap-2 select-none">
                    <input
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-white/20 bg-white/10 text-violet-500 shadow-sm focus:ring-violet-500/30 focus:ring-4"
                        name="remember"
                    >
                    <span class="text-sm text-slate-200">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="wc-link text-sm" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="pt-2">
                <x-primary-button class="w-full justify-center">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            <p class="text-xs text-slate-400 text-center">
                © {{ date('Y') }} WinkyCreative • Secure owner access
            </p>
        </form>
    </div>
</x-guest-layout>
