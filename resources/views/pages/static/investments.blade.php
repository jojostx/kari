<x-guest-layout>
  <div>
    <!-- nav -->
    @include('layouts.guest-nav')

    <!-- banner  -->
    <section class="relative flex items-start justify-center p-12 top-6 md:justify-between py-28 md:py-36">
      <div style="filter: blur(2px);" class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-bridge">
      </div>

      <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-gradient-to-r from-gray-800 to-blue-900">
      </div>

      <div class="relative z-10 flex flex-col pt-10 text-left md:items-start">
        <h1 class="mb-4 text-3xl font-bold md:leading-[3.5rem] tracking-wide text-white max-w-xl md:text-5xl font-vesp lg:tracking-wider">
          Flexible Investment Plans With Excellent Interest Rates
        </h1>
        <p class="max-w-sm mb-8 text-lg font-medium text-white">
          Start investing in real estate with a stable ROI
        </p>
        <x-animated-button href="{{ route('register') }}" class="border-2 border-white">Get Started</x-animated-button>
      </div>

      <div class="absolute md:right-12 max-w-md sm:max-w-sm max-h-[460px] md:max-h-[530px] lg:max-h-[570px] overflow-hidden rounded-md">
        <img src="{{ asset('images/london-big-ben.jpg') }}" class="w-full" alt="a photo of the london big ben building">
      </div>
    </section>

    <!-- assets -->
    <div class="flex flex-col pb-10 bg-prism">
      <div class="flex items-center justify-center px-4 mb-6 pt-28 xs:pt-36 sm:pt-40 md:pt-40">
        <h1 class="mb-4 text-4xl font-bold tracking-wide text-center md:text-5xl font-vesp lg:tracking-wider">
          Investment Plans
        </h1>
      </div>
      <div class="grid items-center w-full max-w-5xl grid-cols-1 gap-6 px-4 mx-auto sm:px-12 md:grid-cols-2">
        @foreach (App\Models\Plan::all() as $plan)
        <x-partials.static-plan-item :plan="$plan" />
        @endforeach
      </div>
    </div>

    <!-- call-to-action -->
    <div class="relative flex justify-center">
      <div class="relative z-10 flex flex-col items-center justify-between w-10/12 my-12 py-14 md:flex-row">
        <div class="max-w-lg p-8 border-2 border-gray-800 sm:p-10 md:mb-0">
          <p class="text-2xl font-bold md:text-3xl">Start Investing Wisely today In One of the world Largest and Stable Economies</p>
        </div>

        <div class="w-1 h-12 border-l-2 border-gray-900 border-dashed md:border-t-2 md:w-full md:h-1"></div>

        <button class="transition-all duration-100 shrink-0 hover:shadow-md">
          <x-animated-button-black href="{{ route('register') }}" class="inline-block px-4 py-2 text-base font-medium text-black border-2 border-black lg:px-6 lg:py-4 md:text-xl hover:text-black animated-a">Get Started</x-animated-button-black>
        </button>
      </div>
      <div class="absolute right-0 flex items-end w-full -bottom-4 -left-2">
        <img class="w-3/4 md:w-1/2" src="{{ asset('images/london-skyline.png') }}" alt="">
      </div>
    </div>

    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>