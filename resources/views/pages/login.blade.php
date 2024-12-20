@extends('layouts.main')

@section('title', 'Login')

@section('content')


<div class="bg-escuro flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
    
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
            alt="Your Company">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Fazer Login</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm/6 font-medium text-white">
                    Email
                </label>
                <div class="mt-2">
                    <input type="email" name="email" id="email" autocomplete="email" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-white">
                        Senha
                    </label>
                    <div class="text-sm">
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">
                            Esqueceu Sua Senha ?
                        </a>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="password" name="password" id="password" autocomplete="current-password" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Login
                </button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm/6 text-gray-400">
            Não tem uma conta ?
            <a href="{{ route('cadastro.create') }}" class="font-semibold text-indigo-700 hover:text-indigo-500">
                Cadastre-se
            </a>
        </p>
    </div>
</div>

@endsection
