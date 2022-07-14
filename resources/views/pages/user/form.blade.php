@extends('layouts.app')

@section('title', 'Users')

@section('content')
<x-topbar>
    <x-slot:title>
        Criar usuário
    </x-slot:title>

    <x-slot:actions>
        <button class="btn btn-ghost border gap-2">
            <x-icon name="arrow-left" class="w-4 h-4" />
            <span class="hidden md:inline-flex">Cancelar</span>
        </button>
        <button class="btn btn-primary gap-2">
            <x-icon name="check-circle" class="w-4 h-4" />
            Salvar
        </button>
    </x-slot:actions>
</x-topbar>

<div class="p-6">
    <div class="flex flex-col gap-10 md:w-7/12 mx-auto">    
        <x-card class="w-full">
            <x-card.body>
                <h2 class="card-title mb-2">Credenciais de acesso</h2>
                <small class="flex mb-5">Dados de para acessos futuros ao sistema e recuperação de senha.</small>

                <div class="form-control mb-4">
                    <label class="label label-text" for="email">E-mail</label>
                    <input type="email" class="input input-bordered" id="email" />
                </div>

                <div class="form-control gap-4 flex flex-row">
                    <div class="form-control flex-1">
                        <label class="label label-text" for="password">Senha</label>
                        <input type="password" class="input input-bordered" id="password" />
                    </div>

                    <div class="form-control flex-1">
                        <label class="label label-text" for="password_confirmation">Confirmar senha</label>
                        <input type="password" class="input input-bordered" id="password_confirmation" />
                    </div>
                </div>

                <div class="mt-5">
                    <div class="card-title text-base mb-4">Permissões</div>
                    <div class="flex gap-4">
                        <div class="flex flex-col w-1/2 p-4 border rounded-box">
                            <div class="card-title text-base mb-4">
                                Gerenciar todos conteúdos
                                <div class="tooltip" data-tip="Essas permissões definem que esse usuário pederá manusear tudo que existir cadastrado baseados nas permissões selecionadas abaixo.">
                                    <x-icon name="question-mark-circle" class="w-4 h-4" />
                                </div>
                            </div>
                            @php
                                $permissions = [
                                    [
                                        'model' => 'page.1', 
                                        'label' => 'Página: Notícias', 
                                        'actions' => [
                                            ['label' => 'Listar', 'value' => 'list'],
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
                                            ['label' => 'Criar', 'value' => 'create'],
                                            ['label' => 'Editar', 'value' => 'edit'],
                                            ['label' => 'Deletar', 'value' => 'delete'],
                                        ]
                                    ],
                                    [
                                        'model' => 'log', 
                                        'label' => 'Logs', 
                                        'actions' => [
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
                                        ]
                                    ],
                                    [
                                        'model' => 'queue', 
                                        'label' => 'Filas', 
                                        'actions' => [
                                            ['label' => 'Visualizar detalhes', 'value' => 'show'],
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
                            <div class="space-y-4">
                                @foreach ($permissions as $permission)
                                <div class="form-control">
                                    <label class="label label-text font-semibold">{{ $permission['label'] }}</label> 
                                    <div class="flex flex-col gap-1">
                                        @foreach ($permission['actions'] as $permissionAction)
                                        <label class="cursor-pointer flex items-start">
                                            <input name="persissions[{{ $permission['model'] }}]" value="{{ $permissionAction['value'] }}" type="checkbox" class="checkbox checkbox-xs checkbox-primary mt-0.5" />
                                            <span class="label-text ml-3 mr-auto">{{ $permissionAction['label'] }}</span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>                    
                                @endforeach
                            </div>
                        </div>
                        <div class="flex flex-col w-1/2 p-4 border rounded-box">
                            <div class="card-title text-base mb-4">
                                Gerenciar próprio conteúdo
                                <div class="tooltip" data-tip="Essas permissões definem que esse usuário somente poderá manusear o conteúdo gerado ele mesmo baseados nas permissões selecionadas abaixo.">
                                    <x-icon name="question-mark-circle" class="w-4 h-4" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card.body>
        </x-card>

        <x-card class="w-full">
            <x-card.body>
                <h2 class="card-title mb-2">Perfil</h2>
                <small class="flex mb-5">Essas informações serão exibidas publicamente, portanto, tenha cuidado com o que você compartilha.</small>

                <div class="form-control mb-4">
                    <label for="photo" class="block label label-text">Foto</label>
                    <div class="mt-1 flex items-center">
                        <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        <x-avatar class="h-full w-full text-gray-300" />
                        </span>
                        <button type="button" class="btn btn-sm btn-ghost border ml-4">Mudar</button>
                        <p class="text-xs flex-initial text-base-content/30 select-none ml-2">PNG, JPG, GIF até 2MB</p>
                    </div>
                </div>

                <div class="form-control mb-4">
                    <label class="label label-text" for="email">E-mail</label>
                    <input type="email" class="input input-bordered" id="email" />
                </div>

                <div class="form-control mb-4">
                    <label class="label label-text" for="about">Sobre</label>
                    <textarea class="textarea input-bordered" id="about"></textarea>
                </div>

                <div class="form-control">
                    <label class="label label-text" for="social[facebook]">Redes sociais</label>

                    @php
                        $social = [
                            ['icon' => 'whatsapp', 'color' => 'text-green-500', 'label' => 'Whatsapp'],
                            ['icon' => 'telegram', 'color' => 'text-sky-500', 'label' => 'Telegram'],
                            ['icon' => 'instagram', 'color' => 'text-fuchsia-500', 'label' => 'Instagram'],
                            ['icon' => 'tiktok', 'color' => 'text-slate-600', 'label' => 'TikTok'],
                            ['icon' => 'facebook', 'color' => 'text-blue-500', 'label' => 'Facebook'],
                            ['icon' => 'twitter', 'color' => 'text-sky-400', 'label' => 'Twitter'],
                            ['icon' => 'youtube', 'color' => 'text-red-500', 'label' => 'Youtube'],
                        ];
                    @endphp
                    @foreach ($social as $item)
                        <div class="form-control mb-2">
                            <label class="input-group input-group-sm">
                                <span class="px-2.5">
                                    <x-dynamic-component component="icon.{{ $item['icon'] }}" class="w-5 h-5 {{ $item['color'] }}" />
                                </span>
                                <input type="url" name="social[{{ strtolower($item['label']) }}]" placeholder="Cole uma URL do {{ $item['label'] }}" class="input input-bordered input-sm flex-1" />
                            </label>
                        </div> 
                    @endforeach               
                </div>
            </x-card.body>
        </x-card>

        <x-card class="w-full">
            <x-card.body>
                <h2 class="card-title mb-2">Informações pessoais</h2>
                <small class="flex mb-5">Use um endereço permanente onde possa receber e-mails.</small>

                <div class="form-control mb-4 gap-4 flex flex-row">
                    <div class="form-control flex-1">
                        <label class="label label-text" for="first_name">Nome</label>
                        <input type="text" class="input input-bordered" id="first_name" />
                    </div>

                    <div class="form-control flex-1">
                        <label class="label label-text" for="last_name">Sobrenome</label>
                        <input type="text" class="input input-bordered" id="last_name" />
                    </div>
                </div>

                <div class="form-control mb-4">
                    <label class="label label-text" for="email">E-mail</label>
                    <input type="email" class="input input-bordered" id="email" />
                </div>

                <div class="form-control mb-4 gap-4 flex flex-row">
                    <div class="form-control flex-1">
                        <label class="label label-text" for="zipcode">CEP</label>
                        <input type="text" class="input input-bordered" id="zipcode" />
                    </div>

                    <div class="form-control flex-1">
                        <label class="label label-text" for="state_id">Estado</label>
                        <input type="text" class="input input-bordered" id="state_id" />
                    </div>
                    
                    <div class="form-control flex-1">
                        <label class="label label-text" for="city_id">Cidade</label>
                        <input type="text" class="input input-bordered" id="city_id" />
                    </div>                    
                </div>

                <div class="form-control gap-4 flex flex-row">
                    <div class="form-control flex-1">
                        <label class="label label-text" for="street">Rua</label>
                        <input type="text" class="input input-bordered" id="street" />
                    </div>

                    <div class="form-control flex-initial">
                        <label class="label label-text" for="number">Número</label>
                        <input type="text" class="input input-bordered" id="number" />
                    </div>

                    <div class="form-control flex-1">
                        <label class="label label-text" for="district">Bairro</label>
                        <input type="text" class="input input-bordered" id="district" />
                    </div>
                </div>
            </x-card.body>
        </x-card>

        <x-card class="w-full">
            <x-card.body>
                <h2 class="card-title mb-2">Notificações</h2>
                <small class="flex mb-5">Sempre informaremos sobre mudanças importantes, mas você escolhe o que mais deseja receber.</small>
                
                <div class="card-title text-base mb-4">Por e-mail</div>
                <div class="form-control mb-4">
                    <label class="cursor-pointer flex items-start">
                        <input name="notifications[email]" value="comments" type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-primary mt-0.5" />
                        <div class="label-text ml-3 mr-auto flex-col flex">
                            Comentários
                            <small class="text-base-content/60">Seja notificado quando alguém postar um comentário em uma postagem.</small>
                        </div>
                    </label>
                </div>
                <div class="form-control">
                    <label class="cursor-pointer flex items-start">
                        <input name="notifications[email]" value="comments" type="checkbox" class="checkbox checkbox-xs checkbox-primary mt-0.5" />
                        <div class="label-text ml-3 mr-auto flex-col flex">
                            Ações de clientes no site
                            <small class="text-base-content/60">Seja notificado quando algum cliente criar ou deletar algo oferecido gratuitamente ao público.</small>
                        </div>
                    </label>
                </div>

                <div class="card-title text-base mb-4 mt-5">Por SMS</div>
                <div class="form-control mb-4">
                    <label class="cursor-pointer flex items-start">
                        <input name="notifications[sms]" value="comments" type="checkbox" class="checkbox checkbox-xs checkbox-primary mt-0.5" />
                        <div class="label-text ml-3 mr-auto flex-col flex">
                            Comentários
                            <small class="text-base-content/60">Seja notificado quando alguém postar um comentário em uma postagem.</small>
                        </div>
                    </label>
                </div>
            </x-card.body>
        </x-card>
    </div>
</div>
@endsection
