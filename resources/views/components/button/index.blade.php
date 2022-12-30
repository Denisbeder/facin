@props([
    'disabled' => false,
    'size' => 'md',
    'color' => 'primary',
    'leftIcon' => false,
    'rightIcon' => false,
    'rounded' => true,
])

@php
    $tag = $attributes->has('href') ? 'a' : 'button';

    $classBase = [
        'cursor-pointer',
        'transition-color duration-300',
        'whitespace-nowrap',
        'inline-flex',
        'justify-evenly',
        'items-center',
        'font-medium',
        'text-center',
        'focus:ring-indigo-500',
        'disabled:cursor-not-allowed disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500',
    ];

    $classStyle = [
        'rounded-md' => $rounded,
        'border',
        'focus:outline-none',
        'focus:ring-2',
        'focus:ring-offset-2',
    ];

    $classSize = [
        'px-2.5 py-1.5 text-xs' => $size === 'xs', // xs
        'px-3 py-2 text-sm leading-4' => $size === 'sm', // sm
        'px-4 py-2 text-sm' => $size === 'md', // md
        'px-4 py-2 text-base' => $size === 'lg', // lg
        'px-6 py-3 text-base' => $size === 'xl', // xl
    ];

    $classLeftIcon = [
        'h-3 w-3 shrink-0' => in_array($size, ['xs', 'sm']), // xs | sm
        'h-4 w-4 shrink-0' => $size === 'md', // md
        'h-5 w-5 shrink-0' => in_array($size, ['lg', 'xl']), // lg | xl

        '-ml-0.5 mr-2' => in_array($size, ['xs', 'sm']) && $slot->isNotEmpty(), // xs | sm
        '-ml-1 mr-2' => $size === 'md' && $slot->isNotEmpty(), // md
        '-ml-1 mr-3' => in_array($size, ['lg', 'xl']) && $slot->isNotEmpty(), // lg | xl
    ];

    $classRightIcon = [
        'h-3 w-3 shrink-0' => in_array($size, ['xs', 'sm']), // xs | sm
        'h-4 w-4 min-h-max shrink-0' => $size === 'md', // md
        'h-5 w-5 shrink-0' => in_array($size, ['lg', 'xl']), // lg | xl

        '-mr-0.5 ml-2' => in_array($size, ['xs', 'sm']) && $slot->isNotEmpty(), // xs | sm
        '-mr-1 ml-2' => $size === 'md' && $slot->isNotEmpty(), // md
        '-mr-1 ml-3' => in_array($size, ['lg', 'xl']) && $slot->isNotEmpty(), // lg | xl
    ];

    $classColor = [
        'text-white border-transparent bg-indigo-600 hover:bg-indigo-700' => $color === 'primary', // Primary Indigo
        'text-indigo-700 border-transparent bg-indigo-100 hover:bg-indigo-200' => $color === 'secondary', // Secondary Indigo
        'text-gray-700 border-gray-200 bg-white hover:bg-gray-50' => $color === 'white', // White
        'text-white border-transparent bg-red-600 hover:bg-red-700' => $color === 'danger', // Danger
        'text-white border-transparent bg-yellow-600 hover:bg-yellow-700' => $color === 'warning', // Warning
        'text-white border-transparent bg-green-600 hover:bg-green-700' => $color === 'success', // Success
        'text-white border-transparent bg-blue-600 hover:bg-blue-700' => $color === 'info', // Info
    ];

    $classList = [
        ...$classBase,
        ...$classStyle,
        ...$classSize,
        ...$classColor,
    ];
@endphp

<{{ $tag }} @disabled($disabled) {{ $attributes->class($classList) }}>
    @if($leftIcon)
        <x-dynamic-component component="icon.{{ $leftIcon }}" @class($classLeftIcon) />
    @endif

    {{ $slot }}

    @if($rightIcon)
        <x-dynamic-component component="icon.{{ $rightIcon }}" @class($classRightIcon) />
    @endif
</{{ $tag }}>
