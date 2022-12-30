@extends('app-layout')

@section('title', 'Criar página')

@section('content')
    <form>
        <x-container class="max-w-2xl mx-auto">
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
                            <x-label for="name">Tipo</x-label>
                            <div class="mt-1 w-full">
                                <x-select name="type" direction="left-bottom" :options="[
                                    ['value' => 1, 'label' => 'Post', 'disabled' => false],
                                    ['value' => 3, 'label' => 'Imagem', 'disabled' => false],
                                    ['value' => 13, 'label' => 'Vídeo', 'disabled' => false],
                                    ['value' => 15, 'label' => 'Enquete', 'disabled' => false],
                                ]" />
                            </div>
                        </div>
                    </div>
                </x-slot:body>
            </x-card>
        </x-container>
    </form>
@endsection