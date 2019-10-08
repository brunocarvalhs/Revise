<?php
<<<<<<< HEAD
require_once "./Models/modelFIsico.php";

$usuario = new UsuarioFisico;

echo "<pre>";
echo $usuario->Cadastrar("test@gmail.com","123456789","Lcuas","47054655","2019-10-04");
print_r($usuario);

=======
include 'Models/modelUsuario.php';
$user = new Usuario;
echo '<pre>';
print_r($user);
>>>>>>> 0caf37c42ad7e95f896763c58638df0e45341efb
?>