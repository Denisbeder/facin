@props(['title' => null])

<div {{ $attributes->merge(['class' => 'flex p-6 font-bold border-b']) }}>
    {{ $title ?? $slot }}
</div>