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
    ]
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
                <a href="#" class="group flex items-center rounded-md px-2 py-2 text-sm font-medium justify-start transition-colors duration-300 {{ $item['active'] ? 'bg-indigo-800 text-white' : 'text-indigo-100 hover:bg-indigo-600' }}">
                    <i class="bx {{ $item['icon'] }} w-5 h-5 flex items-center justify-center text-lg flex-shrink-0 text-indigo-300"></i>
                    <span class="ml-3 overflow-hidden w-full opacity-100 transition-all duration-300" :class="{'w-0 ml-0 opacity-0': sidebar.isModeBar()}">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
    </div>
</div>
