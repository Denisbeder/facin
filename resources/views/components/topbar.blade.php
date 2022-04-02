@props(['fixed' => false])

@php
    $classList = [
        'bg-white z-50 px-6 py-3 border-b flex items-center h-16 transition-[top] transition-[left] duration-300', 
    ]
@endphp

<div 
    @if($fixed)
        x-data="{
            isMobile() {
                return (window.outerWidth < 480) && ('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0);
            },
            adjustTop() {
                $el.parentNode.style.paddingTop = '64px';
                $el.style.width = $el.parentNode.scrollWidth + 'px';
                $el.style.position = 'fixed';                
                $el.style.zIndex = '20';   
                $el.style.left = this.isMobile() ? 0 : window.getComputedStyle($el.parentNode).marginLeft;   
                $el.style.right = '0';   
                $el.style.top = (window.pageYOffset > 150) ? '0px' : '-65px';
            },
            resetTop() {
                $el.parentNode.removeAttribute('style');
                $el.removeAttribute('style');
            }
        }"
        x-init="$watch('sidebarOpen', value => $el.style.left = value ? '255px' : '0')"
        @resize.window="adjustTop()"
        @scroll.window="window.pageYOffset > 64 ? adjustTop() : resetTop()"
    @endif
    {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}
>   
    <div>
        <button x-on:click="sidebarOpen = !sidebarOpen" class="-ml-4 mr-4 p-4 md:hidden relative">
            <x-icon name="menu" size="text-2xl" />
            <div class="w-screen h-screen bg-black/50 backdrop-blur-sm absolute z-10 inset-0 -ml-4 invisible opacity-0 transition-opacity duration-300" :class="{'!visible !opacity-100': sidebarOpen}"></div>
        </button>

        @isset($left)
            <div {{ $left->attributes->merge(['class' => 'mr-auto flex items-center']) }}>
                {{ $left }}
            </div>
        @endisset
    </div>

    @isset($title)
        <h1 {{ $title->attributes->merge(['class' => 'font-bold text-lg']) }}>{{ $title }}</h1>
    @endisset

    @isset($right)
        <div {{ $right->attributes->merge(['class' => 'ml-auto flex items-center']) }}>
            {{ $right }}
        </div>
    @endisset
</div>