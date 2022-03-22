@props(['direction' => 'col'])

<div {{ $attributes->merge(['class' => 'bg-white rounded-md border flex flex-'.$direction]) }}>
    {{{ $slot }}}
</div>