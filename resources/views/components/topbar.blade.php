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
        <div class="flex flex-1 items-center">
            <a href="#" class="group block flex-shrink-0">
                <div class="flex items-center">
                    <x-avatar class="inline-block h-10 w-10 rounded-full"
                              src="https://images.unsplash.com/photo-1599305445671-ac291c95aaa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=256&h=256&q=80"
                              alt=""/>
                    <div class="ml-3 hidden md:block">
                        {{--<x-badge color="green" class="group-hover:bg-green-300">Ativo</x-badge>--}}
                        <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Volkswagen</p>
                        <span class="text-xs font-medium text-gray-500 group-hover:text-indigo-500 flex items-center gap-1">
                            www.volkswagen.com.br
                            <x-icon.arrow-top-right-on-square class="w-3 h-3" />
                        </span>
                    </div>
                </div>
            </a>
        </div>
        <div class="ml-4 flex items-center md:ml-6">
            <button type="button"
                    class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span class="sr-only">Ver notificações</span>
                <x-icon.bell class="h-5 w-5"  />
            </button>

            <!-- Profile dropdown -->
            <div x-data x-menu class="relative ml-3">
                <x-dropdown>
                    <button type="button"
                            class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">Abrir menu do usuário</span>
                        <x-avatar
                            class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" />
                    </button>

                    <x-slot:items>
                        <x-dropdown.item href="#">Sue perfil</x-dropdown.item>
                        <x-dropdown.item href="#">Configurações</x-dropdown.item>
                        <x-dropdown.item href="#">Sair</x-dropdown.item>
                    </x-slot:items>
                </x-dropdown>
            </div>
        </div>
    </div>
</div>
