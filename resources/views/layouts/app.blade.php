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
<body class="min-h-screen w-full bg-slate-100">
    <div 
        x-cloak 
        x-data="{sidebarOpen: false}" 
        x-init="$watch('sidebarOpen', value => {
            if (value) {
                document.documentElement.style.overflow = 'hidden';
                document.body.style.overflow = 'hidden';
            } else {
                document.documentElement.removeAttribute('style');
                document.body.removeAttribute('style');
            }            
        })"
        class="grid bg-slate-100 min-h-screen w-full transition-[margin-left] duration-300 -ml-64 md:ml-0"
        :class="{'!ml-0': sidebarOpen}" 
    >
        <x-sidebar />
        <main class="flex-1 ml-64 w-screen md:w-auto relative">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    <script src="{{ asset('vendor/assets/js/app.js') }}"></script>
</body>
</html>
