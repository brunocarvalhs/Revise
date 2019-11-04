@extends('template/padrao')

@section('titulo', 'Home')

@section('menu_home','active')

@section('conteudo')
    <!-- Apresentação -->
    <br><br>
    <section class="bg-dark espaco">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-0 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class=" text-warning text_definition">
                                PRATICIDADE E SEGURANÇA QUE VOCÊ EXIGE?
                            </div>
                            <p class="text-definition2 text-light">REVISE SUAS MANUTENÇÕES USANDO O SISTEMA DE
                                NOTIFICAÇÃO PREDITIVA E
                                COMPARE PREÇOS ANTES DA TROCA DOS COMPONENTES NA ABA DE ANÚNCIOS DOS FORNECEDORES</p>
                        </div>
                        <div class="col-0 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <img src="img/note_app.png" id="icone">
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sobre o revise -->
    <section class="backgroundWhite" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-12"></div>
                <video class=" w-100" height="450" alt="..." controls muted autoplay allowfullscreen>
                    <source src="img/pitch_oficial.mp4" type="video/mp4">
            </div>
        </div>
    </section>
    <!-- Planos-->
    <section class="backgroundYellow">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tituloBranco">
                    <h1>Planos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover">
                    <div class="card tamanhoCard">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Standart</h5>
                            <p class="card-text">
                                <ul>
                                    <li class="planos_padding">Gratuito</li>
                                    <li class="planos_padding">Máximo de 2 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)</li>
                                    <li class="planos_padding">Visualização dos anúncios postados pelos fornecedores
                                    </li>
                                    <div class="vazia"></div>
                                </ul>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover">
                    <div class="card tamanhoCard">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Gold</h5>
                            <p class="card-text">
                                <ul>
                                    <li class="planos_padding">R$ 9,99 p/ mês</li>
                                    <li class="planos_padding">Máximo de 5 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)</li>
                                    <li class="planos_padding">Visualização dos anúncios postados pelos fornecedores
                                    </li>
                                    <div class="vazia"></div>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Aplicativo section -->
    <section class="backgroundBlack bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="row">
                        <div class="Texto ">
                            <!-- Titulo do texto -->
                            <header>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tituloPreto">
                                    <h1 class="text-white">Aplicativo e OBD2</h1>
                                </div>
                            </header>
                            <!-- Texto -->
                            <section>
                                <p>

                                </p>
                            </section>
                            <!-- Rodapé -->
                            <footer>
                                <div class="container">
                                    <div class="row DownloadApp center">
                                        <div
                                            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 iconAppDownload center margem">
                                            <a href="{{ url('/Download/android') }}">
                                                <img src="img/button_download_android.png" class="">
                                            </a>
                                        </div>
                                        <div
                                            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 iconAppDownload center margem">
                                            <a href="{{ url('/Download/ios') }}">
                                                <img src="img/button_download_ios.png" class="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
                    <img src="img/AppRevise.png" class="AppSmart wow bounceInRight center"
                     data-wow-duration="2s">
                </div>
            </div>
        </div>
    </section>
    <!--Obd2 section-->
    <section class="backgroundBlack bg-dark">
        <div class="container">
            <!--Passo a passo-->
            <div class="col-12">
                <div class="card text-center h-100 card_hover">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <img src="img/obd2.jpg" class=" h-75 w-75">
                                <h5 class="card-title text-center">Instale</h5>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <img src="img/bluetooth.png" class="CardIcon h-75 w-25">
                                <h5 class="card-title text-center">Conecte</h5>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <img src="img/right.png" class="CardIcon h-75 w-50">
                                <h5 class="card-title text-center">Tudo pronto!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        </div>
    </section>
    <!-- Desenvolvedores -->
    <section class="backgroundWhite">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                    <h1>Time de Desenvolvedores</h1>

                </div>
            </div>
            <div class="row space">
                <div class="col-2 col-sm-0 col-md-0 col-lg-0 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-2 col-lg-3 col-xl-1">
                    <div class="card card_align" style="width: 12rem;">
                        <img src="img/integrantes/fe.jpeg" class="card-img-top rounded-circle foto" alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">Analista</p>
                            <p class="card-text text-secondary descricao">Fernanda Pereira</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-0 col-md-0 col-lg-0 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-2 col-lg-2 col-xl-1">
                    <div class="card card_align" style="width: 12rem;">
                        <img src="img/integrantes/lucas.jpeg" class="card-img-top rounded-circle foto"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">Cientista de Dados</p>
                            <p class="card-text text-secondary descricao">Lucas Juan</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-0 col-md-3 col-lg-0 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-2 col-lg-2 col-xl-1">
                    <div class="card  card_align" style="width: 12rem;">
                        <img src="img/integrantes/bruno.jpeg" class="card-img-top rounded-circle foto"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">Front-end</p>
                            <p class="card-text text-secondary descricao">Bruno Silva</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-2 col-md-0 col-lg-2 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-2 col-lg-3 col-xl-1">
                    <div class="card card_align" style="width: 12rem;">
                        <img src="img/integrantes/luiz.jpeg" class="card-img-top rounded-circle foto" alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">Designer</p>
                            <p class="card-text text-secondary descricao">Luiz Marcelo </p>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-2 col-md-0 col-lg-0 col-xl-1"></div>
                <div class="col-10 col-sm-10 col-md-2 col-lg-3 col-xl-1">
                    <div class="card card_align" style="width: 12rem;">
                        <img src="img/integrantes/katry.jpeg" class="card-img-top rounded-circle foto"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text text-secondary h5 descricao">Back-end</p>
                            <p class="card-text text-secondary descricao">Katryel Menezes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')

@endsection
