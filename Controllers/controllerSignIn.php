<?php
require_once "../Models/modelFIsico.php";
require_once "../Models/modelJuridico.php";
session_start();
if (!empty($_POST["senha"] && !empty($_POST["cpfcnpj"]))) {

    //Tratamento do CPF ou CNPJ
    $login = trim($_POST['cpfcnpj']);
    $login = str_replace(".", "", $login);
    $login = str_replace(",", "", $login);
    $login = str_replace("-", "", $login);
    $login = str_replace("/", "", $login);
    $login = str_replace("'", "", $login);
    $login = str_replace(";", "", $login);
    $login = str_replace('"', '"', $login);
    $senha = trim($_POST['senha']);

    // $UserLogando = new Usuario($login,$senha);

    //Verificando a quantidade de caracteres 
    if (strlen($login) === 14) {  //Faz a autenticação do Juridico
        $UserLogando = new UserJuridico;
        if ($UserLogando->logar($login, $senha)) {
            $_SESSION["Autenticado-UserJuridico"] = true;
            header('Location: ../Views/perfilJuridico.php');
        } else { //Retorna erro se caso não conseguir autenticar
            $_SESSION["N-Autenticado"] = true;
            header('Location: ../login.php');
        }
    } else if (strlen($login) === 11) { //Faz a autenticação do fisico
        $UserLogando = new UserFisico;
        if ($UserLogando->logar($login, $senha)) {
            $_SESSION["Autenticado-UserFisico"] = true;
            header('Location: ../Views/perfilFisico.php');
        } else { //Retorna erro se caso não conseguir autenticar
            $_SESSION["N-Autenticado"] = true;
            header('Location: ../login.php');
        }
    } else { //Digitar cpf ou cnpj invalido.
        $_SESSION["N-Autenticado"] = true;
        header('Location: ../login.php');
    }
} else { //Se caso deixar os campos vazios
    header('Location: ../login.php'); 
}
