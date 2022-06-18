@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="p-6">
    <div class="flex gap-10 md:w-9/12 mx-auto">    
        <div class="w-2/3 space-y-10">
            <x-card>
                <x-card.body>
                    <h2 class="card-title mb-5">Title</h2>
                    <input type="text" class="input input-bordered" id="title" />
                </x-card.body>
                <x-card.collapse buttonLabel="Mais">
                    <div class="form-control gap-4 mb-4 flex flex-row">
                        <div class="form-control flex-1">
                            <label class="label label-text" for="description">Descrição</label>
                            <input type="text" class="input input-bordered" id="description" />
                        </div>

                        <div class="form-control w-1/3">
                            <label class="label label-text" for="hat">Chapéu</label>
                            <input type="text" class="input input-bordered" id="hat" />
                        </div>
                    </div>

                    <div class="form-control">
                        <label class="label label-text" for="short_title">Título curto</label>
                        <input type="text" class="input input-bordered" id="short_title" />
                    </div>
                </x-card.collapse>
             </x-card>

            <x-card>
                <x-card.body>
                    <h2 class="card-title mb-5">Texto</h2>
                    <textarea class="textarea input-bordered" placeholder="Digite ou cole seu texto aqui..."></textarea>
                </x-card.body>
                <x-card.collapse buttonLabel="Adicionar resumo">
                    <div class="form-control">
                        <label class="label label-text" for="summary">Resumo</label>
                        <textarea class="textarea input-bordered" id="summary"></textarea>
                    </div>
                </x-card.collapse>
            </x-card>

            <x-card>
                <x-card.body>
                    <h2 class="card-title mb-5">Imagens</h2>
                    <div class="border border-dashed p-8 rounded-lg flex flex-col justify-center items-center text-base-content/30 select-none">
                        <x-icon name="photograph" class="w-8 h-8" />
                        <p>Solte suas imagens aqui ou clique para selecionar </p>
                    </div>
                </x-card.body>
                <x-card.footer class="px-8 py-5">
                    <label class="cursor-pointer">
                        <input type="checkbox" checked="checked" class="checkbox checkbox-sm checkbox-primary" />
                        <span class="label-text ml-3 mr-auto">Mostrar imagem de capa dentro da postagem</span>
                    </label>
                </x-card.footer>
            </x-card>
        </div>

        <div class="w-1/3">
            <x-card>
                <x-card.body>
                    CONTENT
                </x-card.body>
            </x-card>
        </div>       
    </div>
</div>
@endsection
