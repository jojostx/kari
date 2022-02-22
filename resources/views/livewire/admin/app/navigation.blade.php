<div>
    <div x-cloak x-show="isOpen" x-transition.opacity.500ms x-on:click="isOpen = false" class="fixed inset-0 z-20 w-full h-full bg-gray-900/50 lg:hidden"></div>
    <!-- side nav -->
    <aside x-bind:class="isOpen ? 'translate-x-0' : '-translate-x-full lg:-translate-x-0'" class="fixed inset-y-0 left-0 z-20 flex flex-col h-screen overflow-hidden duration-300 bg-white shadow-2xl lg:border-r w-72 lg:z-0 lg:translate-x-0">
        <header class="border-b h-[4rem] shrink-0 px-6 flex items-center">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center">
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
                            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('admin.dashboard'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
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
                            <a href="{{ route('admin.investment.plans.index') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('admin.investment.plans.*'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                <span>
                                    Plans
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.investment.customers.index') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('admin.investment.customers.*'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span>
                                    Customers
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.investment.payments.index') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('admin.investment.payments.*'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                <span>
                                    Payments
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.investment.subscriptions.index') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('admin.investment.subscriptions.*'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>
                                </svg>
                                <span>
                                    Subscriptions
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.investment.payouts.index') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('admin.investment.payouts.*'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span>
                                    Payouts
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- <li>
                    <div class="-mr-6 border-t"></div>
                </li>
                <li>
                    <p class="text-xs font-bold tracking-wider text-gray-600 uppercase">
                        Static
                    </p>

                    <ul class="mt-2 -mx-3 space-y-1 text-sm">
                        <li>
                            <a href="{{ route('admin.static.faqs.index') }}" class="flex items-center gap-3 px-3 py-2 font-medium @if (request()->routeIs('admin.static.faqs.index'))  bg-gray-800 text-white hover:text-white @else hover:bg-gray-500/5 focus:bg-gray-500/5 @endif transition rounded-lg">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <span>
                                    FAQs
                                </span>
                            </a>
                        </li>
                        <li x-data="{ open: false }" x-on:click.outside="open = false" class="font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                            <button wire:click="$emit('changeTitle', 'Newsfeeds')" x-on:click="open = !open" class="flex items-center w-full gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                                <span>
                                    Newsfeeds
                                </span>
                                <svg class="w-5 h-5 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    <path x-bind:class="open ? '' : 'hidden' " x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                </svg>
                            </button>
                            <div x-cloak x-show="open" x-trap="open" class="p-3 ml-4 mr-1">
                                <a href="{{ route('admin.static.newsfeeds.feeds.index') }}" class="flex items-center gap-3 px-3 py-2 transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                    <span>
                                        Feeds
                                    </span>
                                </a>
                                <a href="{{ route('admin.static.newsfeeds.subscribers.index') }}" class="flex items-center gap-3 px-3 py-2 transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                    <span>
                                        Subscribers
                                    </span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>
                                    Contact Inbox
                                </span>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <!-- <li>
                    <div class="-mr-6 border-t"></div>
                </li>
                <li>
                    <p class="text-xs font-bold tracking-wider text-gray-600 uppercase">
                        Settings
                    </p>

                    <ul class="mt-2 -mx-3 space-y-1 text-sm">
                        <li>
                            <a href="" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                <span>
                                    Application Health
                                </span>
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>

        <footer class="flex items-center gap-3 px-6 py-3 border-t shrink-0">
            <div class="bg-gray-400 bg-center bg-cover rounded-full w-11 h-11" style="background-image: url('https://ui-avatars.com/api/?name=Onyedika+Ikuru&color=FFFFFF&background=111827')"></div>
            <div>
                <p class="text-sm font-bold">
                    {{ auth()->user()->full_name }}
                </p>
                <form action="{{ route('admin.logout') }}" method="post">
                    @csrf
                    <p class="text-xs text-gray-500 hover:text-gray-700 focus:text-gray-700">
                        <button type="submit">
                            Log out
                        </button>
                    </p>
                </form>
            </div>
        </footer>
    </aside>
</div>