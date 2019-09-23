<?php
        $FotoDePerfil = 'img/user.jpg';
        $nome = 'Auto Peças';
        $sobrenome = 'Katry Jonsons';
        $peças = 23;
        $CNPJ = '12.345.678/9101-11';
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
    <link rel="stylesheet" type="text/css" href="/Views/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/sistema.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Revise - Home</title>
</head>

<body>
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
                                        <img src="img/logo.png" width="50" height="50" alt="Revise"
                                            class="d-inline-block align-top">
                                    </div>
                                    <div class="col-8">
                                        <label class="tituloMenu">Revise</label>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-header">
                            <div class="user-pic">
                                <img class="img-responsive img-rounded" src="<?php echo $FotoDePerfil ?>"
                                    alt="User picture">
                            </div>
                            <div class="user-info">
                                <span class="user-name"><strong><?php echo $nome ?></strong>
                                    <?php echo $sobrenome ?>
                                </span>
                                <span class="user-role"><?php echo $CNPJ ?></span>
                            </div>
                        </div>
                        <!-- sidebar-search  -->
                        <div class="sidebar-menu">
                            <ul>
                                <li class="header-menu">
                                    <span>Geral</span>
                                </li>
                                <li class="sidebar-content">
                                    <a href="#">
                                        <i class="fa fa-home fa-fw" aria-hidden="true"></i>
                                        <span>Início</span>
                                    </a>
                                </li>
                                <li class="sidebar-content">
                                    <a href="perfilJuridico.php">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                        <span>Perfil</span>
                                    </a>
                                </li>
                                <li class="sidebar-content">
                                    <a href="#">
                                        <i class="fa fa-wrench" aria-hidden="true"></i>
                                        <span>Anúncios</span>
                                        <span class="badge badge-pill badge-danger"><?php echo $peças; ?></span>
                                    </a>
                                </li>
                                <li class="sidebar-content">
                                    <a href="#">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                        <span>Indice de Acesso</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- sidebar-menu  -->
                    </div>
                    <div class="sidebar-footer rodapeMenu bg-dark">                                                           
                        <div class="col-9"></div>
                        <div class="col-2">
                            <div class="dropdown">
                                <button class="btn btn-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg id="i-settings" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="22" height="22"
                                        fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <path
                                            d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                        <circle cx="16" cy="16" r="4" />
                                    </svg>
                                </button>
                                <div class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="">Excluir conta</a>
                                </div>
                            </div>
                        </div>                                 
                      </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="js/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="./js/wow.js"></script>
<script src="./js/index.js"></script>
<script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="./js/sweetalert.min.js"></script>
<script src="js/progressbar.js"></script>
<script src="js/sistema.js"></script>
<script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</html>
