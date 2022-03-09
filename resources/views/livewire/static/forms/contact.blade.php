<div class="flex flex-col w-full mt-8 bg-white lg:w-1/3 md:w-1/2 md:ml-auto md:py-8 md:mt-0">
    <h2 class="mb-1 text-lg font-medium text-gray-900 title-font">Contact Us</h2>
    <p class="mb-5 leading-relaxed text-gray-600">We are always ready to interact with our customers, get in touch with us today</p>
    <div class="relative mb-4">
        <label for="fullname" class="text-sm leading-7 text-gray-600">Full Name</label>
        <input wire:model="fullname" value="{{ $fullname }}" type="text" id="fullname" name="fullname" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
        @error('fullname')
        <x-livewire.error-text>{{ $message }}</x-livewire.error-text>
        @enderror
    </div>
    <div class="relative mb-4">
        <label for="phone" class="text-sm leading-7 text-gray-600">Phone</label>
        <input wire:model="phone" value="{{ $phone }}" type="phone" id="phone" name="phone" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
        @error('phone')
        <x-livewire.error-text>{{ $message }}</x-livewire.error-text>
        @enderror
    </div>
    <div class="relative mb-4">
        <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
        <input wire:model.lazy="email" value="{{ $email }}" type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
        @error('email')
        <x-livewire.error-text>{{ $message }}</x-livewire.error-text>
        @enderror
    </div>
    <div class="relative mb-4">
        <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
        <textarea wire:model.lazy="message" id="message" value="" name="message" class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
        @error('message')
        <x-livewire.error-text>{{ $message }}</x-livewire.error-text>
        @enderror
    </div>
    <button 
        wire:click="submit" 
        wire:loading.class="bg-gray-400" 
        wire:loading.attr="disabled" 
        wire:target="submit" 
        class="px-6 py-2 text-lg text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">
        Submit
    </button>
    
    @if (session()->has('message'))
    <x-alert-toast>
        {{ session('message') }}
    </x-alert-toast>
    @endif
    <p class="mt-3 text-xs text-gray-500">For more information about Kari investments visit <a href="{{ route('help') }}#help" class="underline">our FAQs</a> page.</p>
</div>