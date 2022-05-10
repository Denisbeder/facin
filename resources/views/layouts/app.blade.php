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
    <div x-data="{
        mode: 'full',
        isModeFull() {
            return this.mode === 'full';
        },
        isModeBar() {
            return this.mode === 'bar';
        },
        toggleMode() {            
            this.mode = this.mode === 'full' ? 'bar' : 'full';
        }
    }" class="flex">
        <div class="md:fixed md:z-20 md:inset-y-0 md:flex md:flex-col transition-[width] duration-300" :class="{'w-64': isModeFull(), 'w-[68px]': isModeBar()}">
            <x-sidebar />            
        </div>

        <div class="flex flex-1 flex-col transition-[padding-left] duration-300" :class="{'pl-64': isModeFull(), 'pl-[68px]': isModeBar()}">
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
