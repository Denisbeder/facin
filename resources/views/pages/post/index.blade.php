@extends('layouts.app')

@section('title', 'Postagens')

@section('content')
    <x-topbar fixed>
        <x-slot name="title">Postagens</x-slot>
        <x-slot name="right">
            <x-button icon="plus-circle" label="New" />
        </x-slot>
    </x-topbar>

    <livewire:counter />
@endsection