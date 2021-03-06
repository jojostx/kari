@extends('layouts.admin.app')

@section('contents')
<div x-data="{ isOpen: false }" class="flex w-full min-h-screen text-gray-900 bg-gray-50">
  @livewire('admin.app.navigation')

  <div class="flex flex-col flex-1 w-screen space-y-6 lg:pl-72">
    <!-- top header [search] -->
    @livewire('admin.app.search-header')

    <div class="flex-1 w-full px-4 mx-auto md:px-6 lg:px-8 max-w-7xl">
        @yield('body')
    </div>

    <x-footer/>
  </div>

    @if (session()->has('message'))
    <x-alert-toast>
        <p>
        {{ session('message') }}
        </p>
    </x-alert-toast>
    @endif
</div>
@endsection