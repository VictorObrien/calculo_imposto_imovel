<?php
// Header
include_once 'includes/header.php';

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


	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"	></div>
	    	<div class="col-md-4">
	    		<h3>Insira os dados do Imóvel.</h3>
	    		<br />
				<form method="post" action="php_actions/create.php" id="formImovel">

					<div class="form-group">
						<label for="nome">Id Proprietário</label>
						<input type="text" class="form-control" id="proprietario_id" name="proprietario_id" placeholder="Código Proprietário" required="requiored">
					</div>
					
					<div class="form-group">
						<label for="nome">Endereço Imóvel</label>
						<input type="text" class="form-control" id="endereco_imovel" name="endereco_imovel" placeholder="Endereço Imóvel" required="requiored">
					</div>

					<div class="form-group">
						<label for="nome">Área do Terreno</label>
						<input type="text" class="form-control" id="area_do_terreno" name="area_do_terreno" placeholder="Área do Terreno" required="requiored">
					</div>

					<div class="form-group">
						<label for="nome">Área Construida</label>
						<input type="text" class="form-control" id="area_construida" name="area_construida" placeholder="Área Construida" required="requiored">
					</div>

					<!--<div class="form-group">
						<label for="nome">Área Total</label>
						<input type="number" class="form-control" id="area_total" name="area_total" placeholder="Área Total">
					</div>-->

					<div class="form-group">
						<label for="nome">Aliquota</label>
						<input type="text" class="form-control" id="aliquota" name="aliquota" placeholder="Aliquota" required="requiored">
					</div>

					<div class="form-group">
						<label for="nome">Valor Venal Terreno</label>
						<input type="text" class="form-control" id="valor_venal_terreno" name="valor_venal_terreno" placeholder="Valor Venal Terreno" required="requiored">
					</div>

					<div class="form-group">
						<label for="nome">Valor Venal Construção</label>
						<input type="text" class="form-control" id="valor_venal_construcao" name="valor_venal_construcao" placeholder="Valor Venal Construção">
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
										
					<button type="submit" name="btn_cadastrar_imovel" class="btn btn-primary form-control">Inserir</button>

				</form>
			</div>
			
		</div>

<?php
// Footer
include_once 'includes/footer.php';
?>