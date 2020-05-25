<?php
// Sessão
session_start();
// Conexão
require_once 'db.connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id = pg_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM proprietario WHERE id = '$id'";

	if(pg_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index.php');
	endif;
endif;

if(isset($_POST['btn-deletar'])):
	
	$id = pg_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM imovel WHERE id = '$id'";

	if(pg_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index.php');
	endif;
endif;
?>