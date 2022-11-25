<div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white border-b">
    <button type="button"
            class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden"
            @click="open = true">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/bars-3-bottom-left -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"/>
        </svg>
    </button>
    <div class="flex flex-1 justify-between px-6">
        <div class="flex flex-1">
            
        </div>
        <div class="ml-4 flex items-center md:ml-6">
            <button type="button"
                    class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                </svg>
            </button>

            <!-- Profile dropdown -->
            <div x-data x-menu class="relative ml-3">
                <button x-menu:button type="button"
                        class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                </button>

                <div
                    x-menu:items
                    x-transition.origin.top.right
                    x-cloak
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                    tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a x-menu:item href="#"
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors"
                       role="menuitem" tabindex="-1"
                       id="user-menu-item-0">Your Profile</a>

                    <a x-menu:item href="#"
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors"
                       role="menuitem" tabindex="-1"
                       id="user-menu-item-1">Settings</a>

                    <a x-menu:item href="#"
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors"
                       role="menuitem" tabindex="-1"
                       id="user-menu-item-2">Sign out</a>
                </div>
            </div>
        </div>
    </div>
</div>
