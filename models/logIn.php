<?php
    
    session_start();

    $tipo = 1;

    if($tipo == 1){
        header('Location: ../views/sistema');
        $_SESSION['contador'] = 1;
    }
    else if($tipo == 2)
        header('Location: ../views/fornecedor');
    else
        header('Location: ../views/index.php');
?>