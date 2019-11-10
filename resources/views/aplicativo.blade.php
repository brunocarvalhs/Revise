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
<br><br>
</section>
<section class="backgroundWhite" id="requisitos">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tituloPreto mt-5">
                <h1 class="text-dark">Requisitos do aplicativo</h1>
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
        <form action="" method="POST" onsubmit="">
            <div class="formularioSuport row tituloBranco">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <span class="h6">Digite seu e-mail aqui:</span>
                    <div class="input-group input-group-lg p-2">
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <span class="h6">Como podemos ajudar?</span>
                    <div class="input-group p-2">
                        <textarea class="form-control resize" aria-label="With textarea" rows="4"></textarea>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <div class="input-group suporteBotao">
                        <button type="button" class="btn btn-warning porcentagem" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<!-- stats.js lib -->
<style>
    /* ---- reset ---- */
    body {
        margin: 0;
    }

    /* ---- particles.js container ---- */
    #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #26282b;
        background-image: url("");
        background-repeat: no-repeat;
        background-size:inherit;
        background-position: 50% 50%;
    }    
</style>
<script>
    particlesJS("particles-js", { "particles": { "number": { "value": 80, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#ffffff" }, "shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" }, "polygon": { "nb_sides": 5 }, "image": { "src": "img/github.svg", "width": 100, "height": 100 } }, "opacity": { "value": 0.5, "random": false, "anim": { "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false } }, "size": { "value": 3, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } }, "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 }, "move": { "enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false, "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }, "modes": { "grab": { "distance": 400, "line_linked": { "opacity": 1 } }, "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 }, "repulse": { "distance": 200, "duration": 0.4 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } } }, "retina_detect": true }); var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function () { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>
@endsection

@section('script')

@endsection