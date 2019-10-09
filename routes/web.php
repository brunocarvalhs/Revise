<?php

use App\Http\Controllers\Controller;

session_start();

// Rotas de todos os usuarios
Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/aplicativo', function () {
    return view('aplicativo');
});

Route::get('/plano', function () {
    return view('planos');
});

Route::get('/SignIn', function () {
    return view('login');
});

Route::match(['get', 'post'], '/Home', 'controllerUsuario@SignIn');

Route::get('/cadastro/{tipo}', 'controllerUsuario@Cadastro');
