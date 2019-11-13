@extends('template/padrao')

@section('titulo', 'Aplicativo')

@section('menu_aplicativo','active')

@section('conteudo')
<section class="bg-dark pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 TituloAplicativoIntroducao">
                <h1 class="tituloBranco espaco display-3 mt-5">
                    Revise App
                </h1>
            </div>
            <div class="col-0 col-sm-0 col-md-12 col-lg-1 col-xl-1">
                <img src="{{ asset('img/app.png') }}" class="smartphoneIntroducao wow bounceInRight pt-3"
                    data-wow-duration="1.5s">
            </div>
        </div>
    </div>
</section>
<!-- particles.js container -->

<div id="particles-js"></div>
<div class="container">
        <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-light pt-5">
                    <h1>O que é o Revise App?</h1>
                    <br>
                </div>
        </div>
</div>
        <div class="row">
            <div class="col-1 col-sm-6 col-md-6 col-lg-6 col-xl-5">
                <img id="imgRequisito" src="{{ asset('img/appimg.png') }}" class="AppSmart pl-5">
            </div>
            <div class="col-11 col-sm-6 col-md-6 col-lg-6 col-xl-5 pt-4">
                <p class="text-light h5 mt-5">
                    Acesse as funcionalidades do sistema em seu smartphone ou
                    tablet a qualquer momento e ainda confira sua quilometragem com a tecnologia
                    do sensor Obd2, caso seja usuário Gold
                </p>
            </div>
        </div>
</div>
</section>
<section class="backgroundWhite" id="requisitos">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tituloPreto ">
                <h1 class="text-dark mt-3">Requisitos do aplicativo</h1>
                <hr>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class="card card_hover shadow-lg mb-5">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-dark " type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                    id="android">
                                    Clique para ver sobre Android
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>

                                </p>

                                <table class="table">
                                    <tr>
                                        <th scope="col">Categorias</th>
                                        <th scope="col">Requisitos</th>
                                    </tr>
                                    <tr>
                                        <td>Android</td>
                                        <td>5.0 ou superior</td>
                                    </tr>
                                    <tr>
                                        <td>Dispositivo</td>
                                        <td>Smartphone e tablet</td>
                                    </tr>
                                    <tr>
                                        <td>Idioma</td>
                                        <td>Português</td>
                                    </tr>
                                </table>
                                <br><br>
                                <table class="table">
                                    <tr>
                                        <th scope="col">Funções</th>
                                        <th scope="col">Gratuito</th>
                                        <th scope="col">Pago</th>
                                    </tr>
                                    <tr>
                                        <td>Notificação</td>
                                        <td>1 carro</td>
                                        <td>3 carros</td>
                                    </tr>
                                    <tr>
                                        <td>Perfil</td>
                                        <td>Sim</td>
                                        <td>Sim</td>
                                    </tr>
                                    <tr>
                                        <td>Acesso aos veículos pelo aplicativo</td>
                                        <td>Sim</td>
                                        <td>Sim</td>
                                    </tr>
                                    <tr>
                                        <td>Suporte scanner OBD2</td>
                                        <td>Não</td>
                                        <td>Sim </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card card_hover shadow-lg mb-5">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                    id="IOS">
                                    Clique para ver sobre IOS
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <table class="table">
                                        <tr>
                                            <th scope="col">Categorias</th>
                                            <th scope="col">Requisitos</th>
                                        </tr>
                                        <tr>
                                            <td>IOS </td>
                                            <td>9 ou superior</td>
                                        </tr>
                                        <tr>
                                            <td>Dispositivo</td>
                                            <td>Iphone 5s ou superior / IPad retina ou superior</td>
                                        </tr>
                                        <tr>
                                            <td>Idioma</td>
                                            <td>Português</td>
                                        </tr>
                                    </table>
                                </div>
                                <br><br>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <table class="table">
                                        <tr>
                                            <th scope="col">Funções</th>
                                            <th scope="col">Gratuito</th>
                                            <th scope="col">Pago</th>
                                        </tr>
                                        <tr>
                                            <td>Notificação</td>
                                            <td>1 carro</td>
                                            <td>3 carros</td>
                                        </tr>
                                        <tr>
                                            <td>Perfil</td>
                                            <td>Sim</td>
                                            <td>Sim</td>
                                        </tr>
                                        <tr>
                                            <td>Acesso aos veículos pelo aplicativo</td>
                                            <td>Sim</td>
                                            <td>Sim</td>
                                        </tr>
                                        <tr>
                                            <td>Suporte scanner OBD2</td>
                                            <td>Não</td>
                                            <td>Sim </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img id="imgRequisito" src="{{ asset('img/AppRevise.png') }}" class="AppSmart">
            </div>
        </div>
    </div>
</section>
<section class="backgroundBlack bg-dark" id="suporte">
    <div class="container">
        <div class="row">
            <div class="col-12 tituloBranco">
                <h1>Suporte</h1>
                <hr class="bg-secondary">
            </div>
        </div>
        <div class="row">
            <div class=" col-12 SuporteTexto tituloBranco h6">
                <p>
                    Caso tenha algum problema, insira as informações necessárias no formulário abaixo. Iremos
                    receber
                    sua requisição e retornar o mais rápido possível.
                </p>
                <p>
                    Qualquer dúvida, entre em contato conosco pelas redes sociais, e-mail <a
                        href="mailto:reviseprojeto@gmail.com">reviseprojeto@gmail.com</a> ou pelo telefone: <a
                        href="tel:"></a>
                </p>
            </div>
        </div>
        <form action="{{ url('/Suporte') }}" method="GET">
            <div class="formularioSuport row tituloBranco">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <span class="h6">Digite seu e-mail aqui:</span>
                    <div class="input-group input-group-lg p-2">
                        <input type="email" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg" name="email">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <span class="h6">Como podemos ajudar?</span>
                    <div class="input-group p-2">
                        <textarea class="form-control resize" aria-label="With textarea" rows="4" name="descricao"></textarea>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <div class="input-group suporteBotao">
                        <button type="submit" class="btn btn-warning porcentagem">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@section('script')

@endsection
