@props(['key'])
@aware([
    'name',
    'options' => [],
    'disabled' => false,
 ])

<x-button
    x-menu:button
    color="white"
    rightIcon="chevron-up-down"
    class="cursor-default w-full"
    aria-haspopup="{{ $key }}_listbox"
    ::aria-expanded="__isOpen ? 'true' : 'false'" aria-labelledby="{{ $key }}_listbox_label"
>
    {{ $slot }}
</x-button>
