<!DOCTYPE html>
<html data-theme="bumblebee" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} -->
    </head>
    <body class="font-sans antialiased">

        <div class="w-screen h-screen bg-gray-100 p-5">
            <!-- Page Content -->
            <div class="w-full h-full flex gap-5">
                <div class="side w-1/4 bg-white p-5 rounded-2xl shadow-lg overflow-auto h-full">
                  side
                </div>
                <div class="main w-3/4 flex flex-col gap-5">
                  <div class="nav w-full p-5 bg-white p-5 rounded-2xl shadow-lg">
                    nav
                  </div>
                  <div class="content w-full p-5 bg-white rounded-2xl shadow-lg h-full overflow-auto">
                    {{$slot}}
                  </div>
                </div>
            </div>
        </div>
        @livewireScripts
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
