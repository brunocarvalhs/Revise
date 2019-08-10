<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/_bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../_css/styleMobile.css" media="screen and (min-width: 320px)">
    <link rel="stylesheet" href="../_css/styleDesktop.css" media="screen">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="Slide">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=Primeiro Slide"
                                    alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Segundo Slide"
                                    alt="Segundo Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Terceiro Slide"
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
            <div class="col-4">
                <div class="login">
                    <div id="componentes">
                        <form method="POST" action="" onsubmit="">
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
                                <button type="button" id="CadastrarBotao" class="btn btn-primary btn-lg btn-block">CADASTRAR</button>
                            </div>
                        </form>
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
<script src="../_js/_bootstrap/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</html>