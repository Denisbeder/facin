@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
    <x-topbar fixed>
        <x-slot name="title">Usuários</x-slot>
        <x-slot name="right">
            <x-button icon="plus-circle" label="New" />
        </x-slot>
    </x-topbar>

    <div class="p-6">
        <x-flex-list>
            <x-flex-list.header>
                <x-flex-list.cell>Nome</x-flex-list.cell>
                <x-flex-list.cell>E-mail</x-flex-list.cell>
                <x-flex-list.cell>Estado</x-flex-list.cell>
            </x-flex-list.header>

            @for($i = 0; $i < 20; $i++)
            <x-flex-list.row>
                <x-flex-list.cell header="Nome">
                    Denisbeder
                </x-flex-list.cell>

                <x-flex-list.cell header="E-mail">
                    denisbeder@gmail.com
                </x-flex-list.cell>

                <x-flex-list.cell header="Estado">
                    Ativado
                </x-flex-list.cell>
            </x-flex-list.row>
            @endfor
        </x-flex-list>
    </div>
@endsection