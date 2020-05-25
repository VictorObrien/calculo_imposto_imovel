<?php
// Conexão
include_once 'php_actions/db.connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
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
	            <li><a href="listaProprietarios.php" class="btn-flat">Consultar Proprietarios</a></li>
	            <li><a href="listaImoveis.php" class="btn-flat">Consultar Imóveis</a></li>           
			  </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

	<div class="container">

	     
	    <div class="jumbotron">
	        <h2 align="center">Bem vindo ao Calcular Imposto do seu Imóvel</h2>
	        <br>
	        <h3 align="center">
	        	1 - Primeiro Insira os dados do Proprietário
	        </h3>	    
			<a href="insiraProprietario.php"  class="btn btn-primary btn-lg btn-block">Adicionar cliente</a>
			<h3 align="center">
	        	2 - Depois Insira os dados do Imóvel
	        </h3>	
			<a href="insiraImovel.php" class="btn btn-primary btn-lg btn-block">Adicionar Imóvel</a>
			<h3 align="center">
	        	3 - E por fim Calcule o Imposto.
	        </h3>
			<a href="listaParaCalculo.php" name="btn-calculaImposto" class="btn btn-success btn-lg btn-block">Calcular Imposto</a>
		    <div class="clearfix"></div>		    
	    </div>


	</div>
<?php
// Footer
include_once 'includes/footer.php';
?>


	