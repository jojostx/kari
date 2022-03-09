<div class="col-span-1 flex items-center px-3 py-3 bg-white border-b border-gray-300 rounded-md shadow-md sm:px-4 sm:pt-4">
    <div class="grid w-full grid-cols-3 grid-rows-2 gap-2">
        <div>
            <p class="text-xs font-semibold text-gray-500 ">Tag </p>
            <h2 class="text-sm font-semibold text-gray-800">{{ $payout->tag }}</h2>
        </div>
        <div>
            <p class="text-xs font-semibold text-gray-500 ">Amount </p>
            <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($payout->amount) }}</h2>
        </div>
        <div>
            <p class="text-xs font-semibold text-gray-500">Created</p>
            <h2 class="text-sm font-semibold text-gray-800">{{ $payout['created_at']->format('M jS, Y') }}</h2>
        </div>
        <div class="col-span-full">
            <button wire:click="withdraw" wire:loading.attr="disabled" class="w-full flex justify-center items-center px-4 font-medium tracking-tight text-white rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 h-9 focus:ring-white">
                <svg wire:loading wire:target="withdraw" class="w-6 h-6 mr-1 -ml-2 rtl:ml-1 rtl:-mr-2 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                </svg>
                <span>Withdraw</span>
            </button>
        </div>
    </div>
</div>