@props([
    'name' => null,
    'selected' => false,
    'direction' => 'right-bottom', // left-bottom, left-top, right-bottom, right-top
    'disabled' => false,
    'options' => [],
])

@php
    array_walk($options, static function ($value, $key) {
        $msg = 'Component "select" does not have a "%1$s" index defined. Define a ["%1$s" => ""] in: ['.$key.']' . json_encode($value) ;
        throw_if(!isset($value['label']), sprintf($msg, 'label'));
        throw_if(!isset($value['value']), sprintf($msg, 'value'));
    });

    $selectedOption = head(Arr::where($options, static function ($option) use ($selected) {
        return (string)$option['value'] === (string)$selected;
    }));

    $firstOptionLabel = $selectedOption['label'] ?? '';

    $classListButton = [
       'relative',
       'w-full',
       'cursor-default',
       'rounded-md',
       'border',
       'border-gray-200',
       'bg-white',
       'h-[38px]',
       'py-2',
       'pl-3',
       'pr-10',
       'text-left',
       'focus:border-indigo-500',
       'focus:outline-none',
       'focus:ring-1',
       'focus:ring-indigo-500 sm:text-sm',
    ];

    $classListOptions = [
        'bottom-full left-0 mb-1' => $direction === 'left-top',
        'bottom-full right-0 mb-1' => $direction === 'right-top',
        'mt-1 right-0' => $direction === 'right-bottom',
        'mt-1 left-0' => $direction === 'left-bottom',
        'absolute',
        'w-full',
        'min-w-fit',
        'z-30',
        'bg-white',
        'border',
        'border-gray-200',
        'divide-y',
        'divide-gray-100',
        'rounded-md',
        'overflow-hidden',
        'outline-none',
    ];
@endphp

@if($disabled)
    <x-button color="white" rightIcon="chevron-up-down" class="cursor-default" :disabled="$disabled">
        {{ $firstOptionLabel }}
    </x-button>
@elseif(empty($options))
    <x-button color="white" rightIcon="chevron-up-down" class="cursor-default">
        &nbsp
    </x-button>
@else
    <div x-data="{value: {{ Js::from($selectedOption) }}}">
        <div
            x-listbox
            by="value"
            name="{{ $name }}"
            x-model="value"
            class="relative w-full"
        >
            <label x-listbox:label class="sr-only">{{ $name }}</label>

            <button
                x-listbox:button
                type="button"
                @class($classListButton)
                aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
            >
                <span x-text="value ? value.label : '{{ $firstOptionLabel }}'" class="truncate text-clip"></span>
                <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                    <x-icon.chevron-up-down class="w-4 h-4" />
                </span>
            </button>

            <ul
                x-listbox:options
                @class($classListOptions)
                @if($direction === 'right-bottom') x-transition.origin.top.right @endif
                @if($direction === 'left-bottom') x-transition.origin.top.left @endif
                @if($direction === 'right-top') x-transition.origin.bottom.right @endif
                @if($direction === 'left-top') x-transition.origin.bottom.left @endif
            >
                @foreach($options as $option)
                    <li
                        x-listbox:option
                        :value="{{ Js::from($option) }}"
                        :disabled="{{ Js::from($option['disabled'] ?? false) }}"
                        :class="{
                            'bg-indigo-600 text-white': $listboxOption.isActive,
                            'text-gray-900': !$listboxOption.isActive,
                            'opacity-50 cursor-not-allowed': $listboxOption.isDisabled,
                        }"
                        class="whitespace-nowrap flex items-center cursor-default justify-between gap-2 w-full px-4 py-2 text-sm transition-colors duration-300"
                    >
                        <span>{{ $option['label'] }}</span>

                        <x-icon.check x-show="$listboxOption.isSelected" class="h-4 w-4"/>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif