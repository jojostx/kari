<div class="flex flex-col w-full mt-8 bg-white lg:w-1/3 md:w-1/2 md:ml-auto md:py-8 md:mt-0">
    <h2 class="mb-1 text-lg font-medium text-gray-900 title-font">Contact Us</h2>
    <p class="mb-5 leading-relaxed text-gray-600">We are always ready to interact with our customers, get in touch with us today</p>
    <div class="relative mb-4">
        <label for="name" class="text-sm leading-7 text-gray-600">Full Name</label>
        <input type="text" id="name" name="name" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
    </div>
    <div class="relative mb-4">
        <label for="phone" class="text-sm leading-7 text-gray-600">Phone</label>
        <input type="phone" id="phone" name="phone" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
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