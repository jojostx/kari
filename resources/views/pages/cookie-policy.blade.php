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
    <section class="px-4">
      <div>
        <div class="px-4">
          <div class="flex flex-col w-full mx-auto md:w-11/12">
            <x-term>
              <x-slot name="term_heading">
                <p>
                  Cookies
                </p>
              </x-slot>
              <x-slot name="term_body">
                <div class="font-normal text-gray-700">
                  <p class="mb-6">
                    Our Site uses cookies and similar technologies to distinguish you from other users of our Site. This helps us to provide you with a good experience when you browse our Site and allows us to improve our Site. We may also use such technologies to track you across the Internet and to display targeted advertisements to you on our Site and third party websites and social media platforms based on your preferences and likely interests.
                    <br>
                    <br>
                    <span class="text-base italic font-semibold">
                      A cookie is a small file of letters and numbers that we store on your browser or the hard drive of your computer if you agree. Cookies contain information that is transferred to your computer's hard drive.
                    </span>
                  </p>
                  <p class="mb-2 font-bold">7.1 Types of cookies we use on our Site are:</p>
                  <div class="mb-6">

                    <ul class="pl-10 mb-6 list-decimal privacy">
                      <li><span class="font-bold">Strictly Necessary Cookies.</span> We use Strictly Necessary Cookies to operate our Site. These cookies are essential to enable you to move around the Site, use its features and to log into secure areas of the Site.</li>
                      <li><span class="font-bold">Functionality Cookies.</span> We use Functionality Cookies to recognise you when you return to our Site. This enables us to personalise our content for you, greet you by name and remember your preferences and various settings on our Site.</li>
                      <li><span class="font-bold">Analytical/Performance Cookies.</span> These cookies collect information about how many people are using our Site and how they are moving around it when they re using it. For example, the pages visited most often, how people are moving from one link to another, and if they get error messages from certain pages. This helps us to improve the way our Site works, for example, by ensuring that users are finding what they are looking for easily.</li>
                      <li><span class="font-bold">Targeting Cookies.</span> These cookies are used to deliver advertisements that are more relevant to you and your interests. They remember that you have visited our website, the pages you visited and the links you have followed. This information may be shared with other organisations such as our advertising partners.</li>
                    </ul>

                    <p class="mb-6">
                      Please note that third parties (including, for example, advertising networks and providers of external services like web traffic analysis services) may also use cookies, over which we have no control. These cookies are likely to be Analytical/Performance Cookies or Targeting Cookies.
                      You can set your browser to refuse all or some browser cookies, or to alert you when websites set or access cookies. If you disable or refuse cookies, please note that some parts of this Site may become inaccessible or not function properly.
                    </p>

                  </div>
                </div>
              </x-slot>
            </x-term>
          </div>
        </div>
      </div>
    </section>

    <!-- call to action //links to contact page -->
    <div class="flex justify-center bg-prism">
      <div class="flex flex-col items-center justify-between w-10/12 my-12 py-14 md:flex-row">
        <div class="max-w-lg p-8 border-2 border-gray-800 sm:p-10 md:mb-0">
          <p class="text-2xl font-bold md:text-3xl">Feel free to contact us if you have any other questions.</p>
        </div>

        <div class="w-1 h-12 border-l-2 border-gray-900 border-dashed md:border-t-2 md:w-full md:h-1"></div>

        <button class="flex-shrink-0 transition-all duration-100 hover:shadow-md">
          <x-animated-button href="{{ route('contact') }}" class="inline-block px-4 py-2 text-xl font-bold text-black border-2 border-black lg:px-6 lg:py-4 md:text-2xl hover:text-black animated-a">Get in touch</x-animated-button>
        </button>
      </div>
    </div>


    <section class="text-gray-600 border-t-8 border-gray-200 border-dashed body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col w-full mb-12 text-center">
          <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Join Our NewsLetter</h1>
          <p class="max-w-md mx-auto text-base leading-relaxed lg:w-2/3">Recieve well curated information and news about investment opportunities when you sign up for our newsletter </p>
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