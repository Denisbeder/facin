<div>
    <x-topbar>
        <x-slot:title>
            Criar usuário
        </x-slot:title>

        <x-slot:actions>
            <button class="btn btn-ghost border gap-2">
                <x-icon name="arrow-left" class="w-4 h-4" />
                <span class="hidden md:inline-flex">Cancelar</span>
            </button>
            <button wire:click="save" class="btn btn-primary gap-2">
                <x-icon name="check-circle" class="w-4 h-4" />
                Salvar
            </button>
        </x-slot:actions>
    </x-topbar>

    <div class="px-6 py-6 md:py-10">
        <div class="flex flex-col gap-10 md:max-w-2xl mx-auto">
            <x-card class="w-full">
                <x-card.body>
                    <h2 class="card-title mb-2">Credenciais de acesso</h2>
                    <small class="flex mb-5">Dados de para acessos futuros ao sistema e recuperação de senha.</small>

                    <div class="form-control mb-4">
                        <label for="name" @class([
                            'label label-text',
                            'text-error' => $errors->has('name'),
                        ])>Nome</label>
                        <input wire:model.lazy="name" type="text" name="name" id="name" @class([
                            'input input-bordered',
                            'input-error' => $errors->has('name'),
                            'text-error' => $errors->has('name'),
                        ]) />
                        @error('name')
                        <div class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="form-control mb-4">
                        <label for="email" @class([
                            'label label-text',
                            'text-error' => $errors->has('email'),
                        ])>E-mail</label>
                        <input wire:model.lazy="email" type="email" name="email" id="email" @class([
                            'input input-bordered',
                            'input-error' => $errors->has('email'),
                            'text-error' => $errors->has('email'),
                        ]) />
                        @error('email')
                        <div class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="form-control gap-4 flex md:flex-row mb-4">
                        <div class="form-control flex-1">
                            <label for="password" @class([
                                'label label-text',
                                'text-error' => $errors->has('password'),
                            ])>Senha</label>
                            <input wire:model.lazy="password" type="password" id="password" @class([
                                'input input-bordered',
                                'input-error' => $errors->has('password'),
                                'text-error' => $errors->has('password'),
                            ]) />
                            @error('password')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <div class="form-control flex-1">
                            <label for="password_confirmation" @class([
                                'label label-text',
                                'text-error' => $errors->has('passwordConfirmation'),
                            ])>Confirmar senha</label>
                            <input wire:model.lazy="passwordConfirmation" type="password" id="password_confirmation" @class([
                                'input input-bordered',
                                'input-error' => $errors->has('passwordConfirmation'),
                                'text-error' => $errors->has('passwordConfirmation'),
                            ]) />
                            @error('passwordConfirmation')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label cursor-pointer flex justify-start mr-auto">
                            <input wire:model.defer="deactivated" type="checkbox" class="toggle"  />
                            <span @class([
                                'label-text ml-3',
                                'text-error' => $errors->has('deactivated'),
                            ])>Remover acesso temporariamente</span>
                        </label>
                    </div>

                    <div class="form-control mt-3">
                        <!-- The button to open modal -->
                        <a href="#modal-permissions" class="btn btn-ghost border gap-2">
                            <x-icon name="identification" class="w-4 h-4" />
                            Selecionar permissões
                        </a>
                        <!-- Put this part before </body> tag -->
                        <div class="modal" id="modal-permissions">
                            <div class="modal-box w-11/12 max-w-5xl">
                                <a href="#" class="btn btn-xs btn-circle btn-ghost border absolute right-2 top-2">✕</a>
                                <h3 class="font-bold text-lg mb-5">Permissões</h3>
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
                                                    <th colspan="5" class="text-center bg-base-300/60">{{ $permission['label'] }}</th>
                                                </tr>
                                                <tr>
                                                    <th width="10%"> </th>
                                                    @foreach ($permission['actions'] as $permissionAction)
                                                        <th class="text-center">{{ $permissionAction['label'] }}</th>
                                                    @endforeach
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>PRÓPRIO</th>
                                                    @foreach ($permission['actions'] as $permissionAction)
                                                        <td>
                                                            <label class="flex w-full items-center justify-center cursor-pointer group">
                                                                <input name="persissions[{{ $permission['model'] }}][owner]" value="{{ $permissionAction['value'] }}" type="checkbox" class="checkbox checkbox-xs transition-colors duration-300 group-hover:checkbox-primary" />
                                                            </label>
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <th>OUTROS</th>
                                                    @foreach ($permission['actions'] as $permissionAction)
                                                        <td>
                                                            @if($permissionAction['value'] !== 'create')
                                                                <label class="flex w-full items-center justify-center cursor-pointer group">
                                                                    <input name="persissions[{{ $permission['model'] }}][others]" value="{{ $permissionAction['value'] }}" type="checkbox" class="checkbox checkbox-xs transition-colors duration-300 group-hover:checkbox-primary" />
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

                                <div class="modal-action">
                                    <a href="#" class="btn">Yay!</a>
                                </div>
                            </div>
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
</div>
