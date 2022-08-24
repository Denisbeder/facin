@extends('layouts.app')

@section('title', 'Criar autor')

@section('content')
<x-topbar>
    <x-slot:title>
        Criar autor
    </x-slot:title>

    <x-slot:actions>
        <button class="btn btn-ghost border gap-2">
            <x-icon name="arrow-left" class="w-4 h-4" />
            <span class="hidden md:inline-flex">Cancelar</span>
        </button>
        <button class="btn btn-primary gap-2">
            <x-icon name="check-circle" class="w-4 h-4" />
            Salvar
        </button>
    </x-slot:actions>
</x-topbar>

<div class="px-6 py-6 md:py-10">
    <div class="flex flex-col gap-10 md:max-w-2xl mx-auto">
        <x-card class="w-full">
            <x-card.body>
                <h2 class="card-title mb-2">Perfil</h2>
                <small class="flex mb-5">Essas informações serão exibidas publicamente, portanto, tenha cuidado com o que você compartilha.</small>

                <div class="form-control mb-4">
                    <label for="photo" class="block label label-text">Foto</label>
                    <div class="mt-1 flex items-center">
                        <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        <x-avatar class="h-full w-full text-gray-300" />
                        </span>
                        <button type="button" class="btn btn-sm btn-ghost border ml-4">Mudar</button>
                        <p class="text-xs flex-initial text-base-content/30 select-none ml-2">PNG, JPG, GIF até 2MB</p>
                    </div>
                </div>

                <div class="form-control mb-4 gap-4 flex md:flex-row">
                    <div class="form-control flex-1">
                        <label class="label label-text" for="name">Nome</label>
                        <input type="text" name="name" class="input input-bordered" id="name" />
                    </div>

                    <div class="form-control flex-1">
                        <label class="label label-text" for="profile_email">E-mail</label>
                        <input type="email" name="profile_email" class="input input-bordered" id="profile_email" />
                    </div>
                </div>


                <div class="form-control mb-4">
                    <label class="label label-text" for="about">Sobre</label>
                    <textarea class="textarea input-bordered" id="about"></textarea>
                </div>

                <div class="form-control">
                    <label class="label label-text" for="social[facebook]">Redes sociais</label>

                    @php
                        $social = [
                            ['icon' => 'whatsapp', 'color' => 'text-green-500', 'label' => 'Whatsapp'],
                            ['icon' => 'telegram', 'color' => 'text-sky-500', 'label' => 'Telegram'],
                            ['icon' => 'instagram', 'color' => 'text-fuchsia-500', 'label' => 'Instagram'],
                            ['icon' => 'tiktok', 'color' => 'text-slate-600', 'label' => 'TikTok'],
                            ['icon' => 'facebook', 'color' => 'text-blue-500', 'label' => 'Facebook'],
                            ['icon' => 'twitter', 'color' => 'text-sky-400', 'label' => 'Twitter'],
                            ['icon' => 'youtube', 'color' => 'text-red-500', 'label' => 'Youtube'],
                        ];
                    @endphp
                    @foreach ($social as $item)
                        <div class="form-control mb-2">
                            <label class="input-group input-group-sm">
                                <span class="w-10 p-0">
                                    <x-dynamic-component component="icon.{{ $item['icon'] }}" class="w-5 h-5 {{ $item['color'] }}" />
                                </span>
                                <input type="url" name="social[{{ strtolower($item['label']) }}]" placeholder="Cole uma URL do {{ $item['label'] }}" class="pl-10 input input-bordered input-sm flex-1" />
                            </label>
                        </div>
                    @endforeach
                </div>
            </x-card.body>
        </x-card>
    </div>
</div>
@endsection
