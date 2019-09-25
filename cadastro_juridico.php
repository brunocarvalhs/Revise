<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revise - Cadastro</title>
    <link rel="shortcut icon" href="./Views/img/logo.ico" />
    <link rel="stylesheet" type="text/css" href="Views/css/index.css">
    <link rel="stylesheet" href="./Views/css/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Cairo|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Views/css/bootstrap.css">
</head>

<body>
    <header>
        <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="./Views/img/logo.png" width="50" height="50" alt="Revise">
                </a>
                <!-- Botão do menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links do menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="./planos.html" id="planoMenu">
                                Planos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aplicativo</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="./aplicativo.html">Sobre o Aplicativo Revise</a>
                                <a class="dropdown-item bg-light" href="./aplicativo.html#suporte">Suporte</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="empresaEmpresa" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="empresaEmpresa">
                                <a class="dropdown-item bg-light" href="./empresa.html#sobre">Sobre</a>
                                <a class="dropdown-item bg-light" href="./empresa.html#vagas">Trabalhar Conosco</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" onclick="signUp()"
                            type="button">Cadastar</button>
                        <button class="btn btn-outline-warning my-2 my-sm-0 botaoLogin" onclick="signIn()"
                            type="button">Acessar</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Titulo do cadastro -->
    <section>
        <div class=" backgroundBlackLight">
            <div class="row">
                <div class="col-12">
                    <h1>Cadastro Jurídico</h1>
                </div>
            </div>
            <!-- Barra de progresso -->
            <div class="progress bg-dark">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!--Inicio dos Forms-->
        <div class="backgroundBlackLight">
            <!--Form dados da empresa-->
            <form action="" method="POST" onsubmit="">
                <div class="row">
                    <div class="col-12">
                        <h4>Dados da Empresa</h4>
                    </div>
                </div>
                <div class="row formularioCadastro">
                    <div class="col-12">
                        <!-- Nome Empresa -->
                        <div class="form-group inputCadastro">
                            <div class="form-row">
                                <div class="col-12">
                                    <label for="campoNome">Nome da Empresa</label>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <input type="text" class="form-control" id="razaoSocial" placeholder="Razão Social"
                                        title="Razão Social é o nome de registro da sua empresa, 
