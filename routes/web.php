<?php


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

Route::get('/Home', 'controllerUsuario@Sistema');

Route::get('/SignOut','controllerUsuario@SignOut')->name('sair');

Route::get('/cadastro/{tipo}', 'controllerUsuario@Cadastro');

Route::get('/Home/{tipo}', 'controllerUsuario@RotasSistema');

Route::post('/CadastroFisico','controllerFisico@Cadastro');

Route::post('/CadastroJuridico','controllerJuridico@Cadastro');

Route::get('/Esqueci',function(){
    return view('Esqueci');
});

Route::post('/Recuperar', 'controllerUsuario@EsqueciSenha');

Route::get('/Download/{tipo}', function ($tipo){
    switch($tipo){
        case 'android':{
            $apk = public_path(). "/download/build/app-debug.apk";
            return Response::download($apk, 'revise.apk', []);
        }
        case 'ios':{
            return view('aplicativo');
        }
        default:{

        }
    }
});
