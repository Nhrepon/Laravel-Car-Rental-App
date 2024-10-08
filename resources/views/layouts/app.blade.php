<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CARENTAL') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/toastify.min.css') }}" />

        <!-- Scripts -->
         <script src="{{ asset('js/axios.min.js') }}" ></script>
         <script src="{{ asset('js/config.js') }}" ></script>
         <script src="{{ asset('js/toastify-js.js') }}" ></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased mx-auto">
        @include('layouts.navigation')
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
