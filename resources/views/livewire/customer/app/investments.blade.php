<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <p class="mb-4 font-bold tracking-wide sm:text-lg">INVESTMENTS</p>
        <!-- desktop summary card -->
        <div class="grid grid-cols-1 gap-4 p-6 bg-white border rounded-lg shadow-sm md:grid-cols-2">
            <x-payment-guide />

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

        @if ($this->pending_payments_count)
        <div class="mt-8">
            <div class="mb-4">
                <p class="mb-4 font-bold tracking-wide sm:text-lg">Pending Payments</p>
                <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">Click the "approve" link to complete you payment for approval</p>
            </div>
            {{ $this->table }}
        </div>
        @endif

        <div class="mt-8">
            <p class="mb-4 font-bold tracking-wide sm:text-lg">Subscriptions</p>
            <div class="grid gap-4 md:grid-cols-2">
                @forelse ($subscriptions as $subscription)
                <div class="col-span-1 flex items-center px-3 py-3 bg-[#F1F1F1] border-b border-gray-300 rounded-md shadow-md sm:px-4 sm:pt-4">
                    <div class="flex items-center justify-center h-24 p-3 bg-white rounded-md shrink w-28">
                        {!! $subscription->plan->icon !!}
                    </div>
                    <div class="grid w-full grid-cols-2 grid-rows-3 gap-2 ml-3">
                        <div>
                            <p class="text-xs font-semibold text-gray-500">Type</p>
                            <h2 class="text-sm font-semibold text-gray-800 uppercase">{{ $subscription->plan['name'] }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500">Next Payout Date</p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $subscription['next_payout_at']->format('M jS, Y') }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Principal</p>
                            <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($subscription['principal']) }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500">Interest</p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $subscription['interest'] * 100 }}%</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500">Start</p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $subscription['created_at']->format('M jS, Y') }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500">End</p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $subscription['ends_at']->format('M jS, Y') }}</h2>
                        </div>
                    </div>
                </div>
                @empty
                <x-empty-state>
                    You currently have no available Subscriptions.
                </x-empty-state>
                @endforelse
            </div>
        </div>

        <x-help-menu-card />
    </div>

    <p class="hidden text-blue-600"></p>
</div>