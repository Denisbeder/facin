@aware(['asHeader' => false])

@php
    $classList = [
        'before:content-[attr(data-header)] before:flex before:absolute before:left-4 before:w-full before:whitespace-nowrap md:before:hidden' => isset($header),
        'before:w-16 before:pr-4 before:text-xs before:truncate before:text-slate-500 before:font-bold before:uppercase' => isset($header),
        'ml-20 md:ml-0' => isset($header),
        'text-sm' => !$asHeader,
        'flex justify-start items-center',
        'px-2 first:pl-0 last:pr-0',
        'mb-2 md:mb-0',
        'flex-1',
    ]
@endphp

<div {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }} data-header="{{ $header ?? null }}">
    {{ $slot }}
</div>