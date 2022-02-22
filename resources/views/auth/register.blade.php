<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="text-gray-500 fill-current w-14 h-14" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="grid grid-cols-2 gap-4">
            @csrf
            <!-- Name -->
            <div class="mt-4 col-span-full">
                <x-label for="first_name" :value="__('First Name')" />

                <x-input id="first_name" class="block w-full mt-1" type="text" name="first_name" :value="old('first_name')" required autofocus />
            </div>

            <!-- Name -->
            <div class="mt-4 col-span-full md:col-span-1">
                <x-label for="middle_name" :value="__('Middle Name')" />

                <x-input id="middle_name" class="block w-full mt-1" type="text" name="middle_name" :value="old('middle_name')" required autofocus />
            </div>

            <!-- Name -->
            <div class="mt-4 col-span-full md:col-span-1">
                <x-label for="last_name" :value="__('Last Name')" />

                <x-input id="last_name" class="block w-full mt-1" type="text" name="last_name" :value="old('last_name')" required autofocus />
            </div>

            <!-- phone number -->
            <div class="mt-4 col-span-full md:col-span-1">
                <x-label for="phone_number" :value="__('Phone Number')" />

                <x-input id="phone_number" class="block w-full mt-1" type="text" name="phone_number" :value="old('phone_number')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4 col-span-full md:col-span-1">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <x-password-input />

            <!-- Confirm Password -->
            <x-password-input :id="'password_confirmation'" :label="'Confirm Password'" />

            <div class="mt-2 col-span-full">
                <span class="text-xs text-gray-800">
                    Creating an account means you’re okay with our
                    <a class="text-blue-500 underline hover:text-blue-900" href="{{ route('terms') }}">
                        Terms of Service
                    </a>
                    and
                    <a class="text-blue-500 underline hover:text-blue-900" href="{{ route('privacy') }}">
                        Privacy Policy
                    </a>
                </span>
            </div>

            <div class="flex flex-col mt-4 col-span-full">
                <x-button class="justify-center hover:bg-blue-600">
                    {{ __('Register') }}
                </x-button>

                <p class="mt-4">
                    <span class="font-medium">{{ __('Already registered?') }}</span>
                    <a class="text-sm text-blue-500 underline hover:text-blue-900" href="{{ route('login') }}">
                        Log in
                    </a>
                </p>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>