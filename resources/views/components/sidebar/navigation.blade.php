<div class="my-4 flex flex-col justify-start flex-1 hover:overflow-y-overlay overflow-y-hidden overflow-x-hidden">
    <x-sidebar.nav class="mb-5"> 
        <x-sidebar.nav.item href="/dashboard" icon="home" title="Visão geral" label="Visão geral" :active="request()->is('dashboard')" />
    </x-sidebar.nav>

    <x-sidebar.nav.header>Conteúdo</x-sidebar.nav.header>
    <x-sidebar.nav class="mb-5">   
        <x-sidebar.nav.item href="/post" icon="pencil" title="Postagens" label="Postagens" :active="request()->is('post*')" />
        
        <x-sidebar.collapse>
            <x-sidebar.nav.item icon="document" title="Páginas" label="Páginas" triggerCollapsed />
            <x-sidebar.collapse.nav headerTitle="Páginas"> 
                <x-sidebar.collapse.nav.item icon="document-add" title="Criar página" label="Criar página" />
                <x-sidebar.collapse.nav.item icon="newspaper" title="Notícias" label="Notícias" />
                <x-sidebar.collapse.nav.item icon="photograph" title="Galeria de fotos" label="Galeria de fotos" />
                <x-sidebar.collapse.nav.item icon="video-camera" title="Vídeos" label="Vídeos" />
                <x-sidebar.collapse.nav.item icon="pencil-alt" title="Colunas" label="Colunas" />
                <x-sidebar.collapse.nav.item icon="microphone" title="Colunas" label="Podcast" />
                <x-sidebar.collapse.nav.item icon="phone" title="Contato" label="Contato" />
                <x-sidebar.collapse.nav.item icon="document-text" title="Expediente" label="Expediente" />
            </x-sidebar.collapse.nav>  
        </x-sidebar.collapse>  

        <x-sidebar.nav.item icon="speakerphone" title="Banners" label="Banners" />

        <x-sidebar.nav.item icon="chart-bar" title="Enquetes" label="Enquetes" />
    </x-sidebar.nav>

    <x-sidebar.nav.header>Gerenciamento</x-sidebar.nav.header>
    <x-sidebar.nav class="mb-5">   
        <x-sidebar.nav.item icon="chat" title="Comentários" label="Comentários" />
        <x-sidebar.nav.item icon="clock" title="Agendamentos" label="Agendamentos" />
        <x-sidebar.nav.item icon="star" title="Destaques da capa" label="Destaques da capa" />
        <x-sidebar.nav.item icon="link" title="Posts relacionados" label="Posts relacionados" />
        <x-sidebar.nav.item icon="tag" title="Categorias" label="Categorias" />
        <x-sidebar.nav.item icon="menu-alt-1" title="Menus" label="Menus" />
    </x-sidebar.nav>

    <x-sidebar.nav.header>Contas</x-sidebar.nav.header>
    <x-sidebar.nav class="mb-5">   
        <x-sidebar.nav.item href="/user" icon="lock-closed" title="Usuários do sistema" label="Usuários do sistema" />
        <x-sidebar.nav.item icon="users" title="Usuários do cliente" label="Usuários do cliente" />
    </x-sidebar.nav>

    <x-sidebar.nav.header>Ferramentas</x-sidebar.nav.header>
    <x-sidebar.nav class="mb-5">   
        <x-sidebar.nav.item icon="exclamation" title="Logs do sistema" label="Logs do sistema" />
        <x-sidebar.nav.item icon="chevron-double-right" title="Filas" label="Filas" />
    </x-sidebar.nav>
</div>