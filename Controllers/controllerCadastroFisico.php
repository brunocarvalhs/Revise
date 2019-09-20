<?php
require_once "../Lib/connection.php";
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
$cpf = str_replace(".", "", $cpf);
$cpf = str_replace(",", "", $cpf);
$cpf = str_replace("-", "", $cpf);
$cpf = str_replace("/", "", $cpf);
$cpf = str_replace("'", "", $cpf);
$cpf = str_replace(";", "", $cpf);
$cpf = str_replace('"', '"', $cpf);
$veiculo = new Veiculo($placa,$modelo,$ano,$cor);
$usuario = new UserFisico($nome,$email,$cpf,$nascimento,$senha,$plano);
$idUsuario = $usuario->getID();
$idUsuarioFisico = $usuario->getIdUserFisico();
$idVeiculo = $veiculo->getId();


echo $idUsuario.'<br>';
echo $idUsuarioFisico.'<br>';
echo $cpf.'<br>';
echo $email.'<br>';
echo $senha.'<br>';
echo $plano.'<br>';
echo $nascimento.'<br>';
echo $nome.'<br>';
echo $placa.'<br>';
echo $idVeiculo.'<br>';
echo $cor.'<br>';
echo $ano.'<br>';
echo $modelo.'<br>';

?>