<x-guest-layout>
  <div>
    <!-- nav -->
    @include('layouts.guest-nav')

    <div class="relative flex flex-row justify-center bg-center bg-cover py-28 md:py-36 bg-point-mobile lg:bg-point lg:py-16">
      <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-gradient-to-r from-gray-800 to-blue-900">
      </div>
      <div class="relative z-20 flex flex-col items-center justify-between w-11/12 py-10 mb-20 md:mt-20 md:flex-row md:h-80">
        <div class="mb-16 text-center md:mb-0 md:mr-16 sm:text-left">
          <p class="mt-10 mb-6 text-3xl font-extrabold text-white font-vesp md:text-4xl lg:text-5xl">Who are we?</p>
          <p class="max-w-md px-8 text-base font-medium text-white sm:px-0 md:text-lg lg:text-xl"><span class="font-bold">KARI</span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus laborum blanditiis quisquam atque velit provident. Founded in 2020, by <span class="font-bold">Ikuru John</span>, we are based in London, UK.</p>
        </div>
      </div>
    </div>

    <!-- company goals and motivation section -->
    <div class="flex flex-row justify-center bg-white md:pt-12">
      <div class="flex flex-col items-center w-11/12 my-20">
        <div class="flex flex-col items-center justify-between w-full my-2 md:mt-12 md:flex-row">
          <div class="max-w-md p-8 border-2 border-gray-800 sm:p-8 md:mb-0">
            <h2 class="mb-4 text-xl font-bold font-vesp">OUR MOTIVATION</h2>
            <p class="font-normal">The insatiable urge to be of help to people and the drive to create solutions to common problems as a way to build a better world for the next generation.</p>
          </div>
          <div class="w-1 h-12 border-l-2 border-gray-900 border-dashed md:border-t-2 md:w-full md:h-1"></div>
          <div class="flex-shrink-0 w-full md:max-w-md">
            <img src="{{ asset('images/goal.jpg') }}" alt="our motivation">
          </div>
        </div>
        <div class="flex flex-col-reverse items-center w-full mt-12 md:items-center md:flex-row md:justify-between">
          <div class="flex-shrink-0 w-full md:max-w-md">
            <img src="{{ asset('images/motivation.jpg') }}" alt="our motivation">
          </div>
          <div class="w-1 h-12 border-l-2 border-gray-900 border-dashed md:border-t-2 md:w-full md:h-1"></div>
          <div class="max-w-md p-8 border-2 border-gray-800 sm:p-8 md:mb-0">
            <h2 class="mb-4 text-xl font-bold font-vesp">OUR MISSION</h2>
            <p class="font-normal">The insatiable urge to be of help to people and the drive to create solutions to common problems as a way to build a better world for the next generation. Making the lives of Nigerians easier by providing solutions to commons problems through the use of technology. We are focused on creating an encouraging environment for young innovative minds.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end of company goals and motivation section -->

    <!-- our team  section-->
    <div class="flex flex-col items-center md:justify-center md:flex-row">
      <div class="flex flex-col items-center w-11/12 py-10 my-12">
        <div>
          <p class="text-3xl font-bold text-center font-vesp">Meet The Team</p>
        </div>
        <div class="grid max-w-4xl grid-flow-row grid-cols-2 gap-6 mx-auto mt-8 mb-6 sm:grid-cols-3 gap-y-12">
          <div>
            <img src="{{ asset('images/ceo.jpg') }}" alt="roomee's founder" class="mb-4">
            <div class="items-center justify-between lg:flex">
              <div class="mb-2">
                <h2 class="text-lg font-bold">Coming soon</h2>
                <p class="text-sm">CEO</p>
              </div>
              <x-social-link class="text-gray-800 cursor-pointer hover:text-blue-500">
                <path fill="currentColor" fill-rule="evenodd" stroke="none" d="M10 0C4.48565 0 0 4.48565 0 10C0 15.5143 4.48565 20 10 20C15.5143 20 20 15.5143 20 10C20 4.48565 15.5143 0 10 0L10 0ZM14.8865 8.05383C14.8908 8.15644 14.8934 8.26078 14.8934 8.36557C14.8934 11.5473 12.4704 15.2173 8.04037 15.2173C6.68037 15.2173 5.41385 14.8186 4.34863 14.1351C4.53689 14.1577 4.72776 14.1686 4.92298 14.1686C6.05168 14.1686 7.09037 13.7843 7.91385 13.1382C6.85994 13.119 5.97124 12.4212 5.66385 11.4656C5.81124 11.4938 5.96211 11.509 6.11776 11.509C6.33733 11.509 6.55037 11.4799 6.75168 11.4243C5.65081 11.2021 4.82081 10.2299 4.82081 9.06252C4.82081 9.05209 4.82081 9.04209 4.82081 9.03209C5.14559 9.21252 5.51646 9.32122 5.91168 9.33383C5.26472 8.90122 4.84037 8.1647 4.84037 7.32905C4.84037 6.88774 4.95863 6.47426 5.16602 6.11774C6.35428 7.5747 8.12907 8.53339 10.1304 8.63426C10.0891 8.45774 10.0673 8.27426 10.0673 8.08557C10.0673 6.75557 11.1456 5.67731 12.476 5.67731C13.1686 5.67731 13.7943 5.96948 14.2334 6.43774C14.7817 6.32992 15.2978 6.12948 15.763 5.85383C15.5834 6.41557 15.2012 6.88774 14.7034 7.186C15.1912 7.12687 15.6547 6.99818 16.0873 6.80644C15.7647 7.28948 15.3565 7.71426 14.8865 8.05383L14.8865 8.05383Z" />
              </x-social-link>
            </div>
          </div>

          <div>
            <img src="{{ asset('images/co-founder.jpg') }}" alt="roomee's founder" class="mb-4">
            <div class="items-center justify-between lg:flex">
              <div class="mb-2">
                <h2 class="text-lg font-bold">Coming soon</h2>
                <p class="text-sm">CTO</p>
              </div>
              <x-social-link class="text-gray-800 cursor-pointer hover:text-blue-500">
                <path fill="currentColor" fill-rule="evenodd" stroke="none" d="M10 0C4.4775 0 0 4.50057 0 10.0515C0 15.0907 3.69333 19.252 8.505 19.9791L8.505 12.7152L6.03083 12.7152L6.03083 10.0733L8.505 10.0733L8.505 8.31512C8.505 5.40436 9.91583 4.12698 12.3225 4.12698C13.475 4.12698 14.085 4.21326 14.3733 4.25179L14.3733 6.55778L12.7317 6.55778C11.71 6.55778 11.3533 7.53194 11.3533 8.62923L11.3533 10.0733L14.3475 10.0733L13.9417 12.7152L11.3533 12.7152L11.3533 20C16.2342 19.3349 20 15.1401 20 10.0515C20 4.50057 15.5225 0 10 0L10 0Z" />
              </x-social-link>
            </div>
          </div>

          <div>
            <img src="{{ asset('images/fullstack.jpg') }}" alt="roomee's founder" class="mb-4">
            <div class="items-center justify-between lg:flex">
              <div class="mb-2">
                <h2 class="text-lg font-bold">Coming soon</h2>
                <p class="text-sm">Full-Stack Developer</p>
              </div>
              <x-social-link class="text-gray-800 cursor-pointer hover:text-blue-500">
                <path fill="currentColor" fill-rule="evenodd" stroke="none" d="M10 0C4.48565 0 0 4.48565 0 10C0 15.5143 4.48565 20 10 20C15.5143 20 20 15.5143 20 10C20 4.48565 15.5143 0 10 0L10 0ZM14.8865 8.05383C14.8908 8.15644 14.8934 8.26078 14.8934 8.36557C14.8934 11.5473 12.4704 15.2173 8.04037 15.2173C6.68037 15.2173 5.41385 14.8186 4.34863 14.1351C4.53689 14.1577 4.72776 14.1686 4.92298 14.1686C6.05168 14.1686 7.09037 13.7843 7.91385 13.1382C6.85994 13.119 5.97124 12.4212 5.66385 11.4656C5.81124 11.4938 5.96211 11.509 6.11776 11.509C6.33733 11.509 6.55037 11.4799 6.75168 11.4243C5.65081 11.2021 4.82081 10.2299 4.82081 9.06252C4.82081 9.05209 4.82081 9.04209 4.82081 9.03209C5.14559 9.21252 5.51646 9.32122 5.91168 9.33383C5.26472 8.90122 4.84037 8.1647 4.84037 7.32905C4.84037 6.88774 4.95863 6.47426 5.16602 6.11774C6.35428 7.5747 8.12907 8.53339 10.1304 8.63426C10.0891 8.45774 10.0673 8.27426 10.0673 8.08557C10.0673 6.75557 11.1456 5.67731 12.476 5.67731C13.1686 5.67731 13.7943 5.96948 14.2334 6.43774C14.7817 6.32992 15.2978 6.12948 15.763 5.85383C15.5834 6.41557 15.2012 6.88774 14.7034 7.186C15.1912 7.12687 15.6547 6.99818 16.0873 6.80644C15.7647 7.28948 15.3565 7.71426 14.8865 8.05383L14.8865 8.05383Z" />
              </x-social-link>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- call to action //links to contact page -->
    <div class="flex justify-center bg-prism">
      <div class="flex flex-col items-center justify-between w-10/12 my-12 py-14 md:flex-row">
        <div class="max-w-lg p-8 border-2 border-gray-800 sm:p-10 md:mb-0">
          <p class="text-2xl font-bold md:text-3xl">We are always happy to hear from you. Reach out to us and we will make sure to assist you.</p>
        </div>

        <div class="w-1 h-12 border-l-2 border-gray-900 border-dashed md:border-t-2 md:w-full md:h-1"></div>

        <button class="flex-shrink-0 transition-all duration-100 hover:shadow-md">
          <x-animated-button href="{{ route('contact') }}" class="inline-block px-4 py-2 text-xl font-bold text-black border-2 border-black lg:px-6 lg:py-4 md:text-2xl hover:text-black animated-a">Get Started</x-animated-button>
        </button>
      </div>
    </div>

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col w-full mb-12 text-center">
          <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Join Our NewsLetter</h1>
          <p class="max-w-md mx-auto text-base leading-relaxed lg:w-2/3">Recieve well curated information and news about investment oppurtunities when you sign up for our newsletter </p>
        </div>
        <div class="flex flex-col items-end w-full px-8 mx-auto space-y-4 lg:w-2/3 sm:flex-row sm:space-x-4 sm:space-y-0 sm:px-0">
          <div class="relative flex-grow w-full">
            <label for="full-name" class="text-sm leading-7 text-gray-600">Full Name</label>
            <input type="text" id="full-name" name="full-name" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200">
          </div>
          <div class="relative flex-grow w-full">
            <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200">
          </div>
          <button class="px-8 py-2 text-lg text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Submit</button>
        </div>
      </div>
    </section>

    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>