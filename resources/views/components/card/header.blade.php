@props(['label' => null])

<div {{ $attributes->merge(['class' => 'flex px-6 py-4 font-bold border-b rounded-t-md']) }}>
    {{ $label ?? $slot }}
</div>