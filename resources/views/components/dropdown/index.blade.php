@props(['open' => false])

@php
    $open = $open ? 'true' : 'false';
@endphp

<div x-data="{{ '{open: '.$open.'}' }}" x-on:click.outside="open = false" x-on:keydown.escape.window="open = false" class="relative inline-flex">
    <div x-on:click="open = !open" class="cursor-pointer">
        @isset($trigger)
            {{ $trigger }}
        @else
            <x-button variant="white">
                <x-icon name="dots-vertical-rounded" size="text-base" />
            </x-button>
        @endisset
    </div>
    
    <ul :class="!open || 'opacity-100 pointer-events-auto z-10'" class="mt-2 drop-shadow-xl absolute top-full z-0 bg-white border rounded-lg pointer-events-none transition-all opacity-0 duration-500 w-36">
        {{ $slot }}
    </ul>
</div>