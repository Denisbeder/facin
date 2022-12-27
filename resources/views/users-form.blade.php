@extends('app-layout')

@section('title', 'Criar usuário')

@section('content')
    <div x-data="{modalPermissions: false}">
        <form>
            <div class="px-4 sm:px-6 max-w-2xl mx-auto">
                <x-page-heading title="Criar usuário">
                    <x-slot:actions class="justify-between">
                        <x-button href="/" color="white" leftIcon="arrow-small-left">Cancelar</x-button>
                        <x-button href="#" leftIcon="check">Salvar</x-button>
                    </x-slot:actions>
                </x-page-heading>


                <x-card class="mt-8">
                    <x-slot:body>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                            <div class="sm:col-span-2">
                                <x-label for="name">Nome</x-label>
                                <div class="mt-1 w-full">
                                    <x-input.text id="name" name="name" type="text" autocomplete="off" />
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <x-label for="email">E-mail</x-label>
                                <div class="mt-1 w-full">
                                    <x-input.text id="email" name="email" type="email" autocomplete="off" />
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <x-label for="password">Senha</x-label>
                                <div class="mt-1 w-full">
                                    <x-input.text id="password" name="password" type="password" autocomplete="off" />
                                </div>
                            </div>

                            <div class="sm:col-span-1">
                                <x-label for="password_confirmation">Confirmar senha</x-label>
                                <div class="mt-1 w-full">
                                    <x-input.text id="password_confirmation" name="password_confirmation" type="password" autocomplete="off" />
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <x-label class="flex items-center gap-3">
                                    <x-input.checkbox name="de" value="1" /> Remover acesso temporariamente
                                </x-label>
                            </div>
                        </div>
                    </x-slot:body>
                </x-card>

                <x-button type="button" color="white" class="mt-6 w-full" x-on:click="modalPermissions = true">Editar permissões do usuário</x-button>
            </div>

            <x-dialog.modal size="4xl" x-model="modalPermissions" title="Permissões">
                @php
                    $permissions = [
                        [
                            'model' => 'page.1',
                            'label' => 'Página: Notícias',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'post',
                            'label' => 'Postagens',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'page',
                            'label' => 'Páginas',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'comment',
                            'label' => 'Comentários',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'banner',
                            'label' => 'Banners',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'survey',
                            'label' => 'Enquetes',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'schedule',
                            'label' => 'Agendamentos',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'hightlight',
                            'label' => 'Destaques de capa',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'related',
                            'label' => 'Relacionados',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'category',
                            'label' => 'Categorias',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'menu',
                            'label' => 'Menus',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'users',
                            'label' => 'Usuários do sistema',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'users',
                            'label' => 'Usuários do site',
                            'actions' => [
                                ['label' => 'Listar', 'value' => 'list'],
                                ['label' => 'Criar', 'value' => 'create'],
                                ['label' => 'Editar', 'value' => 'edit'],
                                ['label' => 'Deletar', 'value' => 'delete'],
                            ]
                        ],
                        [
                            'model' => 'log',
                            'label' => 'Logs',
                            'actions' => [
                            ]
                        ],
                        [
                            'model' => 'queue',
                            'label' => 'Filas',
                            'actions' => [
                            ]
                        ],
                        [
                            'model' => 'dashboard',
                            'label' => 'Visão geral',
                            'actions' => [
                                ['label' => 'Métricas', 'value' => 'metrics'],
                            ]
                        ],
                    ];
                @endphp
                <div class="grid grid-cols-2 gap-4">
                        @foreach ($permissions as $permission)
                            <div class="form-control border rounded-box">
                                <table class="table table-zebra table-compact w-full">
                                    <thead>
                                    <tr>
                                        <th colspan="5"
                                            class="text-center bg-base-300/60">{{ $permission['label'] }}</th>
                                    </tr>
                                    <tr>
                                        <th width="10%"></th>
                                        @foreach ($permission['actions'] as $permissionAction)
                                            <th class="text-center">{{ $permissionAction['label'] }}</th>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="whitespace-nowrap">ESSE USUÁRIO</th>
                                        @foreach ($permission['actions'] as $permissionAction)
                                            <td>
                                                <label
                                                    class="flex w-full items-center justify-center cursor-pointer group">
                                                    <input
                                                        name="persissions[{{ $permission['model'] }}][owner]"
                                                        value="{{ $permissionAction['value'] }}"
                                                        type="checkbox"
                                                        class="checkbox checkbox-xs transition-colors duration-300 group-hover:checkbox-primary"/>
                                                </label>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th>OUTROS</th>
                                        @foreach ($permission['actions'] as $permissionAction)
                                            <td>
                                                @if($permissionAction['value'] !== 'create')
                                                    <label
                                                        class="flex w-full items-center justify-center cursor-pointer group">
                                                        <input
                                                            name="persissions[{{ $permission['model'] }}][others]"
                                                            value="{{ $permissionAction['value'] }}"
                                                            type="checkbox"
                                                            class="checkbox checkbox-xs transition-colors duration-300 group-hover:checkbox-primary"/>
                                                    </label>
                                                @endif
                                            </td>
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
            </x-dialog.modal>
        </form>
    </div>
@endsection
