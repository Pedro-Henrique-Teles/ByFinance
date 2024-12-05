<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Prefixo financeiro adicionado para as rotas
Route::prefix('financeiro')->group(function(){
    
    //Redirecionamento caso o usuario tente entrar apenas na rota /financeiro
    Route::get('/', function(){
        return redirect('financeiro/lancamentos');
    });

    Route::get('/lancamentos', function(){
        return view('Financeiro.lancamentos');
    });

    //Adicionar outras rotas com o prefixo financeiro
});

