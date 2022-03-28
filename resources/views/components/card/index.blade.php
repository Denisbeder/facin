@props(['direction' => 'col', 'rounded' => 'lg'])

<div {{ $attributes->merge(['class' => 'bg-white rounded-'.$rounded.' border flex flex-'.$direction]) }}>
    {{{ $slot }}}
</div>