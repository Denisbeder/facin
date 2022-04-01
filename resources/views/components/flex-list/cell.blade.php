
@php
    $classList = [
        'before:content-[attr(data-header)] before:flex before:w-full before:whitespace-nowrap md:before:hidden',
        'flex flex-row md:flex-col',
        'pl-10 md:pl-4',
        'pr-4',
        'py-4',
        'flex-1'
    ]
@endphp

<div {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }} data-header="{{ $header ?? null }}">
    {{ $slot }}
</div>