@extends('app-layout')

@section('title', 'Dashboard')

@section('content')
    <div class="px-4 sm:px-6">
        <x-page-heading title="Usuários">
            <x-slot:actions>
                <x-dropdown label="Ações">
                    <x-slot:items>
                        <x-dropdown.item href="#">Deletar</x-dropdown.item>
                        <x-dropdown.item href="#">Ativar</x-dropdown.item>
                        <x-dropdown.item href="#">Desativar</x-dropdown.item>
                    </x-slot:items>
                </x-dropdown>

                <x-button color="white">
                    <x-icon.funnel class="w-4 h-4" />
                </x-button>

                <form class="flex w-full md:ml-0" action="#" method="GET">
                    <label for="search-field" class="sr-only">Buscar</label>
                    <x-input.text rightIcon="magnifying-glass" id="search-field" placeholder="Buscar" type="search" name="search" />
                </form>
                <x-button href="#" leftIcon="plus" rightIcon="plus">Novo</x-button>
            </x-slot:actions>
        </x-page-heading>

        <x-table>
            <x-slot:head>
                <x-table.head-checkbox-cell />

                <x-table.head-cell ordeable>
                    NOME
                </x-table.head-cell>

                <x-table.head-cell ordeable direction="asc">
                    TÍTULO
                </x-table.head-cell>

                <x-table.head-cell ordeable>
                    E-MAIL
                </x-table.head-cell>

                <x-table.head-cell ordeable>
                    FUNÇÃO
                </x-table.head-cell>

                <x-table.head-cell />
            </x-slot:head>

            <x-slot:body>
                @for($i = 0; $i < 15; $i++)
                    <x-table.body-row :selected="in_array($i, [3,4,7])">
                        <x-table.body-checkbox-cell :selected="in_array($i, [3,4,7])" />

                        <x-table.body-cell class="font-semibold text-gray-900">
                            Lindsay Walton
                        </x-table.body-cell>

                        <x-table.body-cell>
                            Front-end Developer
                        </x-table.body-cell>

                        <x-table.body-cell>
                            email@email.com
                        </x-table.body-cell>

                        <x-table.body-cell>
                            Membro
                        </x-table.body-cell>

                        <x-table.body-cell class="text-right">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                        </x-table.body-cell>
                    </x-table.body-row>
                @endfor
            </x-slot:body>
        </x-table>
        <x-pagination />
    </div>

    {{--<x-dialog.alert title="Deletar registro">
        Tem certeza de que deseja desativar sua conta?
        Todos os seus dados serão removidos permanentemente de nossos servidores para sempre.
        Essa ação não pode ser desfeita.
    </x-dialog.alert>--}}

    <x-dialog.modal title="Criar registro">
        Criar
    </x-dialog.modal>
@endsection
