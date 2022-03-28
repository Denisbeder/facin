@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<section class="md:p-8 min-h-screen relative bg-slate-50">
    <div class="w-full h-72 bg-indigo-500 bg-hero bg-center bg-no-repeat bg-cover md:rounded-2xl flex items-start justify-center p-10">
        <ul class="flex items-end">
            <li class="mx-3 mb-1">
                <a href="/">
                    <img src="/vendor/assets/svg/logo_white.svg" alt="FACIN" class="h-12">
                </a>
            </li>
            <li class="mx-3">
                <a href="" class="text-white font-semibold">Home</a>
            </li>
            <li class="mx-3">
                <a href="" class="text-white font-semibold">Preços</a>
            </li>
            <li class="mx-3">
                <a href="" class="text-white font-semibold">Contato</a>
            </li>
        </ul>
    </div>
    <x-card class="mx-auto max-w-xs md:max-w-sm -mt-24">
        <form action="/dashboard" method="GET">
            <x-card.body class="p-10">
                <x-form.control>
                    <x-form.label for="username" label="Usuário" />
                    <x-form.input.text name="username" />
                </x-form.control>

                <x-form.control>
                    <x-form.label for="password" label="Senha" />
                    <x-form.input.text type="password" name="password" />
                </x-form.control>

                <x-form.control>
                    <x-form.input.checkbox name="remember" rightLabel="Lembrar-me" classLabel="text-base" />
                </x-form.control>

                <x-form.control>
                <x-button label="ENVIAR" class="w-full" />
                </x-form.control>

                <a href="" class="block text-center text-sm">Esqueceu sua senha?</a>
            </x-card.body>
        </form>
    </x-card>
</section>
@endsection