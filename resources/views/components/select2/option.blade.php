@props(['key', 'optionsRefKey', 'option'])

@php
    $optionValue = (string)$option['value'];
    $forRadio = sprintf('%s_radio_%s', $key, $optionValue);
    $optionId = sprintf('%s_option_%s', $key, $optionValue);
    $role = sprintf('%s_option', $key);
    $isDisabled = static fn ($option) => ($option['disabled'] ?? false);

    $classListOption = [
       'transition duration-300',
       'relative',
       'cursor-default',
       'select-none',
       'hover:text-white' => !$isDisabled($option),
       'hover:bg-indigo-600' => !$isDisabled($option),
       'text-gray-400 bg-gray-50' => $isDisabled($option),
    ];

    $classListOptionLabel = [
        'cursor-not-allowed' => $isDisabled($option),
        'block',
        'whitespace-nowrap',
        'py-1',
        'pl-3',
        'pr-9',
        //'truncate',
    ];
@endphp

<li
    role="{{ $role }}"
    id="{{ $optionId }}"
    @mouseover="$refs.{{ $optionsRefKey }}.childNodes.forEach((e) => e?.classList?.remove('text-white', 'bg-indigo-600'))"
    @class($classListOption)
    @if(!$isDisabled($option))
        @mouseover="$event.target.classList.add('text-white', 'bg-indigo-600')"
        @mouseout="$event.target.classList.remove('text-white', 'bg-indigo-600')"
    @endif
>
    <label
        for="{{ $forRadio }}"
        :class="{
            'font-semibold': isSelected({{ Js::from($optionValue) }}),
            'font-normal': !isSelected({{ Js::from($optionValue) }})
        }"
        @class($classListOptionLabel)
        @if(!$isDisabled($option)) @click="selected = {{ Js::from($optionValue) }};" @endif
    >
        {{ $option['label'] }}
    </label>

    <span
        class="absolute inset-y-0 right-0 flex items-center pr-4"
        :class="(!isSelected({{ Js::from($optionValue) }}) || {{ Js::from($isDisabled($option)) }}) && 'hidden'"
    >
        <x-icon.check class="h-4 w-4"/>
    </span>
</li>
