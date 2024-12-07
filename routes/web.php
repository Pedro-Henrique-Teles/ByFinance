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

//Rotas de Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//-------------------------------------------------------------------

//Rotas Financeiro
Route::get('/financeiro', [FinanceiroController::class, 'showFinanceiro'])->name('financeiro');
//--------------------------------------------------------------------


