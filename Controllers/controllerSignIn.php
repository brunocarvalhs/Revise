<?php
    if(!(empty($_POST['cpfcnpj'])) || empty($_POST['senha'])){

        //Tratamento do CPF ou CNPJ
        $login = trim($_POST['cpfcnpj']);
        $login = str_replace(".", "", $login);
        $login = str_replace(",", "", $login);
        $login = str_replace("-", "", $login);
        $login = str_replace("/", "", $login);

        //Senha
        $senha = $_POST['senha'];


        session_start();

        //Verificando a quantidade de caracteres 
        if(strlen($login) === 14)
        {
            //Se for maior que 11 caracteres especifica como cnpj
            header('Location: ../Views/sistemaJ.php');

        }
        else if(strlen($login) === 11)
        {
            //Se for igual a 11 caracteres e CPF
            header('Location: ../Views/sistema.php');
 
        }
        else{
            header('Location: ../login.html');
        }
    }
?>