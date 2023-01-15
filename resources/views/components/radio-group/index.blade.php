@props([
    'label',
    'cols' => 3,
    'colsOnMobile' => 1,
])

@php
    $classListGrid = [
        'mt-3',
        'grid',
        'grid-cols-1' => (int)$colsOnMobile === 1,
        'grid-cols-2' => (int)$colsOnMobile === 2,
        'grid-cols-3' => (int)$colsOnMobile === 3,
        'grid-cols-4' => (int)$colsOnMobile === 4,
        'sm:grid-cols-1' => (int)$cols === 1,
        'sm:grid-cols-2' => (int)$cols === 2,
        'sm:grid-cols-3' => (int)$cols === 3,
        'sm:grid-cols-4' => (int)$cols === 4,
        'gap-y-6',
        'gap-x-4',
    ];
@endphp

<fieldset {{ $attributes }} x-data="{ selected: null }">
    @if(isset($label->attributes))
    <legend {{ $label->attributes->merge(['class' => 'block text-sm font-medium text-gray-700']) }}>{{ $label }}</legend>
    @else
    <legend class="block text-sm font-medium text-gray-700">{{ $label }}</legend>
    @endif

    <div @class($classListGrid)>
        {{ $slot }}
    </div>
</fieldset>
