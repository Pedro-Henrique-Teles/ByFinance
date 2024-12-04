<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/financeiro', function() {
    return view('financeiro');
});

Route::get('/login', function() {
    return view('telaLogin');
});