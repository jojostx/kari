<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="mb-4 font-bold tracking-wide sm:text-base">
            <p class="mb-4 font-bold tracking-wide sm:text-lg">
                PAYOUTS
            </p>
            <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">This page shows all your Investments thet have reached maturity and have payouts/ROIs that can be withdrawn</p>
        </div>
        <!-- desktop summary card -->

        <div class="mt-8">
            <div class="mb-4 text-sm font-bold tracking-wide sm:text-base">
                <p>Available Payouts</p>
                <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">These are payouts that are available for withdrawal</p>
            </div>

            @if (auth()->user()->account()->exists())
            <div class="grid gap-4 sm:grid-cols-2">
                @forelse ($this->created_payouts as $created_payout)
                @livewire('customer.app.payouts.cards.created', ['payout' => $created_payout], key($created_payout->id))
                @empty
                <div class="flex flex-col items-center justify-center p-24 bg-white border rounded-lg shadow-sm col-span-full">
                    <div class="w-24 p-6 text-gray-400 rounded-full bg-slate-100">
                        <svg fill="currentColor" class="w-full" version="1.1" viewBox="0 0 314.96 314.96" xmlns="http://www.w3.org/2000/svg">
                            <path d="m104.98 15.004c-60.086 0-104.98 23.754-104.98 44.991 0 21.238 44.896 44.992 104.98 44.992s104.98-23.754 104.98-44.992c1e-3 -21.237-44.897-44.991-104.98-44.991z" />
                            <path d="m0 239.97c0 21.237 44.896 44.991 104.98 44.991 8.769 0 17.211-0.51 25.241-1.439-6.77-8.698-12.367-18.35-16.559-28.716-2.881 0.097-5.771 0.164-8.683 0.164-34.333 0-66.847-6.803-91.55-19.155-4.864-2.432-9.34-5.045-13.431-7.811v11.966z" />
                            <path d="m104.98 194.98c-34.333 0-66.846-6.803-91.55-19.155-4.865-2.432-9.342-5.045-13.433-7.81v11.965c0 21.238 44.896 44.992 104.98 44.992 0.308 0 0.612-5e-3 0.919-6e-3 -0.616-4.916-0.937-9.923-0.937-15.003 0-5.078 0.319-10.082 0.935-14.994-0.305 1e-3 -0.608 0.011-0.916 0.011z" />
                            <path d="m104.98 134.99c-34.333 0-66.846-6.803-91.55-19.155-4.865-2.433-9.342-5.045-13.433-7.811v11.966c0 21.237 44.896 44.99 104.98 44.99 2.976 0 5.913-0.06 8.811-0.174 4.657-11.423 11.019-21.974 18.778-31.331-8.981 0.991-18.212 1.515-27.588 1.515z" />
                            <path d="m149.98 160.24c-6.49 9.757-11.127 20.846-13.408 32.762-1.051 5.493-1.608 11.16-1.608 16.955 0 4.357 0.317 8.641 0.919 12.834 1.477 10.301 4.704 20.041 9.37 28.914 4.896 9.311 11.372 17.666 19.075 24.701 16.01 14.621 37.299 23.551 60.636 23.551 49.626 0 90-40.374 90-90 0-49.627-40.374-90-90-90-5.13 0-10.158 0.438-15.056 1.266-24.947 4.219-46.436 18.738-59.928 39.017zm79.654 5.237c15.872 0 26.958 9.46 26.958 23.004 0 4.774-2.851 7.625-7.625 7.625-5.268 0-7.625-3.333-7.625-6.637 0-8.386-8.111-9.291-11.599-9.291-8.02 0-11.598 3.916-11.598 12.697v3.029h14.563c3.717 0 6.857 3.19 6.857 6.967 0 3.78-3.076 6.855-6.857 6.855h-14.563v2.546h14.563c3.717 0 6.857 3.191 6.857 6.966 0 3.78-3.076 6.855-6.857 6.855h-14.563v1.383c0 8.248 3.83 12.258 11.708 12.258 3.454 0 11.488-0.927 11.488-9.512 0-0.079 2e-3 -0.157 7e-3 -0.236 0.178-3.003 2.279-6.51 7.618-6.51 4.774 0 7.625 2.851 7.625 7.625 0 13.738-11.086 23.334-26.958 23.334-9.123 0-16.237-2.999-20.828-8.454-3.011-3.576-4.936-8.209-5.623-13.754-0.188-1.518-0.287-3.101-0.287-4.751v-1.383h-2.811c-3.846 0-6.746-2.947-6.746-6.855 0-3.906 2.963-6.966 6.746-6.966h2.811v-2.546h-2.811c-3.792 0-6.659-2.868-6.739-6.694 0-0.055-7e-3 -0.107-7e-3 -0.161 0-3.906 2.963-6.967 6.746-6.967h2.81v-3.029c0-8.751 2.464-15.624 7.069-20.299 4.56-4.626 11.219-7.099 19.671-7.099z" />
                        </svg>
                    </div>
                    <p class="mt-3 text-center text-gray-600">You currently have no available payouts</p>
                </div>
                @endforelse
            </div>
            @else
            <div class="grid grid-cols-1 gap-4 p-6 bg-white border rounded-lg shadow-sm md:grid-cols-2">
                <x-payout-warning />

                <div class="col-span-1 py-2 mb-2 text-gray-600">
                    <ul class="font-semibold leading-5 text-gray-500">
                        <p>You have {{ $this->created_payouts->count() }} available {{ Str::plural('payout', $this->created_payouts->count()) }}.</p>
                    </ul>
                </div>

                <div class="flex flex-col items-center justify-center col-span-1">
                    <x-button-link href="{{ route('account-settings') }}#bank-account-settings" class="flex items-center gap-3 px-3 py-2 font-medium text-white transition bg-gray-800 rounded-lg hover:text-white hover:bg-gray-700 focus:bg-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>
                            Update Bank Account Details
                        </span>
                    </x-button-link>
                </div>
            </div>
            @endif
        </div>

        <div class="mt-8">
            <div class="mb-4 text-sm font-bold tracking-wide sm:text-base">
                <p>Requested Payouts</p>
                <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">These are payouts that you have requested for withdrawal</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @forelse ($this->requested_payouts as $requested_payout)
                <div class="flex items-center col-span-1 px-3 py-3 bg-white border-b border-gray-300 rounded-md shadow-md sm:px-4 sm:pt-4">
                    <div class="grid w-full grid-cols-2 gap-2 ml-3">
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Tag </p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $requested_payout->tag }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Amount </p>
                            <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($requested_payout->amount) }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Requested at</p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $requested_payout->updated_at->format('M jS, Y') }}</h2>
                        </div>
                        <div class="flex items-center">
                            <span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight rounded-full bg-primary-100 cursor-text hover:no-underline text-primary-600 focus:no-underline">
                                Pending
                            </span>
                        </div>
                    </div>
                </div>
                @empty
                <div class="flex flex-col items-center justify-center p-24 bg-white border rounded-lg shadow-sm col-span-full">
                    <div class="w-24 p-6 text-gray-400 rounded-full bg-slate-100">
                        <svg fill="currentColor" class="w-full" version="1.1" viewBox="0 0 314.96 314.96" xmlns="http://www.w3.org/2000/svg">
                            <path d="m104.98 15.004c-60.086 0-104.98 23.754-104.98 44.991 0 21.238 44.896 44.992 104.98 44.992s104.98-23.754 104.98-44.992c1e-3 -21.237-44.897-44.991-104.98-44.991z" />
                            <path d="m0 239.97c0 21.237 44.896 44.991 104.98 44.991 8.769 0 17.211-0.51 25.241-1.439-6.77-8.698-12.367-18.35-16.559-28.716-2.881 0.097-5.771 0.164-8.683 0.164-34.333 0-66.847-6.803-91.55-19.155-4.864-2.432-9.34-5.045-13.431-7.811v11.966z" />
                            <path d="m104.98 194.98c-34.333 0-66.846-6.803-91.55-19.155-4.865-2.432-9.342-5.045-13.433-7.81v11.965c0 21.238 44.896 44.992 104.98 44.992 0.308 0 0.612-5e-3 0.919-6e-3 -0.616-4.916-0.937-9.923-0.937-15.003 0-5.078 0.319-10.082 0.935-14.994-0.305 1e-3 -0.608 0.011-0.916 0.011z" />
                            <path d="m104.98 134.99c-34.333 0-66.846-6.803-91.55-19.155-4.865-2.433-9.342-5.045-13.433-7.811v11.966c0 21.237 44.896 44.99 104.98 44.99 2.976 0 5.913-0.06 8.811-0.174 4.657-11.423 11.019-21.974 18.778-31.331-8.981 0.991-18.212 1.515-27.588 1.515z" />
                            <path d="m149.98 160.24c-6.49 9.757-11.127 20.846-13.408 32.762-1.051 5.493-1.608 11.16-1.608 16.955 0 4.357 0.317 8.641 0.919 12.834 1.477 10.301 4.704 20.041 9.37 28.914 4.896 9.311 11.372 17.666 19.075 24.701 16.01 14.621 37.299 23.551 60.636 23.551 49.626 0 90-40.374 90-90 0-49.627-40.374-90-90-90-5.13 0-10.158 0.438-15.056 1.266-24.947 4.219-46.436 18.738-59.928 39.017zm79.654 5.237c15.872 0 26.958 9.46 26.958 23.004 0 4.774-2.851 7.625-7.625 7.625-5.268 0-7.625-3.333-7.625-6.637 0-8.386-8.111-9.291-11.599-9.291-8.02 0-11.598 3.916-11.598 12.697v3.029h14.563c3.717 0 6.857 3.19 6.857 6.967 0 3.78-3.076 6.855-6.857 6.855h-14.563v2.546h14.563c3.717 0 6.857 3.191 6.857 6.966 0 3.78-3.076 6.855-6.857 6.855h-14.563v1.383c0 8.248 3.83 12.258 11.708 12.258 3.454 0 11.488-0.927 11.488-9.512 0-0.079 2e-3 -0.157 7e-3 -0.236 0.178-3.003 2.279-6.51 7.618-6.51 4.774 0 7.625 2.851 7.625 7.625 0 13.738-11.086 23.334-26.958 23.334-9.123 0-16.237-2.999-20.828-8.454-3.011-3.576-4.936-8.209-5.623-13.754-0.188-1.518-0.287-3.101-0.287-4.751v-1.383h-2.811c-3.846 0-6.746-2.947-6.746-6.855 0-3.906 2.963-6.966 6.746-6.966h2.811v-2.546h-2.811c-3.792 0-6.659-2.868-6.739-6.694 0-0.055-7e-3 -0.107-7e-3 -0.161 0-3.906 2.963-6.967 6.746-6.967h2.81v-3.029c0-8.751 2.464-15.624 7.069-20.299 4.56-4.626 11.219-7.099 19.671-7.099z" />
                        </svg>
                    </div>
                    <p class="mt-3 text-center text-gray-600">You currently have no requested payouts</p>
                </div>
                @endforelse
            </div>
        </div>

        <div class="mt-8">
            <div class="mb-4 text-sm font-bold tracking-wide sm:text-base">
                <p>Withdrawn Payouts</p>
                <p class="max-w-sm mt-3 text-sm font-normal text-gray-500">These are payouts that you have successfully withdrawn</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @forelse ($this->withdrawn_payouts as $withdrawn_payout)
                <div class="flex items-center col-span-1 px-3 py-3 bg-white border-b border-gray-300 rounded-md shadow-md sm:px-4 sm:pt-4">
                    <div class="grid w-full grid-cols-2 gap-2 ml-3">
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Tag </p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $withdrawn_payout->tag }}</h2>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Amount </p>
                            <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($withdrawn_payout->amount) }}</h2>
                        </div>
                        @if (!is_null($withdrawn_payout->withdrawn_at))
                        <div>
                            <p class="text-xs font-semibold text-gray-500 ">Withdrawn at </p>
                            <h2 class="text-sm font-semibold text-gray-800">{{ $withdrawn_payout->withdrawn_at->format('M jS, Y') }}</h2>
                        </div>
                        @endif
                        <div class="flex items-center">
                            <span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight rounded-full bg-success-100 cursor-text hover:no-underline text-success-600 focus:no-underline">
                                withdrawn
                            </span>
                        </div>
                    </div>
                </div>
                @empty
                <div class="flex flex-col items-center justify-center p-24 bg-white border rounded-lg shadow-sm col-span-full">
                    <div class="w-24 p-6 text-gray-400 rounded-full bg-slate-100">
                        <svg fill="currentColor" class="w-full" version="1.1" viewBox="0 0 314.96 314.96" xmlns="http://www.w3.org/2000/svg">
                            <path d="m104.98 15.004c-60.086 0-104.98 23.754-104.98 44.991 0 21.238 44.896 44.992 104.98 44.992s104.98-23.754 104.98-44.992c1e-3 -21.237-44.897-44.991-104.98-44.991z" />
                            <path d="m0 239.97c0 21.237 44.896 44.991 104.98 44.991 8.769 0 17.211-0.51 25.241-1.439-6.77-8.698-12.367-18.35-16.559-28.716-2.881 0.097-5.771 0.164-8.683 0.164-34.333 0-66.847-6.803-91.55-19.155-4.864-2.432-9.34-5.045-13.431-7.811v11.966z" />
                            <path d="m104.98 194.98c-34.333 0-66.846-6.803-91.55-19.155-4.865-2.432-9.342-5.045-13.433-7.81v11.965c0 21.238 44.896 44.992 104.98 44.992 0.308 0 0.612-5e-3 0.919-6e-3 -0.616-4.916-0.937-9.923-0.937-15.003 0-5.078 0.319-10.082 0.935-14.994-0.305 1e-3 -0.608 0.011-0.916 0.011z" />
                            <path d="m104.98 134.99c-34.333 0-66.846-6.803-91.55-19.155-4.865-2.433-9.342-5.045-13.433-7.811v11.966c0 21.237 44.896 44.99 104.98 44.99 2.976 0 5.913-0.06 8.811-0.174 4.657-11.423 11.019-21.974 18.778-31.331-8.981 0.991-18.212 1.515-27.588 1.515z" />
                            <path d="m149.98 160.24c-6.49 9.757-11.127 20.846-13.408 32.762-1.051 5.493-1.608 11.16-1.608 16.955 0 4.357 0.317 8.641 0.919 12.834 1.477 10.301 4.704 20.041 9.37 28.914 4.896 9.311 11.372 17.666 19.075 24.701 16.01 14.621 37.299 23.551 60.636 23.551 49.626 0 90-40.374 90-90 0-49.627-40.374-90-90-90-5.13 0-10.158 0.438-15.056 1.266-24.947 4.219-46.436 18.738-59.928 39.017zm79.654 5.237c15.872 0 26.958 9.46 26.958 23.004 0 4.774-2.851 7.625-7.625 7.625-5.268 0-7.625-3.333-7.625-6.637 0-8.386-8.111-9.291-11.599-9.291-8.02 0-11.598 3.916-11.598 12.697v3.029h14.563c3.717 0 6.857 3.19 6.857 6.967 0 3.78-3.076 6.855-6.857 6.855h-14.563v2.546h14.563c3.717 0 6.857 3.191 6.857 6.966 0 3.78-3.076 6.855-6.857 6.855h-14.563v1.383c0 8.248 3.83 12.258 11.708 12.258 3.454 0 11.488-0.927 11.488-9.512 0-0.079 2e-3 -0.157 7e-3 -0.236 0.178-3.003 2.279-6.51 7.618-6.51 4.774 0 7.625 2.851 7.625 7.625 0 13.738-11.086 23.334-26.958 23.334-9.123 0-16.237-2.999-20.828-8.454-3.011-3.576-4.936-8.209-5.623-13.754-0.188-1.518-0.287-3.101-0.287-4.751v-1.383h-2.811c-3.846 0-6.746-2.947-6.746-6.855 0-3.906 2.963-6.966 6.746-6.966h2.811v-2.546h-2.811c-3.792 0-6.659-2.868-6.739-6.694 0-0.055-7e-3 -0.107-7e-3 -0.161 0-3.906 2.963-6.967 6.746-6.967h2.81v-3.029c0-8.751 2.464-15.624 7.069-20.299 4.56-4.626 11.219-7.099 19.671-7.099z" />
                        </svg>
                    </div>
                    <p class="mt-3 text-center text-gray-600">You currently have no withdrawn payouts</p>
                </div>
                @endforelse
            </div>
        </div>

        <x-help-menu-card />
    </div>

    <p class="hidden text-blue-600"></p>
</div>