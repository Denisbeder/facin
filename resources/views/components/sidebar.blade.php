@php
$sidebarMenuItems = [
    [
    'label' => 'Dashboard',
    'url' => '/',
    'icon' => 'home',
    'active' => true,
    ],
    [
    'label' => 'Team',
    'url' => '/',
    'icon' => 'user',
    'active' => false,
    ],
    [
    'label' => 'Projects',
    'url' => '/',
    'icon' => 'folder',
    'active' => false,
    ],
    [
    'label' => 'Calendar',
    'url' => '/',
    'icon' => 'calendar',
    'active' => false,
    ],
    [
    'label' => 'Documents',
    'url' => '/',
    'icon' => 'archive',
    'active' => false,
    ],
    [
    'label' => 'Reports',
    'url' => '/',
    'icon' => 'chart-bar',
    'active' => false,
    ],
];
@endphp

<div class="h-full flex flex-grow flex-col bg-indigo-700">
    <div class="flex flex-col flex-shrink-0 items-start justify-center p-4 relative min-h-[64px]">
        <img class="transition-all duration-300" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow" x-bind:class="{'h-8 w-auto opacity-100': $store.sidebar.isModeBar(), 'w-0 h-0 opacity-0': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}" />
        <img class="transition-all duration-300" src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow" x-bind:class="{'w-0 h-0 opacity-0': $store.sidebar.isModeBar(), 'h-8 w-auto opacity-100': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}" />
        <button class="text-sm font-medium px-1 py-1 rounded-full absolute right-0 z-50 transition-transform duration-300" x-bind:class="{'translate-x-1/2 translate-y-8 text-indigo-700 bg-indigo-100 border border-indigo-700': $store.sidebar.isModeBar(), 'mr-4 text-white bg-indigo-800': $store.sidebar.isModeFull()}" x-on:click="$store.sidebar.toggleMode()">
            <x-icons name="chevron-left" class="w-3 h-3" x-bind:class="$store.sidebar.isModeBar() && 'hidden'" />
            <x-icons name="chevron-right" class="w-3 h-3" x-bind:class="!$store.sidebar.isModeBar() && 'hidden'" />
        </button>
    </div>
    <div class="mt-5 flex flex-1 flex-col">
        <small class="text-indigo-300 px-4 font-bold uppercase text-xs mb-5 flex" x-bind:class="$store.sidebar.isModeBar() && 'hidden'">Menu</small>
        <nav class="flex-1 space-y-2 px-4 pb-4">
            @foreach ($sidebarMenuItems as $item)
            <div x-data="{ expanded: false }">
                <button type="button" x-on:click.prevent="expanded = !expanded" class="w-full overflow-hidden group flex rounded-md px-2 py-2 text-sm font-medium justify-start transition-colors duration-300 {{ $item['active'] ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-600' }}">
                    <x-icons name="{{ $item['icon'] }}" class="w-5 h-5" />
                    <span class="inline-block text-left overflow-hidden transition-[color,background-color,opacity,width,margin-left] duration-100" x-bind:class="{'w-0 ml-0 opacity-0': $store.sidebar.isModeBar(), 'w-full ml-3 opacity-100': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}">{{ $item['label'] }}</span>
                </button>

                <div x-on:click.outside="expanded = false" x-show="expanded" x-collapse class="p-4" x-bind:class="{'fixed left-[68px] z-20 inset-y-0 w-64 mt-0 bg-white shadow-xl min-h-screen': $store.sidebar.isModeBar(), 'text-white bg-indigo-800 mt-1 rounded-md': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}">
                    <h2 class="font-bold text-xl mb-5 flex" x-bind:class="($store.sidebar.isModeFull() || $store.sidebar.isModeMobile()) && 'hidden'">{{ $item['label'] }}</h2>
                    <nav class="space-y-1">
                        @foreach ($sidebarMenuItems as $item)
                            <button type="button" x-on:click.prevent="expanded = !expanded" class="w-full overflow-hidden group flex rounded-md px-2 py-2 text-sm font-medium justify-start mb-1 last:mb-0 transition-colors duration-300" x-bind:class="{'hover:bg-slate-100 text-slate-700': $store.sidebar.isModeBar(), 'text-white hover:bg-indigo-700': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}">
                                <x-icons name="{{ $item['icon'] }}" class="w-5 h-5" />
                                <span class="inline-block text-left ml-3 transition-color duration-300">{{ $item['label'] }}</span>
                            </button>
                        @endforeach
                    </nav>
                </div>
            </div>
            @endforeach
        </nav>
    </div>
    <div class="flex-shrink-0 flex border-t border-indigo-800 p-4">
        <a href="#" class="flex-shrink-0 w-full group block">
        <div class="flex items-center">
            <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            <div class="overflow-hidden whitespace-nowrap transition-[color,background-color,opacity,width,height,margin-left] duration-100" x-bind:class="{'w-0 h-0 ml-0 opacity-0': $store.sidebar.isModeBar(), 'w-full h-auto ml-3 opacity-100': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}">
                <p class="text-sm font-medium text-white">Tom Cook</p>
                <p class="text-xs font-medium text-indigo-200 group-hover:text-white mb-0">View profile</p>
            </div>
        </div>
        </a>
    </div>
</div>
