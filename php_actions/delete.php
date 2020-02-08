<?php
// Sessão
session_start();
// Conexão
require_once 'db.connect.php';

//Delete Tabela Proprietário
if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM proprietario WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index.php');
	endif;
endif;

//Delete Tabela Imóvel
if(isset($_POST['btn-deletar'])):
	
	$id_imovel = mysqli_escape_string($connect, $_POST['id_imovel']);

	$sql = "DELETE FROM imovel WHERE id_imovel = '$id_imovel'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index.php');
	endif;
endif;
?>