<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revise - Planos</title>
    <link rel="stylesheet" href="_frameworks/_bootstrap_css/bootstrap.css">
    <link rel="stylesheet" href="_css/main.css">
</head>

<body>
    <div class="menu">
        <!-- Inicio: Menu superior -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="_file/LogoRevise.png" width="120" height="70" alt="Revise">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="selecionado" href="planos.php">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled"  href="contato.php" >Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                </ul>
                <form action="singIn.php">
                    <button class="btn btn-outline-revise my-2 my-sm-0" href="singIn.php">Login</button>
                </form>
            </div>
        </nav>
    </div>
    <!-- Fim:  Menu superior -->
    <!-- INICIO: Conteudo -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <!-- Inico: div amarela -->
                <div class="conteudo-Amarelo">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim: div amarela -->
                <!-- Inicio: div preta -->
                <div class="conteudo-Preto">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim: div preta -->
            </div>
        </div>
    </div>
  <!--Cards com os planos-->
  <h4 class="text-dark display-4">Planos para Fornecedores</h4>
  <br> 
  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">    
    <div class="row">
<!--Card 1-->
        <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <div class="card-revise-f"  style="width: 18rem;">
                     <h4 class="text-warning display-4">Gratuito</h4> 
                     <br>
                    <p class="card-text" align="center">Quantidade ilimitada de anúncios </p>    
                     <div class="card-body">
                    <button class="btn btn-dark">$0,00</button>
                </div>
            </div>
        </div>
<!--Card 2-->

<div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="card-revise-f" style="width: 18rem;">
        <h4 class="text-warning display-4">Plano 1</h4>
        <br>
        <p class="card-text" align="center">Quantidade x de anúncios </p>                     
        <div class="card-body">
            <a href="#" class="btn btn-dark">$XX,XX</a>
        </div>
        </div>
</div>
<!--Card 3-->

<div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
    <div class="card-revise-f" style="width: 18rem;">
     <h4 class="text-warning display-4">Plano 2</h4>
     <br> 
     <p class="card-text" align="center">Quantidade z de anúncios </p>                                  
     <div class="card-body">
     <a href="#" class="btn btn-dark">$XX,XX</a>
    </div>
    </div>
</div>
<!--Card 4-->

<div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="card-revise-f" style="width: 18rem;">
        <h4 class="text-warning display-4">Premium</h4>
        <br>
        <p class="card-text" align="center">Quantidade y de anúncios </p>                                     
        <div class="card-body">
           <a href="#" class="btn btn-dark">$XX,XX</a>
        </div>
        </div>
    </div>

    <!-- FIM: Conteudo-->
</body>

</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="_frameworks/_bootstrap_js/bootstrap.js"></script>