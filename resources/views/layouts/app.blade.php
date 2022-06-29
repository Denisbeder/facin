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
<body class="bg-base-200/40">
    <div x-cloak x-data class="flex">
        <aside class="h-screen flex flex-col z-20 transition-[width,transform] duration-300 bg-base-100 border-r"
            x-bind:class="{
                'sticky top-0': $store.sidebar.isModeFull() || $store.sidebar.isModeBar(), 
                'w-64': $store.sidebar.isModeFull(), 
                'w-[68px]': $store.sidebar.isModeBar(), 
                'w-64 fixed inset-0 -translate-x-64': $store.sidebar.isModeMobile(), 
                '!translate-x-0': $store.sidebar.isModeMobile() && $store.sidebar.isOpenOffCanvas
            }"
        >
            <x-sidebar />
        </aside>
        
        <div class="flex flex-1 flex-col transition-[padding-left,transform] duration-300" 
            x-bind:class="{
                'translate-x-64 min-w-screen': $store.sidebar.isModeMobile() && $store.sidebar.isOpenOffCanvas
            }">
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts
    <script src="{{ asset('vendor/assets/js/app.js') }}"></script>
</body>
</html>
