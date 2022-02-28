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
                APPROVE {{ $payment->tag }}
            </span>
        </p>
        <!-- desktop summary card -->
        <div class="grid p-6 bg-white border rounded-lg shadow-sm md:grid-cols-5 gap-x-6">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 col-span-full">
                <dl>
                    <dt class="text-sm font-medium leading-5 text-gray-500 ">Plan Type</dt>
                    <dd class="text-sm font-medium leading-5 uppercase">{{ $payment->plan->name }} </dd>
                </dl>
                <dl>
                    <dt class="text-sm font-medium leading-5 text-gray-500 ">Plan Tag</dt>
                    <dd class="text-sm font-medium leading-5">{{ $payment->tag }}</dd>
                </dl>
                <dl>
                    <dt class="text-sm font-medium leading-5 text-gray-500 ">Payment Principal</dt>
                    <dd class="text-sm font-medium leading-5">£ {{ number_format($payment->plan->principal) }}</dd>
                </dl>
                <dl>
                    <dt class="text-sm font-medium leading-5 text-gray-500 ">Payment Interest</dt>
                    <dd class="text-sm font-medium leading-5">{{ $payment->plan->interest * 100 }}%</dd>
                </dl>
            </div>

            <div class="mt-6 md:col-span-full">
                {{ $this->form }}
                <div class="flex items-center mt-4">
                    <x-button wire:loading.attr="disabled" wire:target="submit" wire:click="submit">
                        Submit
                    </x-button>
                    <button wire:click="cancel" x-on:click="isOpen = false" wire:click="$refresh" type="button" class="inline-flex items-center justify-center px-4 ml-4 font-medium tracking-tight text-gray-800 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600">
                        <span>Cancel</span>
                    </button>
                </div>
            </div>
        </div>

        <x-help-menu-card />
    </div>
</div>