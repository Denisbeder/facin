@props(['value'])

@php
    $classList = [
       'relative',
       'cursor-default',
       'select-none',
       'py-1',
       'pl-3',
       'pr-9',
       'hover:text-white',
       'hover:bg-indigo-600',
    ];
@endphp

<li {{ $attributes->class($classList) }}
    role="option"
    :class="{ 'text-white bg-indigo-600': $data.selected.value == {{ Js::from($value) }}, 'text-gray-900': $data.selected.value != {{ Js::from($value) }} }"
    @click="selected = {{ Js::from(['label' => (string)$slot, 'value' => $value]) }}; __close();">
    <span @class([
        /*'font-normal' => !$selected,
        'font-semibold' => $selected,*/
        'block',
        //'truncate',
    ])>{{ $slot }}</span>

    <span class="text-white absolute inset-y-0 right-0 flex items-center pr-4" :class="{ 'hidden': $data.selected.value != {{ Js::from($value) }} }">
        <x-icon.check class="h-4 w-4" />
    </span>
</li>
