<div class="">
    <div x-cloak x-show="isOpen" x-transition.opacity.500ms x-on:click="isOpen = false" class="fixed inset-0 z-20 w-full h-full bg-gray-900/50 lg:hidden"></div>
    <!-- side nav -->
    <aside x-bind:class="isOpen ? 'translate-x-0' : '-translate-x-full lg:-translate-x-0'" class="fixed inset-y-0 left-0 z-20 flex flex-col h-screen overflow-hidden duration-300 bg-white shadow-2xl lg:border-r w-72 lg:z-0 lg:translate-x-0">
        <header class="border-b h-[4rem] shrink-0 px-6 flex items-center">
            <a href="{{ route('dashboard') }}" class="flex items-center">
                <x-application-logo class="text-gray-900 transition-all duration-300 fill-current shrink w-9 h-9" />
                <div class="flex flex-col ml-2 text-xl font-bold tracking-tight">
                    <p class="-mb-1 text-xl font-semibold text-gray-800 font-vesp">KARI</p>
                    <p class="text-sm font-normal">Investment</p>
                </div>
            </a>
        </header>

        <nav class="flex-1 py-6 overflow-y-auto">
            <ul class="px-6 space-y-6">
                <li>
                    <ul class="-mx-3 space-y-1 text-sm">
                        <li>
                            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('dashboard'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="-mr-6 border-t"></div>
                </li>
                <li>
                    <p class="text-xs font-bold tracking-wider text-gray-600 uppercase">
                        Investment
                    </p>

                    <ul class="mt-2 -mx-3 space-y-1 text-sm">
                        <li>
                            <a href="{{ route('investments.index') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('investments.*'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                <span>
                                    Investments
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('payouts') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('payouts'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                <span>
                                    Payouts
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('history') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('history'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>
                                    History
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="-mr-6 border-t"></div>
                </li>
                <li>
                    <p class="text-xs font-bold tracking-wider text-gray-600 uppercase">
                        Settings
                    </p>

                    <ul class="mt-2 -mx-3 space-y-1 text-sm">
                        <li>
                            <a href="{{ route('profile') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('profile'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>
                                    Profile
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('account-settings') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('account-settings'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>
                                    Account Settings
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <footer class="flex items-center gap-3 px-6 py-3 border-t shrink-0">
            <div class="bg-gray-400 bg-center bg-cover rounded-full w-11 h-11" style="background-image: url('https://ui-avatars.com/api/?name={{ auth()->user()->first_name }}+{{ auth()->user()->last_name }}&color=FFFFFF&background=111827')"></div>
            <div>
                <p class="text-sm font-bold">
                    {{ auth()->user()->full_name }}
                </p>
                <p class="text-xs text-gray-500 hover:text-gray-700 focus:text-gray-700">
                    <a href="{{ route('logout') }}">
                        Log out
                    </a>
                </p>
            </div>
        </footer>
    </aside>
</div>