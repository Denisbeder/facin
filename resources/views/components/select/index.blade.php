@props([
    'name' => null,
    'selected' => false,
    'direction' => 'right-bottom', // left-bottom, left-top, right-bottom, right-top
    'disabled' => false,
    'options'
])

@php
    array_walk($options, function ($value, $key) {
        $msg = 'Component "select" does not have a "%1$s" index defined. Define a ["%1$s" => ""] in: ['.$key.']' . json_encode($value) ;
        throw_if(!isset($value['label']), sprintf($msg, 'label'));
        throw_if(!isset($value['value']), sprintf($msg, 'value'));
    });

    $isSelected = static fn ($option, $selectedValue) => (string)$option['value'] === (string)$selectedValue;
    $selectedOptionExists = Arr::where($options, static fn ($option) => $isSelected($option, $selected));
    $selected = count($selectedOptionExists) ? $selected : @head($options)['value'];
    $selectedOptionDefault = Arr::where($options, static fn ($option) => $isSelected($option, $selected));;
    $key = 'select__' . str()->random(5);
@endphp

@if($disabled)
    <x-button color="white" rightIcon="chevron-up-down" class="cursor-default" :disabled="$disabled">
        {!! head($selectedOptionDefault)['label'] ?? '&nbsp;' !!}
    </x-button>
@elseif(empty($options))
    <x-button color="white" rightIcon="chevron-up-down" class="cursor-default">
        &nbsp
    </x-button>
@else
    <div
        id="{{ $key }}"
        x-data="{
            selected: {{ Js::from((string)$selected) }},
            isSelected(value) {
                return this.selected === value;
            }
        }"
    >
        <div
            x-menu
            class="relative"
            x-init="$watch('__isOpen', value => {
                document.querySelector(`#{{ $key }}_option_${$data.selected}`)?.classList.add('text-white', 'bg-indigo-600');
            })"
        >
            <x-select.button :$key>
                <x-select.radio :$key :$selected />
            </x-select.button>

            <x-select.options :$key/>
        </div>
    </div>
@endif

