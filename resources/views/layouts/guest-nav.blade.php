<div class="fixed z-50 w-full bg-white border-b border-gray-300" x-data="{ isOpen: false }">
  <nav class="px-6 py-4 mx-auto md:px-10 md:flex md:justify-between md:items-center">
    <div class="flex items-center justify-between">
      <a class="flex items-center" href="{{ route('home') }}">
        <x-application-logo class="w-8 h-8 mr-2 text-gray-900 fill-current md:mr-3" />
        <div class="flex flex-col">
          <p class="-mb-2 text-lg font-semibold text-gray-600 font-vesp md:text-xl">Kari</p>
          <p class="text-sm font-normal">Investment</p>
        </div>
      </a>

      <!-- Mobile menu button -->
      <div @click="isOpen = !isOpen" class="flex md:hidden">
        <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
          <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': isOpen, 'inline-flex': ! isOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! isOpen, 'inline-flex': isOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
    <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col pb-4 mt-8 space-y-8 md:pb-0 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
      <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-nav-link>
      <x-nav-link href="{{ route('investments') }}" :active="request()->routeIs('investments')">Investments</x-nav-link>
      <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">About Us</x-nav-link>
      <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">Contact</x-nav-link>
    </div>
  </nav>
</div>