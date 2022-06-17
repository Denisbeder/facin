@props([
    'label',
    'icon',
    'active' => false,
    'triggerCollapsed' => false
])

@php
    $tag = $triggerCollapsed ? 'button' : 'a';
@endphp

<{{ $tag }}
    {{ $attributes->class([
        'relative',
        'w-full',
        'flex',
        'rounded-md',
        'px-2',
        'py-2',
        'text-sm',
        'font-medium',
        'justify-start',
        'items-center',
        'transition-colors',
        'duration-300',
        'text-base-content hover:bg-base-content/10' => !$active,
        'text-primary-content bg-primary hover:bg-primary/90' => $active,
    ]) }}
    
    @if($triggerCollapsed)
    x-on:click.prevent="expanded = !expanded" 
    @else
    href="#" 
    @endif
>
    @if($icon)
    <x-icon name="{{ $icon }}" class="w-5 h-5" />
    @endif

    <span 
        class="text-left whitespace-nowrap absolute inset-y-0 flex items-center overflow-hidden transition-[color,background-color,opacity,width,margin-left] duration-100" 
        x-bind:class="{
            'w-0 ml-0 opacity-0': $store.sidebar.isModeBar(), 
            'w-full ml-7 opacity-100': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()
        }"
    >
        {{ $label }}
    </span>

    @if($triggerCollapsed)
    <div class="absolute inset-y-0 flex items-center right-2">
        <x-icon name="chevron-right" class="w-4 h-4 transition-transform duration-300" x-bind:class="{'rotate-90': expanded, 'hidden': $store.sidebar.isModeBar()}" />
    </div>
    @endif
</{{ $tag }}>
