@props(['open' => false, 'aligny' => 'bottom', 'alignx' => 'left', 'variant' => null])
@aware(['size' => 'md'])

<div {{ $attributes->merge(['class' => 'relative inline-flex items-stretch']) }} 
    x-data="{dropdownOpen: {{ $open ? 'true' : 'false' }} }" 
    x-on:click.outside="dropdownOpen = false" 
    x-on:keydown.escape.window="dropdownOpen = false">

    <div x-on:click="dropdownOpen = !dropdownOpen" class="cursor-pointer flex items-stretch">
        @isset($trigger)
            {{ $trigger }}
        @else
            <x-button size="{{ $size }}" variant="{{ $variant }}" icon="dots-vertical-rounded" />
        @endisset
    </div>
    
    <ul 
        :class="{'!opacity-100 !pointer-events-auto': dropdownOpen}" 
        class="drop-shadow-xl absolute {{ $alignx }}-0 {{ $aligny == 'bottom' ? 'mt-2  top-full' : '-top-2 -translate-y-full' }} z-10 bg-white border rounded-lg pointer-events-none transition-all opacity-0 duration-300 w-36"
    >
        {{ $slot }}
    </ul>
</div>