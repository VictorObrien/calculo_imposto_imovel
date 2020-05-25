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
	    	<h2>Escolha o Imóvel para Calcular o Imposto</h2>     
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
					</tr>
				</thead>

				<tbody>
					<?php
					$sql = "SELECT * FROM imovel";
					$resultado = pg_query($connect, $sql);
	               
	                if(pg_num_rows($resultado) > 0):

					while($dados = pg_fetch_array($resultado)):
					?>
					<tr>
						<td><?php echo $dados['id_imovel']; ?></td>
						<td><?php echo $dados['proprietario_id']; ?></td>
						<td><?php echo $dados['endereco_imovel']; ?></td>
						<td><?php echo $dados['area_do_terreno']; ?></td>
						<td><?php echo $dados['area_construida']; ?></td>
						<td><?php echo $dados['valor_venal_terreno']; ?></td>
						<td><?php echo $dados['valor_venal_construcao']; ?></td>
						
						<td><a href="calcularImposto.php?id_imovel=<?php echo $dados['id_imovel']; ?>" class="btn-success btn-lg">Calcular</a></td>			
					</tr>
				   <?php 
					endwhile;
					else: ?>

					
				   <?php 
					endif;
				   ?>

				</tbody>
			</table>
		<br>
		
		
	    <div class="clearfix"></div>
		</div>
<?php
// Footer
include_once 'includes/footer.php';
?>

