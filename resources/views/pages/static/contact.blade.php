<x-guest-layout>
  <div>
    <!-- nav -->
    @include('layouts.guest-nav')

    <!-- contact -->
    <section class="relative text-gray-600 body-font">
      <div class="flex flex-wrap px-5 py-24 mx-auto sm:flex-nowrap">
        <div class="relative flex items-end justify-start w-full p-10 overflow-hidden bg-gray-300 rounded-lg min-h-[360px] lg:w-2/3 md:w-1/2 sm:mr-10">
          <iframe class="absolute inset-0 block w-full h-full m-0 border-0" style="filter: grayscale(0.5) contrast(1.2) opacity(0.7);" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=14%20Captains%20Gardens,%20Colchester,%20Essex.%20United%20Kingdom&t=&z=13&ie=UTF8&iwloc=&output=embed">
          </iframe>
          <div class="relative flex-wrap hidden py-6 bg-white rounded shadow-md sm:flex">
            <div class="px-6 lg:w-1/2">
              <h2 class="text-xs font-semibold tracking-widest text-gray-900 title-font">ADDRESS</h2>
              <p class="mt-1">14 Captains Gardens, Colchester, Essex. United Kingdom. CO2 7FX</p>
            </div>
            <div class="px-6 mt-4 lg:w-1/2 lg:mt-0">
              <h2 class="text-xs font-semibold tracking-widest text-gray-900 title-font">EMAIL</h2>
              <a class="font-medium text-blue-600 hover:underline" target="_blank" href="mailto:support@Kariinvestment.com">support@Kariinvestment.com</a>
              <h2 class="mt-4 text-xs font-semibold tracking-widest text-gray-900 title-font">PHONE</h2>
              <p class="leading-relaxed">+447725948803</p>
            </div>
          </div>
        </div>
        <div class="relative flex flex-wrap w-full py-6 mt-4 bg-white rounded shadow-md sm:hidden">
          <div class="px-6 lg:w-1/2">
            <h2 class="text-xs font-semibold tracking-widest text-gray-900 title-font">ADDRESS</h2>
            <p class="mt-1">14 Captains Gardens, Colchester, Essex. United Kingdom. CO2 7FX</p>
          </div>
          <div class="px-6 mt-4 lg:w-1/2 lg:mt-0">
            <h2 class="text-xs font-semibold tracking-widest text-gray-900 title-font">EMAIL</h2>
            <a class="font-medium text-blue-600 hover:underline" target="_blank" href="mailto:support@Kariinvestment.com">support@Kariinvestment.com</a>
            <h2 class="mt-4 text-xs font-semibold tracking-widest text-gray-900 title-font">PHONE</h2>
            <p class="leading-relaxed">+447725948803</p>
          </div>
        </div>

        <livewire:static.forms.contact />

      </div>
    </section>

    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>