@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
    <x-topbar fixed>
        <x-slot name="title">Usuários</x-slot>
        <x-slot name="right">
            <x-button icon="plus-circle" label="New" />
        </x-slot>
    </x-topbar>

    <div class="p-6 flex justify-center">
        <x-flex-list class="max-w-4xl">
            <x-flex-list.row asHeader>
                <x-flex-list.cell class="flex-[2]">Nome completo</x-flex-list.cell>
                <x-flex-list.cell class="flex-[2]">E-mail</x-flex-list.cell>
                <x-flex-list.cell>Estado</x-flex-list.cell>
                <x-flex-list.cell>Criado em</x-flex-list.cell>
                <x-flex-list.cell></x-flex-list.cell>
            </x-flex-list.row>

            <x-flex-list.row>
                <x-flex-list.cell class="flex-[2]">
                    <img src="https://source.unsplash.com/random/300x300/?people,1" class="rounded-full w-10 h-10 inline-block mr-2">
                    <span class="font-semibold">Denisbeder Duek Carvalho</span>
                </x-flex-list.cell>

                <x-flex-list.cell class="flex-[2]" header="E-mail">
                    denisbeder@gmail.com
                </x-flex-list.cell>

                <x-flex-list.cell header="Estado">
                    Ativado
                </x-flex-list.cell>

                <x-flex-list.cell header="Estado">
                    24/02/2022 17:20
                </x-flex-list.cell>

                <x-flex-list.cell class="md:justify-end" header="Ações">
                    <x-button-group size="2xs">
                        <x-button label="Edit" icon="edit-alt" variant="outline-light" />
                        <x-dropdown variant="outline-light">
                            <x-dropdown.item href="/" label="Delete" />
                            <x-dropdown.item href="/" label="Show" />
                        </x-dropdown.item>
                    </x-button-group>
                </x-flex-list.cell>
            </x-flex-list.row>

            @for($i = 0; $i < 20; $i++)
            <x-flex-list.row>
                <x-flex-list.cell class="flex-[2]">
                    <img src="https://source.unsplash.com/random/300x300/?people,{{ $i }}" class="rounded-full w-10 h-10 inline-block mr-2">
                    <span class="font-semibold">Denisbeder</span>
                </x-flex-list.cell>

                <x-flex-list.cell class="flex-[2]" header="E-mail">
                    denisbeder@gmail.com
                </x-flex-list.cell>

                <x-flex-list.cell header="Estado">
                    Ativado
                </x-flex-list.cell>

                <x-flex-list.cell header="Estado">
                    24/02/2022 17:20
                </x-flex-list.cell>

                <x-flex-list.cell class="md:justify-end" header="Ações">
                    <x-button-group size="2xs">
                        <x-button label="Edit" icon="edit-alt" variant="outline-light" />
                        <x-dropdown variant="outline-light">
                            <x-dropdown.item href="/" label="Delete" />
                            <x-dropdown.item href="/" label="Show" />
                        </x-dropdown.item>
                    </x-button-group>
                </x-flex-list.cell>
            </x-flex-list.row>
            @endfor
        </x-flex-list>
    </div>
@endsection