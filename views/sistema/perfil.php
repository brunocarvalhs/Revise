<?php
    /**
     * Pagina perfil
     * 
     * 
     * Diretorio Pai - View
     * 
     * @author Fernanda Pereira Silva 
     * @version 1.0.0
     */
    session_start();
    $nomePeca = "Correia";
    $nomePeca2 = "Disco de freio";
    $temaBlack = true;
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfil</title>
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
                            <form action="../models/logOut.php" onclick="redirecionarSair()">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="../_file/_icon/notification-flat.png" width="30" height="30">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-item">
            <h2>Notificação</h2>
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
  <!--Página das alterações de perfil do usuario comum-->
  <div class="container-fluid">
    <div class="row align-items-center">
      <!--Conteudo lado esquerdo-->
      <div class="col-11 col-xs-11 col-sm-11 col-md-11 col-lg-6 col-xl-6">
        <h1 class="display-4">Perfil</h1>
        <!--Input Nome-->
        <br>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nome</span>
          </div>
          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <!--Input Email-->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Email</span>
          </div>
          <input type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <!--Input Data Nascimento-->

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Data de Nascimento</span>
          </div>
          <input type="date" class="form-control" aria-label="Username" max="2001-12-31"
            aria-describedby="basic-addon1">
        </div>

        <!--Botao Salvar Alteracao-->
        <button type="button" class="btn btn-danger-revise">Apagar Conta</button>

        <!--Botao Apagar Conta-->

        <button type="button" class="btn btn-success-revise"><img id="certo" src="../_file/_icon/certo.svg">Salvar
          Alteração</button>

      </div>
      <!--Conteudo lado direito-->
      <!--Card-->
      <div class="md-auto col-lg-6 ">
        <div class="card-revise">
          <div class="card-body">
            <h5 class="card-title">Plano</h5>
            <p class="card-text">Gratuito</p>
            <p class="card-text">- Cadastre até 3 veículos gratuitamente</p>
            <p class="card-text">- Troca baseada no manual do carro</p>
            <button class="btn btn-warning-revise">R$0,00</button>
          </div>
        </div>
      </div>
      <div class="col-3 col-xs-3 col-sm-10 col-md-9 col-lg-9 col-xl-11">
        <button type="button" class="btn btn-success-plano">Alterar Plano</button>
      </div>
    </div>
</body>
<!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="../_frameworks/_bootstrap_js/bootstrap.js"></script>
<script src="_js/script.js"></script>


</html>