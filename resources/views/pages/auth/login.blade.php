@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<section class="md:p-8 min-h-screen relative bg-slate-50">
    <div class="w-full h-72 bg-indigo-500 bg-hero bg-center bg-no-repeat bg-cover md:rounded-2xl flex items-start justify-center p-14">
        <div class="flex items-center md:items-end flex-col md:flex-row">
            <a href="/" class="inline-block md:mb-1 md:mr-3">
                <img src="/vendor/assets/svg/logo_white.svg" alt="FACIN" class="h-12">
            </a>
            <ul class="flex items-end mt-5 md:mt-0">
                <li class="mx-3">
                    <a href="" class="text-white font-semibold hover:text-indigo-200 transition-colors duration-300">Home</a>
                </li>
                <li class="mx-3">
                    <a href="" class="text-white font-semibold hover:text-indigo-200 transition-colors duration-300">Preços</a>
                </li>
                <li class="mx-3">
                    <a href="" class="text-white font-semibold hover:text-indigo-200 transition-colors duration-300">Contato</a>
                </li>
            </ul>
        </div>
    </div>
    <x-card class="mx-auto max-w-xs md:max-w-sm -mt-24">
        <form action="/login" method="POST" autocomplete="off">
            <x-card.body class="!p-10">
                @csrf
                <div class="flex items-center flex-col mb-10 text-center">
                    <h3 class="font-bold text-lg mb-3">Bem vindo de volta</h3>
                    <p>Entre com as credenciais de acesso da sua conta</p>
                </div>
                <x-form.control>
                    <x-form.label for="email" label="E-mail" />
                    <x-form.input.text name="email" useHasError />
                </x-form.control>

                <x-form.control>
                    <x-form.label for="password" label="Senha" />
                    <x-form.input.text type="password" name="password" useHasError />
                </x-form.control>

                <x-form.control>
                    <x-form.input.checkbox name="remember" value="1" rightLabel="Lembrar-me" classLabel="text-base" />
                </x-form.control>

                <x-form.control>
                <x-button label="ENVIAR" class="w-full" />
                </x-form.control>

                <a href="" class="block text-center text-sm hover:text-indigo-500 transition-colors duration-300">Esqueceu sua senha?</a>
            </x-card.body>
        </form>
    </x-card>
</section>
@endsection