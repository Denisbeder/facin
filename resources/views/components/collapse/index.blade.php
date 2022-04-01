@props([
    'open' => false,
    'label', 
    'triggerClass' => '',
    'icon',
    'leftIcon',
    'sizeIcon'
])

@php
    $key = 'key_' . str()->random();
@endphp

<div 
    x-data="{
        collapseOpen: {{ $open ? 'true' : 'false' }}, 
        handleCollapse(value) {
            setTimeout(() => {
                $refs.{{ $key }}.style.transition = 'max-height 300ms, opacity 300ms';
                if (value) {
                    $refs.{{ $key }}.style.opacity = 1;
                    $refs.{{ $key }}.style.maxHeight = $refs.{{ $key }}.scrollHeight + 'px';
                } else {
                    $refs.{{ $key }}.style.opacity = 0;
                    $refs.{{ $key }}.style.maxHeight = '0px';
                } 
            });
        }
    }" 
    x-init="handleCollapse(collapseOpen); $watch('collapseOpen', value => handleCollapse(value))" 
    {{ $attributes->merge(['class' => 'w-full']) }}
>
    @isset($trigger)
        <div x-on:click="collapseOpen = !collapseOpen">
            {{ $trigger }}
        </div>
    @else
        <x-collapse.trigger class="{{ $triggerClass }}">
            <div x-on:click="collapseOpen = !collapseOpen" class="flex cursor-pointer items-center truncate">
                @isset($leftIcon)
                    <x-icon 
                    ::class="collapseOpen || '-rotate-90'" 
                    class="transition-all duration-300 mr-1" 
                    name="{{ !is_bool($leftIcon) ? $leftIcon : 'chevron-down' }}" 
                    size="{{ $sizeIcon ?? null }}" />
                @endisset

                {{ $label ?? '' }}

                @if(!isset($leftIcon))
                    <x-icon 
                    ::class="collapseOpen || '-rotate-90'" 
                    class="transition-all duration-300 ml-auto" 
                    name="{{ $icon ?? 'chevron-down' }}" 
                    size="{{ $sizeIcon ?? null }}" />
                @endif
            </div>
        </x-collapse.trigger>
    @endisset
    <div x-ref="{{ $key }}" class="overflow-hidden relative">
        {{ $slot }}
    </div>
</div>