<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="mb-4 text-sm font-bold tracking-wide sm:text-base">
            <p>Payouts (Matured Subscriptions)</p>
            <p class="text-sm text-gray-500 mt-3 font-normal max-w-sm">This page shows all your Investments thet have reached maturity and have payouts/ROIs that can be withdrawn</p>
        </div>
        <!-- desktop summary card -->

        <div class="mt-8">
            <div class="grid gap-4 sm:grid-cols-2">
                @forelse ($subscriptions as $subscription)
                <div class="col-span-1 flex items-center px-3 py-3 bg-[#F1F1F1] border-b border-gray-300 rounded-md shadow-md sm:px-4 sm:pt-4">
                    <div class="flex items-center justify-center h-24 p-3 bg-white rounded-md shrink w-28">
                        {!! $subscription->plan->icon !!}
                    </div>
                    <div class="grid w-full grid-cols-2 grid-rows-3 gap-2 ml-3">
                        <div>
                            <p class="text-xs font-semibold text-gray-500">Type</p>
                            <h2 class="text-sm font-semibold text-gray-800 uppercase">{{ $subscription->plan['name'] }}</h2>
                        </div>
                        <div>
                            <x-button>
                                Withdraw
                            </x-button>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Principal</p>
                            <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($subscription['principal']) }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Payout</p>
                            <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($subscription->payout) }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500">Start</p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $subscription['created_at']->format('M jS, Y') }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500">End</p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $subscription['ends_at']->format('M jS, Y') }}</h2>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full flex flex-col items-center justify-center p-24 bg-white border rounded-lg shadow-sm">
                    <div class="w-24 text-gray-400 bg-slate-100 p-6 rounded-full">
                        <svg fill="currentColor" class="w-full" version="1.1" viewBox="0 0 314.96 314.96" xmlns="http://www.w3.org/2000/svg">
                            <path d="m104.98 15.004c-60.086 0-104.98 23.754-104.98 44.991 0 21.238 44.896 44.992 104.98 44.992s104.98-23.754 104.98-44.992c1e-3 -21.237-44.897-44.991-104.98-44.991z" />
                            <path d="m0 239.97c0 21.237 44.896 44.991 104.98 44.991 8.769 0 17.211-0.51 25.241-1.439-6.77-8.698-12.367-18.35-16.559-28.716-2.881 0.097-5.771 0.164-8.683 0.164-34.333 0-66.847-6.803-91.55-19.155-4.864-2.432-9.34-5.045-13.431-7.811v11.966z" />
                            <path d="m104.98 194.98c-34.333 0-66.846-6.803-91.55-19.155-4.865-2.432-9.342-5.045-13.433-7.81v11.965c0 21.238 44.896 44.992 104.98 44.992 0.308 0 0.612-5e-3 0.919-6e-3 -0.616-4.916-0.937-9.923-0.937-15.003 0-5.078 0.319-10.082 0.935-14.994-0.305 1e-3 -0.608 0.011-0.916 0.011z" />
                            <path d="m104.98 134.99c-34.333 0-66.846-6.803-91.55-19.155-4.865-2.433-9.342-5.045-13.433-7.811v11.966c0 21.237 44.896 44.99 104.98 44.99 2.976 0 5.913-0.06 8.811-0.174 4.657-11.423 11.019-21.974 18.778-31.331-8.981 0.991-18.212 1.515-27.588 1.515z" />
                            <path d="m149.98 160.24c-6.49 9.757-11.127 20.846-13.408 32.762-1.051 5.493-1.608 11.16-1.608 16.955 0 4.357 0.317 8.641 0.919 12.834 1.477 10.301 4.704 20.041 9.37 28.914 4.896 9.311 11.372 17.666 19.075 24.701 16.01 14.621 37.299 23.551 60.636 23.551 49.626 0 90-40.374 90-90 0-49.627-40.374-90-90-90-5.13 0-10.158 0.438-15.056 1.266-24.947 4.219-46.436 18.738-59.928 39.017zm79.654 5.237c15.872 0 26.958 9.46 26.958 23.004 0 4.774-2.851 7.625-7.625 7.625-5.268 0-7.625-3.333-7.625-6.637 0-8.386-8.111-9.291-11.599-9.291-8.02 0-11.598 3.916-11.598 12.697v3.029h14.563c3.717 0 6.857 3.19 6.857 6.967 0 3.78-3.076 6.855-6.857 6.855h-14.563v2.546h14.563c3.717 0 6.857 3.191 6.857 6.966 0 3.78-3.076 6.855-6.857 6.855h-14.563v1.383c0 8.248 3.83 12.258 11.708 12.258 3.454 0 11.488-0.927 11.488-9.512 0-0.079 2e-3 -0.157 7e-3 -0.236 0.178-3.003 2.279-6.51 7.618-6.51 4.774 0 7.625 2.851 7.625 7.625 0 13.738-11.086 23.334-26.958 23.334-9.123 0-16.237-2.999-20.828-8.454-3.011-3.576-4.936-8.209-5.623-13.754-0.188-1.518-0.287-3.101-0.287-4.751v-1.383h-2.811c-3.846 0-6.746-2.947-6.746-6.855 0-3.906 2.963-6.966 6.746-6.966h2.811v-2.546h-2.811c-3.792 0-6.659-2.868-6.739-6.694 0-0.055-7e-3 -0.107-7e-3 -0.161 0-3.906 2.963-6.967 6.746-6.967h2.81v-3.029c0-8.751 2.464-15.624 7.069-20.299 4.56-4.626 11.219-7.099 19.671-7.099z" />
                        </svg>
                    </div>
                    <p class="mt-3 text-gray-600 text-center">You currently have no matured Investments</p>
                </div>
                @endforelse
            </div>
        </div>

        <div class="mt-6">
            <p class="mb-4 font-bold tracking-wide sm:text-lg">Help</p>

            <div class="p-4 bg-white border rounded-lg shadow-sm">
                <div>
                    <a href="{{ route('contact') }}" class="flex items-center gap-3 px-3 py-4 font-medium transition border-b border-gray-200 rounded-lg hover:text-blue-700 focus:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span>
                            Contact Support
                        </span>
                        <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="{{ route('help') }}" class="flex items-center gap-3 px-3 py-4 font-medium transition border-b border-gray-200 rounded-lg hover:text-blue-700 focus:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>
                            Kari Investment FAQ
                        </span>
                        <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="{{ route('privacy') }}" class="flex items-center gap-3 px-3 py-4 font-medium transition border-b border-gray-200 rounded-lg hover:text-blue-700 focus:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        <span>
                            Privacy Policy
                        </span>
                        <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="{{ route('terms') }}" class="flex items-center gap-3 px-3 py-4 font-medium transition rounded-lg hover:text-blue-700 focus:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span>
                            Terms and Conditions
                        </span>
                        <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <p class="hidden text-blue-600"></p>
</div>