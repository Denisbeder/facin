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
    $open = $open ? 'true' : 'false';
@endphp

<div x-data="{{ '{open: '.$open.'}' }}" {{ $attributes->merge(['class' => 'w-full']) }}>
    @isset($trigger)
        <div x-on:click="open = !open">
            {{ $trigger }}
        </div>
    @else
        <x-collapse.trigger class="{{ $triggerClass }}">
            <div x-on:click="open = !open" class="flex cursor-pointer items-center">
                @isset($leftIcon)
                    <x-icon 
                    ::class="open || '-rotate-90'" 
                    class="transition-all duration-300 mr-1" 
                    name="{{ !is_bool($leftIcon) ? $leftIcon : 'chevron-down' }}" 
                    size="{{ $sizeIcon ?? null }}" />
                @endisset

                {{ $label ?? '' }}

                @if(!isset($leftIcon))
                    <x-icon 
                    ::class="open || '-rotate-90'" 
                    class="transition-all duration-300 ml-auto" 
                    name="{{ $icon ?? 'chevron-down' }}" 
                    size="{{ $sizeIcon ?? null }}" />
                @endif
            </div>
        </x-collapse.trigger>
    @endisset
    <div 
        class="overflow-hidden relative transition-all max-h-0 opacity-0 duration-500"
        x-ref="{{ $key }}"
        :class="!open || 'opacity-100'"
        :style="!open || 'max-height: ' + $refs.{{ $key }}.scrollHeight + 'px'"
    >
        {{ $slot }}
    </div>
</div>