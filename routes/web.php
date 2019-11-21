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

Route::get('/voltar', function(){
    return redirect('/');
})->name('iwillbeback');//Referencias do Pedrão

Route::post('/Suporte', function(){
    return redirect('/');
});

//Rotas Paticulares

//--------------- Fisico ------------------------

Route::group(['middleware' => 'Fisico'], function () {
    // * Inicio
    Route::get('/Home','controllerFisico@Index');
    // * Perfil
    Route::get('/Home/Perfil','controllerFisico@LerPerfil');//Ler
    Route::put('/Home/Perfil','controllerFisico@AlterarPerfil')->name('atualizarFisico');//Alterar
    Route::delete('/Home/Perfil', 'controllerFisico@DeletarPerfil');//Deletar
    // * Veiculos
    Route::get('/Home/Veiculos','controllerVeiculo@LerVeiculos');//Ler
    Route::post('/Home/Veiculos','controllerVeiculo@CriarVeiculos')->name('veiculo');//Criar
    Route::put('/Home/Veiculos','controllerVeiculo@AlterarVeiculos');//Alterar
    Route::delete('/Home/Veiculos/{placa?}', 'controllerVeiculo@DeletarVeiculo')->name('deletar');//Deletar
    Route::get('/Home/Veiculos/{placa?}','controllerVeiculo@DetalhesVeiculo');
    Route::get('/Home/Quilometragem/{Placa?}','controllerVeiculo@InserirQuilometragem')->name('quilomatragem');
    // * Anuncios
    Route::get('/Home/Anuncio','controllerAnuncio@PesquisaFisico')->name('pesquisa');;//Ler
    Route::get('/Home/Anuncios', 'controllerAnuncio@ListaAnunciosFisico');
    Route::get('/Home/Anuncios/{id?}','controllerAnuncio@DetalhesAnuncios');
    // * Notificacao
    Route::get('/Home/Notificacao','controllerCheck@listaNotificacoes');//Ler
    Route::put('/Home/Notificacao','controllerFisico@AlterarNotificacao');//Alterar
    Route::delete('/Home/Notificacao', 'controllerCheck@DeletarNotificacao')->name('deletarNotificacao');//Deletar
    Route::post('/Home/Notificacao','controllerCheck@VerificarVeiculo')->name('notificacao');
});

// ------------ Juridico ------------
Route::group(['middleware' => 'Juridico'], function () {
    // * Inicio
    Route::get('/Painel','controllerJuridico@Index');//Ler
    // * Perfil
    Route::get('/Painel/Perfil','controllerJuridico@LerPerfil');//Ler
    Route::put('/Painel/Perfil','controllerJuridico@AlterarPerfil')->name('atualizarJuridico');//Alterar
    //Route::delete('/Painel/Perfil', '');//Deletar
    // * Anuncios
    Route::get('/Painel/Anuncio','controllerAnuncio@ControlerDeAnuncioJuridico');//Ler
    Route::post('/Painel/Anuncios','controllerAnuncio@CadastroAnuncio')->name('anuncio');//Criar
    //Route::put('/Painel/Anuncios','');//Alterar
    Route::delete('/Painel/Anuncios/{anuncio}', 'controllerAnuncio@deletarAnuncio')->name('deletarAnuncio');//Deletar
    // * Inidices
    Route::get('Indices/Quantidade','controllerIndice@IndiceTipo')->name('qt');
    Route::get('Indices/Anuncios','controllerIndice@IndiceAnuncios')->name('an');//Criar
 });
