<?php
// Conexão com banco de dados
$servername = "postgres://iqfbarjinwukva:47b048b0384b913df2be789ad1836c80125cc716ac1243c915aef8cafe2cee08@ec2-52-203-160-194.compute-1.amazonaws.com:5432/d9l9ga4bsm2319";
$username = "iqfbarjinwukva";
$password = "47b048b0384b913df2be789ad1836c80125cc716ac1243c915aef8cafe2cee08";
$db_name = "iqfbarjinwukva";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;
?>
