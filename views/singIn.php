<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Revise</title>
    <link rel="stylesheet" href="_frameworks/_bootstrap_css/bootstrap.css">
    <link rel="stylesheet" href="_css/login.css" media="screen">
    <script src="_js/script.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler btn" id="fechar" onclick="redirecionar()">X
            </button>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8" style="padding-left: 0px;padding-right: 0px;">
                <div class="Slide">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src=""
                                    alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=""
                                    alt="Segundo Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=""
                                    alt="Terceiro Slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-left: 0px;padding-right: 0px;">
                <div class="login">
                    <div id="componentes">
                        <form method="POST" action="../models/logIn.php" onsubmit="">
                            <div>
                                <input type="text" id="email" placeholder="E-mail">
                            </div>
                            <div>
                                <input type="password" id="senha" placeholder="Senha">
                            </div>
                            <div id="botaoEntrar">
                                <button type="submit" id="EntrarBotao" class="btn btn-primary btn-lg btn-block">ENTRAR</button>
                            </div>
                            <div id="botaoCadastro">
                                <button onclick="cadastrar()" type="button" id="CadastrarBotao" class="btn btn-primary btn-lg btn-block">CADASTRAR</button>
                            </div>
                             <div class="checkbox">
                                <input type="checkbox" id="checkbox-2">
                                <label for="checkbox-2">Me manter conectado</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Div tipo de cadastro-->
<div class="container" id="hide" hidden>
    <div class="row-revise-cadastro">
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-8" id="col-revise-cadastro">
      <h3 class="text-dark display-4">Qual tipo de cadastro irá realizar?</h3>
      <a type="button" class="btn btn-danger" id="close" href="singIn.php">X</a>
      
<!--Cards-->
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
           <img src="../views/_file/fornecedor.svg" id="image">
        <a href="cadastroFornecedor.php" class="btn btn-warning botao text-white">Fornecedor</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
           <img src="../views/_file/user.svg" id="icon">
        <a href="cadastroUser.php" class="btn btn-warning botao text-white">Usuário</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="_frameworks/_bootstrap_js/bootstrap.js"></script>

</html>