@props(['label' => null])

<div {{ $attributes->merge(['class' => 'flex p-6 font-bold border-b rounded-t-md']) }}>
    {{ $label ?? $slot }}
</div>