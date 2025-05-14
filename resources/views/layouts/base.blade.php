<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        @livewireStyles
    </head>
    <body>
        <nav class="flex items-center justify-between w-full p-5 bg-red-600">
            <div class="flex gap-5">
                <a href="/logout"><x-heroicon-o-logout class="w-10 h-10 text-white" /></a>
                <x-heroicon-s-globe-alt class="w-10 h-10 text-white"/>
            </div>
            @include('menu')
        </nav>
        <div class="font-sans antialiased text-gray-900">
            <div class="px-12 py-7">
                <div class="p-10 rounded-lg shadow-lg md:max-w-7xl">{{$slot}}</div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
