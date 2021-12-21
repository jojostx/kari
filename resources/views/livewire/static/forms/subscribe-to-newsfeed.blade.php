<section class="text-gray-600 border-t-8 border-gray-200 border-dashed body-font">
    <div class="container px-5 py-16 mx-auto md:py-24">
        <div class="flex flex-col w-full mb-12 text-center">
            <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Join Our NewsLetter</h1>
            <p class="max-w-md mx-auto text-base leading-relaxed lg:w-2/3">Recieve well curated information and news about investment opportunities when you sign up for our newsletter </p>
        </div>
        <div class="flex flex-col w-full px-8 mx-auto space-y-4 md:items-end lg:w-2/3 sm:flex-row sm:space-x-4 sm:space-y-0 sm:px-0">
            <div class="relative flex-grow w-full">
                <label for="fullname" class="text-sm leading-7 text-gray-600">Full Name</label>
                <input wire:model="fullname" type="text" id="fullname" name="fullname" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200">
                @error('fullname')
                    <x-livewire.error-text>{{ $message }}</x-livewire.error-text>
                @enderror
            </div>
            <div class="relative flex-grow w-full">
                <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                <input wire:model="email" type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200">
                @error('email')
                    <x-livewire.error-text>{{ $message }}</x-livewire.error-text>
                @enderror
            </div>
            <button wire:click="submit" wire:loading.class="bg-gray-400" wire:loading.attr="disabled" wire:target="submit" class="px-6 py-2 font-semibold text-white bg-gray-900 border-0 rounded md:text-lg hover:text-white focus:outline-none hover:bg-gray-700">Subscribe</button>
        </div>

        @if (session()->has('message'))
        <x-alert-toast>
            {{ session('message') }}
        </x-alert-toast>
        @endif
    </div>
</section>