@props([
    'label', 
    'variant' => 'default',
    'rounded' => 'md',
    'loading' => false,
    'size' => 'md',
    'circle' => false,
    'icon' => null,
    'rightIcon' => null,
    'sizeIcon' => 'text-sm',
])

@php
    $tag = $attributes->has('href') ? 'a' : 'button';
    $classList = [
        'rounded-' . $rounded => $rounded !== 'none' && !$circle,
        'whitespace-nowrap font-semibold inline-flex items-center justify-center transition-colors duration-300 focus:ring',
        'rounded-none' => ($rounded === 'none'  || $rounded === false || $rounded === 'false') && !$circle,
        'opacity-50' => (bool) $loading,
        'cursor-wait' => (bool) $loading,
        'cursor-pointer' => (bool) !$loading,
        // Fill Color
        'text-white border border-indigo-500 hover:border-indigo-600 active:border-indig-600 bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-600 focus:ring-indigo-500/25 focus-visible:outline-indigo-600 focus-visible:border-indigo-600' => $variant === 'primary' || $variant === 'default' || empty($variant),
        'text-white border border-slate-500 hover:border-slate-600 active:border-slate-600 bg-slate-500 hover:bg-slate-600 active:bg-slate-600 focus:ring-slate-500/25 focus-visible:outline-slate-600' => $variant === 'secondary',
        'text-white border border-lime-500 hover:border-lime-600 active:border-lime-600 bg-lime-500 hover:bg-lime-600 active:bg-lime-600 focus:ring-lime-500/25 focus-visible:outline-lime-600' => $variant === 'success',
        'text-white border border-rose-500 hover:border-rose-600 active:border-rose-600 bg-rose-500 hover:bg-rose-600 active:bg-rose-600 focus:ring-rose-500/25 focus-visible:outline-rose-600' => $variant === 'danger',
        'text-white border border-sky-500 hover:border-sky-600 active:border-sky-600 bg-sky-500 hover:bg-sky-600 active:bg-sky-600 focus:ring-sky-500/25 focus-visible:outline-sky-600' => $variant === 'info',
        'text-white border border-yellow-500 hover:border-yellow-600 active:border-yellow-600 bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-600 focus:ring-yellow-500/25 focus-visible:outline-yellow-600' => $variant === 'warning',
        'text-white border border-slate-500 hover:border-slate-900 active:border-slate-900 bg-slate-800 hover:bg-slate-900 active:bg-slate-900 focus:ring-slate-800/25 focus-visible:outline-slate-800' => $variant === 'dark',
        'text-slate-600 border border-slate-50 hover:border-slate-200 active:border-slate-200 bg-slate-50 hover:bg-slate-100 active:bg-slate-100 focus:ring-slate-100/25 focus-visible:outline-slate-100' => $variant === 'light',
        'text-slate-600 border border-white bg-white hover:bg-slate-100 active:bg-slate-100 focus:ring-slate-100/50 focus-visible:outline-slate-100' => $variant === 'white',
        'text-blue-600 hover:text-blue-800 underline active:text-blue-800 focus:ring-slate-300/25 focus-visible:outline-rose-600 focus-visible:outline-blue-300' => $variant === 'link',
        // Outline
        'text-indigo-600 border border-indigo-500 hover:bg-indigo-100 active:bg-indigo-100 focus:ring-indigo-500/25 focus-visible:outline-indigo-500/50' => $variant === 'outline-primary' || $variant === 'outline-default' || empty($variant),
        'text-slate-600 border border-slate-500 hover:bg-slate-100 active:bg-slate-100 focus:ring-slate-500/25 focus-visible:outline-slate-500/50' => $variant === 'outline-secondary',
        'text-lime-600 border border-lime-500 hover:bg-lime-50 active:bg-lime-50 focus:ring-lime-500/25 focus-visible:outline-lime-500/50' => $variant === 'outline-success',
        'text-rose-600 border border-rose-500 hover:bg-rose-50 active:bg-rose-50 focus:ring-rose-500/25 focus-visible:outline-rose-500/50' => $variant === 'outline-danger',
        'text-sky-600 border border-sky-500 hover:bg-sky-100 active:bg-sky-100 focus:ring-sky-500/25 focus-visible:outline-sky-500/50' => $variant === 'outline-info',
        'text-yellow-600 border border-yellow-500 hover:bg-yellow-50 active:bg-yellow-50 focus:ring-yellow-500/25 focus-visible:outline-yellow-500/50' => $variant === 'outline-warning',
        'text-slate-800 border border-slate-800 hover:bg-slate-300 active:bg-slate-300 focus:ring-slate-800/25 focus-visible:outline-slate-800/50' => $variant === 'outline-dark',
        'text-slate-400 border border-slate-300 hover:text-slate-500 hover:bg-slate-100 active:bg-slate-100 focus:ring-slate-300/25 focus-visible:outline-slate-300/50' => $variant === 'outline-light',
        'text-white border border-white hover:bg-slate-50 active:bg-slate-50 focus:ring-slate-50/50 focus-visible:outline-slate-50/50' => $variant === 'outline-white',
        // Size
        'py-0.5 px-1.5 text-xs' => $size === '2xs' && !$circle,
        'py-1.5 px-2.5 text-xs' => $size === 'xs' && !$circle,
        'py-2 px-3 text-sm' => $size === 'sm' && !$circle,
        'py-2 px-4 text-base' => $size === 'md' && !$circle,
        'py-3 px-6 text-base' => $size === 'lg' && !$circle,
        'py-4 px-6 text-base' => $size === 'xl' && !$circle,
        'py-5 px-6 text-base' => $size === '2xl' && !$circle,
        // Size Circle Button
        'w-[22px] h-[22px] text-xs rounded-full' => $size === '2xs' && $circle,
        'w-[30px] h-[30px] text-xs rounded-full' => $size === 'xs' && $circle,
        'w-[38px] h-[38px] text-sm rounded-full' => $size === 'sm' && $circle,
        'w-[42px] h-[42px] text-base rounded-full' => $size === 'md' && $circle,
        'w-[50px] h-[50px] text-base rounded-full' => $size === 'lg' && $circle,
        'w-[58px] h-[58px] text-base rounded-full' => $size === 'xl' && $circle,
        'w-[66px] h-[66px] text-base rounded-full' => $size === '2xl' && $circle,
    ];
@endphp

<{{ $tag }} {{ $loading ? 'disabled' : '' }} {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}>
    @isset($icon)
        <x-icon name="{{ $icon }}" size="{{ $sizeIcon }}" />
    @endisset

    @isset($label)
        <span @class([
            'ml-2' => isset($icon),
            'mr-2' => isset($rightIcon),
        ])>
            {{ $label }}
        </span>
    @else 
        {{ $slot }}
    @endisset

    @isset($rightIcon)
        <x-icon name="{{ $rightIcon }}" size="{{ $sizeIcon }}" />
    @endisset

    @if($loading)
        <x-icon name="spinner" class="ml-2 -mr-2" />
    @endif
</{{ $tag }}>