@props(['icon' => null, 'size' => 'md'])

@php
    $sizes = [
        'button' => [
            'xs' => '!p-1', // 30px
            'sm' => '!p-1.5', // 34px
            'md' => '!p-2', // 38px
            'lg' => '!p-2', // 42px
            'xl' => '!p-3', // 50px
        ],
        'icon' => [
            'xs' => 'h-5 w-5',
            'sm' => 'h-5 w-5',
            'md' => 'h-5 w-5',
            'lg' => 'h-6 w-6',
            'xl' => 'h-6 w-6',
        ],
    ];
@endphp

<x-button {{ $attributes->class(['rounded-full', $sizes['button'][$size]]) }} roundedNone>
    <x-icon name="{{ $icon }}" class="{{ $sizes['icon'][$size] }}" />
</x-button>
