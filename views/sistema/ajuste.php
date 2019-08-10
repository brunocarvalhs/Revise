<?php
    /**
     * Pagina de ajustes, configuração do usuario 
     * 
     * 
     * Diretorio Pai - View
     * 
     * @author Bruno Silva Carvalho 
     * @version 1.0.0
     */
    session_start();
    $nomePeca = "Correia";
    $nomePeca2 = "Disco de freio";
    $temaBlack = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../_frameworks/_bootstrap_css/bootstrap.css">
    <script src="../_js/script.js"></script>
    <?php
        if($temaBlack == false)
            echo "<link rel='stylesheet' href='../_css/SistemaNormal.css' media='screen'>";
        else
            echo "<link rel='stylesheet' href='../_css/SistemaBlack.css' media='screen'>";
    ?>
</head>

<body>
    <!-- INICIO:Menu -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-revise p-4">
                <img src="../_file/LogoRevise.png" width="120" height="70" alt="Revise">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- submenu home -->
                        <div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2' id="submenu">
                            <a href="./index.php">
                                <div class='card'>
                                    <div class='card-body' id="HomeBackground">
                                        <h2 class="card-title">Home</h2>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <img src="../_file/_icon/home.png" width="120" height="120">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- submenu Perfil -->
                        <div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2' id="submenu">
                            <a href="./perfil.php">
                                <div class='card'>
                                    <div class='card-body'>
                                        <h2 class="card-title">Perfil</h2>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <img src="../_file/_icon/people.png" width="120" height="120">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- submenu Veículo -->
                        <div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2' id="submenu">
                            <a href="./veiculo.php">
                                <div class='card'>
                                    <div class='card-body'>
                                        <h2 class="card-title">Veículo</h2>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <img src="../_file/_icon/veiculo.png" width="120" height="120">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- submenu Peças -->
                        <div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2' id="submenu">
                            <a href="./pecas.php">
                                <div class='card'>
                                    <div class='card-body'>
                                        <h2 class="card-title">Peças</h2>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <img src="../_file/_icon/pecas.png" width="120" height="120">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- submenu Serviços -->
                        <div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2' id="submenu">
                            <a href="./servico.php">
                                <div class='card'>
                                    <div class='card-body'>
                                        <h2 class="card-title">Serviço</h2>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <img src="../_file/_icon/servico.png" width="120" height="120">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- submenu Ajustes -->
                        <div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-1' id="submenu">
                            <a href="./ajuste.php">
                                <div class='card'>
                                    <div class='card-body'>
                                        <h5 class="card-title">Ajustes</h5>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <img src="../_file/_icon/ajuste.png" width="60" height="60">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- submenu home -->
                        <div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-1' id="submenu">
                            <form action="../models/logOut.php"onclick="redirecionarSair()">
                                <!-- Form de saida do sistema -->
                                <div class='card' type="submit">
                                    <div class='card-body'>
                                        <h5 class="card-title">Sair</h5>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <img src="../_file/_icon/Exit.png" width="60" height="60">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-revise">
        <div class="container-fluid">
            <!-- Notificação -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="../_file/_icon/notification-flat.png" width="30" height="30">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                            /**
                             * Lista de componentes na lista de notificação
                             * 
                             * 
                             */
                                //if()
                                    echo "<div class='dropdown-item'>$nomePeca &nbsp;&nbsp;<img class='iconNotificationComp' src='../_file/_icon/perigo.png' width='20' height='20' style='margin-bottom: 5%;'></div>";
                                //else
                                    echo "<div class='dropdown-item'>$nomePeca2 &nbsp;&nbsp;<img class='iconNotificationComp' src='../_file/_icon/atencao.png' width='20' height='20' style='margin-bottom: 5%;'></div>";                     
                            ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../sistema/pecas.php">Ver mais</a>
                </div>
        </div>
        </li>
        <!-- Botão do menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
    </div>
    <!-- FIM:Menu -->
    <!-- Titulo -->
    <div class="container-fluid">
        <div class="row align-items-center">
            <div id="Titulo" class="col-12 col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                <h1>
                    Ajustes
                </h1>
            </div>
        </div>
        <div class="row align-items-center">
            <!-- CONTEUDO -->
            
        </div>
    </div>
</body>
<!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="../_frameworks/_bootstrap_js/bootstrap.js"></script>
<script src="_js/script.js"></script>


</html>