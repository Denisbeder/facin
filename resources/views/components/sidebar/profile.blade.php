<div tabindex="0" class="mt-auto flex border-t p-4 dropdown dropdown-right dropdown-end z-10">
    <div class="flex-shrink-0 w-full group flex items-center cursor-pointer relative">
        <img class="inline-block h-9 w-9 rounded-full" src="https://s.gravatar.com/avatar/47ef98403ff5b2f1f6e80c1b109416a6?s=80" alt="">
        <div class="overflow-hidden whitespace-nowrap" x-bind:class="{'w-0 h-0 ml-0 opacity-0': $store.sidebar.isModeBar(), 'w-full h-auto ml-3 opacity-100': $store.sidebar.isModeFull() || $store.sidebar.isModeMobile()}">
            <p class="text-sm font-medium text-base-content truncate md:mr-4">Denisbeder Duek Carvalho</p>
            <p class="text-xs font-medium text-base-content/50 group-hover:text-base-content/70 mb-0 transition-colors duration-300">Ver mais opções</p>
        </div>
        @php $hasNotifications = true; @endphp
        @if($hasNotifications)
        <div class="badge badge-xs badge-error absolute top-1 left-8 -translate-y-1/2 -translate-x-1/2" x-bind:class="!$store.sidebar.isModeBar() && 'hidden'"></div>
        <div class="relative" x-bind:class="$store.sidebar.isModeBar() && 'hidden'">
            <div class="badge badge-xs badge-error absolute -top-1 -right-0.5"></div>
            <x-icon name="bell" class="w-5 h-5 text-base-content/50 group-hover:text-base-content/70 transition-colors duration-300" />
        </div>
        @else
        <x-icon name="selector" class="w-5 h-5 text-base-content/50 group-hover:text-base-content/70 transition-colors duration-300" x-bind:class="$store.sidebar.isModeBar() && 'hidden'"/>
        @endif
    </div>

    <div tabindex="0" class="dropdown-content !transition-none shadow-xl bg-base-100 w-64 ml-px min-h-screen overflow-y-overlay">
        @if($hasNotifications)
        <h6 class="font-bold text-xl mx-4 mt-5 mb-2 flex items-center justify-between">
            Notificações
            <button class="btn btn-xs btn-circle btn-ghost">
                <x-icon name="dots-horizontal" class="w-5 h-5" />
            </button>
        </h6>
        <ul role="list" class="divide-y divide-base-content/5">
            @foreach ([1,2,3,4,5] as $item)                
            <li class="px-4 py-2">
                <a href="#" class="flex space-x-3">
                    <div class="flex-1 space-y-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium">Lindsay Walton</h3>
                            <p class="text-sm text-gray-500">1h</p>
                        </div>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur...</p>
                    </div>
                    <img class="h-6 w-6 rounded-full" src="https://picsum.photos/id/{{ $item }}/100/100" alt="">
                </a>
            </li>
            @endforeach
        </ul>
        @endif

        <h6 class="font-bold text-md mx-4 mt-5 mb-2 flex items-center">
            Menu
        </h6>
        <ul class="menu menu-compact">
            <li><a>Ajuda</a></li>
            <li><a>Configurações do sistema</a></li>
            <li><a>Minha conta</a></li>
            <li><a>Sair</a></li>
        </ul>
    </div>
</div>
