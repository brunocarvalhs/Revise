<?php
    date_default_timezone_set('America/Sao_Paulo');
    $dataMax = date('Y-m-d');
    $anos = 91;
    $dataMin = date('Y-m-d', strtotime("-{$anos} year", strtotime($dataMax)));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro usuario</title>
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
    <link rel="stylesheet" href="_frameworks/_bootstrap_css/bootstrap.css">
    <script src="_js/cadastro.js"></script>
    <link rel='stylesheet' href='_css/cadastro.css' media='screen'>
</head>

<body>
    <nav class="navbar navbar-dark bg-white">
        <div class="container-fluid">
            <button style="color:black" class="navbar-toggler btn" type="button" id="fechar" onclick="redirecionarLogin()">X
            </button>
        </div>
    </nav>
    </div>
    <form method="POST" action="singIn.php">
        <div class="conteiner">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="card" id="cadastro">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1>Cadastro</h1>
                        </div>
                        <!-- Cadastro -->
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" placeholder="Nome Completo">
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="email" placeholder="E-mail">
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <p>Data de nascimento</p>
                            <input type="date" class="cep-mask" min="<?php echo $dataMin ?>" max="<?php echo $dataMax ?>">
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="password" placeholder="Senha">
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="password" placeholder="Confirma Senha">
                        </div>
                        <button type="button" class="btn btn-dark" onclick="carro()" id="botaoCadastro">Continuar</button>
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" id="hideVeiculo" hidden>
                    <div class="card" id="carro">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1>Veículo</h1>
                        </div>
                        <!-- Carro -->
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" placeholder="Placa">
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" placeholder="Modelo" disabled="disabled" readonly="readonly"
                                value="<?php //echo $modeloVeiculo ?>">
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" placeholder="Marca" disabled="disabled" readonly="readonly"
                                value="<?php //echo $marcaVeiculo ?>">
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" placeholder="Ano" disabled="disabled" readonly="readonly"
                                value="<?php //echo $anoVeiculo ?>">
                        </div>
                        <button type="button" class="btn btn-dark" onclick="Plano()" id="botaoVeiculo">Continuar</button>
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" id="hidePlano" hidden>
                    <div class="card" id="planos">
                        <div class="row">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h1>Planos</h1>
                            </div>
                            <!-- Plano -->
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" onclick="">
                                <div class="card" id="plano">
                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="card" id="preco">
                                            <h4><?php echo "R$ 00,00"?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" onclick="">
                                <div class="card" id="plano">

                                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="card" id="preco">
                                            <h4><?php echo "R$ XX,XX"?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="_js/script.js"></script>

</html>