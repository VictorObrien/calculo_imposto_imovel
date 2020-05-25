<?php

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
