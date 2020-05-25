<?php
// Sessão
session_start();
// Conexão
include_once 'php_actions/db.connect.php';
// Header
include_once 'includes/header.php';


if(isset($_POST['btn-calculaImposto'])):
	

	$proprietario_id = pg_escape_string($connect, $_POST['proprietario_id']);
	$endereco_imovel = pg_escape_string($connect, $_POST['endereco_imovel']);
	$area_do_terreno = pg_escape_string($connect, $_POST['area_do_terreno']);
	$area_construida = pg_escape_string($connect, $_POST['area_construida']);
	$area_total = pg_escape_string($connect, $_POST['area_total']);
	$aliquota = pg_escape_string($connect, $_POST['aliquota']);
	$valor_venal_terreno = pg_escape_string($connect, $_POST['valor_venal_terreno']);
	$valor_venal_construcao = pg_escape_string($connect, $_POST['valor_venal_construcao']);
	$valor_venal_total = pg_escape_string($connect, $_POST['valor_venal_total']);
	$aliquota_aplicada = pg_escape_string($connect, $_POST['aliquota_aplicada']);
	$valor_do_imposto = pg_escape_string($connect, $_POST['valor_do_imposto']);

	$id_imovel = pg_escape_string($connect, $_POST['id_imovel']);	

	//Calculos
	$area_total = $area_construida + $area_do_terreno;

	$valor_venal_total = $valor_venal_terreno + $valor_venal_construcao;

	
	switch ($valor_venal_total){
		case ($valor_venal_total > 10000 && $valor_venal_total < 49999):
			$aliquota_aplicada = 0.35;
			break;
		
		case ($valor_venal_total > 50000 && $valor_venal_total < 99999):
			$aliquota_aplicada = 0.5;
			break;

		case ($valor_venal_total > 100000 && $valor_venal_total < 299999):
			$aliquota_aplicada = 0.75;
			break;

		case ($valor_venal_total > 300000 && $valor_venal_total < 499999):
			$aliquota_aplicada = 1.0;
			break;

		case ($valor_venal_total > 500000):
			$aliquota_aplicada = 1.5;
			break;
		
		default:
			echo 'ISENTO';
			break;
	}


	//Calculo Imposto
	$valor_do_imposto = $valor_venal_total * $aliquota_aplicada;

	$sql = "INSERT INTO imovel (area_total, valor_venal_total, aliquota_aplicada, valor_do_imposto VALUES ('$area_total', '$valor_venal_total', '$aliquota_aplicada', '$valor_do_imposto')";

	

	if(pg_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;
?>

<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	            <!--<img src="imagens/icone_twitter.png" />-->
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php" class="btn-flat">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

<!--<div class="container">	     
			<h3 class="light"> Imóveis </h3>
			<table class="striped">
				<thead>
					<tr>
						<th>Id:</th>
						<th>Proprietário:</th>
						<th>Endereço:</th>
						<th>Área Terreno:</th>
						<th>Área Construída:</th>
						<th>Valor Venal Terreno:</th>
						<th>Valor Venal Construção:</th>
						<th>Aliquota Aplicada:</th>
					</tr>
				</thead>

				<tbody>-->
					<?php
					$sql = "SELECT * FROM imovel";
					$resultado = pg_query($connect, $sql);
	               
	                if(mysqli_num_rows($resultado) > 0):

					while($dados = pg_fetch_array($resultado)):
					
					?>

					
					<div class="container">
						<div class="jumbotron">
						<h3 class="light"> Resultado </h3>
							<p><strong>Id do Imóvel: </strong><?php echo $dados['id_imovel']; ?></p>
							<p><strong>Nome proprietário: </strong><?php echo $dados['proprietario_id']; ?></p>
							<p><strong>Endereço Imóvel: </strong><?php echo $dados['endereco_imovel']; ?></p>
							<p><strong>Área Total: </strong><?php echo $dados['area_total']; ?></p>
							<p><strong>Valor Venal Total: </strong><?php echo $dados['valor_venal_total']; ?></p>
							<p><strong>Aliquota Aplicada: </strong><?php echo $dados['aliquota_aplicada']; ?></p>
							<p><strong>Valor do Imposto: </strong><?php echo $dados['valor_do_imposto']; ?></p>
						<div>

					</div>
				   <?php 
					endwhile;
					else: ?>

					<tr>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>

				   <?php 
					endif;
				   ?>

				</tbody>
			</table>
		<br>
		<a href="dadosImovel.php" class="btn btn-primary">Adicionar Imóvel</a>
		
	    <div class="clearfix"></div>
		</div>
<?php
// Footer
include_once 'includes/footer.php';
?>


	