<div class="fixed z-50 w-full bg-white border-b border-gray-300" x-data="{ isOpen: false }">
  <nav class="px-6 py-4 mx-auto lg:px-10 lg:flex lg:justify-between lg:items-center">
    <div class="flex items-center justify-between">
      <a class="flex items-center" href="{{ route('home') }}">
        <x-application-logo class="w-8 h-8 mr-2 text-gray-900 fill-current lg:mr-3" />
        <div class="flex flex-col">
          <p class="-mb-2 text-lg font-semibold text-gray-600 font-vesp lg:text-xl">Kari</p>
          <p class="text-sm font-normal">Investment</p>
        </div>
      </a>

      <!-- Mobile menu button -->
      <div @click="isOpen = !isOpen" class="flex lg:hidden">
        <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
          <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': isOpen, 'inline-flex': ! isOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! isOpen, 'inline-flex': isOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
    <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col pb-4 mt-8 space-y-8 lg:pb-0 lg:flex lg:space-y-0 lg:flex-row lg:items-center lg:space-x-10 lg:mt-0">
      <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-nav-link>
      <x-nav-link href="{{ route('investment.plans') }}" :active="request()->routeIs('investment.plans')">Investments</x-nav-link>
      <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">About Us</x-nav-link>
      <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">Contact</x-nav-link>
      <ul class="grid grid-cols-2">
          <li>
            <a class="inline-flex justify-center w-full h-full px-4 py-2 text-sm font-medium bg-gray-800 border border-gray-800 border-1 border-r-gray-100 lg:text-base animated-a focus:outline-none" href="{{ route('login') }}">
              <span>Login</span>
            </a>
          </li>
          <li>
            <a class="inline-flex justify-center w-full h-full px-4 py-2 text-sm font-medium bg-gray-800 border border-gray-800 border-1 lg:text-base animated-a focus:outline-none" href="{{ route('register') }}">
              <span>Register</span>
            </a>
          </li>
      </ul>
    </div>
  </nav>
</div>