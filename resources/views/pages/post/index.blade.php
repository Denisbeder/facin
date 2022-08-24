@extends('layouts.app')

@section('title', 'Postagens')

@section('content')
<x-topbar>
    <x-slot:title>
        Criar postagem
    </x-slot:title>

    <x-slot:actions>
        <button class="btn btn-ghost border gap-2">
            <x-icon name="arrow-left" class="w-4 h-4" />
            <span class="hidden md:inline-flex">Cancelar</span>
        </button>
        <button class="btn btn-ghost border gap-2 hidden md:flex">
            <x-icon name="eye" class="w-4 h-4" />
            Prévia
        </button>
        <button class="btn btn-ghost border gap-2 hidden md:flex">
            <x-icon name="save" class="w-4 h-4" />
            Salvar rascunho
        </button>
        <button class="btn btn-primary gap-2">
            <x-icon name="check-circle" class="w-4 h-4" />
            Publicar
        </button>
    </x-slot:actions>
</x-topbar>

<div class="px-6 py-6 md:py-10">
    <div class="flex flex-col md:flex-row gap-10 md:w-9/12 mx-auto">
        <div class="w-full md:w-2/3 space-y-10">
            <x-card>
                <x-card.body>
                    <h2 class="card-title text-base mb-5">Title</h2>
                    <input type="text" class="input input-bordered" id="title" />
                </x-card.body>
                <x-card.footer-collapse buttonLabel="Descrição - Chapéu - Título curto">
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
                </x-card.footer-collapse>
            </x-card>

            <x-card>
                <x-card.body>
                    <h2 class="card-title text-base mb-5">Texto</h2>
                    <textarea class="textarea input-bordered" placeholder="Digite ou cole seu texto aqui..."></textarea>
                </x-card.body>
                <x-card.footer-collapse buttonLabel="Adicionar resumo">
                    <div class="form-control">
                        <label class="label label-text" for="summary">Resumo</label>
                        <textarea class="textarea input-bordered" id="summary"></textarea>
                    </div>
                </x-card.footer-collapse>
            </x-card>

            <x-card>
                <x-card.body>
                    <h2 class="card-title text-base mb-1">Otimização SEO</h2>
                    <p class="text-base-content/50 text-sm mb-5">SEO (Search Egine Optimization) ajuda a melhorar o ranqueamento nos mecanismos de buscas como exemplo, o Google.</p>

                    <div class="form-control mb-4">
                        <label class="label label-text" for="seo_title">SEO Título</label>
                        <input type="text" class="input input-bordered" id="seo_title" />
                    </div>

                    <div class="form-control mb-4">
                        <label class="label label-text" for="seo_description">SEO Descrição</label>
                        <input type="text" class="input input-bordered" id="seo_description" />
                    </div>

                    <div class="form-control">
                        <label class="label label-text" for="seo_keywords">SEO Palavras chaves</label>
                        <input type="text" class="input input-bordered" id="seo_keywords" />
                    </div>
                </x-card.body>
            </x-card>
        </div>

        <div class="w-full md:w-1/3 space-y-10">
            <x-card>
                <x-card.body>
                    <button class="btn btn-ghost border mb-4 gap-2">
                        <x-icon name="star" class="w-4 h-4" />
                        Destacar na página inicial
                    </button>
                    <button class="btn btn-ghost border gap-2"><x-icon name="collection" class="w-4 h-4" /> Adicionar relacionados</button>
                </x-card.body>
            </x-card>

            <x-card>
                <x-card.body>
                    <h2 class="card-title text-base mb-5">Imagens</h2>
                    <div class="cursor-pointer border border-dashed p-8 h-56 rounded-lg flex flex-col justify-center items-center text-center text-base-content/30 select-none">
                        <x-icon name="photograph" class="w-8 h-8" />
                        <p class="flex-initial">Clique e selecione um arquivo</p>
                        <p class="text-xs flex-initial">PNG, JPG, GIF até 2MB</p>
                    </div>
                </x-card.body>
                <x-card.footer class="px-8 py-5">
                    <div class="form-control mb-2">
                        <label class="cursor-pointer flex items-center">
                            <input name="use_image_inside" value="1" type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-primary" />
                            <span class="label-text ml-3 mr-auto">Mostrar imagem de capa dentro da postagem</span>
                        </label>
                    </div>

                    <div class="form-control">
                        <label class="cursor-pointer flex items-center">
                            <input name="content_sensisitivy" value="1" type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-primary" />
                            <span class="label-text ml-3 mr-auto">Imagem com conteúdo sensível</span>
                        </label>
                    </div>
                </x-card.footer>
            </x-card>

            <x-card>
                <x-card.body>
                    <div class="form-control mb-4">
                        <label class="label label-text" for="author">Autores</label>
                        <x-select multiple>
                            <option value="1">Lucas Mota</option>
                            <option value="2">Junior Monteiro</option>
                            <option value="3" selected>Guilherme Soares</option>
                            <option value="5">João da Silva Sauro</option>
                        </x-select>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label label-text" for="source">Fonte</label>
                        <input type="text" class="input input-bordered" id="source" />
                    </div>

                   <div class="form-control">
                        <label class="label label-text" for="categories">Categorias</label>
                        <x-select multiple>
                            <option value="brasil">Brasil</option>
                            <option value="politica" >Política</option>
                            <option value="esporte" selected>Esporte</option>
                            <option value="policial">Policial</option>
                            <option value="mundo">Mundo</option>
                            <option value="econonomia">Economia</option>
                            <option value="cidade">Cidade</option>
                            <option value="estado">Estado</option>
                        </x-select>
                    </div>
                </x-card.body>
            </x-card>

            <x-card>
                <x-card.body>
                    <div class="form-control mb-4">
                        <label class="cursor-pointer flex items-center">
                            <input name="content_sensisitivy" value="1" type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-primary" />
                            <span class="label-text ml-3 mr-auto">Permitir comentários</span>
                        </label>
                    </div>

                    <x-scheduler startNameField="published_at" endNameField="expired_at" />
                </x-card.body>
            </x-card>
        </div>
    </div>
</div>
@endsection
