<?php
// Conexão
include_once 'php_actions/db.connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = pg_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM proprietario WHERE id = '$id'";
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
		<h3 class="light"> Editar Proprietario </h3>
		<form action="php_actions/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				
			</div>

			<div class="form-group">
				<label for="sobrenome">Endereço</label>
				<input type="text" class="form-control" placeholder="Endereço" name="endereco" value="<?php echo $dados['endereco'];?>" id="endereco">
				
			</div>

			<button type="submit" name="btn-editarProprietario" class="btn btn-primary"> Atualizar</button>
			<a href="listaProprietarios.php" class="btn btn-green"> Lista de proprietários </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
