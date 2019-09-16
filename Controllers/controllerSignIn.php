<?php
require_once "../Models/modelFIsico.php";
require_once "../Models/modelJuridico.php";
session_start();
if(!empty($_POST["senha"] && !empty($_POST["cpfcnpj"]) ))
{

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
    if (strlen($login) === 14) 
    {
        $UserLogando = new UserJuridico;
        if($UserLogando->logar($login,$senha))
        {
            $_SESSION["Autenticado-UserJuridico"] = true;
            header('Location: ../Views/perfilJuridico.php');
        }
        else
        {
            $_SESSION["N-Autenticado-UserJuridico"] = true;
            header('Location: ../login.html');
        }
    } 
    else if (strlen($login) === 11)
    {
        $UserLogando = new UserFisico;
        if($UserLogando->logar($login,$senha))
        {
            $_SESSION["Autenticado-UserFisico"] = true;
            header('Location: ../Views/perfilFisico.php');
        }
        else
        {
            $_SESSION["N-Autenticado-UserFisico"] = true;
            header('Location: ../login.html');
        }
    }
}
else 
{
    header('Location: ../login.html');
}
?>