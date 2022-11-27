@props([
    'label',
    'name' => null,
    'selected' => [
        'label' => null,
        'value' => null,
    ]
])

<div x-data="{ selected: {{ Js::from($selected) }} }" x-menu class="relative">

    <input name="{{ $name }}" readonly type="hidden" x-model="selected.value">

    <x-button x-menu:button color="white" rightIcon="chevron-up-down" class="cursor-default" aria-haspopup="listbox"
              aria-expanded="true" aria-labelledby="listbox-label">
        <span x-text="selected.label ?? {{ Js::from($label) }}" class="block truncate">{{ $label }}</span>
    </x-button>

    <ul x-menu:items x-transition.origin.top.right
        class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-gray-200 focus:outline-none sm:text-sm"
        tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
        {{ $items }}
    </ul>
</div>

