<div class="flex-1 w-full px-4 mx-auto md:px-6 lg:px-8 max-w-7xl">
    <div x-data="{show_edit_form : false }">
        <div class="space-y-6">
            <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
                <h1 class="text-2xl font-bold tracking-tight md:text-3xl">
                    {{ $customer->full_name }} <span class="text-gray-500">({{ $customer->middle_name}})</span>
                </h1>

                <div class="flex flex-wrap items-center justify-start gap-4 shrink-0">
                    <button x-show="!show_edit_form" type="button" x-on:click="show_edit_form = true" wire:loading.attr="disabled" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 focus:ring-white bg-danger-600 hover:bg-danger-500 focus:bg-danger-700 focus:ring-offset-danger-700">
                        <svg wire:loading="" wire:target="mountAction('delete')" class="w-6 h-6 mr-1 -ml-2 rtl:ml-1 rtl:-mr-2 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                        </svg>
                        <span>Edit</span>
                    </button>
                </div>
            </header>

            <form x-cloak x-show="show_edit_form" class="space-y-6" wire:submit.prevent="save">
                <div class="grid grid-cols-1 gap-6">
                    <div class="col-span-full">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            <div class="col-span-full sm:col-span-2 ">
                                <div class="p-6 bg-white shadow rounded-xl">
                                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.name">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                First Name
                                                                <sup class="font-medium text-danger-700">*</sup>
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            <input wire:model.defer="customer.first_name" type="text" id="data.name" required="" class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.name">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Middle Name
                                                                <sup class="font-medium text-danger-700">*</sup>
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            <input wire:model.defer="customer.middle_name" type="text" id="data.name" required="" class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.name">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Last Name
                                                                <sup class="font-medium text-danger-700">*</sup>
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            <input wire:model.defer="customer.last_name" type="text" id="data.name" required="" class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.email">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Email
                                                                <sup class="font-medium text-danger-700">*</sup>
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            <input wire:model.defer="customer.email" type="email" id="data.email" required="" class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.phone">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Phone
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            <input wire:model.defer="customer.phone_number" type="text" id="data.phone" class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 sm:col-span-2 ">
                                            <div class="grid grid-cols-1 gap-6">
                                                <div class="col-span-1 ">
                                                    <div>
                                                        <div class="space-y-2">
                                                            <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                                <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.address.street">
                                                                    <span class="text-sm font-medium leading-4 text-gray-700">
                                                                        Street address
                                                                    </span>
                                                                </label>
                                                            </div>

                                                            <div class="flex items-center space-x-1 group">
                                                                <div class="flex-1">
                                                                    <input wire:model.defer="customer.location.address" type="text" id="data.address.street" class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
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
                            <div class="col-span-1 ">
                                <div class="p-6 bg-white shadow rounded-xl">
                                    <div class="grid grid-cols-1 gap-6">
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.created_at">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Created at
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        11 months ago
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.updated_at">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Verified at
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        1 week ago
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.updated_at">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Last modified at
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        1 week ago
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
                <div class="flex flex-wrap items-center justify-start gap-4">
                    <button type="submit" wire:loading.attr="disabled" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 h-9 focus:ring-white">
                        <svg wire:loading="" wire:target="save" class="w-6 h-6 mr-1 -ml-2 rtl:ml-1 rtl:-mr-2 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                        </svg>
                        <span>Save</span>
                    </button>

                    <button x-on:click="show_edit_form = false" type="button" wire:loading.attr="disabled" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-gray-800 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600">
                        <span>Cancel</span>
                    </button>
                </div>
            </form>

            <form x-cloak x-show="!show_edit_form" class="space-y-6" wire:submit.prevent="save">
                <div class="grid grid-cols-1 gap-6">
                    <div class="col-span-full">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            <div class="col-span-full sm:col-span-2 ">
                                <div class="p-6 bg-white shadow rounded-xl">
                                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.name">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                First Name
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            {{ $customer->first_name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.name">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Middle Name
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            {{ $customer->middle_name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.name">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Last Name
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            {{ $customer->first_name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.email">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Email

                                                                @if ($customer->verified)     
                                                                <span class="inline-flex items-center justify-center h-5 px-2 text-xs font-medium tracking-tight bg-blue-200 rounded-full cursor-text">
                                                                    verified
                                                                </span>
                                                                @endif
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            {{ $customer->email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.phone">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Phone
                                                                @if ($customer->verifiedPhone)     
                                                                <span class="inline-flex items-center justify-center h-5 px-2 text-xs font-medium tracking-tight bg-blue-200 rounded-full cursor-text">
                                                                    verified
                                                                </span>
                                                                @endif
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            {{ $customer->phone_number }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1 ">
                                <div class="p-6 bg-white shadow rounded-xl">
                                    <div class="grid grid-cols-1 gap-6">
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.created_at">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Created at
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        {{ $customer->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.updated_at">
                                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                                Last modified at
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        {{ $customer->updated_at->diffForHumans() }}
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
        </div>
    </div>
</div>