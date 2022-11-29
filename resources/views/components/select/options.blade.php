@props(['key'])
@aware([
    'options' => [],
    'direction' => 'right-bottom'
 ])

@php
    $optionsRefKey = sprintf('%s_options', $key);
    $role = sprintf('%s_listbox', $key);

    $classList = [
        'absolute',
        'z-30',
        'bottom-full left-0 mb-1' => $direction === 'left-top',
        'bottom-full right-0 mb-1' => $direction === 'right-top',
        'mt-1 right-0' => $direction === 'right-bottom',
        'mt-1 left-0' => $direction === 'left-bottom',
        'max-h-60',
        'w-full',
        'min-w-fit',
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
    ];
@endphp

<ul
    x-menu:items
    x-ref="{{ $optionsRefKey }}"
    tabindex="-1"
    role="{{ $role }}"
    @class($classList)
    @if($direction === 'right-bottom') x-transition.origin.top.right @endif
    @if($direction === 'left-bottom') x-transition.origin.top.left @endif
    @if($direction === 'right-top') x-transition.origin.bottom.right @endif
    @if($direction === 'left-top') x-transition.origin.bottom.left @endif
>
    @foreach($options as $option)
        <x-select.option :$key :$option :$optionsRefKey />
    @endforeach
</ul>
