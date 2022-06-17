<div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-base-100 border-b border-b-base-content/10">
    <button x-on:click="$store.sidebar.toggleOffCanvas()" type="button" 
        class="border-r border-gray-200 px-4 text-base-content focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary md:hidden"
        :class="{'after:block after:absolute after:inset-0 after:bg-black after:bg-opacity-75 after:min-h-screen after:z-0': $store.sidebar.isModeMobile() && $store.sidebar.isOpenOffCanvas}"
    >
        <span class="sr-only">Open sidebar</span>
        <x-icon name="menu-alt-1" class="w-5 h-5" />
    </button>

    <div class="flex flex-1 items-center justify-between px-6">
        <h1 class="text-xl font-semibold">Dashboard</h1>
        <button type="button" class="btn btn-primary btn-sm">New</button>
    </div>
</div>
