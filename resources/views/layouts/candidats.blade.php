<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/css/candidats.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>

    <div class="flex flex-col" x-data="{ open: false, modal:false}">
        <div class="relative min-h-screen md:flex">
            @include("layouts.includes._candidats_aside")
            <div class="block w-3/4 p-5 text-xl bg-white">
                @include("layouts.includes._alert-notifs")
                @yield("content")
            </div>
        </div>
    </div>
    @stack('js')
    <script>
        window.User = {
            id:{{optional(auth()->user())->id}}
        }
    </script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>

