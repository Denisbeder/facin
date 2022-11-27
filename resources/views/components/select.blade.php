@php
    $classList = [
        'block',
        'w-full',
        'rounded-md',
        'border-gray-200',
        'py-2',
        'pl-3',
        'pr-10',
        'text-base',
        'focus:border-indigo-500',
        'focus:outline-none',
        'focus:ring-indigo-500',
        'sm:text-sm',
    ];
@endphp

<select {{ $attributes->class($classList) }}>
    {{ $slot }}
</select>
