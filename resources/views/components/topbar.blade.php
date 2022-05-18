<div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
    <button @click="toggleOffCanvas()" type="button" 
        class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden"
        :class="{'after:block after:absolute after:inset-0 after:bg-black after:bg-opacity-75 after:min-h-screen after:z-0': isModeMobile() && isOpenOffCanvas}"
    >
        <span class="sr-only">Open sidebar</span>
        <i class="bx bx-menu w-5 h-5 flex items-center justify-center"></i>
    </button>

    <div class="flex flex-1 items-center justify-between px-6">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
        <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">New</button>
    </div>
</div>
