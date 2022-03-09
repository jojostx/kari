<div x-cloak x-data="{ isOpen: false }" x-on:open-payment-approval-modal.window="isOpen = true" x-on:close-payment-approval-modal.window="isOpen = false" role="dialog" aria-modal="true" class="block" aria-label="confirmation modal">

    <div x-show="isOpen" x-transition:enter="ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-40 flex items-center justify-center min-h-screen p-4 overflow-y-auto transition">

        <button x-on:click="isOpen = false" type="button" aria-hidden="true" class="fixed inset-0 w-full h-full bg-black/50 focus:outline-none"></button>

        <div x-show="isOpen" x-trap="isOpen" x-on:keydown.window.escape="isOpen = false" x-transition:enter="ease duration-300" x-transition:enter-start="translate-y-8" x-transition:enter-end="translate-y-0" x-transition:leave="ease duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-8" class="relative mt-auto mb-auto cursor-pointer">

            <div class="w-full max-w-sm p-2 mx-auto space-y-2 bg-white cursor-default rounded-xl">
                <div class="space-y-2">
                    <div class="p-4 space-y-2 text-center">
                        <h2 class="text-xl font-bold tracking-tight">
                            Approve Payment
                        </h2>
                        <p>
                            Are you sure you want to approve this payment?
                        </p>
                    </div>
                </div>

                <div aria-hidden="true" class="border-t"></div>
                <div class="px-4 py-2">
                    <div class="grid gap-2 grid-cols-[repeat(auto-fit,minmax(0,1fr))]">
                        <button x-on:click="isOpen = false" wire:click="$refresh" type="button" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-gray-800 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600">
                            <span>Cancel</span>
                        </button>
                        <button wire:click="confirm" wire:loading.disabled type="submit" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white rounded-lg shadow disabled:bg-gray-800 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 focus:ring-white bg-danger-600 hover:bg-danger-500 focus:bg-danger-700 focus:ring-offset-danger-700">
                            <span>Confirm</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>