<?php
// Sessão
session_start();
// Conexão
require_once 'db.connect.php';

//Update Tabela Proprietario
if(isset($_POST['btn-editarProprietario'])):
	$nome = pg_escape_string($connect, $_POST['nome']);
	$endereco = pg_escape_string($connect, $_POST['endereco']);
	
	$id = pg_escape_string($connect, $_POST['id']);

	$sql = "UPDATE proprietario SET nome = '$nome', endereco = '$endereco' WHERE id = '$id'";

	if(pg_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;

//Update Tabela Imóvel
if(isset($_POST['btn-editarImovel'])):

	$proprietario_id = pg_escape_string($connect, $_POST['proprietario_id']);
	$endereco_imovel = pg_escape_string($connect, $_POST['endereco_imovel']);
	$area_do_terreno = pg_escape_string($connect, $_POST['area_do_terreno']);
	$area_construida = pg_escape_string($connect, $_POST['area_construida']);
	//$area_total = mysqli_escape_string($connect, $_POST['area_total']);
	$aliquota = pg_escape_string($connect, $_POST['aliquota']);
	$valor_venal_terreno = pg_escape_string($connect, $_POST['valor_venal_terreno']);
	$valor_venal_construcao = pg_escape_string($connect, $_POST['valor_venal_construcao']);
	//$valor_venal_total = mysqli_escape_string($connect, $_POST['valor_venal_total']);
	//$aliquota_aplicada = cmysqli_escape_string($connect, $_POST['aliquota_aplicada']);
	$valor_do_imposto = pg_escape_string($connect, $_POST['valor_do_imposto']);

	$id_imovel = pg_escape_string($connect, $_POST['id_imovel']);	

	$sql = "UPDATE imovel SET proprietario_id = '$proprietario_id', endereco = '$endereco', area_do_terreno = '$area_do_terreno', area_construida = '$area_construida', area_total = '$area_total', aliquota = '$aliquota', valor_venal_terreno = '$valor_venal_terreno', valor_venal_construcao = '$valor_venal_construcao', valor_venal_total = '$valor_venal_total', aliquota_aplicada = '$aliquota_aplicada', valor_do_imposto = '$valor_do_imposto' WHERE id_imovel = '$id_imovel'";

	if(pg_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;