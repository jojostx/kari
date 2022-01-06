@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
<div x-data="{ isOpen: false }" class="flex w-full min-h-screen text-gray-900 bg-gray-50">
  <div x-cloak x-show="isOpen" x-transition.opacity.500ms x-on:click="isOpen = false" class="fixed inset-0 z-20 w-full h-full bg-gray-900/50 lg:hidden"></div>

  <aside x-bind:class="isOpen ? 'translate-x-0' : '-translate-x-full lg:-translate-x-0'" class="fixed inset-y-0 left-0 z-20 flex flex-col h-screen overflow-hidden duration-300 bg-white shadow-2xl lg:border-r w-80 lg:z-0 lg:translate-x-0">
    <header class="border-b h-[4rem] shrink-0 px-6 flex items-center">
      <a href="{{ route('admin.dashboard') }}" class="flex items-center">
        <x-application-logo class="flex-shrink-0 text-gray-900 transition-all duration-300 fill-current w-9 h-9" />
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
              <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2 font-medium text-white transition bg-gray-800 rounded-lg hover:text-white">
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
            Shop
          </p>

          <ul class="mt-2 -mx-3 space-y-1 text-sm">
            <li>
              <a href="https://demo.filamentadmin.com/shop/products" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span>
                  Products
                </span>
              </a>
            </li>
            <li>
              <a href="https://demo.filamentadmin.com/shop/customers" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span>
                  Customers
                </span>
              </a>
            </li>
            <li>
              <a href="https://demo.filamentadmin.com/shop/orders" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span>
                  Orders
                </span>
              </a>
            </li>
            <li>
              <a href="https://demo.filamentadmin.com/shop/categories" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                </svg>
                <span>
                  Categories
                </span>
              </a>
            </li>
            <li>
              <a href="https://demo.filamentadmin.com/shop/brands" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span>
                  Brands
                </span>
              </a>
            </li>
            <li>
              <a href="https://demo.filamentadmin.com/shop/discounts" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"></path>
                </svg>
                <span>
                  Discounts
                </span>
              </a>
            </li>
            <li>
              <a href="https://demo.filamentadmin.com/shop/reviews" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
                <span>
                  Reviews
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
            Blog
          </p>

          <ul class="mt-2 -mx-3 space-y-1 text-sm">
            <li>
              <a href="https://demo.filamentadmin.com/blog/posts" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>
                  Posts
                </span>
              </a>
            </li>
            <li>
              <a href="https://demo.filamentadmin.com/blog/categories" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <span>
                  Categories
                </span>
              </a>
            </li>
            <li>
              <a href="https://demo.filamentadmin.com/blog/authors" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                <span>
                  Authors
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
              <a href="https://demo.filamentadmin.com/health-check-results" class="flex items-center gap-3 px-3 py-2 font-medium transition rounded-lg hover:bg-gray-500/5 focus:bg-gray-500/5">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                <span>
                  Application Health
                </span>
              </a>
            </li>
          </ul>
        </li>

      </ul>

    </nav>

    <footer class="flex items-center gap-3 px-6 py-3 border-t shrink-0">

      <div class="bg-gray-400 bg-center bg-cover rounded-full w-11 h-11" style="background-image: url('https://ui-avatars.com/api/?name=Onyedika+Ikuru&color=FFFFFF&background=111827')"></div>

      <div>
        <p class="text-sm font-bold">
          Onyedika Ikuru
        </p>

        <p class="text-xs text-gray-500 hover:text-gray-700 focus:text-gray-700">
          <a href="{{ route('admin.logout') }}">
            Log out
          </a>
        </p>
      </div>
    </footer>
  </aside>

  <div class="flex flex-col flex-1 w-screen space-y-6 lg:pl-80">
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

    <div class="flex-1 w-full px-4 mx-auto md:px-6 lg:px-8 max-w-7xl">
      <div>
        <div class="space-y-6">
          <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
            <h1 class="text-2xl font-bold tracking-tight md:text-3xl">
              Dashboard
            </h1>

          </header>
          <div class="grid grid-cols-1 gap-4 mb-6 lg:grid-cols-2 lg:gap-8">
            <div wire:id="q3xTSf4MytnRjHP0ND15" class="p-2 space-y-2 bg-white shadow rounded-xl">
              <div class="space-y-2">
                <div class="px-4 py-2 space-y-4">
                  <div class="flex items-center h-12 space-x-4 rtl:space-x-reverse">
                    <div class="w-10 h-10 bg-gray-400 bg-center bg-cover rounded-full" style="background-image: url('https://ui-avatars.com/api/?name=Onyedika+Ikuru&color=FFFFFF&background=111827')"></div>

                    <div>
                      <h2 class="text-lg font-bold tracking-tight sm:text-xl">
                        Welcome, Onyedika Ikuru
                      </h2>

                      <p class="text-sm">
                        <a href="{{ route('admin.logout') }}" class="text-gray-600 hover:text-gray-500 focus:outline-none focus:underline">
                          Sign out
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-4 shrink-0">
    </div>
  </div>
</div>
@endsection