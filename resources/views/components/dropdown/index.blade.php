@props(['open' => false])

@php
    $open = $open ? 'true' : 'false';
@endphp

<div {{ $attributes->merge(['class' => 'relative inline-flex']) }} 
    x-data="{{ '{open: '.$open.'}' }}" 
    x-on:click.outside="open = false" 
    x-on:keydown.escape.window="open = false"
>
    <div x-on:click="open = !open" class="cursor-pointer">
        @isset($trigger)
            {{ $trigger }}
        @else
            <x-button variant="white">
                <x-icon name="dots-vertical-rounded" size="text-base" />
            </x-button>
        @endisset
    </div>
    
    <ul 
        :class="!open || 'opacity-100 pointer-events-auto'" 
        class="mt-2 drop-shadow-xl absolute top-full z-10 bg-white border rounded-lg pointer-events-none transition-all opacity-0 duration-300 w-36"
    >
        {{ $slot }}
    </ul>
</div>