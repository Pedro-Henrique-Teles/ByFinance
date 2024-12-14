<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FinanceiroController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotas de Cadastro
Route::get('/cadastro', [UserController::class, 'create'])->name('cadastro.create'); // GET para exibir o formulário
Route::post('/cadastro/create', [UserController::class, 'store'])->name('cadastro.store');  // POST para salvar os dados
// ------------------------------------------------------------------

//Rotas de Login e Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login/auth', [AuthController::class, 'authUser'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//-------------------------------------------------------------------

//Rotas Financeiro Autenticadas com Middlewaresx
Route::middleware(['auth'])->group(function(){
    Route::get('/financeiro', [FinanceiroController::class, 'showFinanceiro'])->name('financeiro');
});
//--------------------------------------------------------------------


