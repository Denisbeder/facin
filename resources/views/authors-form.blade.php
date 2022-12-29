@extends('app-layout')

@section('title', 'Criar autor')

@section('content')
    <form>
        <x-container class="max-w-2xl mx-auto">
            <x-page-heading title="Criar autor">
                <x-slot:actions class="justify-between">
                    <x-button href="/" color="white" leftIcon="arrow-small-left">Cancelar</x-button>
                    <x-button href="#" leftIcon="check">Salvar</x-button>
                </x-slot:actions>
            </x-page-heading>

            <x-card>
                <x-slot:body>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4">
                        <div class="col-auto">
                            <x-label for="photo">Foto</x-label>
                            <div class="mt-1 flex items-center">
                                <x-avatar class="h-12 w-12" />
                                <x-button color="white" size="sm" type="button" class="ml-5">Mudar</x-button>
                            </div>
                        </div>

                        <div class="col-auto">
                            <x-label for="name">Nome</x-label>
                            <div class="mt-1 w-full">
                                <x-input.text id="name" name="name" type="text" autocomplete="off"/>
                            </div>
                        </div>

                        <div class="col-auto">
                            <x-label for="email">E-mail</x-label>
                            <div class="mt-1 w-full">
                                <x-input.text id="email" name="email" type="email" autocomplete="off"/>
                            </div>
                        </div>

                        <div class="col-auto">
                            <x-label for="email">Sobre</x-label>
                            <div class="mt-1 w-full">
                                <x-input.textarea rows="4" />
                            </div>
                        </div>

                        <div class="col-auto">
                            @php
                                $social = [
                                    ['icon' => 'whatsapp', 'color' => 'text-green-500', 'label' => 'Whatsapp'],
                                    ['icon' => 'telegram', 'color' => 'text-sky-500', 'label' => 'Telegram'],
                                    ['icon' => 'instagram', 'color' => 'text-fuchsia-500', 'label' => 'Instagram'],
                                    ['icon' => 'facebook', 'color' => 'text-blue-500', 'label' => 'Facebook'],
                                    ['icon' => 'tiktok', 'color' => 'text-slate-600', 'label' => 'TikTok'],
                                    ['icon' => 'twitter', 'color' => 'text-sky-400', 'label' => 'Twitter'],
                                    ['icon' => 'youtube', 'color' => 'text-red-500', 'label' => 'Youtube'],
                                ];
                            @endphp
                            <x-label for="social[{{ strtolower($social[0]['label']) }}]">Redes sociais</x-label>
                            <div class="mt-1 w-full">
                                <div class="space-y-2">
                                    @foreach ($social as $item)
                                        <x-input.text
                                            type="url"
                                            leftIcon="{{ $item['icon'] }}"
                                            id="social[{{ strtolower($item['label']) }}]"
                                            name="social[{{ strtolower($item['label']) }}]"
                                            placeholder="Cole uma URL do {{ $item['label'] }}"
                                        />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </x-slot:body>
            </x-card>
        </x-container>
    </form>
@endsection
