@props([
    'label', 
    'variant' => 'default',
    'rounded' => 'md',
    'loading' => false,
    'size' => 'md'
])

@php
    $tag = $attributes->has('href') ? 'a' : 'button';
    $classList = [
        'w-auto inline-flex items-center justify-center transition-colors duration-300 focus:ring',
        'rounded-none' => $rounded === 'none'  || $rounded === false || $rounded === 'false',
        'rounded-' . $rounded => $rounded !== 'none',
        'opacity-50' => (bool) $loading,
        'cursor-wait' => (bool) $loading,
        'cursor-pointer' => (bool) !$loading,
        // Fill Color
        'text-white border border-indigo-500 hover:border-indig0-600 active:border-indig-600 bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-600 focus:ring-indigo-200' => $variant === 'primary' || $variant === 'default' || empty($variant),
        'text-white border border-slate-500 hover:border-slate-600 active:border-slate-600 bg-slate-500 hover:bg-slate-600 active:bg-slate-600 focus:ring-slate-300' => $variant === 'secondary',
        'text-white border border-lime-500 hover:border-lime-600 active:border-lime-600 bg-lime-500 hover:bg-lime-600 active:bg-lime-600 focus:ring-lime-200' => $variant === 'success',
        'text-white border border-rose-500 hover:border-rose-600 active:border-rose-600 bg-rose-500 hover:bg-rose-600 active:bg-rose-600 focus:ring-rose-200' => $variant === 'danger',
        'text-white border border-sky-500 hover:border-sky-600 active:border-sky-600 bg-sky-500 hover:bg-sky-600 active:bg-sky-600 focus:ring-sky-200' => $variant === 'info',
        'text-white border border-yellow-500 hover:border-yellow-600 active:border-yellow-600 bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-600 focus:ring-yellow-500/25' => $variant === 'warning',
        'text-white border border-slate-500 hover:border-slate-900 active:border-slate-900 bg-slate-800 hover:bg-slate-900 active:bg-slate-900 focus:ring-slate-300' => $variant === 'dark',
        'text-slate-600 border border-slate-50 hover:border-slate-200 active:border-slate-200 bg-slate-50 hover:bg-slate-200 active:bg-slate-200 focus:ring-slate-200/25' => $variant === 'light',
        'text-slate-600 border border-white bg-white hover:bg-slate-100 active:bg-slate-100 focus:ring-slate-200' => $variant === 'white',
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
        // Size
        'py-1.5 px-2.5 text-xs' => $size === 'xs',
        'py-2 px-3 text-sm' => $size === 'sm',
        'py-2 px-4 text-base' => $size === 'md',
        'py-3 px-6 text-base' => $size === 'lg',
        'py-4 px-6 text-base' => $size === 'xl',
        'py-5 px-6 text-base' => $size === '2xl',
    ];
@endphp

<{{ $tag }} {{ $loading ? 'disabled' : '' }} {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}>
    {{ $label ?? $slot }}

    @if($loading)
        <x-icon name="spinner" class="ml-2 -mr-2" />
    @endif
</{{ $tag }}>