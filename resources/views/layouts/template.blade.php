<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('assets/icon/favicon.ico')}}" type="image/x-icon"/>
        <title>@yield('title')</title>
        <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-display bodygray h-screen">
        @include("layouts.includes.header")
       
        @yield('content')

        @include("layouts.includes.footer")
        @stack("header-style")
        @stack("metier")
        @stack('dropdown')
    </body>
    </html>
