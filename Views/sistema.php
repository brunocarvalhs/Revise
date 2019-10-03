<?php

    $FotoDePerfil = 'img/user.jpg';
    $nome = 'Bruno';
    $sobrenome = 'Silva Carvalho';
    $placa = 'ABC-1234';
    $modelo = 'Corsa Classic';
    $peças = 7;
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
    <title>Revise - Home</title>
</head>

<body>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                <a class="nav-link" href="#">Notificações</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Peças</a>
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
                                            <a href="#">
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
<div class="row">
    <div class="col-1 col-sm-1 col-md-1 col-lg-3 col-xl-3"></div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-9 col-xl-9" id="divPadding">
        <!--Legenda-->
        <div class="card text-white bg-secondary mb-3" style="width: 100%;">
            <div class="card-header text-center">Legenda</div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-3">
            <div class="progress">
                <div class="progress-bar bg-light" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>    
            <div class=" text-light">Contagem zerada</div>
            </div>  
            <div class="col-3">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class=" text-light">Longe do vencimento</div>
            </div>  
            <div class="col-3">
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class=" text-light">Ops! Fique atento</div>
            </div>         
            <div class="col-3">
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <div class=" text-light">Peça vencida</div>
            
            </div>
            </div>
            </div>         
            </div>
            </div>
            </div>
<!--Fim legenda-->
<br><br>
<!--Card-->
<div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-3 col-xl-3"></div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-9 col-xl-9" id="divPadding">

<div class="card bg-dark w-100" >
<div class="card-body">
     <!--Título do card-->
    <div class="container" >
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <label class="h3 text-white">Óleo do motor</label>
                    </div>
                </div>
            </div>
        </div>
        <!--Progressbars-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <label class="h5 text-white-50">KM</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
        <br>
        <div class="container">
            <div class="row">
                <label class="h5 text-white-50">Tempo</label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
</div>
<!--Card-->
<div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-3 col-xl-3"></div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-9 col-xl-9" id="divPadding">
            <div class="card bg-dark w-100" >
    <div class="card-body">
         <!--Título do card-->
        <div class="container" >
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <label class="h3 text-white">Filtro de ar</label>
                        </div>
                    </div>
                </div>
            </div>
            <!--Progressbars-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <label class="h5 text-white-50">KM</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <label class="h5 text-white-50">Tempo</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                    </div>
                </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
    </div>
    <!--Card-->
<div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-3 col-xl-3"></div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-9 col-xl-9" id="divPadding">
            <div class="card bg-dark w-100" >
    <div class="card-body">
         <!--Título do card-->
        <div class="container" >
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <label class="h3 text-white">Pastilhas de freio</label>
                        </div>
                    </div>
                </div>
            </div>
            <!--Progressbars-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <label class="h5 text-white-50">KM</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <label class="h5 text-white-50">Tempo</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
    </div>
    
    
    <!--Card-->
    <div class="row">
            <div class="col-1 col-sm-1 col-md-1 col-lg-3 col-xl-3"></div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-9 col-xl-9" id="divPadding">
                <div class="card bg-dark w-100" >
        <div class="card-body">
             <!--Título do card-->
            <div class="container" >
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <label class="h3 text-white">Pneus</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Progressbars-->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <label class="h5 text-white-50">KM</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <label class="h5 text-white-50">Tempo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
            <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-0"></div>
        </div>
    </div>
    </div>
    </div>
    <br>
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

