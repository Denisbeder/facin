@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
    <x-topbar>
        <x-slot:title>
            Usuários
        </x-slot:title>

        <x-slot:actions>
            <a href="/user/create" class="btn btn-primary gap-2">
                <x-icon name="plus-circle" class="w-4 h-4" />
                Novo
            </a>
        </x-slot:actions>
    </x-topbar>

    <div class="p-6 md:p-10">
        <x-flex-list class="max-w-5xl mx-auto">
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
                    <div class="group flex">
                        <button class="btn btn-xs btn-ghost border rounded-r-none">Editar</button>
                        <div class="dropdown dropdown-end -ml-px">
                            <label tabindex="0" class="btn btn-xs btn-ghost border rounded-l-none">
                                <x-icon name="chevron-down" class="w-4 h-4" />
                            </label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a class="px-3 py-1">Item 1</a></li>
                                <li><a class="px-3 py-1">Item 2</a></li>
                            </ul>
                        </div>
                    </div>
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
                    <div class="group flex">
                        <button class="btn btn-xs btn-ghost border rounded-r-none">Editar</button>
                        <div class="dropdown dropdown-end -ml-px">
                            <label tabindex="0" class="btn btn-xs btn-ghost border rounded-l-none">
                                <x-icon name="chevron-down" class="w-4 h-4" />
                            </label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a class="px-3 py-1">Item 1</a></li>
                                <li><a class="px-3 py-1">Item 2</a></li>
                            </ul>
                        </div>
                    </div>
                </x-flex-list.cell>
            </x-flex-list.row>
            @endfor
        </x-flex-list>
    </div>
@endsection