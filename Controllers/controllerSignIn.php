<?php
session_start();
if (!(empty($_POST['cpfcnpj'])) || !empty($_POST['senha'])) {

    //Tratamento do CPF ou CNPJ
    $login = trim($_POST['cpfcnpj']);
    $login = str_replace(".", "", $login);
    $login = str_replace(",", "", $login);
    $login = str_replace("-", "", $login);
    $login = str_replace("/", "", $login);
    $login = str_replace("'", "", $login);
    $login = str_replace(";", "", $login);
    $login = str_replace('"', '"', $login);

    //Senha
    $senha = $_POST['senha'];


    

    $UserLogando = new Usuario($login,$senha);

    //Verificando a quantidade de caracteres 
    if (strlen($login) === 14) 
    {
        //Se for maior que 11 caracteres especifica como cnpj
        header('Location: ../Views/sistemaJ.php');
    } 
    else if (strlen($login) === 11)
     {
        if($UserLogando->logar($UserLogando))
        {
            $_SESSION["UsuarioFisicoAutenticado"];
        }
        else
        {
            $_SESSION["N-UsuarioFisicoAutenticado"];
        }
    } 
    else 
    {

        header('Location: ../login.html');
    }
}
