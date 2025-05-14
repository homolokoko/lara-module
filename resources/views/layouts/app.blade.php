<!DOCTYPE html>
<html data-theme="dracula" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} -->
    </head>
    <body class="font-sans antialiased">

        <div class="w-screen h-screen p-3 bg-gray-100">
            <!-- Page Content -->
            <div class="flex w-full h-full gap-3">
                <div class="w-1/4 h-full py-5 overflow-auto bg-gray-700 shadow-lg side rounded-2xl">
                  @include('layouts.side')
                </div>
                <div class="flex flex-col w-3/4 gap-3 main">
                  <div class="w-full p-5 bg-gray-700 shadow-lg nav rounded-2xl">
                    <h3 class="text-xl font-bold">TQMS Process Module</h3>
                  </div>
                  <div class="w-full h-full p-5 overflow-auto bg-gray-700 shadow-lg content rounded-2xl">
                    {{$slot}}
                  </div>
                </div>
            </div>
        </div>
        @livewireScripts
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
