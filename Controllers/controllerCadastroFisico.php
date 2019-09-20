<?php
session_start();

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


$user = new UserFisico;
if($user->VerificarCadastrar($email,$cpf,$placa) == 'true')
{
    $user = $user->getId();
    $user->Cadastrar($nome,$email,$senha,$plano,$cpf,$nascimento);
    $veiculo = new Veiculo;
    $veiculo->Cadastrar($placa,$cor,$modelo,$ano,$idUser);
}
else if ($user->VerificarCadastrar($email,$cpf,$placa) == 'placa')
{
    $_SESSION["ERRO-CADASTRO"] = '<script>alert("ERRO: Placa já está cadastrada no nosso sistema");</script>';
    Header('Location: ../cadastro.php');
}
else if ($user->VerificarCadastrar($email,$cpf,$placa) == 'cpf')
{
    $_SESSION["ERRO-CADASTRO"] = '<script>alert("ERRO: CPF já está cadastrado no nosso sistema");</script>';
    Header('Location: ../cadastro.php');
}
else if ($user->VerificarCadastrar($email,$cpf,$placa) == 'email')
{
    $_SESSION["ERRO-CADASTRO"] = '<script>alert("ERRO: E-mail já está cadastrado no nosso sistema");</script>';
    Header('Location: ../cadastro.php');
}
?>