<x-guest-layout>
  <div>
    <!-- nav -->
    @include('layouts.guest-nav')

    <section class="relative flex flex-col p-12 bg-center bg-cover md:items-center md:text-center py-28 md:py-36 bg-pent-mobile lg:bg-pent lg:p-36 lg:py-48">
      <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-gradient-to-r from-gray-800 to-blue-900">
      </div>
      <div class="relative z-20 pt-10">
        <h1 class="mb-2 text-3xl font-bold tracking-wide text-white md:text-4xl font-vesp lg:text-5xl lg:tracking-wider">
          Invest In One of the World's Largest and Stable Economy</h1>
      </div>

      <div class="relative z-20">
        <p class="max-w-sm mb-8 text-white lg:text-lg">
          Start investing in real estate with a stable ROI
        </p>
      </div>

      <div class="relative z-20 flex items-center space-x-2 md:justify-center">
        <x-animated-button href="{{ route('register') }}" class="border-2 border-white">Get Started</x-animated-button>
      </div>
    </section>

    <!-- faqs -->
    <div class="px-4">
      <div class="flex flex-col w-full py-16 mx-auto md:w-4/5">
        <x-faq :faqs='$faqs' class="mb-4" />
      </div>
    </div>

    <!-- Feedback Section -->
    <livewire:static.forms.feedback />

    <!-- call to action //links to contact page -->
    <x-get-in-touch>
      Feel free to contact us if you have any other questions.
    </x-get-in-touch>

    <!-- sub to newsfeed -->
    <livewire:static.forms.subscribe-to-newsfeed />

    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>