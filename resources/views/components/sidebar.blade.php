@php
$sidebarMenuItems = [
    [
    'label' => 'Dashboard',
    'url' => '/',
    'icon' => 'bx-home',
    'active' => true,
    ],
    [
    'label' => 'Team',
    'url' => '/',
    'icon' => 'bx-user',
    'active' => false,
    ],
    [
    'label' => 'Projects',
    'url' => '/',
    'icon' => 'bx-folder',
    'active' => false,
    ],
    [
    'label' => 'Calendar',
    'url' => '/',
    'icon' => 'bx-calendar',
    'active' => false,
    ],
    [
    'label' => 'Documents',
    'url' => '/',
    'icon' => 'bx-box',
    'active' => false,
    ],
    [
    'label' => 'Reports',
    'url' => '/',
    'icon' => 'bx-bar-chart',
    'active' => false,
    ],
];
@endphp

<div class="h-full flex flex-grow flex-col bg-indigo-700">
    <div class="flex flex-col flex-shrink-0 items-start justify-center p-4 relative min-h-[64px]">
        <img class="transition-all duration-300" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow" :class="{'h-8 w-auto opacity-100': sidebar.isModeBar(), 'w-0 h-0 opacity-0': sidebar.isModeFull() || sidebar.isModeMobile()}" />
        <img class="transition-all duration-300" src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow" :class="{'w-0 h-0 opacity-0': sidebar.isModeBar(), 'h-8 w-auto opacity-100': sidebar.isModeFull() || sidebar.isModeMobile()}" />
        <button class="text-sm font-medium" :class="{'bg-indigo-800 text-white rounded-md mt-5 w-9 h-9 flex items-center justify-center': sidebar.isModeBar(), 'px-2 py-2 rounded-full absolute right-0 mr-4 text-white bg-indigo-800': sidebar.isModeFull()}" @click="sidebar.toggleMode()">
            <i class="bx w-3 h-3 text-sm flex items-center justify-center" :class="{'bx-right-arrow-alt': sidebar.isModeBar(), 'bx-left-arrow-alt': sidebar.isModeFull()}"></i>
        </button>
    </div>
    <div class="mt-5 flex flex-1 flex-col">
        <nav class="flex-1 space-y-2 px-4 pb-4">
            <small class="text-indigo-300 font-bold uppercase text-xs mb-5 flex" :class="sidebar.isModeBar() && 'hidden'">Menu</small>
            @foreach ($sidebarMenuItems as $item)
            <div x-data="{ expanded: false }">
                <button type="button" @click.prevent="expanded = !expanded" class="w-full overflow-hidden group flex rounded-md px-2 py-2 text-sm font-medium justify-start transition-colors duration-300 {{ $item['active'] ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-600' }}">
                    <i class="bx {{ $item['icon'] }} w-5 h-5 flex items-center justify-center text-lg flex-shrink-0 text-indigo-300"></i>
                    <span class="inline-block text-left overflow-hidden transition-[color,background-color,opacity,width,margin-left] duration-100" :class="{'w-0 ml-0 opacity-0': sidebar.isModeBar(), 'w-full ml-3 opacity-100': sidebar.isModeFull() || sidebar.isModeMobile()}">{{ $item['label'] }}</span>
                </button>

                <nav @click.outside="expanded = false" x-show="expanded" x-collapse class="p-4" :class="{'fixed left-[68px] z-20 inset-y-0 w-64 mt-0 bg-white shadow-xl min-h-screen': sidebar.isModeBar(), 'text-white bg-indigo-800 mt-1 rounded-md': sidebar.isModeFull() || sidebar.isModeMobile()}">
                    <h2 class="font-bold text-xl mb-5 flex" :class="(sidebar.isModeFull() || sidebar.isModeMobile()) && 'hidden'">{{ $item['label'] }}</h2>
                    @foreach ($sidebarMenuItems as $item)
                        <button type="button" @click.prevent="expanded = !expanded" class="w-full overflow-hidden group flex rounded-md px-2 py-2 text-sm font-medium justify-start mb-1 last:mb-0 transition-colors duration-300" :class="{'hover:bg-slate-100 text-slate-700': sidebar.isModeBar(), 'text-white hover:bg-indigo-700': sidebar.isModeFull() || sidebar.isModeMobile()}">
                            <i class="bx {{ $item['icon'] }} w-5 h-5 flex items-center justify-center text-lg flex-shrink-0"></i>
                            <span class="inline-block text-left ml-3 transition-color duration-300">{{ $item['label'] }}</span>
                        </button>
                    @endforeach
                </nav>
            </div>
            @endforeach
        </nav>
    </div>
    <div class="flex-shrink-0 flex border-t border-indigo-800 p-4">
        <a href="#" class="flex-shrink-0 w-full group block">
        <div class="flex items-center">
            <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            <div class="overflow-hidden whitespace-nowrap transition-[color,background-color,opacity,width,height,margin-left] duration-100" :class="{'w-0 h-0 ml-0 opacity-0': sidebar.isModeBar(), 'w-full h-auto ml-3 opacity-100': sidebar.isModeFull() || sidebar.isModeMobile()}">
                <p class="text-sm font-medium text-white">Tom Cook</p>
                <p class="text-xs font-medium text-indigo-200 group-hover:text-white mb-0">View profile</p>
            </div>
        </div>
        </a>
    </div>
</div>
