@props([
    'title', 
    'icon',
    'sizeIcon',
    'rightIcon',
    'variant' => 'default',
    'rounded' => 'md',
    'loading' => false
])

@php
    $tag = $attributes->has('href') ? 'a' : 'button';
    $classList = [
        'mx-6 py-2 px-3 w-auto inline-flex items-center justify-center transition-colors duration-500 focus:ring',
        'rounded-none' => $rounded === 'none'  || $rounded === false || $rounded === 'false',
        'rounded-' . $rounded => $rounded !== 'none',
        'opacity-50' => (bool) $loading,
        'cursor-wait' => (bool) $loading,
        'cursor-pointer' => (bool) !$loading,
        // Fill Color
        'text-white bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-600 focus:ring-indigo-200' => $variant === 'primary' || $variant === 'default' || empty($variant),
        'text-white bg-slate-500 hover:bg-slate-600 active:bg-slate-600 focus:ring-slate-300' => $variant === 'secondary',
        'text-white bg-lime-500 hover:bg-lime-600 active:bg-lime-600 focus:ring-lime-200' => $variant === 'success',
        'text-white bg-rose-500 hover:bg-rose-600 active:bg-rose-600 focus:ring-rose-200' => $variant === 'danger',
        'text-white bg-sky-500 hover:bg-sky-600 active:bg-sky-600 focus:ring-sky-200' => $variant === 'info',
        'text-white bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-600 focus:ring-yellow-500/25' => $variant === 'warning',
        'text-white bg-slate-800 hover:bg-slate-900 active:bg-slate-900 focus:ring-slate-300' => $variant === 'dark',
        'text-slate-600 bg-slate-50 hover:bg-slate-200 active:bg-slate-200 focus:ring-slate-200/25' => $variant === 'light',
        'text-slate-600 bg-white hover:bg-slate-100 active:bg-slate-100 focus:ring-slate-200' => $variant === 'white',
        'text-blue-600 hover:text-blue-800 underline active:text-blue-800 focus:ring-blue-200' => $variant === 'link',
        // Outline
        'text-indigo-600 border border-indigo-500 hover:bg-indigo-100 active:bg-indigo-100 focus:ring-indigo-200' => $variant === 'outline-primary' || $variant === 'outline-default' || empty($variant),
        'text-slate-600 border border-slate-500 hover:bg-slate-100 active:bg-slate-100 focus:ring-slate-300' => $variant === 'outline-secondary',
        'text-lime-600 border border-lime-500 hover:bg-lime-50 active:bg-lime-50 focus:ring-lime-200' => $variant === 'outline-success',
        'text-rose-600 border border-rose-500 hover:bg-rose-50 active:bg-rose-50 focus:ring-rose-200' => $variant === 'outline-danger',
        'text-sky-600 border border-sky-500 hover:bg-sky-100 active:bg-sky-100 focus:ring-sky-200' => $variant === 'outline-info',
        'text-yellow-600 border border-yellow-500 hover:bg-yellow-50 active:bg-yellow-50 focus:ring-yellow-500/25' => $variant === 'outline-warning',
        'text-slate-800 border border-slate-800 hover:bg-slate-300 active:bg-slate-300 focus:ring-slate-300' => $variant === 'outline-dark',
        'text-slate-400 border border-slate-300 hover:bg-slate-200 active:bg-slate-200 focus:ring-slate-200' => $variant === 'outline-light',
        'text-white border border-white hover:bg-slate-50 active:bg-slate-50 focus:ring-slate-200' => $variant === 'outline-white',
    ];
@endphp

<{{ $tag }} disabled="{{ $loading }}" {{ $attributes->class($classList) }}>
    <x-icon name="{{ $icon ?? null }}" size="{{ $sizeIcon ?? null }}" class="mr-1 -ml-4" />

    {{ $title ?? $slot }}

    <x-icon name="{{ $rightIcon ?? null }}" size="{{ $sizeIcon ?? null }}" class="{{ Arr::toCssClasses(['ml-1', '-mr-4' => !$loading]) }}" />

    @if($loading)
        <x-icon name="spinner" class="ml-2 -mr-5" />
    @endif
</{{ $tag }}>