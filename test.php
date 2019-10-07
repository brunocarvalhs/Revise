<?php
require_once "./Models/modelFIsico.php";

$usuario = new UsuarioFisico;

echo "<pre>";
echo $usuario->Cadastrar("test@gmail.com","123456789","Lcuas","47054655","2019-10-04");
print_r($usuario);

?>