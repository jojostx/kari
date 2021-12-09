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
        @component('components.faq',
        ['QandA' => [
        "General" => [
        "What is kari?" => "kari is a property search and recommendation service.",
        "Is kari a real estate service?" => "Although kari provides ease of accesing a property, kari is not a typical real estate service.",
        "Is kari a rental platform?" => "No, kari does not provide rental and romantic match-making services.",
        "Is kari a network platform?" => "No, kari is not a network platform.",
        "Is kari owned by any higher educational institution?" => "No, kari is an independent and free-to-use e-service.",
        "Is kari owned by any higher educational institution?" => "No, kari is an independent property finder e-service.",
        "Do I need anything special to use kari?" => "No, you can access all of kari's services after signing up and completing your profile details.",
        ],
        "property Recommendations" => [
        "How do I find a property on kari" => "After signing up and uprental your profile details correctly,recommended propertys will be displayed to you, you could also search and filter propertys to your choice.",
        "How does kari recommend propertys to me" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
        "Will kari recommend propertys from other locations?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
        "Can I search for a property by myself on kari?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
        "How many property requests can I send on kari?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
        "How many kari users can I add to my favorites lists?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
        "Can I restrict the number of property requests I can recieve?" => "kari uses a high-quality recommender algorithm based on accurate profile data analysis and comparisons.",
        ],
        "Messaging" => [
        "How do I send a message to a user I want as a property?" => "result1",
        "Who can I chat with on kari?" => "result1",
        "Are my chats private?" => "result1",
        "Can I chat with a property match on other messaging platform?" => "result1",
        "What information can i share with others in a chat?" => "result1",
        "Can I delete my chat history with a user?" => "result1",
        ],
        "kari's policies and reporting" => [
        "Can I block a user from sending me property request?" => "result",
        "How do I remove my account from the search results?" => "result",
        "What issues can I report a user for?" => "result",
        "Why is my account blocked from viewing a user?" => "result",
        "What can I do if my account is blocked by a user?" => "result",
        "Why is my account suspended?" => "result",
        "What can I do if my account is suspended on kari?" => "result",
        ],
        "Profile and Account" => [
        "How do I verify my email address?" => "result",
        "How can I change my password?" => "result",
        "How do I reset my password if I've forgotten it?" => "result",
        "Why can't I update all my profile information?" => "result",
        "How do I deactivate my account?" => "result",
        "How do I reactivate my account?" => "result",
        ],
        ]
        ])
        @endcomponent
      </div>
    </div>

    <!-- Feedback Section -->
    <!-- @todo capture the feedback users ip address ,email (if logged in) and comments on how to improve the faq page -->
    <div class="pb-10 sm:py-14">
      <div class="flex flex-col items-center w-10/12 mx-auto">
        <p class="mb-4 text-xl font-semibold">Was this article helpful?</p>
        <form x-on:submit.prevent="submitForm('{{ route('help') }}')" x-data="form('feedback_Form')" method="POST" id="feedback_Form" class="flex flex-col items-center justify-center mb-4">
          @csrf

          <div class="flex mb-4">
            <input type="radio" x-on:change=" appear = false " name="feedback" value="1" id="positive" class="hidden positive-feedback">
            <label for="positive" class="w-10 mr-4 text-center positive-feedback-label hover:text-yellow-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <p class="font-semibold">Yes</p>
            </label>
            <input type="radio" x-on:change=" appear = true " name="feedback" value="0" id="negative" class="hidden negative-feedback">
            <label for="negative" class="w-10 text-center negative-feedback-label hover:text-red-600">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <p class="font-semibold">No</p>
            </label>
          </div>

          <x-button type="Submit" class="flex items-center justify-center font-bold text-gray-100 bg-gray-800 rounded-full w-28 hover:text-gray-100 hover:bg-blue-500">
            Submit
          </x-button>
        </form>

        <div id="flash" class="hidden px-4 py-2 font-bold text-blue-600 bg-white border rounded-md shadow-md">
        </div>

      </div>
    </div>
    <!-- End of Feedback Section -->

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