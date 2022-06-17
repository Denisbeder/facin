<div class="mt-auto flex border-t border-indigo-800 p-4">
    <a href="#" class="flex-shrink-0 w-full group block">
    <div class="flex items-center">
        <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <div class="overflow-hidden whitespace-nowrap transition-[color,background-color,opacity,width,height,margin-left] duration-100" x-bind:class="{'w-0 h-0 ml-0 opacity-0': $store.sidebar.isModeBar(), 'w-full h-auto ml-3 opacity-100': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}">
            <p class="text-sm font-medium text-white">Tom Cook</p>
            <p class="text-xs font-medium text-indigo-200 group-hover:text-white mb-0">View profile</p>
        </div>
    </div>
    </a>
</div>