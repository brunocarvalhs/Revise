<?php
    $usuario = true;
    
    if($usuario === true){
        //Teste de variaveis
        if(true == true){
            $FotoDePerfil = 'https://scontent.fssz6-1.fna.fbcdn.net/v/t1.0-9/67589280_495218954559623_650072793790021632_n.jpg?_nc_cat=111&_nc_oc=AQnTriGB-8DhxxeBQzuQFjHJ6xvhg8aRbmhOID1LO4_oB-t3zaF9KjTyekHjD7vgUCg&_nc_ht=scontent.fssz6-1.fna&oh=d9a2384e48f2040c874ef7d026fc491a&oe=5DD56DF4';
        }
        else{
            $FotoDePerfil = 'https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg';
        }
        $nome = 'Bruno';
        $sobrenome = 'Silva Carvalho';
        $placa = 'ABC-1234';
        $modelo = 'Corsa Classic';
        $peças = 7;
    }
    else{
        if(true == true){
            $FotoDePerfil = 'https://scontent.fssz6-1.fna.fbcdn.net/v/t1.0-9/67589280_495218954559623_650072793790021632_n.jpg?_nc_cat=111&_nc_oc=AQnTriGB-8DhxxeBQzuQFjHJ6xvhg8aRbmhOID1LO4_oB-t3zaF9KjTyekHjD7vgUCg&_nc_ht=scontent.fssz6-1.fna&oh=d9a2384e48f2040c874ef7d026fc491a&oe=5DD56DF4';
        }
        else{
            $FotoDePerfil = 'https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg';
        }

        $NomeEmpresa = 'Etec Dra Ruth Cardoso';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/sistema.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
                <?php

                    require_once 'menu.php';

                    echo $menu = new Menu();

                ?>
            <div class="col">
                <button></button>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="./js/wow.js"></script>
<script src="./js/index.js"></script>
<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>