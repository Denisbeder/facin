<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('vendor/assets/svg/favicon.svg') }}"/>
    @hasSection('title')
        <title>{{ config('app.name') }} - @yield('title')</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    @vite('resources/assets/scss/app.scss')
</head>
<body class="h-full">
<div x-cloak x-data="{ open: false }" @keydown.window.escape="open = false">
    <div class="fixed inset-y-0 flex w-64 flex-col z-20 md:translate-x-0 md:transition-none transition-transform duration-300"
         :class="{'-translate-x-full': !open}">
        <x-sidebar />

        <button type="button"
                class="ml-1 fixed z-20 left-64 top-0 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white
                after:block after:fixed after:top-0 after:left-64 after:bg-slate-500 after:bg-opacity-75 after:w-screen after:h-screen"
                @click="open = false" x-show="open"
                x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: outline/x-mark -->
            <svg class="h-6 w-6 text-black z-10" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <div class="flex flex-1 flex-col md:pl-64">
        <x-topbar />

        <main class="flex-1">
            <div class="py-6">
                @yield('content')
            </div>
        </main>
    </div>
</div>

@vite('resources/assets/js/app.js')
</body>
</html>
