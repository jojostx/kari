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

                <div class="mt-8">
                    <div class="text-gray-600 col-span-full">
                        <p>Contact Information</p>
                    </div>

                    <div class="mt-6">
                        {{ $this->contactInfoForm }}
                    </div>

                    <div class="flex items-center mt-6">
                        <x-button wire:target="saveContactInfo" wire:loading.attr="disabled" wire:click="saveContactInfo">
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

        <div class="mt-6">
            <p class="mb-4 font-bold tracking-wide sm:text-lg">Password Information</p>

            <div class="p-6 bg-white border rounded-lg shadow-sm">
                <div>
                    {{ $this->passwordInfoForm}}

                    <div class="mt-4">
                        <div class="font-medium">Password requirements:</div>
                        <div class="text-sm text-gray-500">Ensure that these requirements are met:</div>
                        <ul class="pl-4 text-xs leading-4 text-gray-500">
                            <li class="">At least 10 characters (and up to 100 characters)</li>
                            <li class="">At least one lowercase character</li>
                            <li class="">Inclusion of at least one special character, e.g., ! @ # ?</li>
                        </ul>
                    </div>

                    <div class="flex items-center mt-6">
                        <x-button wire:target="savePasswordInfo" wire:loading.attr="disabled" wire:click="savePasswordInfo">
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