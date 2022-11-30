@props(['key', 'selected'])
@aware([
    'name',
    'options' => [],
 ])

@php
    $isDisabled = static fn ($option) => ($option['disabled'] ?? false);
    $isSelected = static fn ($option, $selectedValue) => (string)$option['value'] === (string)$selectedValue;

    $classList = [
        'h-auto',
        'w-auto',
        'border-0',
        'text-gray-700',
        '!bg-none',
        '!bg-transparent',
        '!focus:outline-0',
        '!focus:ring-0',
        'appearance-none',
        'hidden',
        'checked:block',
        'after:inline-block',
        'after:content-[attr(title)]',
    ];
@endphp

@foreach($options as $option)
    <input
        autocomplete="off"
        type="radio"
        name="{{ $name }}"
        id="{{ $key }}_radio_{{ $option['value'] }}"
        title="{{ $option['label'] }}"
        style="box-shadow: none; outline: none"
        @class($classList)
        @checked($isSelected($option, $selected))
        @disabled($isDisabled($option)) />
@endforeach
