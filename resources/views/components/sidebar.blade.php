<aside class="bg-white w-64 grid grid-rows-[auto_auto_1fr_auto_auto] max-h-screen h-screen overflow-hidden">
    <div class="flex items-end p-6">
        <a href="/" class="block">
            <img src="/vendor/assets/svg/logo.svg" alt="FACIN" class="h-10">
        </a>
        <button class="ml-auto w-7 h-7 bg-slate-50 rounded-md flex items-center justify-center group hover:bg-indigo-50 transition-colors duration-500">
            <i data-feather="chevron-left" class="h-4 text-slate-400 group-hover:text-indigo-500 transition-colors duration-500"></i>
        </button>
    </div>
    
    <x-button title="Criar postagem" icon="plus" />

    <div class="flex flex-col overscroll-contain overflow-hidden hover:overflow-y-overlay px-6 my-4">
        <x-sidebar.nav-item url="/dashboard" title="Visão geral" icon="home" />

        <details open class="pt-5">
            <summary class="chevron-icon font-bold uppercase text-slate-300 hover:text-slate-400 transition-colors duration-500 text-xs pb-3 cursor-pointer" data-icon="›">CONTEÚDO</summary>
            <x-sidebar.nav-item url="/post" title="Postagem" icon="edit-2" />
            <x-sidebar.nav-item url="/page" title="Páginas" icon="file" />
            <x-sidebar.nav-item url="/banner" title="Banners" icon="flag" />
            <x-sidebar.nav-item url="/poll" title="Enquete" icon="bar-chart-2" />
        </details>

        <details open class="pt-5">
            <summary class="chevron-icon font-bold uppercase text-slate-300 hover:text-slate-400 transition-colors duration-500 text-xs pb-3 cursor-pointer" data-icon="›">GERENCIAMENTO</summary>
            <x-sidebar.nav-item url="/comment" title="Comentários" icon="message-circle" />
            <x-sidebar.nav-item url="/schedule" title="Agendamentos" icon="clock" />
            <x-sidebar.nav-item url="/hightlight" title="Destaques de capa" icon="star" />
            <x-sidebar.nav-item url="/related" title="Posts relacionados" icon="link" />
            <x-sidebar.nav-item url="/category" title="Categorias" icon="bookmark" />
            <x-sidebar.nav-item url="/author" title="Autores" icon="users" />
            <x-sidebar.nav-item url="/menu" title="Menus" icon="menu" />
        </details>

        <details class="pt-5">
            <summary class="chevron-icon font-bold uppercase text-slate-300 hover:text-slate-400 transition-colors duration-500 text-xs pb-3 cursor-pointer" data-icon="›">CONTAS</summary>
            <x-sidebar.nav-item url="/user" title="Sistema" icon="lock" />
            <x-sidebar.nav-item url="/user" title="Usuários do site" icon="user" />
        </details>

        <details class="pt-5">
            <summary class="chevron-icon font-bold uppercase text-slate-300 hover:text-slate-400 transition-colors duration-500 text-xs pb-3 cursor-pointer" data-icon="›">FERRAMENTAS</summary>
            <x-sidebar.nav-item url="/logs" title="Logs do sistema" icon="info" />
            <x-sidebar.nav-item url="/queue" title="Filas" icon="fast-forward" />        
        </details>
    </div>

    <div class="border-t py-4 px-6">
        <x-sidebar.nav-item url="/notification" title="Notificações" icon="bell" />
        <x-sidebar.nav-item url="/setting" title="Configurações" icon="settings" />
    </div>

    <a href="" class="flex items-center px-6 bg-slate-50/50 p-6 group">
        <img class="rounded-full w-9 h-9 mr-3" src="https://images.unsplash.com/photo-1542309667-2a115d1f54c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=80&h=80&q=80" alt="">
        <div class="flex-shrink flex flex-col">
            <p class="text-slate-500 text-base truncate w-28">Denisbeder Duek Carvalho</p>
            <small class="text-slate-400 text-xs">Editar sua conta</small>
        </div>
        <button class="ml-auto w-7 h-7 bg-white border border-slate-100 rounded-md flex items-center justify-center group-hover:border-slate-200 transition-colors duration-500">
            <i data-feather="more-vertical" class="h-4 text-slate-300 group-hover:text-slate-400 transition-colors duration-500"></i>
        </button>
    </a>
</aside>
