<?php
require_once './Models/modelUsuario.php';

$UserLogando = new Usuario('marinalunasales__marinalunasales@acritica.com.br','2Nq1duhP3l');
if($UserLogando->logar($UserLogando))
{
    $_SESSION["UsuarioFisicoAutenticado"];
}
else
{
    $_SESSION["N-UsuarioFisicoAutenticado"];
}

?>