<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <div>
            <p class="mb-4 font-bold tracking-wide sm:text-lg">Account</p>

            <div class="p-6 bg-white border rounded-lg shadow-sm">
                <div>
                    <div class="text-gray-600 col-span-full">
                        <p>Personal Information</p>
                    </div>
                    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                        <div>
                            <x-label for="firstname" :value="__('First Name')" />
                            <x-input id="firstname" class="block w-full mt-1" type="text" name="firstname" :value="auth()->user()->first_name" required autofocus />
                        </div>
                        <div>
                            <x-label for="middlename" :value="__('Middle Name')" />
                            <x-input id="middlename" class="block w-full mt-1" type="text" name="middlename" :value="auth()->user()->middle_name" required autofocus />
                        </div>
                        <div>
                            <x-label for="lastname" :value="__('Last Name')" />
                            <x-input id="lastname" class="block w-full mt-1" type="text" name="lastname" :value="auth()->user()->last_name" required autofocus />
                        </div>
                        <div>
                            <x-label for="datepicker" :value="__('Birth Date')" />
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <x-input type="text" name="date-of-birth" :value="12/22/22" id="datepicker" datepicker-format="mm/dd/yyyy" datepicker-autohide datepicker-orientation="bottom right" class="block w-full pl-10 mt-1" required autofocus placeholder="Select date" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="text-gray-600 col-span-full">
                        <p>Contact Information</p>
                    </div>
                    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                        <div>
                            <x-label for="email" :value="__('Email Address')" />
                            <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="auth()->user()->email" required autofocus />
                        </div>
                        <div>
                            <x-label for="phone" :value="__('Phone Number')" />
                            <x-input id="phone" class="block w-full mt-1" type="tel" name="phone" :value="auth()->user()->phone_number" required autofocus />
                        </div>
                        <div>
                            <x-label for="state" :value="__('State')" />
                            <x-input id="state" class="block w-full mt-1" type="text" name="state" :value="'Lagos'" required autofocus />
                        </div>
                        <div>
                            <x-label for="city" :value="__('City')" />
                            <x-input id="city" class="block w-full mt-1" type="text" name="city" :value="'Ikeja'" required autofocus />
                        </div>
                        <div>
                            <x-label for="address" :value="__('Address')" />
                            <x-input id="address" class="block w-full mt-1" type="text" name="address" :value="'Ikeja'" required autofocus />
                        </div>
                        <div>
                            <x-label for="postal-code" :value="__('Zip/postal-code')" />
                            <x-input id="postal-code" class="block w-full mt-1" type="text" name="postal-code" :value="'Ikeja'" required autofocus />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <p class="mb-4 font-bold tracking-wide sm:text-lg">Password Information</p>

            <div class="p-6 bg-white border rounded-lg shadow-sm">
                <div>
                    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                        <div>
                            <x-label for="current-password" :value="__('Current password')" />
                            <x-input id="current-password" class="block w-full mt-1" type="password" name="current-password" :value="auth()->user()->first_name" required autofocus />
                        </div>
                        <div>
                            <x-label for="password" :value="__('New password')" />
                            <x-input id="password" class="block w-full mt-1" type="password" name="password" :value="auth()->user()->middle_name" required autofocus />
                        </div>
                        <div>
                            <x-label for="password_confirmation" :value="__('Confirm password')" />
                            <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" :value="auth()->user()->last_name" required autofocus />
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="font-medium">Password requirements:</div>
                        <div class="text-sm text-gray-500">Ensure that these requirements are met:</div>
                        <ul class="pl-4 text-xs leading-4 text-gray-500">
                            <li class="">At least 10 characters (and up to 100 characters)</li>
                            <li class="">At least one lowercase character</li>
                            <li class="">Inclusion of at least one special character, e.g., ! @ # ?</li>
                        </ul>
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