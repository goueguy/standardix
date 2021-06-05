<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    @section('header')

    @stop
    <div class="flex flex-col">
        <div class="relative min-h-screen md:flex">
            <!-- sidebar -->
            @include("layouts.includes._candidats_aside")
            @yield("content")
        </div>
    </div>

    @section('footer')

    @stop
</body>
</html>

