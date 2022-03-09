<div class="flex-1 w-full px-4 mx-auto md:px-6 lg:px-8 max-w-7xl">
    <div>
        <div class="space-y-6">
            <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
                <h1 class="text-2xl font-bold tracking-tight md:text-3xl">
                    {{ Str::limit($subscription->refcode, 8, '...') }} <span class="text-gray-500">({{ $subscription->customer->full_name }})</span>
                </h1>

                <div class="flex flex-wrap items-center justify-start gap-4 shrink-0">
                    <button type="button" wire:click="delete" wire:loading.attr="disabled" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 focus:ring-white bg-danger-600 hover:bg-danger-500 focus:bg-danger-700 focus:ring-offset-danger-700">
                        <svg wire:loading="" wire:target="delete" class="w-6 h-6 mr-1 -ml-2 rtl:ml-1 rtl:-mr-2 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                        </svg>
                        <span>Delete</span>
                    </button>
                </div>
            </header>

            <div class="space-y-6">
                <div class="grid grid-cols-1 gap-6">
                    <div class="col-span-full">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            <div class="col-span-full sm:col-span-2 ">
                                <div class="p-6 bg-white shadow rounded-xl">
                                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.name">
                                                            <span class="text-sm font-medium leading-4 text-gray-500">
                                                                Refcode
                                                            </span>
                                                        </label>
                                                        <!-- <x-button class="py-1 text-xs px-1" wire:target="edit" wire:loading.attr="disabled" wire:click="edit">
                                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                            </svg>
                                                            Edit
                                                        </x-button> -->
                                                    </div>

                                                    <div class="max-w-[160px] md:max-w-[260px] flex items-center space-x-1 group">
                                                        <div style="overflow-wrap: break-word; word-wrap: break-word; hyphens: auto;" class="flex-1 w-full">
                                                            {{ $subscription->refcode }}
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
                                                            <span class="text-sm font-medium leading-4 text-gray-500">
                                                                Principal
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            <span class="text-sm text-gray-500 whitespace-nowrap">
                                                                £
                                                            </span>
                                                            {{ number_format($subscription->principal) }}
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
                                                            <span class="text-sm font-medium leading-4 text-gray-500">
                                                                Interest
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            {{ $subscription->interest }}
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
                                                            <span class="text-sm font-medium leading-4 text-gray-500">
                                                                Plan Type
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1 uppercase">
                                                            {{ $subscription->plan->name }}
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
                                                            <span class="text-sm font-medium leading-4 text-gray-500">
                                                                Customer's Fullname
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            {{ $subscription->customer->full_name }}
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
                                                            <span class="text-sm font-medium leading-4 text-gray-500">
                                                                Customer's Email
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center space-x-1 group">
                                                        <div class="flex-1">
                                                            {{ $subscription->customer->email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1 ">
                                <div class="p-5 bg-white shadow rounded-xl">
                                    <div class="grid grid-cols-1 gap-6">
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.created_at">
                                                            <span class="text-sm font-medium leading-4 text-gray-500">
                                                                Payout Amount
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <span class="text-sm text-gray-500 whitespace-nowrap">
                                                            £
                                                        </span>
                                                        {{ intval($subscription->principal) * floatval($subscription->interest) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-5 mt-4 bg-white shadow rounded-xl">
                                    <div class="grid grid-cols-1 gap-6">
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.created_at">
                                                            <span class="text-sm font-medium leading-4 text-gray-500">
                                                                Started at
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        {{ $subscription->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 ">
                                            <div>
                                                <div class="space-y-2">
                                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.updated_at">
                                                            <span class="text-sm font-medium leading-4 text-gray-500">
                                                                Ends at
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        {{ $subscription->ends_at->diffForHumans() }}
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

    @livewire('admin.components.subscription-edit-confirmation-modal')
    @livewire('admin.components.subscription-delete-confirmation-modal')
</div>