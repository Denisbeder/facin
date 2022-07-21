@extends('layouts.app')

@section('title', 'Autores')

@section('content')
<x-topbar>
    <x-slot:title>
        Autores
    </x-slot:title>

    <x-slot:actions>
        <a href="/author/create" class="btn btn-primary gap-2">
            <x-icon name="plus-circle" class="w-4 h-4" />
            Novo
        </a>
    </x-slot:actions>
</x-topbar>
@endsection