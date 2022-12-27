@props(['active' => false])

@php
    $tag = $attributes->has('href') ? 'a' : 'button';

    $classList = [
        'bg-gray-100' => $active,
        'text-gray-900' => $active,
        'text-gray-700' => !$active,
        'transition-colors',
        'hover:bg-gray-100',
        'block',
        'w-full',
        'px-4',
        'py-2',
        'text-sm',
        'text-left',
    ];
@endphp

<{{ $tag }} {{ $attributes->class($classList) }} role="menuitem" tabindex="-1">
    {{ $slot }}
</{{ $tag }}>
