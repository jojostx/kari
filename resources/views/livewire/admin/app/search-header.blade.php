<header class="h-[4rem] shrink-0 w-full border-b flex items-center">
    <div class="flex items-center w-full px-2 mx-auto sm:px-4 md:px-6 lg:px-8 max-w-7xl">
        <button x-on:click="isOpen = true" class="flex items-center justify-center w-10 h-10 text-gray-600 rounded-full shrink-0 hover:text-gray-600 focus:text-gray-500 hover:bg-gray-200 focus:bg-gray-300 focus:outline-none lg:hidden">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg> </span>

                            <input id="globalSearchQueryInput" placeholder="Search" type="search" autocomplete="off" class="block w-full h-10 pl-10 placeholder-gray-500 duration-75 border-transparent rounded-lg lg:text-lg bg-gray-400/10 focus:bg-white focus:placeholder-gray-400 focus:border-gray-600 focus:ring-1 focus:ring-inset focus:ring-gray-600">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>