<div 
    x-data="{
        adjustTop() {
            $el.parentNode.style.paddingTop = '64px';
            $el.style.width = $el.parentNode.scrollWidth + 'px';
        }
    }"
    x-init="adjustTop()"
    @resize.window="adjustTop()"
    class="bg-white px-6 py-3 fixed top-0 z-20 border-b flex items-center h-16 transition duration-300"
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