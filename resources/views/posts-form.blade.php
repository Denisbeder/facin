@extends('app-layout')

@section('title', 'Criar post')

@section('content')
    <div x-data="{modalPermissions: false}">
        <form>
            <x-container class="mx-auto max-w-7xl">
                <x-page-heading title="Criar post">
                    <x-slot:actions class="justify-between">
                        <x-button href="/" color="white" leftIcon="arrow-small-left">Cancelar</x-button>
                        <x-button href="#" leftIcon="check">Salvar</x-button>
                    </x-slot:actions>
                </x-page-heading>

                <div class="mt-8 flex gap-6">
                    <div class="flex-auto">
                        <x-card>
                            <x-slot:body>
                                <x-label for="title">Título</x-label>
                                <div class="mt-1 w-full">
                                    <x-input.text id="title" name="title" type="text" autocomplete="off" />
                                </div>
                            </x-slot:body>

                            <x-slot:footer class="bg-gray-50">
                                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                                    <div class="col-span-2">
                                        <x-label for="description">Descrição</x-label>
                                        <div class="mt-1 w-full">
                                            <x-input.text id="description" name="description" type="text" autocomplete="off" />
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <x-label for="headline">Título de chamada</x-label>
                                        <div class="mt-1 w-full">
                                            <x-input.text id="headline" name="headline" type="text" autocomplete="off" />
                                            <x-input.description>Mostrar na Home um título menor mais direto e chamativo.</x-input.description>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <x-label for="kicker">Chapéu</x-label>
                                        <div class="mt-1 w-full">
                                            <x-input.text id="kicker" name="kicker" type="text" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </x-slot:footer>
                        </x-card>

                        <div class="mt-8 flex gap-6 w-full">
                            <x-card class="w-32">
                                <ul class="divide-y">
                                    <li class="px-3 py-3 flex items-center cursor-move">
                                        <x-icon.paragraph class="w-5 h-5 mr-3" /> <span class="text-xs">Parágrafo</span>
                                    </li>
                                    <li class="px-3 py-3 flex items-center cursor-move">
                                        <x-icon.photo class="w-5 h-5 mr-3" /> <span class="text-xs">Imagem</span>
                                    </li>
                                    <li class="px-3 py-3 flex items-center cursor-move">
                                        <x-icon.film class="w-5 h-5 mr-3" /> <span class="text-xs">Vídeo</span>
                                    </li>
                                    <li class="px-3 py-3 flex items-center cursor-move">
                                        <x-icon.musical-note class="w-5 h-5 mr-3" /> <span class="text-xs">Áudio</span>
                                    </li>
                                    <li class="px-3 py-3 flex items-center cursor-move">
                                        <x-icon.paper-clip class="w-5 h-5 mr-3" /> <span class="text-xs">Arquivo</span>
                                    </li>
                                    <li class="px-3 py-3 flex items-center cursor-move">
                                        <x-icon.chart-bar class="w-5 h-5 mr-3" /> <span class="text-xs">Enquete</span>
                                    </li>
                                    <li class="px-3 py-3 flex items-center cursor-move">
                                        <x-icon.puzzle-piece class="w-5 h-5 mr-3" /> <span class="text-xs">Incorporar</span>
                                    </li>
                                </ul>
                            </x-card>

                            <x-card class="flex-1">
                                <x-slot:body>
                                    <x-input.textarea id="seo_description" name="seo_description" type="text" autocomplete="off" />
                                </x-slot:body>
                            </x-card>
                        </div>
                    </div>

                    <div class="w-80">
                        <x-card>
                            <x-slot:body class="flex flex-col justify-stretch items-stretch h-full">
                                <x-label for="photo">Imagem de capa</x-label>
                                <div class="mt-1 h-[252px] flex items-center border border-3 border-dashed border-gray-200 rounded-md justify-center bg-gray-50 relative">
                                    <x-icon.photo class="h-8 w-8 text-gray-300" />

                                    <div class="absolute left-3 top-3">
                                        <x-button color="white" size="sm" type="button" class="!rounded-full w-8 h-8 !p-0" title="Mudar">
                                            <x-icon.photo class="w-3 h-3" />
                                        </x-button>
                                        <x-button color="white" size="sm" type="button" class="!rounded-full w-8 h-8 !p-0" title="Editar">
                                            <x-icon.pencil class="w-3 h-3" />
                                        </x-button>
                                        <x-button color="white" size="sm" type="button" class="!rounded-full w-8 h-8 !p-0" title="Deletar">
                                            <x-icon.trash class="w-3 h-3" />
                                        </x-button>
                                    </div>
                                </div>
                            </x-slot:body>
                        </x-card>

                        <x-card class="mt-8">
                            <x-slot:body>
                                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                                    <div class="col-span-2">
                                        <x-label for="published_at">Data da publicação</x-label>
                                        <div class="mt-1 w-full">
                                            <x-input.text id="published_at" name="published_at" type="datetime-local" autocomplete="off" />
                                        </div>
                                    </div>

                                    <div class="col-span-2">
                                        <x-label for="category_id">Categoria</x-label>
                                        <div class="mt-1 w-full">
                                            <x-select name="category_id" direction="left-bottom" :options="[
                                    ['value' => '', 'label' => 'Nenhuma', 'disabled' => false],
                                    ['value' => 1, 'label' => 'Categoria 1', 'disabled' => false],
                                    ['value' => 3, 'label' => 'Categoria 2', 'disabled' => false],
                                    ['value' => 13, 'label' => 'Categoria 3', 'disabled' => false],
                                ]" />
                                        </div>
                                    </div>

                                    <div class="col-span-2">
                                        <x-label for="source_from">Fonte</x-label>
                                        <div class="mt-1 w-full">
                                            <x-input.text id="source_from" name="source_from" type="text" autocomplete="off" />
                                        </div>
                                    </div>

                                    <div class="col-span-2">
                                        <x-label for="author">Autor</x-label>
                                        <div class="mt-1 w-full">
                                            <x-select name="author" direction="left-bottom" :options="[
                                    ['value' => '', 'label' => 'Automático', 'disabled' => false],
                                    ['value' => 1, 'label' => 'Autor 1', 'disabled' => false],
                                    ['value' => 3, 'label' => 'Autor 2', 'disabled' => false],
                                    ['value' => 13, 'label' => 'Autor 3', 'disabled' => false],
                                ]" />
                                        </div>
                                    </div>

                                    <div class="col-span-2">
                                        <x-label class="flex items-center gap-3">
                                            <x-input.checkbox name="deactived" value="1" /> Permitir comentários
                                        </x-label>
                                    </div>

                                    <div class="col-span-2">
                                        <x-button color="white">Destacar na Home</x-button>

                                        <x-button color="white">Adicionar posts relacionados</x-button>
                                    </div>
                                </div>
                            </x-slot:body>
                        </x-card>

                        <x-card class="mt-8">
                            <x-slot:body>
                                <div class="grid grid-cols-1 gap-y-6 gap-x-4">
                                    <h2 class="text-lg font-semibold leading-6 text-gray-900">
                                        Otimização SEO
                                    </h2>

                                    <div class="col-auto">
                                        <x-label for="seo_title">Título</x-label>
                                        <div class="mt-1 w-full">
                                            <x-input.text id="seo_title" name="seo_title" type="text" autocomplete="off" />
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <x-label for="seo_description">Descrição</x-label>
                                        <div class="mt-1 w-full">
                                            <x-input.textarea id="seo_description" name="seo_description" type="text" autocomplete="off" />
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <x-label for="seo_keywords">Palavras-chaves</x-label>
                                        <div class="mt-1 w-full">
                                            <x-input.text id="seo_keywords" name="seo_keywords" type="text" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </x-slot:body>
                        </x-card>
                    </div>
                </div>
            </x-container>
        </form>
    </div>
@endsection
