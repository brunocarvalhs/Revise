<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revise- @yield('titulo')</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bulma.min.css') }}">
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/node_modules/chart.js/dist/Chart.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sistema.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    @yield('style')
    <script src="/vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.5/push.js"></script>
    <script src="/node_modules/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="/node_modules/chart.js/dist/Chart.bundle.min.js" type="text/javascript"></script>
    <script src="{{asset('js/wow.js')}}" type="text/javascript" async="true" defer></script>
    <script src="{{asset('js/sweetalert.min.js')}}" type="text/javascript" async="true" defer></script>
    <script src="{{asset('js/index.js')}}" type="text/javascript" async="true" defer></script>
    <script src="{{ asset('js/progressbar.js') }}" type="text/javascript" async="true" defer></script>
    <script src="{{ asset('js/sistema.js') }}" type="text/javascript" async="true" defer></script>
    <script src="/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    @yield('script')
    @yield('mensagem')
    @include('componentes.SairSistema')
</head>

<body id="sistemaJ" class="bg-light container-fluid semPadding" onload="disableJuridico()">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-0 menusuperior">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark barra_nav sistema_navbar">
                    <a class="navbar-brand" href="{{ url('/Painel') }}">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/logo.png') }}" width="50" height="50" alt="Revise" class="d-inline-block align-top">
                            </div>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link h4">Menu</a>
                            </li>
                            <li class="nav-item @yield('menu_inicio')">
                                <a class="nav-link" href="{{ url('/Painel') }}">Início</a>
                            </li>
                            <li class="nav-item @yield('menu_perfil')">
                                <a class="nav-link" href="{{ url('/Painel/Perfil') }}">Perfil</a>
                            </li>
                            <li class="nav-item @yield('menu_anuncios')">
                                <a class="nav-link" href="{{ url('/Painel/Anuncio') }}">Anúncios</a>
                            </li>
                        </ul>
                        <div class="form-inline my-2 my-lg-0">
                            <button class="btn btn-outline-danger my-2 my-sm-0" onclick="Sair()" type="button">Sair</button>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Menu lateral-->
            <div class="col-0 col-sm-0 col-md-0 col-lg-0 col-xl-2 responsivo">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="page-wrapper chiller-theme toggled">
                                <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                                    <i class="fas fa-bars"></i>
                                </a>
                                <nav id="sidebar" class="sidebar-wrapper">
                                    <div class="sidebar-content">
                                        <div class="sidebar-brand">
                                            <a class="navbar-brand" href="{{ url('/Painel') }}">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="{{ asset('img/logo.png') }}" width="50" height="50" alt="Revise" class="d-inline-block align-top">
                                                    </div>
                                                    <div class="col-8">
                                                    <label class="tituloMenu">Revise</label>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="sidebar-header">
                                            <div class="user-pic">
                                                <img class="img-responsive img-rounded" src="{{ asset('img/user.jpg') }}" width="50" height="50" alt="Revise" class="d-inline-block align-top alig">
                                            </div>
                                            <div class="user-info">
                                                <br>
                                                <span class="user-name">
                                                    {{ $Juridico->getNomeFantasia() }}
                                                </span>
                                                <span class="user-role">
                                                    {{ $Juridico->getCNPJ() }}
                                                </span>
                                                <span class="user-role">

                                                </span>
                                            </div>
                                        </div>
                                        <!-- sidebar-search  -->
                                        <div class="sidebar-menu">
                                            <ul>
                                                <li class="header-menu">
                                                    <span>Geral</span>
                                                </li>
                                                <li class="sidebar-content">
                                                    <a href="{{ url('/Painel') }}">
                                                        <i class="fa fa-home fa-fw" aria-hidden="true"></i>
                                                        <span>Início</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-content">
                                                    <a href="{{ url('/Painel/Perfil') }}">
                                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                        <span>Perfil</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-content">
                                                    <a href="{{ url('/Painel/Anuncio') }}">
                                                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                                        <span>Anúncios</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- sidebar-menu  -->
                                    </div>
                                    <!-- sidebar-content  -->
                                    <div class="sidebar-footer rodapeMenu bg-dark">
                                        <div class="col-9">
                                            <button class="btn btn-dark" type="button" onclick="Sair()">
                                                <svg id="i-signout" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="22" height="22" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M28 16 L8 16 M20 8 L28 16 20 24 M11 28 L3 28 3 4 11 4" />
                                                </svg>
                                                Sair
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <div class="dropdown">
                                                <button class="btn btn-dark" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg id="i-settings" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 32 32" width="22" height="22" fill="none"
                                                        stroke="currentcolor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2">
                                                        <path
                                                            d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                        <circle cx="16" cy="16" r="4" />
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu bg-warning"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <form action="{{ route('deletarFisico') }}" onsubmit="return excluirConta()" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn dropdown-item bg-warning">Excluir conta</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COnteudo -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-10 conteudo conteudoTop">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @yield('sistema_juridico')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>
</html>
