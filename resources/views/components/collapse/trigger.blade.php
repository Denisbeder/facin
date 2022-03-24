
@php
    $classList = 'transition-colors duration-300 px-4 py-2 cursor-pointer';
@endphp

<div {{ $attributes->merge(['class' => isset($class) ? $class . ' ' . $classList : 'bg-slate-50 hover:bg-slate-100 ' . $classList]) }}>
    {{ $slot }}
</div>