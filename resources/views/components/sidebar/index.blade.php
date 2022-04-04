@php
    $classList = [
        'grid grid-rows-[auto_auto_1fr_auto_auto] border-r fixed z-30 bg-white',
        'max-h-screen h-screen',
        'w-64',
        'transition-transform duration-300',
    ];
@endphp

<aside {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}>
    <a href="/" class="flex items-end p-6">
        <img src="/vendor/assets/svg/logo.svg" alt="FACIN" class="h-10">
    </a>
    
    <x-button class="mx-6">
        <x-icon name="plus" class="mr-2" /> Criar postagem
    </x-button>

    <div class="flex flex-col overscroll-contain overflow-hidden hover:overflow-y-overlay px-6 my-4">
        <x-sidebar.nav-item url="/dashboard" label="Visão geral" icon="home" />

        <x-collapse open leftIcon class="mt-4" label="CONTEÚDO" triggerClass="bg-white gap-4 hover:bg-transparent px-0 pt-0 pb-3 text-xs font-bold uppercase text-slate-400 hover:text-slate-500 transition-colors duration-300">
            <x-sidebar.nav-item url="/post" label="Postagens" icon="edit-alt"/>
            <x-sidebar.nav-item url="/page" label="Páginas" icon="file-blank" />
            <x-sidebar.nav-item url="/banner" label="Banners" icon="flag" />
            <x-sidebar.nav-item url="/poll" label="Enquete" icon="bar-chart-alt-2" />
        </x-collapse>

        <x-collapse open leftIcon class="mt-4" label="GERENCIAMENTO" triggerClass="bg-transparent hover:bg-transparent px-0 pt-0 pb-3 text-xs font-bold uppercase text-slate-400 hover:text-slate-500 transition-colors duration-300">
            <x-sidebar.nav-item url="/comment" label="Comentários" icon="message-rounded" />
            <x-sidebar.nav-item url="/schedule" label="Agendamentos" icon="time-five" />
            <x-sidebar.nav-item url="/hightlight" label="Destaques de capa" icon="star" />
            <x-sidebar.nav-item url="/related" label="Posts relacionados" icon="link" />
            <x-sidebar.nav-item url="/category" label="Categorias" icon="tag-alt" />
            <x-sidebar.nav-item url="/author" label="Autores" icon="group" />
            <x-sidebar.nav-item url="/menu" label="Menus" icon="menu" />
        </x-collapse>

        <x-collapse leftIcon class="mt-4" label="CONTAS" triggerClass="bg-transparent hover:bg-transparent px-0 pt-0 pb-3 text-xs font-bold uppercase text-slate-400 hover:text-slate-500 transition-colors duration-300">
            <x-sidebar.nav-item url="/user" label="Sistema" icon="lock" />
            <x-sidebar.nav-item url="/customer-user" label="Usuários do site" icon="user" />
        </x-collapse>

        <x-collapse leftIcon class="mt-4" label="FERRAMENTAS" triggerClass="bg-transparent hover:bg-transparent px-0 pt-0 pb-3 text-xs font-bold uppercase text-slate-400 hover:text-slate-500 transition-colors duration-300">
            <x-sidebar.nav-item url="/logs" label="Logs do sistema" icon="info-circle" />
            <x-sidebar.nav-item url="/queue" label="Filas" icon="chevrons-right" />        
        </x-collapse>
    </div>

    <div class="border-t py-4 px-6">
        <x-sidebar.nav-item url="/notification" label="Notificações" icon="bell" />
        <x-sidebar.nav-item url="/setting" label="Configurações" icon="cog" />
    </div>

    <a href="/logout" class="flex items-center bg-slate-50/50 p-6 group">
        <img class="rounded-full w-[42px] h-[42px] mr-3" src="https://images.unsplash.com/photo-1542309667-2a115d1f54c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=80&h=80&q=80" alt="">
        <div class="flex flex-1 items-center">
            <div class="flex-shrink flex flex-col">
                <p class="text-slate-500 text-base truncate w-28">Denisbeder Duek Carvalho</p>
                <small class="text-slate-400 text-xs">Editar sua conta</small>
            </div>
            <button class="ml-auto w-5 h-5 bg-white border border-slate-100 rounded-full flex items-center justify-center group-hover:border-slate-200 transition-colors duration-300">
                <x-icon name="dots-vertical-rounded" class="h-4 text-slate-300 group-hover:text-slate-400 transition-colors duration-300" />
            </button>
        </div>
    </a>
</aside>
