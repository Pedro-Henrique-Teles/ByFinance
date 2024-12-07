@extends('layouts.main')
@section('title', 'Cadastro')
@section('content')

    <body class="dark">
        <section class="bg-escuro">
            <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
                <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
                    <img alt=""
                        src="https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        class="absolute inset-0 h-full w-full object-cover" />
                </aside>
                <main
                    class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                    <div class="max-w-xl lg:max-w-3xl">
                        <a class="block text-white" href="{{route('home')}}">
                            <span class="sr-only">Home</span>
                            <i class="fa-brands fa-bitcoin text-7xl"></i>
                        </a>

                        <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl dark:text-white">
                            Bem Vindo Ao ByFinance 🪙
                        </h1>

                        <p class="mt-4 leading-relaxed text-gray-500 dark:text-gray-400">
                            Preencha os campos para realizar o cadastro de sua conta no ByFinance
                        </p>

                        <form action="{{route('cadastro.store')}}" method="POST" class="mt-8 grid grid-cols-6 gap-6">
                            @csrf
                            <div class="col-span-6 sm:col-span-3">
                                <label for="FirstName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                    Nome
                                </label>

                                <input placeholder="Digite Seu Nome" type="text" id="FirstName" name="first_name"
                                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-black" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="LastName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                    Sobrenome
                                </label>

                                <input placeholder="Digite Seu Sobrenome" type="text" id="LastName" name="last_name"
                                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-black" />
                            </div>

                            <div class="col-span-6">
                                <label for="Email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                    Email
                                </label>

                                <input placeholder="Digite Seu Email" type="email" id="Email" name="email"
                                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:dark:text-black" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="Password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                    Senha
                                </label>

                                <input placeholder="Digite Sua Senha" type="password" id="Password" name="password"
                                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-black" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="PasswordConfirmation"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                    Confirme Sua Senha
                                </label>

                                <input placeholder="Confirme Sua Senha" type="password" id="PasswordConfirmation" name="password_confirmation"
                                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-black" />
                            </div>
                            <div class="col-span-6">
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    Ao criar minha conta eu concordo com
                                    <a href="#" class="text-gray-700 underline dark:text-gray-200">
                                        termos e condições
                                    </a>
                                    e
                                    <a href="#" class="text-gray-700 underline dark:text-gray-200">
                                        política e privacidade
                                    </a>
                                </p>.
                            </div>

                            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                                <button
                                    type="submit" class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500 dark:hover:bg-blue-700 dark:hover:text-white">
                                    Criar Conta
                                </button>

                                <p class="mt-4 text-sm text-gray-500 sm:mt-0 dark:text-gray-400">
                                    Já tem uma conta ?
                                    <a href="{{route('login')}}" class="text-gray-700 underline dark:text-gray-200">Log in</a>.
                                </p>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </section>
    </body>
@endsection
