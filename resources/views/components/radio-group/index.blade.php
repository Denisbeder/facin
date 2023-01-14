@props([
    'label',
    'cols' => 3,
    'colsOnMobile' => 1,
])

<fieldset {{ $attributes }} x-data="{ selected: null }">
    @if(isset($label->attributes))
    <legend {{ $label->attributes->merge(['class' => 'block text-sm font-medium text-gray-700']) }}>{{ $label }}</legend>
    @else
    <legend class="block text-sm font-medium text-gray-700">{{ $label }}</legend>
    @endif

    <div class="mt-3 grid grid-cols-{{ $colsOnMobile }} gap-y-6 sm:grid-cols-{{ $cols }} gap-x-4">
        {{ $slot }}
    </div>
</fieldset>
