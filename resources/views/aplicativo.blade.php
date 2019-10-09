@extends('template/padrao')

@section('titulo', 'Aplicativo')

@section('menu_aplicativo','active')

@section('conteudo')
<section class="bg-dark espaco">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-self-start">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 TituloAplicativoIntroducao">
                            <h1 class="tituloBranco Titulo">
                                Aplicativo Revise
                            </h1>
                        </div>
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="img/app.png" class="smartphoneIntroducao wow bounceInRight"
                    data-wow-duration="1.5s">
            </div>
        </div>
    </div>
</section>
<section class="bg-light" id="sobre">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto text-dark">
                    <br><br>
                    <h1>Sobre</h1>
                    <br>
                </div>
            </div>
            <div class="col-12">
                <p class="text-dark h5">

                    Ao adquirir o sensor através do plano Deluxe Edition ou pela compra do pacote App+Obd2, esse
                    dispositivo é conectado ao veículo e
                    acionado. Em seguida, para que as informações cheguem até aplicativo do Revise, é necessário
                    acionar a
                    conexão bluetooth do seu aparelho e logo após, realizar o scanner. Mas o que de fato ele
                    detecta? Veja a seguir:
                    <br><br>
                    <ul>
                        <li class="text-dark h5">Quilometragem para fazer as manutenções preditivas</li>
                        <li class="text-dark h5">Nível de combustível</li>
                    </ul>
                </p>
                </p>
            </div>
        </div>
    </div>
    <br><br>
</section>
<section class="backgroundYellow" id="requisitos">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                <h1 class="text-white">Requisitos do aplicativo</h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class="card card_hover">
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
                                        <td>2 carros</td>
                                        <td>+ de 2</td>
                                    </tr>
                                    <tr>
                                        <td>Perfil</td>
                                        <td>Contém</td>
                                        <td>Contém</td>
                                    </tr>
                                    <tr>
                                        <td>Acesso aos veículos pelo aplicativo</td>
                                        <td> 2 carros</td>
                                        <td> + de 2 </td>
                                    </tr>
                                    <tr>
                                        <td>Suporte scanner OBD</td>
                                        <td> --- </td>
                                        <td> Contém </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card card_hover">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed text-dark" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo" id="IOS">
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
                                            <td> 2 carros</td>
                                            <td> + de 2</td>
                                        </tr>
                                        <tr>
                                            <td>Perfil</td>
                                            <td>Contém</td>
                                            <td>Contém</td>
                                        </tr>
                                        <tr>
                                            <td>Acesso dos veículos pelo aplicativo</td>
                                            <td> 2 carros</td>
                                            <td> + de 2</td>
                                        </tr>
                                        <tr>
                                            <td>Suporte scanner OBD</td>
                                            <td> --- </td>
                                            <td> Contém</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img id="imgRequisito" src="img/nexus5x-landscape.png" class="AppSmart ">
            </div>
        </div>
    </div>
</section>
<section class="backgroundBlack" id="suporte">
    <div class="container">
        <div class="row">
            <div class="col-12 tituloBranco">
                <h1>Suporte</h1>
            </div>
        </div>
        <div class="row">
            <div class=" col-12 SuporteTexto tituloBranco">
                <p>
                    Caso tenha algum problema, insira as informações necessárias no formulário abaixo. Iremos
                    receber
                    sua requisição e retornar o mais rápido possível.
                </p>
                <p>
                    Qualquer dúvida, entre em contato conosco pelas redes sociais, e-mail <a
                        href="mailto:contatoRevise@revise.com">contatoRevise@revise.com</a> ou pelo telefone:<a
                        href="tel:13997934483">+55 (13) 99199-4978.</a>
                </p>
            </div>
        </div>
        <form action="" method="POST" onsubmit="">
            <div class="formularioSuport row tituloBranco">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <span>Digite seu e-mail aqui:</span>
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <span>Como podemos ajudar?</span>
                    <div class="input-group">
                        <textarea class="form-control resize" aria-label="With textarea" rows="4"></textarea>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <div class="input-group suporteBotao">
                        <button type="button" class="btn btn-outline-warning porcentagem"
                            type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@section('script')
<script>
    new WOW().init();
    $(document).ready(function () {
        $("#IOS").click(function () {
            $("#imgRequisito").attr('src', 'img/iphone8spacegrey_landscape.png');
        });
        $('#android').click(function () {
            $("#imgRequisito").attr('src', 'img/nexus5x-landscape.png');
        });
    });
</script>
@endsection
