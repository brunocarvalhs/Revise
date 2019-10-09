<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Revise - @yield('titulo')</title>
        <link rel="shortcut icon" href="img/logo.ico                     "/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css   ">
        <link rel="stylesheet" type="text/css" href="css/sistema.css     ">
        <link rel="stylesheet" type="text/css" href="css/animate.min.css ">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Cairo|Rubik&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/index.css       ">
    </head>
<body>
    <!-- Menu -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark barra_nav">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" width="50" height="50" alt="Revise">
                </a>
                <!-- Botão do menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links do menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item @yield('menu_home')">
                            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown @yield('menu_planos')">
                            <a class="nav-link" href="{{ url('/plano') }}" id="planoMenu">
                                Planos
                            </a>
                        </li>
                        <li class="nav-item dropdown @yield('menu_aplicativo')">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aplicativo</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="{{ url('/aplicativo') }}">Sobre o Aplicativo Revise</a>
                                <a class="dropdown-item bg-light" href="{{ url('/aplicativo#suporte') }}">Suporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown @yield('menu_empresa')">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="{{ url('/sobre') }}">Quem Somos?</a>

                                <a class="dropdown-item bg-light" href="{{ url('/sobre') }}">Trabalhar Conosco</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" onclick="signUp()"
                            type="button">Cadastar</button>
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" onclick="signIn()"
                            type="button">Acessar</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Conteudo -->
    <div>
        @yield('conteudo')
    </div>
    <!-- Rodapé -->
    <footer class="RodapeLight navbar-light bg-light">
        <div class="container-fluid">
            <div class="row navbar ConteudoRodape">
                <div class="col-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <ul class="nav">
                        <li class="nav-item">
                            <div class="nav-link">© 2019 Revise, Inc.</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Termos de uso</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="img/icon/facebookIcon.png" class="redesocialIcones" alt="Github-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="img/icon/InstagramIcon.png" class="redesocialIcones" alt="Github-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="img/icon/YoutubeIcon.png" class="redesocialIcones" alt="Github-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="img/icon/twitterIcon.png" class="redesocialIcones" alt="Github-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="img/icon/githubIcon.png" class="redesocialIcones" alt="Github-revise" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="js/jquery.min.js" type="text/javascript" async="true" defer></script>
<script src="js/popper.min.js" type="text/javascript" async="true" defer></script>
<script src="js/bootstrap.min.js" type="text/javascript" async="true" defer></script>
<script src="js/wow.js" type="text/javascript" async="true" defer></script>
<script src="js/sweetalert.min.js" type="text/javascript" async="true" defer></script>
<script src="js/jquery.mask.js" type="text/javascript" async="true" defer></script>
<script src="js/index.js" type="text/javascript" async="true" defer></script>
@yield('script')
</html>
