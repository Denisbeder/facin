@props([
    'headerTitle'
])

<div 
    x-on:click.outside="expanded = $store.sidebar.isModeBar() ? false : expanded" 
    x-show="expanded" 
    x-collapse 
    class="px-4 my-4" 
    x-bind:class="{
        'fixed left-[68px] z-20 inset-y-0 w-64 mt-0 bg-base-100 shadow-xl min-h-screen': $store.sidebar.isModeBar(), 
        'text-white border-l border-base-content/10 ml-4 !pl-6': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()
    }"
>   
    @if($headerTitle)
    <h6 
        class="font-bold text-xl my-5 flex" 
        x-bind:class="{
            'hidden': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()
        }"
    >
        {{ $headerTitle }}
    </h6>
    @endif

    <nav x-bind:class="{
        'space-y-1': $store.sidebar.isModeBar(), 
        'space-y-2': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()
        }"
    >
        {{ $slot }}
    </nav>
</div>