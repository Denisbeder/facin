@props([
    'roundedNone' => false,
    'roundedFull' => false,
    'hasError' => false,
    'hasErrorMessage' => null,
    'hasSuccess' => false,
    'hasSuccessMessage' => null,
])

@php
$key = $attributes->get('id', $attributes->get('name', 'key_' . str()->random(5)));

$baseList = [
    'block',
    'w-full',
    'text-sm',
    'rounded-md' => !$roundedNone && !$roundedFull,
    'rounded-full' => $roundedFull && !$roundedNone,
];

$colorsList = [
    'default' => 'border-slate-200 focus:ring-indigo-500 focus:border-indigo-500',
    'error' => 'border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500',
    'success' => 'border-green-300 text-green-900 placeholder-green-300 focus:outline-none focus:ring-green-500 focus:border-green-500',
];

$color = $colorsList['default'];

if ($hasError) {
    $color = $colorsList['error'];
}

if ($hasSuccess) {
    $color = $colorsList['success'];
}
@endphp

<div class="relative">
    <input {{ $attributes->class([...$baseList, $color]) }}>

    @if($hasError || $hasSuccess)
    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
        @if($hasError)
            <x-icon name="exclamation-circle" class="w-5 h-5 text-red-500" />
        @endif

        @if($hasSuccess)
            <x-icon name="check-circle" class="w-5 h-5 text-green-500" />
        @endif
    </div>
    @endif
</div>

@if($hasError && (is_string($hasError) || !is_null($hasErrorMessage)))
    <p class="mt-2 text-sm text-red-500" id="{{ $key  }}-error">{!! $hasErrorMessage ?? $hasError !!}</p>
@endif

@if($hasSuccess && (is_string($hasSuccess) || !is_null($hasSuccessMessage)))
    <p class="mt-2 text-sm text-green-500" id="{{ $key  }}-success">{!! $hasSuccessMessage ?? $hasSuccess !!}</p>
@endif
