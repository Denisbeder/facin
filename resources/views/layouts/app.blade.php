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
    <div class="flex">
        <div class="hidden md:fixed md:inset-y-0 md:flex md:flex-col lg:w-64">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-grow flex-col overflow-y-auto bg-indigo-700 pt-5">
                <div class="flex flex-shrink-0 items-center justify-center px-4 lg:justify-start">
                    <img class="h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow" />
                    <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow" />
                </div>
                <div class="mt-5 flex flex-1 flex-col">
                    <nav class="flex-1 space-y-2 px-4 pb-4">
                        <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
                        <a href="#" class="group flex items-center justify-center rounded-md bg-indigo-800 px-2 py-2 text-sm font-medium text-white lg:justify-start">
                            <i class="bx bx-home w-5 h-5 flex items-center justify-center text-lg flex-shrink-0 text-indigo-300"></i>
                            <span class="ml-3 hidden lg:inline">Dashboard</span>
                        </a>

                        <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
                            <i class="bx bx-user w-5 h-5 flex items-center justify-center text-lg flex-shrink-0 text-indigo-300"></i>
                            <span class="ml-3 hidden lg:inline">Team</span>
                        </a>

                        <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
                            <i class="bx bx-folder w-5 h-5 flex items-center justify-center text-lg flex-shrink-0 text-indigo-300"></i>
                            <span class="ml-3 hidden lg:inline">Projects</span>
                        </a>

                        <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
                            <i class="bx bx-calendar w-5 h-5 flex items-center justify-center text-lg flex-shrink-0 text-indigo-300"></i>
                            <span class="ml-3 hidden lg:inline">Calendar</span>
                        </a>

                        <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
                            <i class="bx bx-box w-5 h-5 flex items-center justify-center text-lg flex-shrink-0 text-indigo-300"></i>
                            <span class="ml-3 hidden lg:inline">Documents</span>
                        </a>

                        <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
                            <i class="bx bx-bar-chart w-5 h-5 flex items-center justify-center text-lg flex-shrink-0 text-indigo-300"></i>
                            <span class="ml-3 hidden lg:inline">Reports</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="flex flex-1 flex-col md:pl-[68px] lg:pl-64">
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
