<x-partials.admin-index :hasAction="false">
    <x-slot name="title">
        Change Email
    </x-slot>

    <div class="p-6 bg-white border rounded-lg shadow-sm">
        <div>
            {{ $this->form}}

            <div class="flex items-center mt-6">
                <x-button wire:target="saveEmailInfo" wire:loading.attr="disabled" wire:click="saveEmailInfo">
                    <svg wire:loading wire:target="saveEmailInfo" class="w-4 h-4 mr-1 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                    </svg>
                    Update
                </x-button>

                @if ($savedEmailInfo)
                <p class="flex items-center ml-2 text-blue-600">
                    updated
                    <span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </span>
                </p>
                @endif
            </div>

            @if ($savedEmailInfo)
            <div class="mt-6">
                <p class="text-base font-medium text-gray-600">
                    We've sent a verification email to: &nbsp; {{ auth()->user()?->getPendingEmail() }}
                </p>
                <p class="text-sm text-gray-600">
                    Click the link in your email to verify your account. If you can't find the email check your spam folder.
                </p>
            </div>
            @endif

        </div>
    </div>
</x-partials.admin-index>