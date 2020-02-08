<?php
// Sessão
session_start();
// Conexão
require_once 'db.connect.php';

//Update Tabela Proprietario
if(isset($_POST['btn-editarProprietario'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE proprietario SET nome = '$nome', endereco = '$endereco' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;

//Update Tabela Imóvel
if(isset($_POST['btn-editarImovel'])):

	$proprietario_id = mysqli_escape_string($connect, $_POST['proprietario_id']);
	$endereco_imovel = mysqli_escape_string($connect, $_POST['endereco_imovel']);
	$area_do_terreno = mysqli_escape_string($connect, $_POST['area_do_terreno']);
	$area_construida = mysqli_escape_string($connect, $_POST['area_construida']);
	//$area_total = mysqli_escape_string($connect, $_POST['area_total']);
	$aliquota = mysqli_escape_string($connect, $_POST['aliquota']);
	$valor_venal_terreno = mysqli_escape_string($connect, $_POST['valor_venal_terreno']);
	$valor_venal_construcao = mysqli_escape_string($connect, $_POST['valor_venal_construcao']);
	//$valor_venal_total = mysqli_escape_string($connect, $_POST['valor_venal_total']);
	//$aliquota_aplicada = cmysqli_escape_string($connect, $_POST['aliquota_aplicada']);
	$valor_do_imposto = mysqli_escape_string($connect, $_POST['valor_do_imposto']);

	$id_imovel = mysqli_escape_string($connect, $_POST['id_imovel']);	

	$sql = "UPDATE imovel SET proprietario_id = '$proprietario_id', endereco = '$endereco', area_do_terreno = '$area_do_terreno', area_construida = '$area_construida', area_total = '$area_total', aliquota = '$aliquota', valor_venal_terreno = '$valor_venal_terreno', valor_venal_construcao = '$valor_venal_construcao', valor_venal_total = '$valor_venal_total', aliquota_aplicada = '$aliquota_aplicada', valor_do_imposto = '$valor_do_imposto' WHERE id_imovel = '$id_imovel'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;