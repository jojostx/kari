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