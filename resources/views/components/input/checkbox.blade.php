@props([
    'disabled' => false,
    'selected' => false
])

<input @disabled($disabled) @checked($selected) type="checkbox" {{ $attributes->merge(['class' => 'absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6 disabled:cursor-not-allowed']) }}>
