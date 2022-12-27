
@php
    $classList = [
        'first:ml-0',
        '-ml-px',
        'focus:z-10',
        'items-center',
        'first:rounded-l-md',
        'last:rounded-r-md',
        'focus:ring-offset-0',
    ];
@endphp

<x-button color="white" :rounded="false" {{ $attributes->class($classList) }}>
    {{ $slot }}
</x-button>
