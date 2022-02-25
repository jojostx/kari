<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <div>
            <p class="mb-4 font-bold tracking-wide sm:text-lg">ACCOUNT SETTINGS</p>

            <div class="p-6 bg-white border rounded-lg shadow-sm">
                <div>
                    <div class="text-gray-600 col-span-full">
                        <p>Personal Information</p>
                    </div>

                    <div class="mt-6">
                        {{ $this->personalInfoForm }}
                    </div>

                    <div class="flex items-center mt-6">
                        <x-button wire:target="savePersonalInfo" wire:loading.attr="disabled" wire:click="savePersonalInfo">
                            <svg wire:loading wire:target="savePersonalInfo" class="w-4 h-4 mr-1 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                            </svg>
                            Update
                        </x-button>

                        @if ($savedPersonalInfo)
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
                </div>
            </div>
        </div>

        <div class="mt-6">
            <p class="mb-4 font-bold tracking-wide sm:text-lg">Contact Information</p>

            <div class="p-6 bg-white border rounded-lg shadow-sm">
                <div>
                    {{ $this->contactInfoForm }}

                    <div class="flex items-center mt-6">
                        <x-button wire:target="saveContactInfo" wire:loading.attr="disabled" wire:click="saveContactInfo">
                            <svg wire:loading wire:target="saveContactInfo" class="w-4 h-4 mr-1 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                            </svg>
                            Update
                        </x-button>

                        @if ($savedContactInfo)
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
                </div>
            </div>
        </div>

        <div class="mt-6" id="bank-account-settings">
            <div class="mb-4">
                <p class="font-bold tracking-wide sm:text-lg">Bank Account Information</p>
                <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">This account is required in order to recieve your payouts.</p>
            </div>

            <div class="p-6 bg-white border rounded-lg shadow-sm">
                <div>
                    {{ $this->bankAccountInfoForm}}

                    <div class="mt-4">
                        <div class="font-medium">Requirements:</div>
                        <div class="text-sm text-gray-500">Ensure that these requirements are met:</div>
                        <ul class="pl-4 text-xs leading-4 text-gray-500">
                            <li class="">1. The bank name is of a valid and registered bank.</li>
                            <li class="">2. The account number is valid and registered under the provided bank.</li>
                            <li class="">3. The account name is the exact one registered to your provided account number.</li>
                        </ul>
                    </div>

                    <div class="flex items-center mt-6">
                        <x-button wire:target="saveBankAccountInfo" wire:loading.attr="disabled" wire:click="saveBankAccountInfo">
                            <svg wire:loading wire:target="saveBankAccountInfo" class="w-4 h-4 mr-1 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                            </svg>
                            Update
                        </x-button>

                        @if ($savedBankAccountInfo)
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
                </div>
            </div>
        </div>

        <div class="mt-6">
            <p class="mb-4 font-bold tracking-wide sm:text-lg">Password Information</p>

            <div class="p-6 bg-white border rounded-lg shadow-sm">
                <div>
                    {{ $this->passwordInfoForm}}

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

                        @if ($savedPasswordInfo)
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
                </div>
            </div>
        </div>

        <x-help-menu-card />
    </div>
</div>