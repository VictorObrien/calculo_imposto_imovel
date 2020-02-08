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
	            <li><a href="index.php" class="btn-flat">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	    	<h3 class="light"> Proprietários </h3>
				<table class="striped">
				<thead>
					<tr>
						<th>Id:</th>
						<th>Nome:</th>
						<th>Endereço:</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$sql = "SELECT * FROM proprietario";
					$resultado = mysqli_query($connect, $sql);
	               
	                if(mysqli_num_rows($resultado) > 0):

					while($dados = mysqli_fetch_array($resultado)):
					?>
					<tr>
						<td><?php echo $dados['id']; ?></td>
						<td><?php echo $dados['nome']; ?></td>
						<td><?php echo $dados['endereco']; ?></td>
						<td><a href="editarProprietario.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

						<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

						<!-- Modal Structure -->
						  <div id="modal<?php echo $dados['id']; ?>" class="modal">
						    <div class="modal-content">
						      <h4>Opa!</h4>
						      <p>Tem certeza que deseja excluir esse proprietário?</p>
						    </div>
						    <div class="modal-footer">					     

						      <form action="php_actions/delete.php" method="POST">
						      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
						      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

						      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

						      </form>

						    </div>
						  </div>


					</tr>
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
		<a href="proprietario.php" class="btn btn-primary">Adicionar Proprietário</a>

		
<?php
// Footer
include_once 'includes/footer.php';
?>


	