<?php

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

Route::post('/Home', 'controllerUsuario@SignIn');

Route::get('/cadastro/{tipo}', 'controllerUsuario@Cadastro');

Route::get('/Home', function () {
    if(( (!empty($_SESSION['autentic'])) || (!isset($_SESSION['autentic'])) )){
        switch($_SESSION['autentic']){
            case '1':
                return view('Fisico\Perfil');
            break;
            case '2':
                return view('Juridico\Perfil');
            break;
            default:
                return back();
            break;
        }
    }
    else{
        return back();
    }
});

