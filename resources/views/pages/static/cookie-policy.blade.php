<x-guest-layout>
  <div>
    <!-- nav -->
    @include('layouts.guest-nav')

    <section class="relative flex flex-col p-12 bg-prism py-28 md:py-36">
      <div class="relative z-20 pt-4">
        <h1 class="mb-2 text-4xl font-bold tracking-wide text-black font-vesp lg:text-8xl lg:tracking-wider">
          Cookie <br> Policy</h1>
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
    <x-get-in-touch>
      Feel free to contact us if you have any other questions.
    </x-get-in-touch>


    <livewire:static.forms.subscribe-to-newsfeed />
    
    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>