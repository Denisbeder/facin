@extends('app-layout')

@section('title', 'Criar página')

@section('content')
    <form>
        <x-container class="max-w-3xl mx-auto">
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
                    </div>
                </x-slot:body>
            </x-card>

            <x-card class="mt-8">
                <x-slot:body>
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
                                'value' => 'link',
                                'label' => 'Links',
                                'description' => 'Página com lista de links',
                                'icon' => 'link',
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
                    <x-radio-group colsOnMobile="2" label="Tipo de página">
                        @foreach($pageTypes as $type)
                            <x-radio-group.card
                                name="page_type"
                                value="{{ $type['value'] }}"
                                label="{{ $type['label'] }}"
                                description="{{ $type['description'] }}"
                                icon="{{ $type['icon'] }}"
                            />
                        @endforeach
                    </x-radio-group>
                </x-slot:body>
            </x-card>
        </x-container>
    </form>
@endsection
