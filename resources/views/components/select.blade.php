@props([
    'name' => null,
    'selected' => false,
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
                class="h-auto w-auto border-0 text-gray-700 !bg-none !bg-transparent appearance-none hidden checked:block after:inline-block after:content-[attr(title)]"
                type="radio"
                name="{{ $name }}"
                id="{{ $key }}_{{ $option['value'] }}"
                title="{{ $option['label'] }}"
                @checked($isSelected($option))
                @disabled($isDisabled($option))>
        @endforeach
    </x-button>

    <ul x-menu:items x-transition.origin.top.right
        class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-gray-200 focus:outline-none sm:text-sm"
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
                    'py-1',
                    'pl-3',
                    'pr-9',
                    //'truncate',
                ]) for="{{ $key }}_{{ $option['value'] }}" @if(!$isDisabled($option)) @click="__close()" @endif>
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

