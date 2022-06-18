<div class="flex flex-col flex-shrink-0 items-start justify-center p-4 relative min-h-[64px]">
    <img class="transition-all duration-300" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=black" alt="Workflow" x-bind:class="{'h-8 w-auto opacity-100': $store.sidebar.isModeBar(), 'w-0 h-0 opacity-0': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}" />
    <img class="transition-all duration-300" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg" alt="Workflow" x-bind:class="{'w-0 h-0 opacity-0': $store.sidebar.isModeBar(), 'h-8 w-auto opacity-100': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}" />
    <button 
    class="text-sm font-medium px-1 py-1 rounded-full absolute right-0 z-50 transition-transform duration-300" 
    x-bind:class="{
            'translate-x-1/2 translate-y-8 text-base-content bg-base-100 border border-base-300': $store.sidebar.isModeBar(), 
            'mr-4 text-base-content bg-base-300/90': $store.sidebar.isModeFull(), 'hidden': $store.sidebar.isModeMobile()
        }" 
        x-on:click="$store.sidebar.toggleMode()"
    >
        <x-icon name="chevron-left" class="w-3 h-3" x-bind:class="$store.sidebar.isModeBar() && 'hidden'" />
        <x-icon name="chevron-right" class="w-3 h-3" x-bind:class="!$store.sidebar.isModeBar() && 'hidden'" />
    </button>
</div>