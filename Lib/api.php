<?php

//error_reporting(0);
set_time_limit(0);

if(isset($_GET['placa'])){
	
$placa = $_GET['placa'];

function getStr2($string, $start, $end) {
	$str = explode($start, $string);
	$str = explode($end, $str[1]);
	return $str[0];
}
	
	if(file_exists(getcwd().'consulta.txt')){
		unlink(getcwd().'consulta.txt');
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://18.229.136.80:8080/'.$placa);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'consulta.txt');
	curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'consulta.txt');
	$Navegador_token = curl_exec($ch);
	$Res = getStr2($Navegador_token, "[","]");
	$someArray = json_decode($Res, true);
	
	echo json_encode($someArray);
}
?>