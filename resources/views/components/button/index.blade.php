@props([
    'size' => 'md',
    'color' => 'primary',
    'leftIcon' => null,
    'rightIcon' => null,
    'roundedNone' => false,
])

@php
    $tag = $attributes->has('href') ? 'a' : 'button';

    $baseList = [
        'inline-flex',
        'items-center',
        'border',
        'font-medium',
        'shadow-sm',
        'focus:outline-none',
        'focus:ring-2',
        'disabled:opacity-75 disabled:cursor-not-allowed',
        'transition-colors duration-300',
    ];

    $sizesList = [
        'button' => [
            'xs' => 'px-2.5 py-1.5 text-xs', // 30px
            'sm' => 'px-3 py-2 text-sm leading-4', // 34px
            'md' => 'px-4 py-2 text-sm', // 38px
            'lg' => 'px-4 py-2 text-base', // 42px
            'xl' => 'px-6 py-3 text-base', // 50px
        ],
        'icon' => [
            'xs' => 'h-4 w-4',
            'sm' => 'h-5 w-5',
            'md' => 'h-5 w-5',
            'lg' => 'h-5 w-5',
            'xl' => 'h-5 w-5',
        ],
    ];

    $roundedList = [
        'xs' => ['rounded' => !$roundedNone],
        'sm' => ['rounded-md' => !$roundedNone],
        'md' => ['rounded-md' => !$roundedNone],
        'lg' => ['rounded-md' => !$roundedNone],
        'xl' => ['rounded-md' => !$roundedNone],
    ];

    $colorsList = [
        'primary' => 'border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-300 active:bg-indigo-600',
        'secondary' => 'border-transparent text-indigo-600 bg-indigo-100 hover:bg-indigo-200 focus:ring-indigo-300 active:bg-indigo-300/70',
        'white' => 'border-slate-200 text-slate-600 bg-white hover:bg-slate-50 focus:ring-slate-300 active:bg-slate-200/30',
    ];
@endphp

<{{ $tag }} {{ $attributes->class([...$baseList, ...$roundedList[$size], $sizesList['button'][$size], $colorsList[$color]]) }}>
    @if($leftIcon)
        <x-icon name="{{ $leftIcon }}" {{ $attributes->class([$sizesList['icon'][$size], 'mr-3']) }} />
    @endif

    {{ $slot }}

    @if($rightIcon)
        <x-icon name="{{ $rightIcon }}" {{ $attributes->class([$sizesList['icon'][$size], 'ml-3']) }} />
    @endif
</{{ $tag }}>
