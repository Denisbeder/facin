@props(['title' => null])

<div {{ $attributes->merge(['class' => 'flex p-6 font-bold border-b rounded-t-md']) }}>
    {{ $title ?? $slot }}
</div>