@props(['label'])
@aware(['inline' => false])

@php
    $classList = [
        'flextext-base font-semibold',
        'mb-2' => !$inline,
        'mr-2' => $inline,
    ];
@endphp

<label @isset($for)for="{{ $for }}"@endisset {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}>
    {{ $label ?? $slot }}
</label>