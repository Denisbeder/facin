@extends('app-layout')

@section('title', 'Criar categoria')

@section('content')
    <form>
        <x-container class="max-w-2xl mx-auto">
            <x-page-heading title="Criar categoria">
                <x-slot:actions class="justify-between">
                    <x-button href="/" color="white" leftIcon="arrow-small-left">Cancelar</x-button>
                    <x-button href="#" leftIcon="check">Salvar</x-button>
                </x-slot:actions>
            </x-page-heading>

            <x-card>
                <x-slot:body>
                    <div class="grid grid-cols-2 gap-y-6 gap-x-4">
                        <div class="col-auto">
                            <x-label for="name">É uma sub-categoria de</x-label>
                            <div class="mt-1 w-full">
                                <x-select name="page" direction="left-bottom" :options="[
                                    ['value' => '', 'label' => 'Nenhuma', 'disabled' => false],
                                    ['value' => 1, 'label' => 'Categoria 1', 'disabled' => false],
                                    ['value' => 3, 'label' => 'Categoria 2', 'disabled' => false],
                                    ['value' => 13, 'label' => 'Categoria 3', 'disabled' => false],
                                ]" />
                            </div>
                        </div>

                        <div class="col-auto">
                            <x-label for="name">Para página</x-label>
                            <div class="mt-1 w-full">
                                <x-select name="page" direction="left-bottom" :options="[
                                    ['value' => '', 'label' => 'Todas', 'disabled' => false],
                                    ['value' => 1, 'label' => 'Notícias', 'disabled' => false],
                                    ['value' => 3, 'label' => 'Colunas', 'disabled' => false],
                                    ['value' => 13, 'label' => 'Contato', 'disabled' => false],
                                ]" />
                            </div>
                        </div>

                        <div class="col-span-3">
                            <x-label for="name">Nome</x-label>
                            <div class="mt-1 w-full">
                                <x-input.text id="name" name="name" type="text" autocomplete="off"/>
                            </div>
                        </div>
                    </div>
                </x-slot:body>
            </x-card>

            <x-card class="mt-8">
                <x-slot:body>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4">
                        <h2 class="text-lg font-semibold leading-6 text-gray-900">
                            Configurações
                        </h2>

                        <div class="col-auto">
                            <x-label for="photo">Imagem</x-label>
                            <div class="mt-1 flex items-center">
                                    <span class="h-12 w-12 inline-flex justify-center items-center overflow-hidden rounded-full bg-gray-100">
                                        <x-icon.photo class="h-6 w-6 text-gray-300" />
                                    </span>
                                <x-button color="white" size="sm" type="button" class="ml-5">Mudar</x-button>
                            </div>
                        </div>

                        <div class="col-auto">
                            <x-label for="photo">Cor</x-label>
                            <x-input.color name="color" />
                        </div>

                        <div class="col-auto">
                            <x-label for="slug">Slug (URL)</x-label>
                            <div class="mt-1 w-full">
                                <x-input.text id="slug" name="slug" type="text" autocomplete="off"/>
                            </div>
                        </div>
                    </div>
                </x-slot:body>
            </x-card>
        </x-container>
    </form>
@endsection
