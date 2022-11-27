@props([
    'name' => null,
    'selected' => false,
    'direction' => 'right-bottom', // left-bottom, left-top, right-bottom, right-top
    'options'
])

@php
    array_walk($options, function ($value, $key) {
        $msg = 'Component "select" does not have a "%1$s" index defined. Define a ["%1$s" => ""] in: ['.$key.']' . json_encode($value) ;
        throw_if(!isset($value['label']), sprintf($msg, 'label'));
        throw_if(!isset($value['value']), sprintf($msg, 'value'));
    });

    $key = str()->random(5);
    $isDisabled = static fn ($option) => $option['disabled'] ?? false;
    $isSelected = static fn ($option) => (string)$option['value'] === (string)$selected;
@endphp

<div x-menu class="relative">
    <x-button x-menu:button color="white" rightIcon="chevron-up-down" class="cursor-default" aria-haspopup="listbox"
              aria-expanded="true" aria-labelledby="listbox-label">
        @foreach($options as $option)
            <input
                class="h-auto w-auto border-0 text-gray-700 !bg-none !bg-transparent !focus:outline-0 !focus:ring-0 appearance-none hidden checked:block after:inline-block after:content-[attr(title)]"
                type="radio"
                name="{{ $name }}"
                id="{{ $key }}_{{ $option['value'] }}"
                title="{{ $option['label'] }}"
                @checked($isSelected($option))
                @disabled($isDisabled($option))>
        @endforeach
    </x-button>

    <ul x-menu:items
        @if($direction === 'right-bottom') x-transition.origin.top.right @endif
        @if($direction === 'left-bottom') x-transition.origin.top.left @endif
        @if($direction === 'right-top') x-transition.origin.bottom.right @endif
        @if($direction === 'left-top') x-transition.origin.bottom.left @endif

        @class([
        'absolute',
        'z-30',
        'bottom-full left-0 mb-1' => $direction === 'left-top',
        'bottom-full right-0 mb-1' => $direction === 'right-top',
        'mt-1 right-0' => $direction === 'right-bottom',
        'mt-1 left-0' => $direction === 'left-bottom',
        'max-h-60',
        'overflow-auto',
        'rounded-md',
        'bg-white',
        'py-1',
        'text-base',
        'shadow-lg',
        'ring-1',
        'ring-gray-200',
        'focus:outline-none',
        'sm:text-sm',
        ])
        tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">

        @foreach($options as $option)
            <li @class([
                   'relative',
                   'cursor-default',
                   'select-none',
                   'hover:text-white' => !$isDisabled($option),
                   'hover:bg-indigo-600' => !$isDisabled($option),
                   'text-gray-900' => !$isSelected($option) && !$isDisabled($option), // not selected
                   'text-white bg-indigo-600' => $isSelected($option) && !$isDisabled($option), // selected
                   'text-gray-400 bg-gray-50' => $isDisabled($option) // disabled
                ])
                role="option">

                <label @class([
                    'font-normal' => !$isSelected($option) && !$isDisabled($option),
                    'font-semibold' => $isSelected($option) && !$isDisabled($option),
                    'cursor-not-allowed' => $isDisabled($option),
                    'block',
                    'whitespace-nowrap',
                    'py-1',
                    'pl-3',
                    'pr-9',
                    //'truncate',
                ]) for="{{ $key }}_{{ $option['value'] }}" @click="__close()">
                    {{ $option['label'] }}
                </label>

                @if($isSelected($option) && !$isDisabled($option))
                    <span class="text-white absolute inset-y-0 right-0 flex items-center pr-4">
                        <x-icon.check class="h-4 w-4"/>
                    </span>
                @endif
            </li>
        @endforeach
    </ul>
</div>

