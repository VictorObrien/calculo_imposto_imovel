<?php
// Sessão
session_start();
// Conexão
require_once 'db.connect.php';
// Clear
function clear($input) {
	
	global $connect;
	// sql
	$var = pg_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

// Cadastrar na Tabela Proprietário
if(isset($_POST['btn_cadastrar_proprietario'])):
	$nome = clear($_POST['nome']);
	$endereco = clear($_POST['endereco']);


	$sql = "INSERT INTO proprietario (nome, endereco) VALUES ('$nome', '$endereco')";

	if(pg_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;

// Cadastrar na Tabela Imóvel
if(isset($_POST['btn_cadastrar_imovel'])):
	$proprietario_id = clear($_POST['proprietario_id']);
	$endereco = clear($_POST['endereco']);
	$area_do_terreno = clear($_POST['area_do_terreno']);
	$area_construida = clear($_POST['area_construida']);
	$area_total = clear($_POST['area_total']);
	$aliquota = clear($_POST['aliquota']);
	$valor_venal_terreno = clear($_POST['valor_venal_terreno']);
	$valor_venal_construcao = clear($_POST['valor_venal_construcao']);
	$valor_venal_total = clear($_POST['valor_venal_total']);
	$aliquota_aplicada = clear($_POST['aliquota_aplicada']);
	$valor_do_imposto = clear($_POST['valor_do_imposto']);
	

	$sql = "INSERT INTO imovel (proprietario_id, endereco, area_do_terreno, area_construida, area_total, aliquota, valor_venal_terreno, valor_venal_construcao, valor_venal_total, aliquota_aplicada, valor_do_imposto ) VALUES ('$proprietario_id', '$endereco', '$area_do_terreno', '$area_construida', '$area_total', '$aliquota', '$valor_venal_terreno', '$valor_venal_construcao', '$valor_venal_total', '$aliquota_aplicada', '$valor_do_imposto' )";

	if(pg_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;