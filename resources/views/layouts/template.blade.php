<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-display bodygray">
        @include("layouts.includes.header")
        @section('header')
        @show
        <div class="">
            @yield('content')
        </div>
        @include("layouts.includes.footer")
        @section('footer')
        @show
        @stack("header-style")
        @stack("metier")
        @stack('dropdown')
    </body>
    </html>
