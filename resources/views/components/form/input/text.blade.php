@props([
    'name' => null, 
    'type' => 'text', 
    'leftIcon' => false, 
    'rightIcon' => false,
    'suffix' => false,
    'prefix' => false,
])


@php
    $classList = [
        'block',
        'w-full',
        'rounded-md',
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
    ];
@endphp

@if($leftIcon || $rightIcon || $prefix || $suffix)
<div @if($prefix || $suffix) x-data @endif class="relative w-full flex">
@endif

    @if($leftIcon)
        <x-icon name="{{ $leftIcon }}" class="ml-3 text-slate-400 absolute left-0 top-1/2 -translate-y-1/2" />
    @elseif($prefix)
        <div x-ref="refPrefix" class="pl-3 text-slate-400 absolute left-0 inset-y-0 flex items-center pointer-events-none">
            {{ $prefix }}
        </div>
    @endif

    <input 
        {{ $attributes->except('class') }}
        {{ $attributes->class($classList) }}
        name="{{ $name }}" 
        id="{{ $name }}"
        type="{{ $type }}"        
        @if($prefix)
        :style="'padding-left: ' + ($refs.refPrefix.scrollWidth + 1) + 'px'"
        @elseif($suffix)
        :style="'padding-right: ' + ($refs.refSuffix.scrollWidth + 1) + 'px'"
        @endif
    >

    @if($rightIcon)
        <x-icon name="{{ $rightIcon }}" class="mr-3 text-slate-400 absolute right-0 top-1/2 -translate-y-1/2" />
    @elseif($suffix)
        <div x-ref="refSuffix" class="pr-3 text-slate-400 absolute right-0 inset-y-0 flex items-center pointer-events-none">
            {{ $suffix }}
        </div>
    @endif

@if($leftIcon || $rightIcon || $prefix || $suffix)
</div>
@endif