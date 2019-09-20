<?php
require_once 'Models/modelFIsico.php';
require_once 'Models/modelUsuario.php';
require_once 'Lib/connection.php.php';
$user = new UserFisico;
$user->VerificarCadastrar('marinalunasales__marinalunasales@acritica.com.br','13213212','EYT-4550');
?>