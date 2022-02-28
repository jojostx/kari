<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <p class="mb-4 font-bold tracking-wide sm:text-lg">
            <a href="{{ route('investments.index') }}">
                INVESTMENTS
            </a>
            <span>
                /
            </span>
            <span>
                CREATE
            </span>
        </p>
        <!-- desktop summary card -->
        <div class="grid grid-cols-1 p-6 bg-white border rounded-lg shadow-sm md:grid-cols-2 gap-x-6">
            <x-payment-warning />
            
            <div class="col-span-1 mt-4">
                {{ $this->form }}
                <div class="flex items-center mt-4">
                    <x-button wire:loading.attr="disabled" wire:target="create" wire:click="create">
                        Create
                    </x-button>
                    <button wire:click="cancel" x-on:click="isOpen = false" wire:click="$refresh" type="button" class="inline-flex items-center justify-center px-4 ml-4 font-medium tracking-tight text-gray-800 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600">
                        <span>Cancel</span>
                    </button>
                </div>
            </div>

            <div class="col-span-1 py-2 mt-4 text-gray-600">
                <div class="font-medium">Investment requirements:</div>
                <div class="text-sm text-gray-500">Ensure that these requirements are met:</div>
                <ul class="pl-4 text-xs leading-5 text-gray-500">
                    <li class="">1. Select investment plan type and name your subscription</li>
                    <li class="">2. Make payment of the exact plan amount to the account details Kariinvestment sends to you</li>
                    <li class="">3. After making the payment to the account provided by kariinvestment, upload and submit payment details/teller code through your approve page</li>
                    <li class="">4. Your subscription will be created when your payment is verified. (approval may take up to 7 days)</li>
                </ul>
            </div>
        </div>

        <x-help-menu-card />
    </div>
</div>