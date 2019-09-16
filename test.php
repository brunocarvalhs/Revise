<?php
$arquivo = file_get_contents('http://18.229.136.80:3000/EYT4568');
$json = json_decode($arquivo);
echo $json->modelo;

?>