@props([
    'disabled' => false,
    'selected' => false
])

<input
    {{ $attributes->merge(['class' => 'h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6 disabled:cursor-not-allowed']) }}
    @disabled($disabled)
    @checked($selected)
    type="checkbox"
>
