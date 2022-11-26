@props(['active' => false])

@php
    $classList = [
        'bg-gray-100' => $active,
        'text-gray-900' => $active,
        'text-gray-700' => !$active,
        'transition-colors',
        'hover:bg-gray-100',
        'block',
        'px-4',
        'py-2',
        'text-sm',
    ];
@endphp

<a {{ $attributes->class($classList) }} role="menuitem" tabindex="-1">
    {{ $slot }}
</a>
