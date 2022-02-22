<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="text-gray-500 fill-current w-14 h-14" />
            </a>
        </x-slot>

        @livewire('customer.app.redirect-to-dashboard-when-authenticated')

        <div class="mb-4">
            <p class="text-base font-medium text-gray-600">
                We've sent a verification email to: &nbsp; {{ auth()->user()?->email }}
            </p>
        </div>

        <div class="mb-4">
            <p class="text-sm text-gray-600">
                Click the link in your email to verify your account. If you can't find the email check your spam folder or click the button below to resend.
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
        @endif

        <div class="flex items-center justify-between mt-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>