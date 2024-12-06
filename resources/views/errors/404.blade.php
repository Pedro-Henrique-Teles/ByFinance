@extends('layouts.main')

@section('title', '404 Page not found')

@section('content')

    <main class="bg-escuro flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
        <div class="text-center">
            <p class="text-base font-bold text-indigo-600">404</p>
            <h1 class="mt-4 text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">Page not found</h1>
            <p class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">
                Desculpe, a página procurada, não foi encontrada
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{route('home')}}"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Voltar Para Tela Inicial
                </a>
                <a href="#" class="text-sm font-semibold text-white">
                    Falar Com Suporte
                    <span
                        aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>
    </main>

@endsection
