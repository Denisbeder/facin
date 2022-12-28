@extends('app-layout')

@section('title', 'Criar categoria')

@section('content')
    <form>
        <div class="px-4 sm:px-6 max-w-2xl mx-auto">
            <x-page-heading title="Criar categoria">
                <x-slot:actions class="justify-between">
                    <x-button href="/" color="white" leftIcon="arrow-small-left">Cancelar</x-button>
                    <x-button href="#" leftIcon="check">Salvar</x-button>
                </x-slot:actions>
            </x-page-heading>

            <x-card class="mt-8">
                <x-slot:body>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4">
                        <div class="col">
                            <x-label for="name">Nome</x-label>
                            <div class="mt-1 w-full">
                                <x-input.text id="name" name="name" type="text" autocomplete="off"/>
                            </div>
                        </div>

                        <div class="col">
                            <x-label for="slug">Slug (URL)</x-label>
                            <div class="mt-1 w-full">
                                <x-input.text id="slug" name="slug" type="text" autocomplete="off"/>
                            </div>
                        </div>

                        <div class="col">
                            <x-label for="name">Para página</x-label>
                            <div class="mt-1 w-full">
                                <x-select name="page" direction="left-bottom" :options="[
                                    ['value' => 1, 'label' => 'Notícias', 'disabled' => false],
                                    ['value' => 3, 'label' => 'Colunas', 'disabled' => false],
                                    ['value' => 13, 'label' => 'Contato', 'disabled' => false],
                                ]" />
                            </div>
                        </div>
                    </div>
                </x-slot:body>
            </x-card>
        </div>
    </form>
@endsection
