@props(['inline' => false])

@php
    $classList = 'flex mb-6';
    $inlineClass = $inline ? 'flex-row items-center' : 'flex-col';
    $controlClass = $classList . ' ' . $inlineClass;
@endphp

<div {{ $attributes->merge(['class' => $controlClass]) }}>
    {{ $slot }}
</div>