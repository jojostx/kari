<div class="flex items-center justify-center min-h-screen text-gray-900 bg-gray-100">
    <div class="w-screen max-w-md p-2 space-y-8">

        <div class="flex items-center justify-center">
            <a href="/" target="_blank" rel="noopener noreferrer">
                <x-application-logo class="w-12 h-12 text-gray-500 fill-current" />
            </a>
        </div>

        <form wire:submit.prevent="resetPassword" class="p-8 space-y-8 bg-white border border-gray-300 shadow rounded-2xl">
            <h2 class="text-2xl font-bold tracking-tight text-center">
                Create New Password
            </h2>

            
            <div class="grid grid-cols-1 gap-6">
                {{ $this->form }}
            </div>

            <button type="submit" wire:loading.attr="disabled" wire:target="resetPassword" class="inline-flex items-center justify-center w-full px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:bg-gray-800 focus:bg-gray-700 focus:ring-offset-blue-700 h-9 focus:ring-white">
                <svg wire:loading wire:target="resetPassword" class="w-4 h-4 mr-1 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                </svg>
                <span>Reset Password</span>
            </button>

            @if ($status)
            <div class='mt-4 text-sm font-medium text-green-600'>
                {{ $status }}
            </div>
            @endif
        </form>
    </div>
</div>