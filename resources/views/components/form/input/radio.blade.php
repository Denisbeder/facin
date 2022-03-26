@props(['leftLabel', 'rightLabel', 'classLabel', 'variant' => 'default', 'size' => 'md'])

@php
    $classList = [
        'text-blue-600 focus:ring-offset-0',
        'text-indigo-500 focus:ring-indigo-500/50 focus:border-indigo-600' => $variant === 'primary' || $variant === 'default' || empty($variant),
        'text-slate-500 focus:ring-slate-500/50 focus:border-slate-600' => $variant === 'secondary',
        'text-lime-500 focus:ring-lime-500/50 focus:border-lime-600' => $variant === 'success',
        'text-rose-500 focus:ring-rose-500/50 focus:border-rose-600' => $variant === 'danger',
        'text-sky-500 focus:ring-sky-500/50 focus:border-sky-600' => $variant === 'info',
        'text-yellow-500 focus:ring-yellow-500/50 focus:border-yellow-600' => $variant === 'warning',
        'text-slate-800 focus:ring-slate-800/50 focus:border-slate-600' => $variant === 'dark',
        'text-slate-50 focus:ring-slate-50/75 focus:border-slate-100' => $variant === 'light',
        'text-white focus:ring-white focus:border-slate-50' => $variant === 'white',
        'w-4 h-4' => $size === 'sm',
        'w-5 h-5' => $size === 'md',
        'w-6 h-6' => $size === 'lg',
    ]
@endphp

<label class="inline-flex items-center mt-3">
    @isset($leftLabel)
    <span @class(['mr-2 text-slate-700', $classLabel ?? null])>{{ $leftLabel }}</span>
    @endisset

    <input type="radio" {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}>

    @if($slot->isNotEmpty() || isset($rightLabel))
    <span @class(['ml-2 text-slate-700', $classLabel ?? null])>{{ $rightLabel ?? $slot }}</span>
    @endif
</label>
