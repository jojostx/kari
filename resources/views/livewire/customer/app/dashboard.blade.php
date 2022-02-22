<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <p class="mb-4 text-sm font-bold tracking-wide sm:text-base">INVESTMENTS</p>

        <!-- desktop summary card -->
        <div class="items-center justify-between hidden p-6 bg-white border rounded-lg shadow-sm sm:flex">
            <div class="">
                <p class="text-sm font-semibold text-gray-500">Total Principal</p>
                <h2 class="text-xl font-semibold text-gray-800">£ {{ number_format($total_principal) }}</h2>
            </div>
            <div class="">
                <p class="text-sm font-semibold text-gray-500">Total Expected Amount</p>
                <h2 class="text-xl font-semibold text-gray-800">£ {{ $total_roi ?? 0 }}</h2>
            </div>
            <div class="">
                <p class="text-sm font-semibold text-gray-500">Total Investments</p>
                <h2 class="text-xl font-semibold text-gray-800">{{ $total_investments }}</h2>
            </div>
        </div>

        <!-- mobile summary card -->
        <div class="flex flex-wrap items-center justify-between mt-8 overflow-hidden bg-white border-b border-gray-200 rounded-lg shadow-sm sm:hidden">
            <div class="w-full rounded-t-lg bg-[#DFDFDF] p-4">
                <div class="m-2 mb-5">
                    <p class="text-sm font-semibold text-gray-500">Total Principal</p>
                    <h2 class="text-xl font-semibold text-gray-800">£ {{ number_format($total_principal) }}</h2>
                </div>
                <div class="m-2">
                    <p class="text-sm font-semibold text-gray-500">Total Expected Amount</p>
                    <h2 class="text-xl font-semibold text-gray-800">£ {{ $total_roi ?? 0 }}</h2>
                </div>
            </div>
            <div class="w-full p-4 m-2 sm:w-min ">
                <div class="flex items-center justify-between mb-3">
                    <p class="text-sm font-semibold text-gray-500">Total Investments</p>
                    <h2 class="text-xl font-semibold text-gray-800">{{ $total_investments }}</h2>
                </div>
                <div class="border-4 rounded-lg py-4 px-2 gap-4 border-[#DFDFDF] grid grid-cols-2 grid-rows-2">
                    @foreach ($plans as $plan)
                    <div class="flex flex-col items-center">
                        <span class="flex justify-center w-14">
                            {!! $plan->icon !!}
                        </span>
                        <p class="mt-2 text-xs font-semibold text-gray-700">
                            {{ $plan->subCount }} {{ $plan->name }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 p-6 mt-4 bg-white border rounded-lg shadow-sm md:grid-cols-2">
            <div class="col-span-1 py-2 text-gray-600">
                <div class="font-medium">Investment requirements:</div>
                <div class="text-sm text-gray-500">Ensure that these requirements are met:</div>
                <ul class="pl-4 text-xs leading-5 text-gray-500">
                    <li class="">1. Select investment plan type and name your subscription</li>
                    <li class="">2. Make payment of the exact plan amount to the account details Kariinvestment sends to you</li>
                    <li class="">3. After making the payment to the account provided by kariinvestment, upload and submit payment details/teller code through your approve page</li>
                    <li class="">4. Your subscription will be created when your payment is verified. (approval may take up to 7 days)</li>
                </ul>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                @can('create', App\Models\Payment::class)
                <a href="{{ route('investments.create') }}" class="flex items-center gap-3 px-3 py-2 font-medium text-white transition bg-gray-800 rounded-lg hover:text-white hover:bg-gray-700 focus:bg-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>
                        Create New Investment
                    </span>
                </a>
                @else
                <x-button disabled aria-disabled="true" class="flex items-center gap-3 px-3 py-2 font-medium text-white transition bg-gray-800 rounded-lg hover:text-white hover:bg-gray-700 focus:bg-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>
                        Create New Investment
                    </span>
                </x-button>
                <p class="mt-2 text-sm">You can create new investment when you have less than 5 unapproved subscriptions.</p>
                @endcan
            </div>
            <x-payment-warning />
        </div>

        <x-help-menu-card />
    </div>
</div>