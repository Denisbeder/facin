@props(['fixed' => false])

@php
    $classList = [
        'bg-white px-6 py-3 border-b flex items-center h-16 transition-[top] duration-300', 
    ]
@endphp

<div 
    @if($fixed)
        x-data="{
            adjustTop() {
                $el.parentNode.style.paddingTop = '64px';
                $el.style.width = $el.parentNode.scrollWidth + 'px';
                $el.style.position = 'fixed';                
                $el.style.zIndex = '20';   
                $el.style.top = (window.pageYOffset > 150) ? '0px' : '-65px';
            },
            resetTop() {
                $el.parentNode.removeAttribute('style');
                $el.removeAttribute('style');
            }
        }"
        @resize.window="adjustTop()"
        @scroll.window="window.pageYOffset > 64 ? adjustTop() : resetTop()"
    @endif
    x-ref="topbar"
    {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}
>
    @isset($left)
        <div {{ $left->attributes->merge(['class' => 'mr-auto flex items-center']) }}>
            {{ $left }}
        </div>
    @endisset

    @isset($title)
        <h1 {{ $title->attributes->merge(['class' => 'font-bold text-lg']) }}>{{ $title }}</h1>
    @endisset

    @isset($right)
        <div {{ $right->attributes->merge(['class' => 'ml-auto flex items-center']) }}>
            {{ $right }}
        </div>
    @endisset
</div>