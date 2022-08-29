@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
    <x-topbar>
        <x-slot:title>
            Usuários
        </x-slot:title>

        <x-slot:actions>
            <a href="/user/create" class="btn btn-primary gap-2">
                <x-icon name="plus-circle" class="w-4 h-4" />
                Novo
            </a>
        </x-slot:actions>
    </x-topbar>

    <div class="px-6 py-6 md:py-10">
        <livewire:user.list-component />
    </div>
@endsection
