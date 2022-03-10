<div class="flex items-center justify-center min-h-screen text-gray-900 bg-gray-100">
    <div class="w-screen max-w-md p-2 space-y-8">

        <div class="flex items-center justify-center">
            <a href="/" target="_blank" rel="noopener noreferrer">
                <x-application-logo class="w-12 h-12 text-gray-500 fill-current" />
            </a>
        </div>

        <form wire:submit.prevent="sendPasswordResetLink" class="p-8 space-y-8 bg-white border border-gray-300 shadow rounded-2xl">
            <h2 class="text-2xl font-bold tracking-tight text-center">
                Reset Your Password
            </h2>

            <div class="mt-4 mb-4 text-sm text-gray-600">
                Input a valid <span class="font-semibold text-gray-700">kariinvestment Admin Email </span> and we will email you a password reset link that will allow you to choose a new password.
            </div>

            <div class="grid grid-cols-1 gap-6">
                <div class="col-span-1 ">
                    <div>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="email">
                                    <span class="text-sm font-medium leading-4 text-gray-700">
                                        Email address
                                        <sup class="font-medium text-red-700">*</sup>
                                    </span>
                                </label>
                            </div>
                            <div class="flex items-center space-x-1 group">
                                <div class="flex-1">
                                    <input wire:model.defer="email" type="email" autocomplete="off" id="email" required class="block w-full h-10 duration-75 border-gray-300 rounded-lg shadow-sm focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:ring-opacity-30" />
                                </div>
                            </div>
                            @error('email') <p class="text-sm text-red-500 error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" wire:loading.attr="disabled" wire:target="sendPasswordResetLink" class="inline-flex items-center justify-center w-full px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:bg-gray-800 focus:bg-gray-700 focus:ring-offset-blue-700 h-9 focus:ring-white">
                <svg wire:loading wire:target="sendPasswordResetLink" class="w-4 h-4 mr-1 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                </svg>
                <span>Email Password Reset Link</span>
            </button>

            @if ($status)
            <div class="text-sm text-green-700 bg-green-300 rounded-md shadow-lg alert">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">{{ $status }}</span>
                </div>
            </div>
            @endif
        </form>

    </div>
</div>