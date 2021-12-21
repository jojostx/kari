<div class="py-14">
    <div class="flex flex-col items-center w-10/12 mx-auto">
        <p class="mb-4 text-xl font-semibold">Was this article helpful?</p>
        <div id="feedback_Form" class="flex flex-col items-center justify-center mb-4">
            <div class="flex mb-4">
                <input type="radio" wire:model="type" name="type" value="1" id="positive" class="hidden">
                <label for="positive" class="w-10 mr-4 text-center hover:text-blue-600 positive-feedback-type">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="font-semibold">Yes</p>
                </label>
                <input type="radio" wire:model="type" name="type" value="0" id="negative" class="hidden">
                <label for="negative" class="w-10 text-center hover:text-red-600 negative-feedback-type">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="font-semibold">No</p>
                </label>
            </div>
            <x-button wire:click="submit" wire:loading.class="bg-gray-400" wire:loading.attr="disabled" wire:target="submit" type="Submit" class="flex items-center justify-center font-bold text-gray-100 bg-gray-800 rounded-full w-28 hover:text-gray-100 hover:bg-blue-500">
                submit
            </x-button>
        </div>

        @if (session()->has('message'))
        <x-alert-toast>
            {{ session('message') }}
        </x-alert-toast>
        @endif
    </div>
</div>
<!-- End of Feedback Section -->