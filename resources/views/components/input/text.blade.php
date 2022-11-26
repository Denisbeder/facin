@props([
    'leftIcon' => false,
    'rightIcon' => false,
    'leftAddon' => false,
    'rightAddon' => false,
])

@php
    $classList = [
        'block',
        'w-full',
        'rounded-md',
        'border-gray-200',
        'focus:border-indigo-500',
        'focus:ring-indigo-500',
        'sm:text-sm',
        'pl-10' => $leftIcon,
        'pr-10' => $rightIcon,
    ];
@endphp

@if($leftIcon || $rightIcon || $leftAddon || $rightAddon)
    <div class="relative rounded-md w-full">
        @if($leftIcon || $leftAddon)
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                @if($leftIcon)
                    <x-dynamic-component component="icon.{{ $leftIcon }}" class="h-5 w-5 text-gray-400"/>
                @endif

                @if($leftAddon)
                    <span class="text-gray-500 sm:text-sm">{{ $leftAddon }}</span>
                @endif
            </div>
        @endif

        <input {{ $attributes->class($classList) }}>

        @if($rightIcon || $rightAddon)
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                @if($rightIcon)
                    <x-dynamic-component component="icon.{{ $rightIcon }}" class="h-5 w-5 text-gray-400"/>
                @endif

                @if($rightAddon)
                    <span class="text-gray-500 sm:text-sm">{{ $rightAddon }}</span>
                @endif
            </div>
        @endif
    </div>
@else
    <input {{ $attributes->class($classList) }}>
@endif
