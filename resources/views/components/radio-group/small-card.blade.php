@props([
    'name',
    'value',
    'label',
    'icon' => false
])

<label
    class="select-none border rounded-md py-3 px-3 flex items-center justify-center text-sm font-semibold sm:flex-1 cursor-pointer focus:outline-none focus:border-indigo-500"
    :class="selected === '{{ $value }}' && 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700'"
    @click="selected = '{{ $value }}'"
>
    <input tabindex="-1" type="radio" name="{{ str()->slug($name) }}" value="{{ $value }}" class="sr-only" aria-labelledby="{{ $name }}-{{ $value }}-label">
    <span id="{{ str()->slug($name) }}-{{ $value }}-label" class="flex items-center">
        @if($icon)
        <span class="mr-2" :class="selected !== '{{ $value }}' && 'text-gray-400'">
            <x-dynamic-component component="icon.{{ $icon }}" class="w-5 h-5" />
        </span>
        @endif
        {{ $label ?? $slot }}
    </span>
</label>
