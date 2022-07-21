<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('vendor/assets/svg/favicon.svg') }}"/>
    @hasSection('title')
        <title>{{ config('app.name') }} - @yield('title')</title>
    @else 
        <title>{{ config('app.name') }}</title>
    @endif
    @livewireStyles
    {{-- <link href="{{ asset('vendor/assets/css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/scss/app.scss', 'vendor/assets')
</head>
<body>
    @yield('content')
    @livewireScripts
    {{-- <script src="{{ asset('vendor/assets/js/app.js') }}"></script> --}}
    @vite('resources/js/app.js', 'vendor/assets')
</body>
</html>
