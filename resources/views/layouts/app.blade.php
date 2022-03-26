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
    <link href="{{ asset('vendor/assets/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex bg-slate-100 min-h-screen w-full">
        <x-sidebar />
        <main class="ml-64 flex-1 relative">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    <script src="{{ asset('vendor/assets/js/app.js') }}"></script>
</body>
</html>
