<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="text-gray-500 fill-current w-14 h-14" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="text-sm">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full mt-1 text-sm" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <x-password-input />

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-xs text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex flex-col items-end mt-4 col-span-full">
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-button class="justify-center w-full mt-2 hover:bg-blue-600">
                    {{ __('Log in') }}
                </x-button>

                <p class="self-start mt-4">
                    <span class="font-medium">{{ __('Not registered?') }}</span>
                    <a class="text-sm text-blue-500 underline hover:text-blue-900" href="{{ route('register') }}">
                        Sign up
                    </a>
                </p>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>