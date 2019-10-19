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

Route::post('/SignIn', 'controllerUsuario@SignIn')->name('login');

Route::get('/cadastro/{tipo}', 'controllerUsuario@Cadastro');

Route::post('/CadastroFisico','controllerFisico@Cadastro');

Route::post('/CadastroJuridico','controllerJuridico@Cadastro');

Route::get('/Esqueci',function(){
    return view('Esqueci');
});

Route::post('/Recuperar', 'controllerUsuario@EsqueciSenha');

Route::get('/Download/{tipo}', 'controllerUsuario@getDownload');


//Rotas Paticulares

//--------------- Fisico ------------------------

Route::group(['middleware' => 'Fisico'], function () {
    // * Inicio
    Route::get('/Home','controllerFisico@Index');
    // * Perfil
    Route::get('/Home/Perfil','controllerFisico@LerPerfil');//Ler
    Route::put('/Home/Perfil','controllerFisico@AlterarPerfil');//Alterar
    Route::delete('/Home/Perfil', 'controllerFisico@DeletarPerfil');//Deletar
    // * Veiculos
    Route::get('/Home/Veiculos','controllerFisico@LerVeiculos');//Ler
    Route::post('/Home/Veiculos','controllerFisico@CriarVeiculos');//Criar
    Route::put('/Home/Veiculos','controllerFisico@AlterarVeiculos');//Alterar
    Route::delete('/Home/Veiculo', 'controllerFisico@DeletarVeiculos');//Deletar
    Route::get('/Home/Veiculo/{Placa}','controllerFisico@DetalhesVeiculo');//Criar
    Route::post('/Home/Veiculo/{Placa}','controllerFisico@InserirQuilometragem');//Criar
    // * Anuncios
    Route::get('/Home/Anuncio','controllerAnuncio@PesquisaFisico')->name('pesquisa');;//Ler
    Route::get('/Home/Anuncios', 'controllerAnuncio@ListaAnunciosFisico');
    Route::get('/Home/Anuncios/{id?}','controllerAnuncio@DetalhesAnuncios');
    // * Notificacao
    Route::get('/Home/Notificacao','controllerFisico@LerNotificacao');//Ler
    Route::put('/Home/Notificacao','controllerFisico@AlterarNotificacao');//Alterar
    Route::delete('/Home/Notificacao', 'controllerFisico@DeletarNotificacao');//Deletar
});

// ------------ Juridico ------------
Route::group(['middleware' => 'Juridico'], function () {
    // * Inicio
    Route::get('/Painel','controllerJuridico@Index');//Ler
    // * Perfil
    Route::get('/Painel/Perfil','controllerJuridico@LerPerfil');//Ler
    //Route::put('/Painel/Perfil','');//Alterar
    //Route::delete('/Painel/Perfil', '');//Deletar
    // * Anuncios
    Route::get('/Painel/Anuncio','controllerAnuncio@ControlerDeAnuncioJuridico');//Ler
    //Route::post('/Painel/Anuncios','');//Criar
    //Route::put('/Painel/Anuncios','');//Alterar
    //Route::delete('/Painel/Anuncios/{anuncio}', '');//Deletar
    // * Inidices
    Route::get('/Painel/Indice','controllerAnuncio@ControlerDeIndiceJuridico');



    Route::get('Indices/Quantidade','controllerAnuncio@IndiceTipo')->name('qt');
    Route::get('Indices/Anuncios','controllerAnuncio@IndiceAnuncios')->name('an');//Criar
 });
