<div class="flex-1 w-full px-4 mx-auto md:px-6 lg:px-8 max-w-7xl">
    <div x-data="{show_edit_form : false }">
        <div class="space-y-6">
            <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
                <h1 class="text-2xl font-bold tracking-tight md:text-3xl">
                    {{ $customer->full_name }} <span class="text-gray-500">({{ $customer->middle_name}})</span>
                </h1>

                <div class="flex flex-wrap items-center justify-start gap-4 shrink-0">
                    <button x-show="!show_edit_form" type="button" x-on:click="show_edit_form = true" wire:loading.attr="disabled" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 focus:ring-white bg-danger-600 hover:bg-danger-500 focus:bg-danger-700 focus:ring-offset-danger-700">
                        <span>Edit</span>
                    </button>
                </div>
            </header>

            <form x-cloak x-show="show_edit_form" class="space-y-6" wire:submit.prevent="save">
                <div class="grid grid-cols-1 gap-6">
                    <div class="col-span-full">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            @if ($updated)
                            <div class="p-6 text-lg font-medium text-blue-600 bg-blue-200 border-2 border-blue-600 rounded-md col-span-full">
                                <p>
                                    Updated
                                </p>
                            </div>
                            @endif
                            <div class="p-6 bg-white shadow col-span-full rounded-xl sm:col-span-2 ">
                                <div class="">
                                    {{ $this->form }}
                                </div>
                                <div class="flex flex-wrap items-center justify-start gap-4 mt-4">
                                    <button type="submit" wire:loading.attr="disabled" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 h-9 focus:ring-white">
                                        <svg wire:loading="" wire:target="save" class="w-6 h-6 mr-1 -ml-2 rtl:ml-1 rtl:-mr-2 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                                        </svg>
                                        <span>Save</span>
                                    </button>

                                    <button x-on:click="show_edit_form = false" type="button" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-gray-800 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600">
                                        <span>Cancel</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-span-1 ">
                                <div class="p-6 bg-white shadow rounded-xl">
                                    <div class="grid grid-cols-1 gap-6">
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-1">
                                                    <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.created_at">
                                                        <span class="text-xs font-medium leading-4 text-gray-500">
                                                            Created at
                                                        </span>
                                                    </label>
                                                    <div>
                                                        {{ $customer->created_at?->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-1">
                                                    <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.updated_at">
                                                        <span class="text-xs font-medium leading-4 text-gray-500">
                                                            Email Verified at
                                                        </span>
                                                    </label>
                                                    <div>
                                                        {{ $customer->email_verified_at?->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-1">
                                                    <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.updated_at">
                                                        <span class="text-xs font-medium leading-4 text-gray-500">
                                                            Phone Verified at
                                                        </span>
                                                    </label>
                                                    <div>
                                                        {{ $customer->phone_verified_at?->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-1">
                                                    <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.updated_at">
                                                        <span class="text-xs font-medium leading-4 text-gray-500">
                                                            Last modified at
                                                        </span>
                                                    </label>
                                                    <div>
                                                        {{ $customer->updated_at?->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div x-cloak x-show="!show_edit_form" class="space-y-6">
                <div class="grid grid-cols-1 gap-6">
                    <div class="col-span-full">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            <div class="col-span-full sm:col-span-2 ">
                                <div class="p-6 bg-white border rounded-lg shadow-sm">
                                    <div class="text-gray-600 col-span-full">
                                        <p>Personal Information</p>
                                    </div>
                                    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500 ">First Name</dt>
                                            <dd class="text-sm font-medium leading-5">{{ $customer->first_name }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500 ">Middle Name</dt>
                                            <dd class="text-sm font-medium leading-5">{{ $customer->middle_name }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500 ">Last Name</dt>
                                            <dd class="text-sm font-medium leading-5">{{ $customer->last_name }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500 ">Birthday</dt>
                                            <dd class="text-sm font-medium leading-5">{{ $customer->birthdate?->format('M j, Y') ?: 'Not Specified' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="p-6 mt-6 bg-white border rounded-lg shadow-sm">
                                    <div class="text-gray-600 col-span-full">
                                        <p>Contact Information</p>
                                    </div>
                                    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500">Email Address
                                                @if ($customer->hasVerifiedEmail())
                                                <span class="inline-flex items-center justify-center px-2 py-0.5 text-xs tracking-tight text-blue-600 bg-blue-200 rounded-full">
                                                    Verified
                                                </span>
                                                @else
                                                <span class="inline-flex items-center justify-center px-2 py-0.5 text-xs tracking-tight text-red-600 bg-red-200 rounded-full">
                                                    Unverified
                                                </span>
                                                @endif
                                            </dt>
                                            <dd class="mt-1 font-medium leading-5">{{ $customer->email }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('Phone Number') }}
                                                @if ($customer->hasVerifiedPhoneNumber())
                                                <span class="inline-flex items-center justify-center px-2 py-0.5 text-xs tracking-tight text-blue-600 bg-blue-200 rounded-full">
                                                    Verified
                                                </span>
                                                @else
                                                <span class="inline-flex items-center justify-center px-2 py-0.5 text-xs tracking-tight text-red-600 bg-red-200 rounded-full">
                                                    <!-- Unverified -->
                                                </span>
                                                @endif
                                            </dt>
                                            <dd class="mt-1 font-medium leading-5">{{ $customer->phone_number }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('State') }}</dt>
                                            <dd class="mt-1 leading-5">{{ $customer->location?->state?->name ?: 'Not Specified' }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('City') }}</dt>
                                            <dd class="mt-1 font-medium leading-5">{{ $customer->location?->city?->name ?: 'Not Specified' }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('Address') }}</dt>
                                            <dd class="mt-1 font-medium leading-5">{{ $customer->location?->address ?: 'Not Specified' }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('Zip/postal-code') }}</dt>
                                            <dd class="mt-1 font-medium leading-5">{{ $customer->location?->postcode ?: 'Not Specified' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="p-6 mt-6 bg-white border rounded-lg shadow-sm">
                                    <div class="text-gray-600 col-span-full">
                                        <p>Bank Account Information</p>
                                    </div>
                                    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('Bank Name') }}</dt>
                                            <dd class="mt-1 leading-5">{{ $customer->account?->bank_name ?: 'Not Specified' }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('Account Name') }}</dt>
                                            <dd class="mt-1 font-medium leading-5">{{ $customer->account?->account_name ?: 'Not Specified' }}</dd>
                                        </dl>
                                        <dl>
                                            <dt class="text-sm font-medium leading-5 text-gray-500">{{ __('Account Number') }}</dt>
                                            <dd class="mt-1 font-medium leading-5">{{ $customer->account?->account_number ?: 'Not Specified' }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1 ">
                                <div class="p-6 bg-white shadow rounded-xl">
                                    <div class="grid grid-cols-1 gap-6">
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-1">

                                                    <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.created_at">
                                                        <span class="text-sm font-medium leading-4 text-gray-700">
                                                            Created at
                                                        </span>
                                                    </label>
                                                    <div>
                                                        {{ $customer->created_at?->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-1">
                                                    <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.updated_at">
                                                        <span class="text-sm font-medium leading-4 text-gray-700">
                                                            Last modified at
                                                        </span>
                                                    </label>
                                                    <div>
                                                        {{ $customer->updated_at?->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>