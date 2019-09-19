<?php
require_once "../Models/modelFIsico.php";
require_once "../Models/modelVeiculo.php";

$nome = $_POST["txtnome"];
$email = $_POST["txtemail"];
$cpf = $_POST["txtcpf"];
$nascimento = $_POST["txtNascimento"];
$senha = $_POST["txtsenha"];
$senhac = $_POST["txtcsenha"];
$placa = $_POST["txtplaca"];
$MarcaModelo = $_POST["txtMarca"];
$MarcaModelo = explode("/",$MarcaModelo);
$marca = $MarcaModelo[0];
$modelo = $MarcaModelo[1];
$Separadormodelo = explode(" ",$modelo);
$modelo = $Separadormodelo[0];
$ano = $_POST["txtAno"];
$cor = $_POST["txtCor"];
$plano = $_POST["txtplano"];

$veiculo = new Veiculo;
$veiculo->cadastrar($placa,$modelo,$ano,$cor);

$usuario = new UserFisico($nome,$email,$cpf,$nascimento,$senha,$plano);
echo '<pre>';
print_r($usuario);
$usuario->Cadastrar($usuario,$veiculo);
echo '<br>';
echo '<pre>';
print_r($veiculo);



?>