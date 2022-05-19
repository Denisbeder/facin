<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('vendor/assets/svg/favicon.svg') }}" />
    @hasSection('title')
    <title>{{ config('app.name') }} - @yield('title')</title>
    @else
    <title>{{ config('app.name') }}</title>
    @endif
    @livewireStyles
    <link href="{{ asset('vendor/assets/css/app.css') }}" rel="stylesheet">
</head>
<body class="h-full w-full bg-slate-100">
    <div x-cloak x-data="app" class="flex h-full">
        <div class="flex flex-col transition-[width,transform] duration-300" 
            :class="{'w-64': sidebar.isModeFull(), 'w-[68px]': sidebar.isModeBar(), 'w-64 fixed inset-0 z-50 -translate-x-64': sidebar.isModeMobile(), '!translate-x-0': sidebar.isModeMobile() && sidebar.isOpenOffCanvas}">
            <x-sidebar />
        </div>

        <div class="flex flex-1 flex-col transition-[padding-left,transform] duration-300" 
            :class="{'translate-x-64 min-w-screen': sidebar.isModeMobile() && sidebar.isOpenOffCanvas}">
            <x-topbar />
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts
    <script src="{{ asset('vendor/assets/js/app.js') }}"></script>
</body>
</html>
