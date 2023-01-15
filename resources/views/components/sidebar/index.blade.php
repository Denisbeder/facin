<div class="flex flex-grow flex-col overflow-y-auto border-r border-gray-200 bg-white pt-5">
    <div class="flex flex-shrink-0 items-center px-6">
        <img class="h-8 w-auto" src="{{ Vite::asset('resources/assets/svg/logo.svg') }}" alt="{{ config('app.name') }}">
    </div>
    <div class="mt-5 flex flex-grow flex-col">
        <nav class="flex-1 space-y-1 px-4 pb-4">
            <x-sidebar.nav-item href="#" icon="home" label="Visão geral" active />
            <x-sidebar.nav-item href="/pages-form" icon="document" label="Páginas" />
            <x-sidebar.nav-item href="/posts-form" icon="pencil" label="Postagens" />
            <x-sidebar.nav-item href="#" icon="link" label="Posts relacionados" />
            <x-sidebar.nav-item href="/categories-form" icon="rectangle-stack" label="Categorias" />
            <x-sidebar.nav-item href="/authors-form" icon="user-circle" label="Autores" />
            <x-sidebar.nav-item href="#" icon="clock" label="Agendamentos" />
            <x-sidebar.nav-item href="#" icon="chat-bubble-left" label="Comentários" />
            <x-sidebar.nav-item href="/home-hightlights" icon="star" label="Destaques da Home" />
            <x-sidebar.nav-item href="#" icon="bars-3" label="Menus" />
            <x-sidebar.nav-item href="/" icon="users" label="Usuários" />
            <x-sidebar.nav-item href="#" icon="cube" label="Dropshipping" />
            <x-sidebar.nav-item href="#" icon="banknotes" label="Cobrança" />
        </nav>
    </div>
</div>
