@extends('app-layout')

@section('title', 'Dashboard')

@section('content')
    <div x-data="{
            modalFilter: false,
            modalDeleteAlert: false,
        }">
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

                    <x-button color="white" x-on:click="modalFilter = true">
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

                            <x-table.body-cell class="text-right items-center flex justify-end gap-1">
                                <button class="text-indigo-600 hover:text-indigo-900">Editar<span class="sr-only">Editar</span></button>
                                <button class="text-red-600 hover:text-red-900" x-on:click="modalDeleteAlert = 11"><x-icon.trash class="w-4 h-4" /><span class="sr-only">Deletar</span></button>
                            </x-table.body-cell>
                        </x-table.body-row>
                    @endfor
                </x-slot:body>
            </x-table>
            <x-pagination />
        </div>

        <x-dialog.alert x-model="modalDeleteAlert" title="Deletar registro">
            Tem certeza de que deseja desativar sua conta?
            Todos os seus dados serão removidos permanentemente de nossos servidores para sempre.
            Essa ação não pode ser desfeita.
        </x-dialog.alert>

        <x-dialog.modal x-model="modalFilter" title="Filtro">
            <form class="flex flex-col gap-y-6" action="#" method="GET">
                <div class="flex items-center cursor-pointer">
                    <label for="start_at" class="sr-only">Data inicial</label>
                    <x-input.text leftIcon="calendar" placeholder="Data inicial" type="date" name="start_at" />
                    <span class="flex mx-3">até</span>
                    <label for="end_at" class="sr-only">Data final</label>
                    <x-input.text leftIcon="calendar" placeholder="Data final" type="date" name="end_at" />
                </div>

                <div class="flex items-center">
                    <label for="start_at" class="sr-only">Data</label>
                    <x-input.text rightIcon="calendar" placeholder="Data inicial" type="text" name="date_range" placeholder="21/12/2022 até 01/01/2023" />
                </div>

                <x-button>Filtrar</x-button>
            </form>
        </x-dialog.modal>
    </div>
@endsection
