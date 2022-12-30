@extends('app-layout')

@section('title', 'Criar página')

@section('content')
    <form>
        <x-container class="max-w-4xl mx-auto">
            <x-page-heading title="Criar página">
                <x-slot:actions class="justify-between">
                    <x-button href="/" color="white" leftIcon="arrow-small-left">Cancelar</x-button>
                    <x-button href="#" leftIcon="check">Salvar</x-button>
                </x-slot:actions>
            </x-page-heading>

            <x-card>
                <x-slot:body>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4">
                        <div class="col-auto">
                            <x-label for="name">Nome</x-label>
                            <div class="mt-1 w-full">
                                <x-input.text id="name" name="name" type="text" autocomplete="off"/>
                            </div>
                        </div>

                        <div class="col-auto">
                            <x-label for="slug">Slug (URL)</x-label>
                            <div class="mt-1 w-full">
                                <x-input.text id="slug" name="slug" type="text" autocomplete="off"/>
                            </div>
                        </div>

                        <div class="col-auto">
                            @php
                                $pageTypes = [
                                    [
                                        'value' => 'default',
                                        'label' => 'Padrão',
                                        'description' => 'Página única',
                                        'icon' => 'document-text',
                                    ],
                                    [
                                        'value' => 'post',
                                        'label' => 'Post',
                                        'description' => 'Postagens em geral',
                                        'icon' => 'newspaper',
                                    ],
                                    [
                                        'value' => 'form',
                                        'label' => 'Formulário',
                                        'description' => 'Página com formulário',
                                        'icon' => 'envelope',
                                    ],
                                    [
                                        'value' => 'promotion',
                                        'label' => 'Promoção',
                                        'description' => 'Sorteio de prêmios',
                                        'icon' => 'gift',
                                    ],
                                    [
                                        'value' => 'ad',
                                        'label' => 'Anúncio',
                                        'description' => 'Mural de anúncios',
                                        'icon' => 'megaphone',
                                    ],
                                    [
                                        'value' => 'shop',
                                        'label' => 'Loja',
                                        'description' => 'Venda de Info-Produtos',
                                        'icon' => 'shopping-bag',
                                    ],
                                ];
                            @endphp
                            <fieldset x-data="{
                                selected: null,
                            }">
                                <legend class="block text-sm font-medium text-gray-700">Selecione o tipo de página</legend>

                                <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-3 sm:gap-x-4">
                                    @foreach($pageTypes as $type)
                                    <label
                                        class="relative select-none flex flex-col cursor-pointer rounded-lg border border-gray-200 bg-white p-4 focus:outline-none"
                                        :class="selected === '{{ $type['value'] }}' && 'bg-indigo-50/30'"
                                        @click="selected = '{{ $type['value'] }}'"
                                    >
                                        <input
                                            type="radio"
                                            name="type"
                                            value="{{ $type['value'] }}"
                                            class="sr-only"
                                            aria-labelledby="page-type-0-label"
                                            aria-describedby="page-type-0-description-0"
                                        >

                                        <span class="text-gray-400" :class="selected === '{{ $type['value'] }}' && 'text-indigo-500'">
                                            <x-dynamic-component component="icon.{{ $type['icon'] }}" class="h-8 w-8" />
                                        </span>

                                        <span class="flex flex-1 mt-3">
                                            <span class="flex flex-col">
                                              <span id="page-type-0-label" class="block text-sm font-semibold text-gray-900" :class="selected === '{{ $type['value'] }}' && 'text-indigo-500'">{{ $type['label'] }}</span>
                                              <span id="page-type-0-description-0" class="mt-1 flex items-center text-sm text-gray-500">{{ $type['description'] }}</span>
                                            </span>

                                            <x-icon.check-circle class="h-5 w-5 text-indigo-600 absolute top-4 right-4" ::class="selected !== '{{ $type['value'] }}' && 'invisible'" />
                                        </span>

                                        <span
                                            class="pointer-events-none absolute -inset-px rounded-md"
                                            :class="selected === '{{ $type['value'] }}' && 'border-2 border-indigo-500'"
                                            aria-hidden="true"
                                        ></span>
                                    </label>
                                    @endforeach
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-auto">
                            <x-label for="name">Tipo</x-label>
                            <div class="mt-1 w-full">
                                <x-select name="page" direction="left-bottom" selected="1" :options="[
                                    ['value' => 1, 'label' => 'Padrão', 'disabled' => false],
                                    ['value' => 2, 'label' => 'Postagens', 'disabled' => false],
                                ]" />
                            </div>
                        </div>

                        <div class="col-auto">
                            <x-label for="name">Travar tipo de postagens</x-label>
                            <div class="mt-1 w-full">
                                <x-select name="type" direction="left-bottom" :options="[
                                    ['value' => '', 'label' => 'Livre (Escolha no momento da criação)', 'disabled' => false],
                                    ['value' => 1, 'label' => 'Misto (Texto, Imagens, Vídeos, etc...)', 'disabled' => false],
                                    ['value' => 3, 'label' => 'Imagem', 'disabled' => false],
                                    ['value' => 13, 'label' => 'Vídeo', 'disabled' => false],
                                    ['value' => 15, 'label' => 'Enquete', 'disabled' => false],
                                ]" />
                            </div>
                        </div>

                        <div class="col-auto">
                            <x-label class="flex items-center gap-3">
                                <x-input.checkbox name="status" value="1" /> Ativar página
                            </x-label>
                        </div>
                    </div>
                </x-slot:body>
            </x-card>
        </x-container>
    </form>
@endsection
