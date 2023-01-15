@props([
    'name',
    'value' => '#CCCCCC'
])

<div
    x-data="{ color: '{{ $value }}' }"
    {{ $attributes->merge(['class' => 'flex gap-3']) }}
>
    <div class="w-9 h-9 rounded-full border border-gray-200 mt-1"
        :style="`background-color: ${color}`"
    >
        <x-input.text name="{{ str()->slug($name) }}-input" x-model="color" value="{{ $value }}" type="color" class="opacity-0" />
    </div>
    <x-input.text class="flex-shrink-1 w-24" type="text" name="{{ str()->slug($name) }}" x-model="color" maxlength="8" />
</div>
