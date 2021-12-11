<x-guest-layout>
  <div>
    <!-- nav -->
    @include('layouts.guest-nav')
    
    <!-- contact -->
    <section class="relative text-gray-600 body-font">
      <div class="flex flex-wrap px-5 py-24 mx-auto sm:flex-nowrap">
        <div class="relative flex items-end justify-start w-full p-10 overflow-hidden bg-gray-300 rounded-lg min-h-[360px] lg:w-2/3 md:w-1/2 sm:mr-10">
          <iframe class="absolute inset-0" style="filter: grayscale(0.5) contrast(1.2) opacity(0.7);" title="map" marginheight="0" marginwidth="0" scrolling="no" 
          src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=14%20Captains%20Gardens,%20Colchester,%20Essex.%20United%20Kingdom&t=&z=13&ie=UTF8&iwloc=&output=embed"
          width="100%" height="100%" frameborder="0"></iframe>
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
        <div class="flex flex-col w-full mt-8 bg-white lg:w-1/3 md:w-1/2 md:ml-auto md:py-8 md:mt-0">
          <h2 class="mb-1 text-lg font-medium text-gray-900 title-font">Contact Us</h2>
          <p class="mb-5 leading-relaxed text-gray-600">We are always ready to interact with our customers, get in touch with us today</p>
          <div class="relative mb-4">
            <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
          </div>
          <div class="relative mb-4">
            <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
          </div>
          <div class="relative mb-4">
            <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
          </div>
          <button class="px-6 py-2 text-lg text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Submit</button>
          <p class="mt-3 text-xs text-gray-500">For more information about Kari investments visit <a href="{{ route('help') }}#help" class="underline">our FAQs</a> page.</p>
        </div>
      </div>
    </section>
    
    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>