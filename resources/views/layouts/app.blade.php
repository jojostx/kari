<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KARI INVESTMENT') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.typekit.net/hph2pnz.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Source+Sans+Pro:wght@300;400;600&Vesper+Libre:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased font-dm">
    <div x-data="{ isOpen: false }" class="flex w-full min-h-screen text-gray-900 bg-gray-50">
        @include('layouts.navigation')

        <div class="w-screen space-y-6">
            {{ $slot }}
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
</body>

</html>