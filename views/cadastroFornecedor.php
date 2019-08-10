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
    <title>Cadastro Fornecedor</title>
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
    <link rel="stylesheet" href="_frameworks/_bootstrap_css/bootstrap.css">
    <script src="_js/cadastro.js"></script>
    <link rel='stylesheet' href='_css/cadastro.css' media='screen'>
</head>

<body>
    <nav class="navbar navbar-dark bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler btn" id="fechar" onclick="redirecionarLogin()">X
            </button>
        </div>
    </nav>
    </div>
    <form method="POST" action="singIn.php">
        <div class="conteiner">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" id="Fornecedor">
                    <div class="card" id="cadastro">
                        <div class="row">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <h1>Cadastro</h1>
                                </div>
                                <!-- Cadastro coluna 1-->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" placeholder="Nome da empresa">
                                </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" placeholder="CNPJ/CPF" id="CampoCNPJouCPF">
                                </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" placeholder="Endereço">
                                </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" placeholder="CEP" class="cep-mask">
                                </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" placeholder="Endereço">
                                </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="password" placeholder="Cidade">
                                </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <select id="estado" name="estado" placeholder="Unidade Federativa">
                                        <option selected>Unidade Federativa</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="ES">Estrangeiro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" id="coluna2">
                                <!-- Cadastro coluna 2-->
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" placeholder="Nome Completo">
                                </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" placeholder="E-mail">
                                </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="row">
                                    <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                        <input type="text" placeholder="Senha" id="user_password2" data-component="password-strength" data-monitor-id="password-strength-monitor">
                                    </div>
                                    <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" id="validaSenha">
                                    <div class="password-strength">
					                    <p>Força da senha</p>
					                    <div id="password-strength-monitor" class="monitor"></div>
			                    	</div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="text" placeholder="Confirma senha">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <button type="button" class="btn btn-dark" onclick="Plano()" id="botaoVeiculo">Continuar</button>
                        </div>
                    </div>
                </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" id="hidePlano" hidden>
                <div class="card" id="carro">
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h1>Anúncio</h1>
                    </div>
                    <!-- Carro -->
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <select id="anuncio" onchange="tipoAnuncio()" name="anuncio">
                            <option selected>Tipo de anúncio</option>
                            <option value="1">Serviço</option>   
                            <option value="2" >Produto</option>                             
                        </select>
                    </div>
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" hidden id="servico">
                        <?php
                            $marca = "GM";
                            echo '<input type="checkbox" name="vehicle" value="Bike">'.$marca.'<br>';
                        ?>
                    </div>
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" hidden id="produto">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" placeholder="Nome do produto">
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="number" placeholder="Preço">
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" placeholder="Marca compativel">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark" id="botaoVeiculo">Confirmar</button>
                </div>
            </div>
        </div>
        </div>
        </div>
    </form>
</body>
<script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
    //Validação de mascara do cnpj ou cpf
    var cnpjcpf = $("#CampoCNPJouCPF").val().length;

    if (cnpjcpf < 11) {
        $("#CampoCNPJouCPF").mask("999.999.999-99");
    } else {
        $("#CampoCNPJouCPF").mask("99.999.999/9999-99");
    } 
</script>
<script src="_js/script.js"></script>
</html>