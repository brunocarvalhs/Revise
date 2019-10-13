<?php


// Rotas Publicas
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

Route::get('/SignOut','controllerUsuario@SignOut')->name('sair');

Route::post('/Home', 'controllerUsuario@SignIn');

Route::get('/Home', 'controllerUsuario@Sistema');


//Rotas Paticulares

//--------------- Fisico ------------------------


// * Inicio
Route::get('/Home','controllerFisico@Login')->middleware('Fisico');//Ler
Route::post('/Home','controllerFisico@Login');//Criar
// * Perfil
/*
Route::group(['middleware' => 'Fisico'], function () {
Route::get('/Home/Perfil','');//Ler
Route::post('/Home/Perfil','');//Criar
Route::put('/Home/Perfil','');//Alterar
Route::delete('/Home/Perfil', '');//Deletar
// * Veiculos
Route::get('/Home/Veiculos','');//Ler
Route::post('/Home/Veiculos','');//Criar
Route::put('/Home/Veiculos','');//Alterar
Route::delete('/Home/Veiculo', '');//Deletar
// * Anuncios
Route::get('/Home/Anuncios','');//Ler
// * Notificacao
Route::get('/Home/Notificacao','');//Ler
Route::post('/Home/Notificacao','');//Criar
Route::put('/Home/Notificacao','');//Alterar
Route::delete('/Home/Notificacao', '');//Deletar
}

// ------------ Juridico ------------
Route::group(['middleware' => 'Juridico'], function () {
    // * Inicio
    Route::get('/Painel','');//Ler
    Route::post('/Painel','');//Criar
    // * Perfil
    Route::get('/Painel/Perfil','');//Ler
    Route::post('/Painel/Perfil','');//Criar
    Route::put('/Painel/Perfil','');//Alterar
    Route::delete('/Painel/Perfil', '');//Deletar
    // * Anuncios
    Route::get('/Painel/Anuncios','');//Ler
    Route::post('/Painel/Anuncios','');//Criar
    Route::put('/Painel/Anuncios','');//Alterar
    Route::delete('/Painel/Anuncios/{anuncio}', '');//Deletar
    // Inidices
    Route::get('/Painel/Inidices','');//Ler
    Route::post('/Painel/Inidices','');//Criar
 });


*/
Route::get('/cadastro/{tipo}', 'controllerUsuario@Cadastro');

Route::get('/Home/{tipo}', 'controllerUsuario@RotasSistema');

Route::post('/CadastroFisico','controllerFisico@Cadastro');

Route::post('/CadastroJuridico','controllerJuridico@Cadastro');

Route::get('/Esqueci',function(){
    return view('Esqueci');
});

Route::post('/Recuperar', 'controllerUsuario@EsqueciSenha');

Route::get('/Download/{tipo}', 'controllerUsuario@getDownload');

Route::get('/Anuncio', 'controllerAnuncio@Pesquisa')->name('pesquisa');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
