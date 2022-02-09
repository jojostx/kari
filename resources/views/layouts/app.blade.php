<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.typekit.net/hph2pnz.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Source+Sans+Pro:wght@300;400;600&Vesper+Libre:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased font-dm">
    <div x-data="{ isOpen: false }" class="flex w-full min-h-screen text-gray-900 bg-gray-50">
        @include('layouts.navigation')

        <div class="w-screen space-y-6">
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

                {{ $slot }}

                <x-footer />
            </div>

        </div>
    </div>

    @if (session()->has('message'))
    <x-alert-toast>
        <p>
            {{ session('message') }}
        </p>
    </x-alert-toast>
    @endif

    <x-alert-toast-sms-verification />


    @livewireScripts
</body>

</html>