<?php

$FotoDePerfil = 'img/user.jpg';
$nome = 'Marina';
$sobrenome = 'Luna Sales';
$placa = 'EYT-4550';
$modelo = 'PRISMA';
$peças = 2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/sistema.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Revise - Início</title>
</head>

<body class="bg-light">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-0 col-lg-1 col-xl-1">
            <!--Menu superior responsivo-->
            <div class="col-12 col-sm-12 col-md-0 col-lg-0 col-xl-0 menusuperior">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/logo.png" width="50" height="50" alt="Revise" class="d-inline-block align-top">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="sistema.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="perfilFisico.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="notificacoes.php">Notificações</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Veículos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Serviços e Produtos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--Menu lateral-->
            <div class="col-0 col-sm-0 col-md-3 col-lg-3 col-xl-3 responsivo">
                <div class="container-fluid">
                    <div class="row">
                        <div class="page-wrapper chiller-theme toggled">
                            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                                <i class="fas fa-bars"></i>
                            </a>
                            <nav id="sidebar" class="sidebar-wrapper">
                                <div class="sidebar-content">
                                    <div class="sidebar-brand">
                                        <a class="navbar-brand" href="#">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="img/logo.png" width="50" height="50" alt="Revise" class="d-inline-block align-top alig">
                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                    <div class="sidebar-header">
                                        <div class="user-pic">
                                            <img class="img-responsive img-rounded" src="<?php echo $FotoDePerfil ?>" alt="User picture">
                                        </div>
                                        <div class="user-info">
                                            <span class="user-name"><strong>
                                                    <?php echo $nome ?></strong>
                                                <?php echo $sobrenome ?>
                                            </span>
                                            <span class="user-role">
                                                <?php echo $placa ?></span>
                                            <span class="user-role">
                                                <?php echo $modelo ?></span>
                                        </div>
                                    </div>
                                    <!-- sidebar-search  -->
                                    <!-- sidebar-search  -->
                                    <div class="sidebar-menu">
                                        <ul>
                                            <li class="header-menu">
                                                <span>Menu</span>
                                            </li>
                                            <li class="sidebar-content">
                                                <a href="sistema.php">
                                                    <i class="fa fa-home fa-fw" aria-hidden="true"></i>
                                                    <span>Início</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-content">
                                                <a href="perfilFisico.php">
                                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                    <span>Perfil</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-content">
                                                <a href="notificacoes.php">
                                                    <i class="fa fa-wrench" aria-hidden="true"></i>
                                                    <span>Notificações</span>
                                                    <span class="badge badge-pill badge-danger">
                                                        <?php echo $peças; ?></span>
                                                </a>
                                            </li>
                                            <li class="sidebar-content">
                                                <a href="#">
                                                    <i class="fa fa-car" aria-hidden="true"></i>
                                                    <span>Veículos</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-content">
                                                <a href="#">
                                                    <i class="fa fa-building" aria-hidden="true"></i>
                                                    <span>Serviços e Produtos</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- sidebar-menu  -->
                                </div>
                                <!-- sidebar-content  -->
                                <div class="sidebar-footer rodapeMenu bg-dark">
                                    <div class="col-9"></div>
                                    <div class="col-2">
                                        <div class="dropdown">
                                            <button class="btn btn-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg id="i-settings" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="22" height="22" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                    <circle cx="16" cy="16" r="4" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item bg-warning" href="">Excluir conta</a>
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
        <div class="col-12 col-sm-12 col-md-0 col-lg-9 col-xl-9">
            @yield('sistema_fisico')
        </div>
    </div>
</body>

<script src="{{asset('js/jquery.min.js')}}" type="text/javascript" async="true" defer></script>
<script src="{{asset('js/jquery.mask.js')}}" type="text/javascript" async="true" defer></script>
<script src="{{asset('js/popper.min.js')}}" type="text/javascript" async="true" defer></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript" async="true" defer></script>
<script src="{{asset('js/wow.js')}}" type="text/javascript" async="true" defer></script>
<script src="{{asset('js/sweetalert.min.js')}}" type="text/javascript" async="true" defer></script>
<script src="{{asset('js/index.js')}}" type="text/javascript" async="true" defer></script>
<script src="{{asset('js/progressbar.js')}}" type="text/javascript" async="true" defer></script>
<script src="{{asset('js/sistema.js')}}" type="text/javascript" async="true" defer></script>

</html>
