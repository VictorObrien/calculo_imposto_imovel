<?php
// Conexão
include_once 'php_actions/db.connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id_imovel'])):
	$id_imovel = pg_escape_string($connect, $_GET['id_imovel']);

	$sql = "SELECT * FROM imovel WHERE id_imovel = '$id_imovel'";
	$resultado = pg_query($connect, $sql);
	$dados = pg_fetch_array($resultado);
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

<div class="col-md-4"></div>
	    <div class="col-md-4">
		<h3 class="light"> Editar Imóveis </h3>
		<form action="php_actions/update.php" method="POST">
			<input type="hidden" name="id_imovel" value="<?php echo $dados['id_imovel'];?>">
			
			<div class="form-group">
						<label for="nome">Id Proprietário</label>
						<input type="text" class="form-control" id="proprietario_id" name="proprietario_id" placeholder="Código Proprietário" value="<?php echo $dados['proprietario_id'];?>">
					</div>
					
					<div class="form-group">
						<label for="nome">Endereço Imóvel</label>
						<input type="text" class="form-control" id="endereco_imovel" name="endereco_imovel" placeholder="Endereço Imóvel" value="<?php echo $dados['endereco_imovel'];?>">
					</div>

					<div class="form-group">
						<label for="nome">Área do Terreno</label>
						<input type="number" class="form-control" id="area_do_terreno" name="area_do_terreno" placeholder="Área do Terreno" value="<?php echo $dados['area_do_terreno'];?>">
					</div>

					<div class="form-group">
						<label for="nome">Área Construida</label>
						<input type="number" class="form-control" id="area_construida" name="area_construida" placeholder="Área Construida" value="<?php echo $dados['area_construida'];?>">
					</div>

					<!--<div class="form-group">
						<label for="nome">Área Total</label>
						<input type="number" class="form-control" id="area_total" name="area_total" placeholder="Área Total">
					</div>-->

					<div class="form-group">
						<label for="nome">Aliquota</label>
						<input type="text" class="form-control" id="aliquota" name="aliquota" placeholder="Aliquota" value="<?php echo $dados['aliquota'];?>">
					</div>

					<div class="form-group">
						<label for="nome">Valor Venal Terreno</label>
						<input type="number" class="form-control" id="valor_venal_terreno" name="valor_venal_terreno" placeholder="Valor Venal Terreno" value="<?php echo $dados['valor_venal_terreno'];?>">
					</div>

					<div class="form-group">
						<label for="nome">Valor Venal Construção</label>
						<input type="number" class="form-control" id="valor_venal_construcao" name="valor_venal_construcao" placeholder="Valor Venal Construção" value="<?php echo $dados['valor_venal_construcao'];?>">
					</div>

					<!--<div class="form-group">
						<label for="nome">Valor Venal Total</label>
						<input type="number" class="form-control" id="valor_venal_total" name="valor_venal_total" placeholder="Valor Venal Total">
					</div>

					<div class="form-group">
						<label for="nome">Aliquota Aplicada</label>
						<input type="text" class="form-control" id="aliquota_aplicada" name="aliquota_aplicada" placeholder="Aliquota Aplicada">
					</div>

					<div class="form-group">
						<label for="nome">Valor do Imposto</label>
						<input type="number" class="form-control" id="valor_do_imposto" name="valor_do_imposto" placeholder="Valor do Imposto">
					</div>-->

			<button type="submit" name="btn-editarImovel" class="btn btn-primary"> Atualizar</button>
			<a href="listaImoveis.php" class="btn btn-green"> Lista de Imóveis </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
