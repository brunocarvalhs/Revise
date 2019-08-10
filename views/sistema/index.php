<?php
    /**
     * Pagina home
     * 
     * 
     * Diretorio Pai - View
     * 
     * @author Bruno Silva Carvalho 
     * @version 1.0.0
     */
    session_start();
    //Nome do componente
    $nomePeca = "Correia";
    $nomePeca2 = "Disco de freio";
    //Calculo de quilometragem
    $quilometragemAtual = 29999;
    $quilometragemVencimento = 30000;
    $quilometragem = $quilometragemAtual%$quilometragemVencimento;
    //Calculo de datas
    date_default_timezone_set('America/Sao_Paulo');
    $hoje = date("Y-m-d");
    $data = "2019-06-25";
    $dif = strtotime($data) - strtotime($hoje);
    $dataFinal = 1-($dif / 86400)/100;
    $temaBlack = true ;
    $contador = $_SESSION['contador'];
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../_frameworks/_bootstrap_css/bootstrap.css">
    <script src="../_js/script.js"></script>
    <?php
        if($temaBlack == false)
        {
            echo "<link rel='stylesheet' href='../_css/SistemaNormal.css' media='screen'>";
            echo "<style>body{background-image: url('../_file/_background/White.png');background-repeat: no-repeat;background-size: 100%;background-color: #CDCCCA;</style>";
        }
        else
        {
            echo "<link rel='stylesheet' href='../_css/SistemaBlack.css' media='screen'>";
            echo "<style>body{background-image: url('../_file/_background/Black.png');background-repeat: no-repeat;background-size: 100%;background-color: #AC8E9A;}</style>";
        }
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
                                        <h2 class="card-title" style="color:black;">Home</h2>
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
                                        <h2 class="card-title" style="color:black;">Perfil</h2>
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
                                        <h2 class="card-title" style="color:black;">Veículo</h2>
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
                                        <h2 class="card-title" style="color:black;">Peças</h2>
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
                                        <h2 class="card-title"  style="color:black;">Serviço</h2>
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
                                        <h5 class="card-title"  style="color:black;">Ajustes</h5>
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <img src="../_file/_icon/ajuste.png" width="60" height="60">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- submenu home -->
                        <div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-1' id="submenu">
                            <form action="" onclick="redirecionarSair()">
                                <!-- Form de saida do sistema -->
                                <div class='card' type="submit">
                                    <div class='card-body'>
                                        <h5 class="card-title" style="color:black;">Sair</h5>
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
            <li class="nav-item-revise dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="../_file/_icon/notification-flat.png" width="30" height="30">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="dropdown-item">
                        <h2 style="color:black;">Notificação</h2>
                    </div>
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
    <!--Imagem inicial-->
    <div class="container-fluid">
        <!--Div com conteúdo-->
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="col-revise">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <?php
                        echo "<div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'>";
                        for($x=0;$x<5;$x++){
                        echo "<div class='card'>";
                            echo "<div class='card-body'><p class='card-text'>";
                            echo "<div class='row'><div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'><h4>$nomePeca</h4></div>";
                            if($quilometragemAtual >= $quilometragemVencimento)
                            {
                                echo "<div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'><progress id='progressKMAlert'></progress></div>";
                            }
                            else
                            {
                                echo "<div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'><progress id='progressKM' max='$quilometragemVencimento' value='$quilometragem'></progress></div>";
                            }
                            if($dataFinal >= 1)
                            {
                                echo "<div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'><progress id='progressTimeAlert'></progress></div>";
                            }
                            else
                            {
                                echo "<div class='col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'><progress id='progressTime' max='1' value='$dataFinal'></progress></div>";
                            }
                        echo "</p></div></div></div>";
                        }
                        echo "</div>";
                    ?>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class='card' id="conteudoHome">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if($contador==1){
    echo '<!--Div tipo de Quilometragem-->
    <div class="container" id="hide" id="divQuilometragem">
        <div class="row-revise-cadastro">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-8" id="col-revise-km">
        <h3 class="text-dark display-4" id="welcome">Bem-Vindo!</h3>
        <h5 class="text-dark" id="explain">Antes de prosseguir é necessário registrar a quilometragem do seu veículo</h5>
    <!--Input para km-->
        <div class="input-group mb-3" id="input">
            <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">km</span>
        </div>
            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
        <a href="index.php" class="btn btn-dark-revise" role="button" aria-pressed="true" onclick="quilometragem()">Ir</a>';
        $_SESSION['contador'] = 0;
    }
    ?>
</div>
</div>
</div>
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