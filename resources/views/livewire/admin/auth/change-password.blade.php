<x-partials.admin-index :hasAction="false">
    <x-slot name="title">
        Change Password
    </x-slot>

    <div class="p-6 bg-white border rounded-lg shadow-sm">
        @if ($status)
        <div class="mb-4 text-sm text-green-700 bg-green-300 rounded-md shadow-lg alert">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-medium">{{ $status }}</span>
            </div>
        </div>
        @endif

        <div>
            {{ $this->form}}

            <div class="mt-4">
                <div class="font-medium">Password requirements:</div>
                <div class="text-sm text-gray-500">Ensure that these requirements are met:</div>
                <ul class="pl-4 text-xs leading-4 text-gray-500">
                    <li class="">1. At least 10 characters (and up to 100 characters)</li>
                    <li class="">2. At least one lowercase character</li>
                    <li class="">3. Inclusion of at least one special character, e.g., ! @ # ?</li>
                </ul>
            </div>

            <div class="flex items-center mt-6">
                <x-button wire:target="savePasswordInfo" wire:loading.attr="disabled" wire:click="savePasswordInfo">
                    <svg wire:loading wire:target="savePasswordInfo" class="w-4 h-4 mr-1 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                    </svg>
                    Update
                </x-button>

            </div>
        </div>
    </div>
</x-partials.admin-index>