@props([
    'name' => null, 
    'type' => 'text', 
    'leftIcon' => false, 
    'rightIcon' => false,
    'suffix' => false,
    'prefix' => false,
    'rounded' => 'md',
    'size' => 'md',
    'hasError' => false,
    'useHasError' => false,
    'value' => null
])


@php
    $refKey = str()->random(5);
    $hasError = $hasError ? $hasError : session()->get('errors')?->has($name);
    $value = old($name, $value);
    $classList = [
        'block',
        'w-full',
        'relative z-0',
        'rounded-none' => ($rounded === 'none'  || $rounded === false || $rounded === 'false'),
        'rounded-' . $rounded => $rounded !== 'none',
        'border-rose-500' => $hasError && $useHasError,
        'placeholder:text-slate-400 ',
        'border-slate-200',
        'shadow-sm',
        'focus:border-indigo-500',
        'focus:ring-1',
        'focus:ring-indigo-500',
        'shadow-none',
        'transition-colors',
        'duration-300',
        'pl-9' => $leftIcon,
        'pr-9' => $rightIcon,
        // Size
        'py-0.5 px-2 text-xs' => $size === '2xs',
        'py-1.5 px-2 text-xs' => $size === 'xs',
        'py-2 px-2.5 text-sm' => $size === 'sm',
        'py-2 px-3 text-base' => $size === 'md',
        'py-3 px-3 text-base' => $size === 'lg',
        'py-4 px-3 text-base' => $size === 'xl',
        'py-5 px-3 text-base' => $size === '2xl',
    ];
@endphp

@if($leftIcon || $rightIcon || $prefix || $suffix || isset($left) || isset($right))
<div @if($prefix || $suffix || isset($left) || isset($right)) x-data @endif class="relative w-full flex">
@endif

    @isset($left)
        <div x-ref="refLeft_{{ $refKey }}" class="absolute z-10 left-0 inset-y-0 flex items-center">{{ $left }}</div>
    @else
        @if($leftIcon)
            <x-icon name="{{ $leftIcon }}" class="ml-3 text-slate-400 absolute z-10 left-0 top-1/2 -translate-y-1/2" />
        @elseif($prefix)
            <div x-ref="refLeft_{{ $refKey }}" class="pl-3 text-slate-400 absolute z-10 left-0 inset-y-0 flex items-center pointer-events-none">
                {{ $prefix }}
            </div>
        @endif
    @endisset

    <input 
        {{ $attributes->except('class') }}
        {{ $attributes->class($classList) }}
        name="{{ $name }}" 
        id="{{ $name }}"
        type="{{ $type }}"  
        value="{{ $value }}"      
        @if($prefix || isset($left) || $suffix || isset($right))
        :style="{
            @if($prefix || isset($left))
            paddingLeft: ($refs.refLeft_{{ $refKey }}.scrollWidth + 1) + 'px',
            @endif
            @if($suffix || isset($right))
            paddingRight: ($refs.refRight_{{ $refKey }}.scrollWidth + 1) + 'px',
            @endif
        }"
        @endif
    >

    @isset($right)
        <div x-ref="refRight_{{ $refKey }}" class="absolute z-10 right-0 inset-y-0 flex items-center">{{ $right }}</div>
    @else
        @if($rightIcon)
            <x-icon name="{{ $rightIcon }}" class="mr-3 text-slate-400 absolute z-10 right-0 top-1/2 -translate-y-1/2" />
        @elseif($suffix)
            <div x-ref="refRight_{{ $refKey }}" class="pr-3 text-slate-400 absolute z-10 right-0 inset-y-0 flex items-center pointer-events-none">
                {{ $suffix }}
            </div>
        @endif
    @endisset

@if($leftIcon || $rightIcon || $prefix || $suffix || isset($left) || isset($right))
</div>
@endif

@if($useHasError)     
    @if($hasError && is_string($hasError))
        <div class="text-sm text-rose-500 mt-1">{{ $hasError }}</div>
    @else
        @error($name)
            <div class="text-sm text-rose-500 mt-1">{{ $message }}</div>
        @enderror
    @endif
@endif