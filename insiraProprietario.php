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

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Insira os dados do Proprietário.</h3>
	    		<br />
				<form method="post" action="php_actions/create.php" id="formProprietario">
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
					</div>

					<div class="form-group">
						<label for="endereco">Endereço</label>
						<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" required="requiored">
					</div>
					
					<button type="submit" name="btn_cadastrar_proprietario" class="btn btn-primary form-control">Inserir</button>					
					
				</form>


			</div>
			
		</div>

<?php
// Footer
include_once 'includes/footer.php';
?>