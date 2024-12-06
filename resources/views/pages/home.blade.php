@extends('layouts.main')
@section('title', 'Home')
@section('content')

<div class="bg-gray-900 py-20 h-screen flex items-center">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 lg:w-2/3">
                <h1 class="text-4xl md:text-6xl lg:text-7xl text-white font-bold mb-6">
                    Bem Vindo ao <br class="hidden md:block" />
                    <span class="text-indigo-500">ByFinance</span>
                </h1>
                <p class="text-lg md:text-xl lg:text-2xl text-gray-400 mb-8">
                    Administrando seu dinheiro da foma mais eficiente e segura.
                </p>
                <div class="flex gap-2">
                    <a href="{{route('cadastro')}}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded-md">
                        Cadastre-Se
                    </a>
                    <a href="{{route('login')}}" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-md">
                        Login
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 lg:w-1/3 mt-8 md:mt-0">
                <img src="{{asset('img/LogoByFinance.jpg')}}" alt="Hero Image" class="rounded-lg shadow-lg" />
            </div>
        </div>
    </div>
</div>

@endsection