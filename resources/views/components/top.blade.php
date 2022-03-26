@props(['fixed' => false])

@php
    $classList = [
        'bg-white px-6 py-3 border-b flex items-center h-16 transition duration-300',
        'fixed top-0 z-20' => $fixed
    ]
@endphp

<div 
    @if($fixed)
        x-data="{
            adjustTop() {
                $el.parentNode.style.paddingTop = '64px';
                $el.style.width = $el.parentNode.scrollWidth + 'px';
            }
        }"
        x-init="adjustTop()"
        @resize.window="adjustTop()"
    @endif
    {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}
>
    @isset($left)
        <div {{ $left->attributes->merge(['class' => 'mr-auto flex items-center']) }}>
            {{ $left }}
        </div>
    @endisset

    @isset($title)
        <h3 {{ $title->attributes->merge(['class' => 'font-bold']) }}>{{ $title }}</h3>
    @endisset

    @isset($right)
        <div {{ $right->attributes->merge(['class' => 'ml-auto flex items-center']) }}>
            {{ $right }}
        </div>
    @endisset
</div>