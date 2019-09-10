<?php

require_once './Models/modelFIsico.php';
require_once './Models/modelVeiculo.php';
require_once './Lib/connection.php';

echo '<pre>';
$user = new UserFisico(01,'Katryel Menezes Vieira','katryelmenezesvieira14@gmail.com','4079688817','14/02/2001','katryel369');
print_r($user);


$carro = new Veiculo(01,'ETY-4765','GOL','HILDAY','14/02/2001','AZUL','SÃO VICENTE','SP');
print_r($carro);

$user->Cadastrar();

?>