<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Verify your phone number by clicking on the link we just sent to you via SMS? If you didn\'t receive the SMS, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-sms-sent')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ __('A new verification SMS has been sent to the phone number you provided.') }}
            </div>
        @endif

        <div class="flex items-center justify-between mt-4">
            <form method="POST" action="{{ route('phoneverification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification SMS') }}
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
