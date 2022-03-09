<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="mb-4 font-bold tracking-wide sm:text-base">
            <p class="mb-4 font-bold tracking-wide sm:text-lg">
                PAYOUTS
            </p>
            <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">This page shows all your Investments thet have reached maturity and have payouts/ROIs that can be withdrawn</p>
        </div>
        <!-- desktop summary card -->

        <div class="mt-8">
            <div class="mb-4 text-sm font-bold tracking-wide sm:text-base">
                <p>Available Payouts</p>
                <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">These are payouts that are available for withdrawal</p>
            </div>

            @if (auth()->user()->account()->exists())
            <div class="grid gap-4 sm:grid-cols-2">
                @forelse ($this->created_payouts as $created_payout)
                @livewire('customer.app.payouts.cards.created', ['payout' => $created_payout], key($created_payout->id))
                @empty
                <x-empty-state>
                    You currently have no available payouts.
                </x-empty-state>
                @endforelse
            </div>
            @else
            <div class="grid grid-cols-1 gap-4 p-6 bg-white border rounded-lg shadow-sm md:grid-cols-2">
                <x-payout-warning />

                <div class="col-span-1 py-2 mb-2 text-gray-600">
                    <ul class="font-semibold leading-5 text-gray-500">
                        <p>You have {{ $this->created_payouts->count() }} available {{ Str::plural('payout', $this->created_payouts->count()) }}.</p>
                    </ul>
                </div>

                <div class="flex flex-col items-center justify-center col-span-1">
                    <x-button-link href="{{ route('account-settings') }}#bank-account-settings" class="flex items-center gap-3 px-3 py-2 font-medium text-white transition bg-gray-800 rounded-lg hover:text-white hover:bg-gray-700 focus:bg-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>
                            Update Bank Account Details
                        </span>
                    </x-button-link>
                </div>
            </div>
            @endif
        </div>

        <div class="mt-8">
            <div class="mb-4 text-sm font-bold tracking-wide sm:text-base">
                <p>Requested Payouts</p>
                <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">These are payouts that you have requested for withdrawal</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @forelse ($this->requested_payouts as $requested_payout)
                <div class="flex items-center col-span-1 px-3 py-3 bg-white border-b border-gray-300 rounded-md shadow-md sm:px-4 sm:pt-4">
                    <div class="grid w-full grid-cols-2 gap-2 ml-3">
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Tag </p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $requested_payout->tag }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Amount </p>
                            <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($requested_payout->amount) }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Requested at</p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $requested_payout->updated_at->format('M jS, Y') }}</h2>
                        </div>
                        <div class="flex items-center">
                            <span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight rounded-full bg-primary-100 cursor-text hover:no-underline text-primary-600 focus:no-underline">
                                Pending
                            </span>
                        </div>
                    </div>
                </div>
                @empty
                <x-empty-state>
                    You currently have no requested payouts.
                </x-empty-state>
                @endforelse
            </div>
        </div>

        <div class="mt-8">
            <div class="mb-4 text-sm font-bold tracking-wide sm:text-base">
                <p>Withdrawn Payouts</p>
                <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">These are payouts that you have successfully withdrawn</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @forelse ($this->withdrawn_payouts as $withdrawn_payout)
                <div class="flex items-center col-span-1 px-3 py-3 bg-white border-b border-gray-300 rounded-md shadow-md sm:px-4 sm:pt-4">
                    <div class="grid w-full grid-cols-2 gap-2 ml-3">
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Tag </p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $withdrawn_payout->tag }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Amount </p>
                            <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($withdrawn_payout->amount) }}</h2>
                        </div>
                        @if (!is_null($withdrawn_payout->withdrawn_at))
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Withdrawn at </p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $withdrawn_payout->withdrawn_at->format('M jS, Y') }}</h2>
                        </div>
                        @endif
                        <div class="flex items-center">
                            <span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight rounded-full bg-success-100 cursor-text hover:no-underline text-success-600 focus:no-underline">
                                withdrawn
                            </span>
                        </div>
                    </div>
                </div>
                @empty
                <x-empty-state>
                    You currently have no withdrawn payouts.
                </x-empty-state>
                @endforelse
            </div>
        </div>

        <x-help-menu-card />
    </div>

    <p class="hidden text-blue-600"></p>
</div>