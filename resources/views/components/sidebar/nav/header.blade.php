<small 
    {{ $attributes->merge(['class' => 'text-indigo-300 px-4 font-bold uppercase text-xs mb-2 flex']) }}
    x-bind:class="$store.sidebar.isModeBar() && 'hidden'"
>
    {{ $slot }}
</small>