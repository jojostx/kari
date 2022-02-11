<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <div>
            <p class="mb-4 font-bold tracking-wide sm:text-lg">PROFILE</p>

            <div class="p-6 bg-white border rounded-lg shadow-sm">
                <div>
                    <div class="text-gray-600 col-span-full">
                        <p>Personal Information</p>
                    </div>
                    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500 ">First Name</dt>
                            <dd class="text-sm font-medium leading-5">{{ auth()->user()->first_name }}</dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500 ">Middle Name</dt>
                            <dd class="text-sm font-medium leading-5">{{ auth()->user()->middle_name }}</dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500 ">Last Name</dt>
                            <dd class="text-sm font-medium leading-5">{{ auth()->user()->last_name }}</dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500 ">Birthday</dt>
                            <dd class="text-sm font-medium leading-5">{{ auth()->user()?->birthdate?->format('M j, Y') ?: 'Not Specified' }}</dd>
                        </dl>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="text-gray-600 col-span-full">
                        <p>Contact Information</p>
                    </div>
                    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500">Email Address
                                @if (auth()->user()->hasVerifiedEmail())
                                <span class="inline-flex items-center justify-center px-2 py-0.5 text-xs tracking-tight text-blue-600 bg-blue-200 rounded-full">
                                    Verified
                                </span>
                                @endif
                            </dt>
                            <dd class="mt-1 font-medium leading-5">{{ auth()->user()->email }}</dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('Phone Number') }}
                                @if (auth()->user()->hasVerifiedPhoneNumber())
                                <span class="inline-flex items-center justify-center px-2 py-0.5 text-xs tracking-tight text-blue-600 bg-blue-200 rounded-full">
                                    Verified
                                </span>
                                @endif
                            </dt>
                            <dd class="mt-1 font-medium leading-5">{{ auth()->user()->phone_number }}</dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('State') }}</dt>
                            <dd class="mt-1 leading-5">{{ auth()->user()->location?->state?->name ?: 'Not Specified' }}</dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('City') }}</dt>
                            <dd class="mt-1 font-medium leading-5">{{ auth()->user()->location?->city?->name ?: 'Not Specified' }}</dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('Address') }}</dt>
                            <dd class="mt-1 font-medium leading-5">{{ auth()->user()->location?->address ?: 'Not Specified' }}</dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('Zip/postal-code') }}</dt>
                            <dd class="mt-1 font-medium leading-5">{{ auth()->user()->location?->postcode ?: 'Not Specified' }}</dd>
                        </dl>
                    </div>
                </div>
            </div>

            <x-help-menu-card />
        </div>
    </div>
</div>