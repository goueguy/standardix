<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-display">
        include("layouts.header")

        <div class="">
            @yield('content')
        </div>

        @include("layouts.footer")
        @stack("header-style")
    </body>
    </html>
