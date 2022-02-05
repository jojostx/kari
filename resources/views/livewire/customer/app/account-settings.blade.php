<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <div>
            <p class="mb-4 font-bold tracking-wide sm:text-lg">Account</p>

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

        <div class="mt-6">
            <p class="mb-4 font-bold tracking-wide sm:text-lg">Help</p>

            <div class="p-4 bg-white border rounded-lg shadow-sm">
                <div>
                    <a href="{{ route('contact') }}" class="flex items-center gap-3 px-3 py-4 font-medium transition border-b border-gray-200 rounded-lg hover:text-blue-700 focus:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span>
                            Contact Support
                        </span>
                        <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="{{ route('help') }}" class="flex items-center gap-3 px-3 py-4 font-medium transition border-b border-gray-200 rounded-lg hover:text-blue-700 focus:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>
                            Kari Investment FAQ
                        </span>
                        <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="{{ route('privacy') }}" class="flex items-center gap-3 px-3 py-4 font-medium transition border-b border-gray-200 rounded-lg hover:text-blue-700 focus:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        <span>
                            Privacy Policy
                        </span>
                        <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="{{ route('terms') }}" class="flex items-center gap-3 px-3 py-4 font-medium transition rounded-lg hover:text-blue-700 focus:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span>
                            Terms and Conditions
                        </span>
                        <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>