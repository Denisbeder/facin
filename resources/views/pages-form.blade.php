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
                                    [
                                        'value' => 'dropshipping',
                                        'label' => 'Dropshipping',
                                        'description' => 'Vendas',
                                        'icon' => 'cube',
                                    ],
                                ];
                            @endphp
                            <fieldset x-data="{ selected: null }">
                                <legend class="block text-sm font-medium text-gray-700">Selecione o tipo de página</legend>

                                <div class="mt-3 grid grid-cols-1 gap-y-6 sm:grid-cols-3 sm:gap-x-4">
                                    @foreach($pageTypes as $type)
                                    <label
                                        class="relative select-none flex flex-col cursor-pointer rounded-lg border border-gray-200 bg-white p-4 focus:border-indigo-500 focus:outline-none"
                                        :class="selected === '{{ $type['value'] }}' && 'bg-indigo-50/30 hover:bg-indigo-50/60'"
                                        @click="selected = '{{ $type['value'] }}'"
                                    >
                                        <input
                                            tabindex="-1"
                                            type="radio"
                                            name="type"
                                            value="{{ $type['value'] }}"
                                            class="sr-only"
                                            aria-labelledby="page-type-{{ $type['value'] }}-label"
                                            aria-describedby="page-type-{{ $type['value'] }}-description"
                                        >

                                        <span class="text-gray-400" :class="selected === '{{ $type['value'] }}' && 'text-indigo-500'">
                                            <x-dynamic-component component="icon.{{ $type['icon'] }}" class="h-8 w-8" />
                                        </span>

                                        <span class="flex flex-1 mt-3">
                                            <span class="flex flex-col">
                                              <span id="page-type-{{ $type['value'] }}-label" class="block text-sm font-semibold text-gray-900" :class="selected === '{{ $type['value'] }}' && 'text-indigo-500'">{{ $type['label'] }}</span>
                                              <span id="page-type-{{ $type['value'] }}-description" class="mt-1 flex items-center text-sm text-gray-500">{{ $type['description'] }}</span>
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

                        <x-slot:footer class="bg-gray-50 gap-y-6 flex flex-col">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Configurações</h4>

                            <div class="col-auto">
                                <fieldset x-data="{ selected: null }" class="mt-2">
                                    <legend class="block text-sm font-medium text-gray-700">Travar tipo de postagens</legend>
                                    <div class="grid grid-cols-3 gap-3 sm:grid-cols-6 mt-3">
                                        @php
                                            $typeLocks = [
                                                ['value' => '1', 'label' => 'Livre', 'disable' => false, 'icon' => 'beaker'],
                                                ['value' => '2', 'label' => 'Misto', 'disable' => false, 'icon' => 'rectangle-group'],
                                                ['value' => '3', 'label' => 'Imagens', 'disable' => false, 'icon' => 'photo'],
                                                ['value' => '4', 'label' => 'Vídeos', 'disable' => false, 'icon' => 'film'],
                                                ['value' => '5', 'label' => 'Enquetes', 'disable' => false, 'icon' => 'chart-bar'],
                                            ];
                                        @endphp
                                        @foreach($typeLocks as $typeLock)
                                        <label
                                            class="select-none border rounded-md py-3 px-3 flex items-center justify-center text-sm font-semibold sm:flex-1 cursor-pointer focus:outline-none focus:border-indigo-500"
                                            :class="selected === '{{ $typeLock['value'] }}' && 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700'"
                                            @click="selected = '{{ $typeLock['value'] }}'"
                                        >
                                            <input tabindex="-1" type="radio" name="type_lock" value="{{ $typeLock['value'] }}" class="sr-only" aria-labelledby="type-lock-{{ $typeLock['value'] }}-label">
                                            <span id="type-lock-{{ $typeLock['value'] }}-label" class="flex items-center">
                                                <span class=" mr-2" :class="selected !== '{{ $typeLock['value'] }}' && 'text-gray-400'">
                                                    <x-dynamic-component component="icon.{{ $typeLock['icon'] }}" class="w-5 h-5" />
                                                </span>
                                                {{ $typeLock['label'] }}
                                            </span>
                                        </label>
                                        @endforeach
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-auto">
                                <fieldset x-data="{ selected: null }" class="mt-2">
                                    <legend class="block text-sm font-medium text-gray-700">Total por página</legend>
                                    <div class="grid grid-cols-3 gap-3 sm:grid-cols-6 mt-3">
                                        @php
                                            $perPages = [
                                                ['value' => '10', 'label' => '10', 'disable' => false],
                                                ['value' => '15', 'label' => '15', 'disable' => false],
                                                ['value' => '30', 'label' => '30', 'disable' => false],
                                                ['value' => '50', 'label' => '50', 'disable' => false],
                                                ['value' => '100', 'label' => '100', 'disable' => false],
                                            ];
                                        @endphp
                                        @foreach($perPages as $perPage)
                                            <label
                                                class="select-none border rounded-md py-3 px-3 flex items-center justify-center text-sm font-semibold sm:flex-1 cursor-pointer focus:outline-none focus:border-indigo-500"
                                                :class="selected === '{{ $perPage['value'] }}' && 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700'"
                                                @click="selected = '{{ $perPage['value'] }}'"
                                            >
                                                <input tabindex="-1" type="radio" name="type_lock" value="{{ $perPage['value'] }}" class="sr-only" aria-labelledby="type-lock-{{ $perPage['value'] }}-label">
                                                <span id="type-lock-{{ $perPage['value'] }}-label" class="flex items-center">
                                                {{ $perPage['label'] }}
                                            </span>
                                            </label>
                                        @endforeach
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-auto">
                                <x-label class="flex items-center gap-3">
                                    <x-input.checkbox name="status" value="1" /> Ativar página
                                </x-label>
                            </div>
                        </x-slot:footer>
                    </div>
                </x-slot:body>
            </x-card>
        </x-container>
    </form>
@endsection
