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

    <x-card class="mx-auto max-w-xs md:max-w-md -mt-24">
        <x-card.body>
            <form action="/login" method="POST" autocomplete="off">
                <x-card.body>
                    @csrf
                    <div class="flex items-center flex-col mb-10 text-center">
                        <h3 class="font-bold text-lg mb-3">Bem vindo de volta</h3>
                        <p>Entre com as credenciais de acesso da sua conta</p>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label label-text" for="email">E-mail</label>
                        <input type="email" name="email" class="input input-bordered" id="email" />
                    </div>

                    <div class="form-control mb-4">
                        <label class="label label-text" for="password">Senha</label>
                        <input type="password" name="password" class="input input-bordered" id="password" />
                    </div>

                    <div class="form-control mb-4">
                        <label class="cursor-pointer flex items-center">
                            <input name="remember" value="1" type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-primary" />
                            <span class="label-text ml-3 mr-auto">Lembrar-me</span>
                        </label>
                    </div>

                    <div class="form-control mb-4">
                        <button class="btn btn-primary">ENVIAR</button>
                    </div>

                    <a href="" class="block text-center text-sm hover:text-indigo-500 transition-colors duration-300">Esqueceu sua senha?</a>
                </x-card.body>
            </form>
        </x-card.body>
    </x-card>
</section>
@endsection