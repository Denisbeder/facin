@props([
    'active' => false,
    'icon' => false,
    'label' => false,
])

@php
    $classBase = [
        'transition-colors',
        'group',
        'flex',
        'items-center',
        'px-3',
        'py-3',
        'text-sm',
        'font-medium',
        'rounded-md',
        'cursor-pointer',
    ];

    $classColors = [
        'text-gray-600 hover:bg-gray-50 hover:text-gray-900' => !$active,
        'bg-gray-100 text-gray-900' => $active
    ];

    $classIcon = [
        'text-gray-400 group-hover:text-gray-500' => !$active,
        'text-gray-500' => $active,
        'transition-colors',
        'mr-3',
        'flex-shrink-0',
        'h-5',
        'w-5',
    ];

    $classList = [
        ...$classBase,
        ...$classColors
    ];
@endphp

<a {{ $attributes->class($classList) }}>
    @if($icon)
        <x-dynamic-component component="icon.{{ $icon }}" @class($classIcon) />
    @endif

    {{ $label ?? $slot }}
</a>
