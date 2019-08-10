<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../_frameworks/_bootstrap_css/bootstrap.css">
</head>
<body id="background">
<!--Menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-revise">
        <a class="navbar-brand" href="index.php">
          
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="bg-link" href="index.php">Home</a>
            <a class="nav-item nav-link" id="bg-link" href="#">Anúncios</a>
            <a class="nav-item nav-link" id="bg-link"  href="perfil.php">Perfil</a>
            <!--dropdown-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="bg-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Configurações
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"  href="#">Ajustes</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../singIn.php">Sair</a>
                </div>
              </li>
          </div>
     </div>
 </nav>
<!--Imagem inicial-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
           <img id="imgIndexFornecedor" src="../_file/hello.png"/>
        </div>      
    </div>
<!--Div com conteúdo-->
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="col-revise">
        <h3 class="text-white display-4">Anúncios Recentes</h3>
    <div class="row">
<!--Card 1-->

        <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <div class="card-revise-f"  style="width: 18rem;">
                <img src="../_file/oleo.jpg"  class="card-img-top-revise" alt="Erro ao carregar">
                <div class="card-body">
                    <a href="#" class="btn btn-light"><img class="ver" src="../_file/_icon/ver.svg"></img></a>
                </div>
            </div>
        </div>
<!--Card 2-->

<div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="card-revise-f" style="width: 18rem;">
            <img src="../_file/monumento.png" class="card-img-top-revise" alt="Erro ao carregar">
            <div class="card-body">
                <a href="#" class="btn btn-light"><img class="ver" src="../_file/_icon/ver.svg"></img></a>
            </div>
        </div>
</div>
<!--Card 3-->

<div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
    <div class="card-revise-f" style="width: 18rem;">
        <img src="../_file/mecanico.png" class="card-img-top-revise" alt="Erro ao carregar">
        <div class="card-body">
            <a href="#" class="btn btn-light"><img class="ver" src="../_file/_icon/ver.svg"></img></a>
        </div>
    </div>
</div>
<!--Card 4-->

<div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="card-revise-f" style="width: 18rem;">
            <img src="../_file/correia.jpg" class="card-img-top-revise" alt="Erro ao carregar">
            <div class="card-body">
                <a href="#" class="btn btn-light"><img class="ver" src="../_file/_icon/ver.svg"></img></a>
            </div>
        </div>
    </div>
<!--Botao Add Anuncio-->
<div class="col-12 col-xs-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <button type="button" class="btn btn-dark text-warning" id="criar" href="/planos.phtml">
            <b>Criar Anúncio</b></button>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   

</html>