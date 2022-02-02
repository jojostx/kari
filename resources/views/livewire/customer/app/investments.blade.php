<div class="flex flex-col lg:pl-72">
    <!-- top header [search] -->
    <header wire:id="pLBInwIFMrAyxWwUX2NO" class="h-[4rem] shrink-0 w-full border-b flex items-center">
        <div class="flex items-center w-full px-2 mx-auto sm:px-4 md:px-6 lg:px-8 max-w-7xl">
            <button x-on:click="isOpen = true" class="flex items-center justify-center w-10 h-10 text-gray-600 rounded-full shrink-0 hover:text-gray-600 focus:text-gray-500 hover:bg-gray-200 focus:bg-gray-300 focus:outline-none lg:hidden">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <div class="flex items-center justify-between flex-1">
                <div>
                    <ul class="items-center hidden gap-4 text-sm font-medium lg:flex">
                    </ul>
                </div>

                <div class="flex items-center">

                    <div class="relative">
                        <div>
                            <label for="globalSearchQueryInput" class="sr-only">
                                Global search
                            </label>

                            <div class="relative max-w-md group">
                                <span class="absolute inset-y-0 left-0 flex items-center justify-center w-10 h-10 text-gray-500 pointer-events-none group-focus-within:text-gray-500">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg> </span>
                                <input wire:model.debounce.500ms="searchQuery" id="globalSearchQueryInput" placeholder="Search" type="search" autocomplete="off" class="block w-full h-10 pl-10 placeholder-gray-500 transition duration-75 border-transparent rounded-lg lg:text-lg bg-gray-400/10 focus:bg-white focus:placeholder-gray-400 focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                            </div>
                        </div>

                        <div x-data="{ isOpen: false }" x-show="isOpen" x-on:keydown.escape.window="isOpen = false" x-on:click.away="isOpen = false" x-on:open-global-search-results.window="isOpen = true" class="absolute right-0 top-auto z-10 w-screen max-w-xs mt-2 overflow-hidden shadow-xl rtl:right-auto rtl:left-0 rounded-xl sm:max-w-lg" style="display: none;">
                            <div class="overflow-x-hidden overflow-y-scroll bg-white shadow max-h-96 rounded-xl">
                                <div class="px-6 py-4">
                                    No search results found.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Livewire Component wire-end:pLBInwIFMrAyxWwUX2NO -->
    <div class="flex flex-col w-full items-center mt-6">
        <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">

            <p class="text-sm mb-4 font-bold tracking-wide sm:text-base">INVESTMENTS</p>

            <!-- desktop summary card -->
            <div class="hidden sm:flex p-6 border justify-between items-center bg-white rounded-lg shadow-sm">
                <div class="">
                    <p class="text-sm font-semibold text-gray-500">Total Principal</p>
                    <h2 class="text-xl font-semibold text-gray-800">£ {{ number_format($total_principal) }}</h2>
                </div>
                <div class="">
                    <p class="text-sm font-semibold text-gray-500">Total Expected Amount</p>
                    <h2 class="text-xl font-semibold text-gray-800">£ {{ $total_roi }}</h2>
                </div>
                <div class="">
                    <p class="text-sm font-semibold text-gray-500">Total Investments</p>
                    <h2 class="text-xl font-semibold text-gray-800">{{ $total_investments }}</h2>
                </div>
            </div>

            <!-- mobile summary card -->
            <div class="flex flex-wrap items-center justify-between mt-8 overflow-hidden bg-white border-b border-gray-200 rounded-lg shadow-sm sm:hidden">
                <div class="w-full rounded-t-lg bg-[#DFDFDF] p-4">
                    <div class="m-2 mb-5">
                        <p class="text-sm font-semibold text-gray-500">Total Principal</p>
                        <h2 class="text-xl font-semibold text-gray-800">£ {{ number_format($total_principal) }}</h2>
                    </div>
                    <div class="m-2">
                        <p class="text-sm font-semibold text-gray-500">Total Expected Amount</p>
                        <h2 class="text-xl font-semibold text-gray-800">£ {{ $total_roi }}</h2>
                    </div>
                </div>
                <div class="w-full p-4 m-2 sm:w-min ">
                    <div class="flex items-center justify-between mb-3">
                        <p class="text-sm font-semibold text-gray-500">Total Investments</p>
                        <h2 class="text-xl font-semibold text-gray-800">{{ $total_investments }}</h2>
                    </div>
                    <div class="border-4 rounded-lg py-4 px-2 gap-4 border-[#DFDFDF] grid grid-cols-2 grid-rows-2">
                        @foreach ($plans as $plan)
                        <div class="flex flex-col items-center">
                            <span class="w-14 flex justify-center">
                               {!! $plan->icon !!}
                            </span>
                            <p class="mt-2 text-xs font-semibold text-gray-700">
                                {{ $plan->subCount }} {{ $plan->name }}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <div class="grid gap-4 sm:grid-cols-2">                   
                    @foreach ($subscriptions as $subscription)
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
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-gray-500 ">Principal</p>
                                <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($subscription['principal']) }}</h2>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-gray-500">Interest</p>
                                <h2 class="text-sm font-semibold text-gray-800">{{ $subscription['interest'] * 100 }}%</h2>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <x-footer/>
</div>