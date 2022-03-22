@props([
    'open' => false,
    'title', 
    'icon',
    'sizeIcon',
    'rightIcon'
])

@php
    $key = 'key_' . str()->random();
    $open = $open ? 'true' : 'false';
    $classListDefault = 'flex cursor-pointer items-center';
    $classList = optional($heading ?? null)->attributes?->get('class');
    $classes = trim($classListDefault . ' ' . $classList);
    $sizeIcon = optional($heading ?? null)->attributes?->get('sizeIcon') ?? ($sizeIcon ?? null);
    $icon = optional($heading ?? null)->attributes?->get('icon') ?? ($icon ?? null);
    $rightIcon = optional($heading ?? null)->attributes?->get('rightIcon') ?? ($rightIcon ?? null);
@endphp

<div x-data="{{ '{open: '.$open.'}' }}" {{ $attributes->merge(['class' => 'w-full']) }}>
    <div x-on:click="open = !open" class="{{ $classes }}">
        @unless($rightIcon)
            <x-icon 
            ::class="!open || 'rotate-90'" 
            class="transition duration-300 mr-1" 
            name="{{ $icon ?? 'chevron-right' }}" 
            size="{{ $sizeIcon ?? null }}" />
        @endunless

        {{ $heading ?? ($title ?? '') }}

        @isset($rightIcon)
            <x-icon 
            ::class="!open || 'rotate-90'" 
            class="transition duration-300 ml-auto" 
            name="{{ !is_bool($rightIcon) ? $rightIcon : 'chevron-right' }}" 
            size="{{ $sizeIcon ?? null }}" />
        @endisset
    </div>
    <div 
        class="overflow-hidden relative transition-all max-h-0 opacity-0 duration-500"
        x-ref="{{ $key  }}"
        :class="!open || 'opacity-100'"
        :style="!open || 'max-height: ' + $refs.{{ $key  }}.scrollHeight + 'px'"
    >
        {{ $slot }}
    </div>
</div>