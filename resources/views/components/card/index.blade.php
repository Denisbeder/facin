@props(['direction' => 'col'])

<div {{ $attributes->merge(['class' => 'overflow-hidden bg-white rounded-md border flex flex-'.$direction]) }}>
    {{{ $slot }}}
</div>