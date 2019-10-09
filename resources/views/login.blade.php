<?php
session_start();
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo.ico" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/sistema.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revise - Login</title>
</head>

<body class="centralizar">
    <div class="container menu">
        <div class="row justify-content-center">
            <div class="divLogin imagemLogin col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center ">
                <div class="row">
                    <div class="col-0 col-sm-0 col-md-0 col-lg-0 col-xl-7 padding"></div>
                    <div class="col-0 col-sm-0 col-md-0 col-lg-12 col-xl-5 background">
                        <form method="POST" action="./SignIn" onsubmit="">
                            @csrf
                            <div class="row formularioLogin">
                                <div class="logoRevise">
                                    <img src="img/logo.png" width="200" alt="Revise">
                                </div>
                                <div class="col-12 inputLogin">
                                    <div class="label-float">
                                        <input type="text" placeholder=" " name="cpfcnpj" id="cpfcnpj" >
                                        <label>CPF/CNPJ</label>
                                    </div>
                                </div>
                                <div class="col-12 inputLogin">
                                    <div class="label-float">
                                        <input type="password" placeholder=" " name="senha"/>
                                        <label>Senha</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="custom-control  custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="manterContectado">
                                        <label class="custom-control-label " for="manterContectado">
                                            Manter-me contectado.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 btnEntrar">
                                        <?php if(isset($_SESSION["N-Autenticado"]))
                                        {
                                            echo '<div class="alert alert-danger" role="alert">
                                            CPF/CNPJ ou senha está inválido.
                                            </div>';
                                            unset($_SESSION["N-Autenticado"]);
                                        }
                                        if(isset($_SESSION["CADASTRADO-SUCESSO"]))
                                        {
                                            echo '<div class="alert alert-success" role="alert">
                                            Usuário cadastrado com sucesso.
                                            </div>';
                                            unset($_SESSION["CADASTRADO-SUCESSO"]);
                                        }
                                        ?>
                                    <button type="submit" class="btn btn-dark btn-lg btn-block">
                                        ENTRAR
                                    </button>
                                </div>
                                <div class="col-12 linkEsqueci">
                                    <a href="">
                                        <label>
                                            Esqueceu sua senha?
                                        </label>
                                    </a>
                                </div>
                                <div class="col-12 btnCadastrar">
                                    <button type="button" onclick="signUp()" class="btn btn-dark btn-lg btn-block">
                                        CADASTAR
                                    </button>
                                </div>
                                <div class="col-12 linkEsqueci">
                                    <a href="/index.html">
                                        <label>
                                            Voltar
                                        </label>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/index.js"></script>
<script>
    $(document).ready(function () {
        $("#cpfcnpj").keypress(function () {
            try {
                $("#cpfcnpj").unmask();
            } catch (e) { }

            var tamanho = $("#cpfcnpj").val().length;

            if (tamanho < 11) {
                $("#cpfcnpj").mask("999.999.999-99");
            } else {
                $("#cpfcnpj").mask("99.999.999/9999-99");
            }

            // ajustando foco
            var elem = this;
            setTimeout(function () {
                // mudo a posição do seletor
                elem.selectionStart = elem.selectionEnd = 10000;
            }, 0);
            // reaplico o valor para mudar o foco
            var currentValue = $(this).val();
            $(this).val('');
            $(this).val(currentValue);
        })
    });

</script>

</html>