que consta em documentos legais e é usado em termos formais">
                                </div>
                                <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                    <input type="text" class="form-control" id="nomeFantasia"
                                        placeholder="Nome Fantasia" data-toggle="tooltip" data-placement="top" title="É o nome popular de uma empresa, ou seja, como é conhecida.
        Pode ou não ser igual à sua razão social">
                                </div>
                            </div>
                            <!--Endereço empresa-->
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <label>Endereço</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="disabledTextInput">CEP</label>
                                                    <input type="text" id="txtCEP" maxlength="8" name="txtCEP"
                                                        class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <button type="button" onclick="consultarCep();" id="buscaCEP"
                                                        class="btn btn-warning">Pesquisar CEP</button>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <input type="text" readonly="true" class="form-control" id="txtEstado"
                                                name="txtEstado" placeholder="Estado">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <input type="text" readonly="true" class="form-control" id="txtCidade"
                                                name="txtCidade" placeholder="Cidade">
                                        </div>
                                        <br><br>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                                            <div class="form-group">
                                                <input type="text" readonly="true" class="form-control" id="txtBairro"
                                                    name="txtBairro" placeholder="Bairro">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <input type="text" readonly="true" class="form-control" id="txtRua"
                                                    name="txtRua" placeholder="Rua">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="txtNumero" name="txtNumero"
                                                    placeholder="Número">
                                    </div>
                                </div>
                          
                            <!--FIM-->
                        </div>
                    </div>
                </div>
                <!-- E-mail -->
                <div class="form-group inputCadastro">
                    <label for="exampleFormControlInput1">Endereço de email</label>
                    <input type="email" class="form-control" id="campoEmail" required="" placeholder="nome@exemplo.com">
                </div>
                <div class="form-group inputCadastro">
                    <div class="form-row">
                        <!-- CNPJ -->
                        <div class="col-12 col-sm-12 col-md col-lg col-xl">
                            <label for="exampleFormControlInput1">CNPJ</label>
                            <input type="text" class="form-control" name="txtcnpj" id="txtcnpj"
                                placeholder="XX.XXX.XXX/YYYY-ZZ">
                        </div>

                    </div>
                </div>
                <!-- Senha -->
                <div class="form-group inputCadastro">
                    <label for="campoSenha">Senha</label>
                    <input type="password" id="campoSenha" class="form-control" aria-describedby="descricaoSenha">
                    <small id="descricaoSenha" class="form-text text-muted">
                        Sua senha deve ter entre 6 e 20 caracteres, os quais devem ser letras e números,
                        sem
                        espaços, caracteres especiais ou emojis.
                    </small>
                </div>
                <!-- Confirma senha -->
                <div class="form-group inputCadastro">
                    <label for="campoSenha">Confirmar senha</label>
                    <input type="password" id="campoConfirmaSenha" class="form-control"
                        aria-describedby="descricaoSenha">
                </div>
                <!-- Plano -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                                <h4>Escolha seus anúncios</h4>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                <div class="row">

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="card shadow mb-5 bg-white">
                                    <div class="card-body ">
                                        <h5 class="card-title">Anúncios</h5>
                                        <p>Insira o número de anúncios que deseja adicionar ao seu plano</p>
                                        <p class="card-text">
                                            <div class="row">
                                                <div class="col">
                                                    <span>Serviço</span>
                                                    <input id="servicoInput" type="number" class="form-control" placeholder="R$ 10,00 cada">
                                                </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="card shadow mb-5 bg-white">
                                            <div class="card-body ">
                                                <h5 class="card-title">Anúncios</h5>
                                                <p class="card-text">
                                                    <div class="row">
                                                        <div class="col">
                                                            <span>Serviço</span>
                                                            <input name="servicoInput" id="servicoInput" type="text" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <span>Produtos</span>
                                                            <input name="produtoInput" id="produtoInput" type="text" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </p>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span>Produtos</span>
                                                    <input id="produtoInput" type="number" class="form-control"
                                                        placeholder="R$ 1,00 cada">
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="card shadow mb-5 bg-white">
                                            <div class="card-body">
                                                <h5 class="card-title">Plano mensal personalizado</h5>
                                                <p class="card-text">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                            <h6>Serviço:</h6>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                            <h6><b name="txtValorServico" id="txtValorServico"></b></h6>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                            <h6>Produtos:</h6>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                            <h6><b name="txtValorProduto" id="txtValorProduto"></b></h6>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row border-top-5">
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                            <h5>Total:</h5>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                            <h5><b name="txtTotal" id="txtTotal"></b></h5>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
            </form>
            <!--Botão-->
            <br><br>
            <div class="row">
                <div class="col-0 col-sm-0 col-md-0 col-lg-8 col-xl-8"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <button class="btn btn-warning btn-block" id="btnContinua" type="submit">Finalizar</button>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    </form>
    </section>
    <!-- Rodapé -->
    <footer class="RodapeLight navbar-light bg-light ">
        <div class="container-fluid">
            <div class="row navbar ConteudoRodape">
                <div class="col-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <ul class="nav">
                        <li class="nav-item">
                            <div class="nav-link">© 2019 Revise, Inc.</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Termos de uso</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/facebookIcon.png" class="redesocialIcones"
                                    alt="Facebook-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/InstagramIcon.png" class="redesocialIcones"
                                    alt="Instagram-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/YoutubeIcon.png" class="redesocialIcones"
                                    alt="Youtube-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/twitterIcon.png" class="redesocialIcones"
                                    alt="Twitter-revise" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./Views/img/icon/githubIcon.png" class="redesocialIcones"
                                    alt="Github-revise" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <div id="notifications"></div>
    <script src="./Views/js/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="./Views/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="./Views/js/wow.js"></script>
    <script src="./Views/js/cadastro.js"></script>
    <script src="./Views/js/index.js"></script>
    <script src="./Views/js/jquery-3.4.1.js"></script>
    <script src="./Views/js/sweetalert.min.js"></script>
    <script src="./Views/js/jquery.mask.js"></script>
    <script src="./Views/js/API.js"></script>
    <script src="./Views/js/validation/CadastroJuridico.js"></script>
    <script src="./Views/js/sistema.js"></script>
    <script src="./Views/js/cadastro.js"></script>

</html>