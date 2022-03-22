@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <livewire:counter />

    <x-card class="m-6">
        <x-card.header title="Title" />
        <x-card.body>
            eqweqw eqw
        </x-card.body>
        <x-card.footer-collapse title="OPEN/CLOSE">
            Footer
        </x-card.footer-collapse>
    </x-card>

    <x-card class="m-6">
        <x-card.header title="Title" />
        <x-card.body>
            <div class="grid grid-cols-4 gap-4">
                <x-button title="Criar postagem" variant="dark" loading="true" />
                <x-button title="Criar postagem" rightIcon="plus" sizeIcon="16" variant="dark" loading="true" />
                <x-button title="Criar postagem" icon="plus" variant="light" />
                <x-button title="Criar postagem" icon="plus" variant="white" />
                <x-button title="Criar postagem" icon="plus" variant="primary" loading="true" />
                <x-button title="Criar postagem" icon="plus" variant="secondary" />
                <x-button title="Criar postagem" icon="plus" variant="warning" />
                <x-button title="Criar postagem" icon="plus" variant="info" rounded="full" />
                <x-button title="Criar postagem" icon="plus" variant="success" rounded="none" />
                <x-button title="Criar postagem" icon="plus" variant="danger" rounded="xl" />
                <x-button title="Criar postagem" icon="plus" variant="link" href="/post" />
                <x-button title="Criar postagem" icon="plus" variant="outline-primary" />
                <x-button title="Criar postagem" icon="plus" variant="outline-secondary" />
                <x-button title="Criar postagem" icon="plus" variant="outline-success" />
                <x-button title="Criar postagem" icon="plus" variant="outline-danger" />
                <x-button title="Criar postagem" icon="plus" variant="outline-info" />
                <x-button title="Criar postagem" icon="plus" variant="outline-warning" />
                <x-button title="Criar postagem" icon="plus" variant="outline-dark" />
                <x-button title="Criar postagem" icon="plus" variant="outline-light" />
                <x-button title="Criar postagem" icon="plus" variant="outline-white" />
            </div>
        </x-card.body>
        <x-card.footer>
        Footer
        </x-card.footer>
    </x-card>
@endsection