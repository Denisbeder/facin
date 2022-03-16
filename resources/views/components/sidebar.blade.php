<div class="bg-white w-64 grid max-h-screen h-screen overflow-hidden">
    <div class="flex items-end p-6">
        <a href="/" class="block">
            <img src="/vendor/assets/svg/logo.svg" alt="FACIN" class="h-10">
        </a>
        <button class="ml-auto w-7 h-7 bg-slate-50 rounded-md flex items-center justify-center group hover:bg-indigo-50 transition-colors duration-500">
            <i data-feather="chevron-left" class="h-4 text-slate-400 group-hover:text-indigo-500 transition-colors duration-500"></i>
        </button>
    </div>
    
    <button class="mx-6 py-2 px-3 w-auto bg-indigo-500 text-white rounded-md flex items-center justify-center hover:bg-indigo-700 transition-colors duration-500">
        <i data-feather="plus" class="h-4"></i>
        Criar postagem
    </button>

    <div class="flex flex-col overflow-hidden hover:overflow-y-auto px-6 my-4">
        <x-nav-item url="/dashboard" title="Visão geral" icon="home" />

        <span class="block font-bold uppercase text-slate-300 text-xs px-4 pt-5 pb-3">CONTEÚDO</span>
        <x-nav-item url="/post" title="Postagem" icon="edit-2" />
        <x-nav-item url="/page" title="Páginas" icon="file" />
        <x-nav-item url="/banner" title="Banners" icon="flag" />
        <x-nav-item url="/poll" title="Enquete" icon="bar-chart-2" />

        <span class="block font-bold uppercase text-slate-300 text-xs px-4 pt-5 pb-3">GERENCIAMENTO</span>
        <x-nav-item url="/comment" title="Comentários" icon="message-circle" />
        <x-nav-item url="/schedule" title="Agendamentos" icon="clock" />
        <x-nav-item url="/hightlight" title="Destaques de capa" icon="star" />
        <x-nav-item url="/related" title="Posts relacionados" icon="link" />
        <x-nav-item url="/category" title="Categorias" icon="bookmark" />
        <x-nav-item url="/author" title="Autores" icon="users" />
        <x-nav-item url="/menu" title="Menus" icon="menu" />

        <span class="block font-bold uppercase text-slate-300 text-xs px-4 pt-5 pb-3">CONTAS</span>
        <x-nav-item url="/user" title="Sistema" icon="lock" />
        <x-nav-item url="/user" title="Usuários do site" icon="user" />

        <span class="block font-bold uppercase text-slate-300 text-xs px-4 pt-5 pb-3">FERRAMENTAS</span>
        <x-nav-item url="/logs" title="Logs do sistema" icon="info" />
        <x-nav-item url="/queue" title="Filas" icon="fast-forward" />        
    </div>

    <div class="border-t py-4 px-6">
        <x-nav-item url="/notification" title="Notificações" icon="bell" />
        <x-nav-item url="/setting" title="Configurações" icon="settings" />
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
</div>
