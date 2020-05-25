<?php
// Conexão com banco de dados
/*$servername = "ec2-52-203-160-194.compute-1.amazonaws.com";
$username = "iqfbarjinwukva";
$password = "47b048b0384b913df2be789ad1836c80125cc716ac1243c915aef8cafe2cee08";
$db_name = "d9l9ga4bsm2319";
$porta = "5432";*/

//mysqli_set_charset($connect, "utf8");

/*if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;*/

$servidor = "ec2-54-175-117-212.compute-1.amazonaws.com";
     $porta = 5432;
     $bancoDeDados = "deudsfv7ifp6hc";
     $usuario = "cdfntnfeyhajih";
     $senha = "fdc803b41a29d228c44b2aecbc667bb7da0a39e2ea395db2e1f80fe9c3cae37d";

$conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados user=$usuario password=$senha");

if(!$conexao) {
	die("Não foi possível se conectar ao banco de dados.");
}
?>
