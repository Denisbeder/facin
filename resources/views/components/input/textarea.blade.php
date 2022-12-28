@php
    $classList = [
        //'transition-color duration-300',
        'outline-transparent',
        'block',
        'w-full',
        'rounded-md',
        'border-gray-200',
        'focus:border-indigo-500',
        'focus:ring-indigo-500',
        'sm:text-sm',
    ];
@endphp

<textarea {{ $attributes->class($classList) }}>{{ $slot }}</textarea>
