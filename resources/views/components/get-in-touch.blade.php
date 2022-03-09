<div class="flex justify-center bg-prism">
  <div class="flex flex-col items-center justify-between w-10/12 my-12 py-14 md:flex-row">
    <div class="max-w-lg p-8 border-2 border-gray-800 sm:p-10 md:mb-0">
      <p class="text-2xl font-bold md:text-3xl">{{ $slot }}</p>
    </div>

    <div class="w-1 h-12 border-l-2 border-gray-900 border-dashed md:border-t-2 md:w-full md:h-1"></div>

    <button class="transition-all duration-100 shrink-0 hover:shadow-md">
      <x-animated-button-black href="{{ route('contact') }}" class="inline-block px-4 py-2 text-base font-medium text-black border-2 border-black lg:px-6 lg:py-4 md:text-xl hover:text-black animated-a">Get In Touch</x-animated-button-black>
    </button>
  </div>
</div>