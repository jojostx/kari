<x-guest-layout>
  <div>
    <!-- nav -->
    @include('layouts.guest-nav')

    <!-- banner  -->
    <section class="relative flex flex-col p-12 bg-center bg-cover md:items-center md:text-center py-28 md:py-36 bg-pent-mobile lg:bg-pent lg:p-36 lg:py-48">
      <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-gradient-to-r from-gray-800 to-blue-900">
      </div>
      <div class="relative z-20 pt-10">
        <h1 class="mb-2 text-3xl font-bold tracking-wide text-white md:text-4xl font-vesp lg:text-5xl lg:tracking-wider">
          Flexible Investment Plans With Excellent Interest Rates</h1>
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

    <!-- assets -->
    <div class="flex justify-center p-24 bg-prism">
      <div class="max-w-2xl">
        @foreach (App\Models\Plan::all() as $plan)
        <div class="flex flex-col items-center justify-center gap-4 px-6 py-8 mb-12 bg-white border rounded-lg shadow-sm md:grid md:grid-cols-5 md:mb-16">
          <div class="flex items-center justify-center max-w-[180px] col-span-2 md:w-60">
            {!! $plan['icon'] !!}
          </div>
          <div class="col-span-3 md:mt-0">
            <h2 class="text-lg font-medium text-center text-gray-700 uppercase md:text-left">
              {{ $plan['name'] }}
            </h2>
            <p class="mt-4 text-center md:text-left">{!! $plan['description'] !!}</p>
            <div class="flex justify-center mt-4 md:justify-start">
              <x-button-link class="hover:text-white" href="{{ route('register') }}">Get Started</x-button-link>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>