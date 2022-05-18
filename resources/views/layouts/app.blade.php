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
    <div x-cloak x-data="{
        mode: null,
        isOpenOffCanvas: false,
        isModeFull() {
            return this.mode === 'full';
        },
        isModeBar() {
            return this.mode === 'bar';
        },
        isModeMobile() {
            return this.mode === 'mobile';
        },
        isMobile() { 
            return 'ontouchstart' in window && window.screen.availWidth < 768;
        },
        setMode() { 
            const storageMode = localStorage.getItem('sidebarMode') ?? 'full';
            const currentMode = this.mode === null || !this.isMobile() ? storageMode : this.mode;
            this.mode = this.isMobile() ? 'mobile' : currentMode;
        },
        toggleMode() {      
            this.mode = this.mode === 'full' ? 'bar' : 'full';  
            localStorage.setItem('sidebarMode', this.mode); 
        },
        toggleOffCanvas() {      
            this.isOpenOffCanvas = !this.isOpenOffCanvas;   
        }
    }" x-init="setMode();" @resize.window="setMode();" class="flex h-full">
        <div class="flex flex-col transition-[width,transform] duration-300" 
            :class="{'w-64': isModeFull(), 'w-[68px]': isModeBar(), 'w-64 fixed inset-0 z-50 -translate-x-64': isModeMobile(), '!translate-x-0': isModeMobile() && isOpenOffCanvas}">
            <x-sidebar />            
        </div>

        <div class="flex flex-1 flex-col transition-[padding-left,transform] duration-300" 
            :class="{'translate-x-64 min-w-screen': isModeMobile() && isOpenOffCanvas}">
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
