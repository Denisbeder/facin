@props([
    'label',
    'icon',
    'active' => false
])

<a 
    href="#" 
    x-on:click.prevent="expanded = !expanded" 
    class="w-full text-sm overflow-hidden flex rounded-md justify-start items-center transition-colors duration-300" 
    x-bind:class="{
        'hover:bg-slate-100 text-slate-700 font-medium p-2': $store.sidebar.isModeBar(), 
        'text-indigo-300 hover:text-white p-0': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()
    }"
>
    @if($icon)
    <x-icon 
        class="w-5 h-5 mr-3" 
        x-bind:class="($store.sidebar.isModeFull() || $store.sidebar.isModeMobile()) && 'hidden'" 
        name="{{ $icon }}"
    />
    @endif
    <span class="inline-block text-left transition-color duration-300">{{ $label }}</span>
</a>