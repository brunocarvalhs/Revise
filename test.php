<?php

require_once './Models/modelFIsico.php';
require_once './Models/modelVeiculo.php';
require_once './Lib/connection.php';

echo '<pre>';
$user[0] = new UserFisico(62,'Katryel Menezes Vieira','katryelmenezesvieira14@gmail.com','4079688817','14/02/2001','katryel369');
$user[1] = new UserFisico(01,'Lucas','katryelmenezesvieira14@gmail.com','4079688817','14/02/2001','katryel369');

$user[0]->Cadastrar($user[0]);

?>