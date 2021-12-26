<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KARI INVESTMENT') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/hph2pnz.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Source+Sans+Pro:wght@300;400;600&Vesper+Libre:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<!-- <nav class="flex flex-col justify-between h-full col-span-3 py-6 bg-gray-300">
            <div class="pl-6">
                
            </div>
            
        </nav>
-->

<body class="font-sans antialiased" x-data="{ isOpen: false }">
    <div class="relative min-h-screen lg:grid lg:grid-cols-12 max-w-7xl">
        <!-- nav bar [ visible below desktop width] -->
        <header class="fixed z-50 w-full bg-white border-b border-gray-300 lg:hidden" x-data="{ isOpen: false }">
            <nav @click.outside="isOpen = false;" class="flex items-center justify-between w-full px-4 py-4 bg-white border-b" :class="isOpen ? 'flex-col absolute' : 'flex-row'">
                <div class="flex items-center justify-between w-full bg-white">
                    <a class="flex items-center" href="{{ route('home') }}">
                        <x-application-logo class="w-8 h-8 mr-2 text-gray-900 fill-current md:mr-3" />
                        <div class="flex flex-col">
                            <p class="-mb-2 text-lg font-semibold text-gray-900 font-vesp md:text-xl">Kari</p>
                            <p class="text-sm font-normal">Investment</p>
                        </div>
                    </a>
                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen">
                        <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': isOpen, 'inline-flex': ! isOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! isOpen, 'inline-flex': isOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col w-full pt-8 pb-4 space-y-8 bg-white">
                    <ul>
                        <li class="py-3 pr-2 text-base font-semibold bg-white">
                            <a class="flex items-center hover:text-blue-500" href="#" target="_blank" rel="noopener noreferrer">
                                <span class="mr-3">
                                    <svg class="w-5" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 12L5 10M5 10L12 3L19 10M5 10V20C5 20.5523 5.44772 21 6 21H9M19 10L21 12M19 10V20C19 20.5523 18.5523 21 18 21H15M9 21C9.55228 21 10 20.5523 10 20V16C10 15.4477 10.4477 15 11 15H13C13.5523 15 14 15.4477 14 16V20C14 20.5523 14.4477 21 15 21M9 21H15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <p>
                                    INVESTMENTS
                                </p>
                                <span class="ml-auto">
                                    <svg class="w-5" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L16 12L9 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="py-3 pr-2 text-base font-semibold bg-white">
                            <a class="flex items-center hover:text-blue-500" href="#" target="_blank" rel="noopener noreferrer">
                                <span class="mr-3">
                                    <svg class="w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </span>
                                <p>
                                    HISTORY
                                </p>
                                <span class="ml-auto">
                                    <svg class="w-5" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L16 12L9 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="py-3 pr-2 text-base font-semibold bg-white">
                            <a class="flex items-center hover:text-blue-500" href="#" target="_blank" rel="noopener noreferrer">
                                <span class="mr-3">
                                    <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <p>
                                    PROFILE
                                </p>
                                <span class="ml-auto">
                                    <svg class="w-5" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L16 12L9 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="py-3 pr-2 text-base font-semibold bg-white">
                            <a class="flex items-center hover:text-blue-500" href="#" target="_blank" rel="noopener noreferrer">
                                <span class="mr-3">
                                    <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span>
                                <p>
                                    ACCOUNT SETTING
                                </p>
                                <span class="ml-auto">
                                    <svg class="w-5" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L16 12L9 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- right pane [visible above desktop width]  -->
        <aside class="fixed top-0 bottom-0 left-0 z-50 flex-col w-full max-w-[235px] hidden h-full py-8 overflow-hidden lg:flex bg-gradient-to-b from-gray-200 to-white">
            <div class="flex flex-col flex-1 min-h-0">
                <a class="flex items-center px-8 py-4" href="{{ route('home') }}">
                    <x-application-logo class="flex-shrink-0 text-gray-900 transition-all duration-300 fill-current w-9 h-9" />
                    <div class="flex flex-col ml-2 md:ml-3">
                        <p class="-mb-1 text-lg font-semibold text-gray-900 font-vesp md:text-xl">KARI</p>
                        <p class="text-sm font-normal">Investment</p>
                    </div>
                </a>
                <div class="min-h-[340px] mt-16 mb-auto overflow-x-hidden overflow-y-auto lg:overflow-hidden">
                    <ul>
                        <li class="py-3 pl-8 pr-2 text-base font-semibold bg-white">
                            <a class="flex items-center hover:text-blue-500" href="#" target="_blank" rel="noopener noreferrer">
                                <span class="mr-2">
                                    <svg class="w-4" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 12L5 10M5 10L12 3L19 10M5 10V20C5 20.5523 5.44772 21 6 21H9M19 10L21 12M19 10V20C19 20.5523 18.5523 21 18 21H15M9 21C9.55228 21 10 20.5523 10 20V16C10 15.4477 10.4477 15 11 15H13C13.5523 15 14 15.4477 14 16V20C14 20.5523 14.4477 21 15 21M9 21H15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <p class="text-sm">
                                    INVESTMENTS
                                </p>
                                <span class="ml-auto">
                                    <svg class="w-5" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L16 12L9 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="py-3 pl-8 pr-2 text-base font-semibold">
                            <a class="flex items-center hover:text-blue-500" href="#" target="_blank" rel="noopener noreferrer">
                                <span class="mr-2">
                                    <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </span>
                                <p class="text-sm">
                                    HISTORY
                                </p>
                                <span class="ml-auto">
                                    <svg class="w-5" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L16 12L9 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="py-3 pl-8 pr-2 text-base font-semibold">
                            <a class="flex items-center hover:text-blue-500" href="#" target="_blank" rel="noopener noreferrer">
                                <span class="mr-2">
                                    <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <p class="text-sm">
                                    PROFILE
                                </p>
                                <span class="ml-auto">
                                    <svg class="w-5" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L16 12L9 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="py-3 pl-8 pr-2 text-base font-semibold">
                            <a class="flex items-center hover:text-blue-500" href="#" target="_blank" rel="noopener noreferrer">
                                <span class="mr-2">
                                    <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span>
                                <p class="text-sm">
                                    ACCOUNT SETTING
                                </p>
                                <span class="ml-auto">
                                    <svg class="w-5" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L16 12L9 19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center pl-8">
                    <div class="w-10 overflow-hidden bg-gray-700 rounded-full">
                        <svg id="pl-ava" class="w-full h-full text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold">{{ auth()->user()->name }}</p>
                        <p class="text-xs font-medium">{{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="top-0 bottom-0 left-0 z-20 flex-col hidden h-full col-span-3 py-8 lg:flex">
        </aside>

        <!-- main body -->
        <main class="h-full col-span-8">
            {{ $slot }}
        </main>

        <!-- right pane -->
        <aside class="h-full col-span-1 py-12">
            <div class="hidden mt-2 sm:pl-8 lg:block">
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <svg class="w-6" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </aside>
    </div>
</body>

</html>