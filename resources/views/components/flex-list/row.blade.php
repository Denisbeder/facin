@props(['asHeader' => false])

@php
    $classList = [
        'flex-col relative md:flex-row justify-between w-full',
        'bg-white rounded-md p-4 mb-4 flex' => !$asHeader,
        'text-slate-500 text-xs font-bold uppercase whitespace-nowrap px-4 mb-2 hidden md:flex' => $asHeader,
    ]
@endphp

<div {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}>
    {{ $slot }}
</div>