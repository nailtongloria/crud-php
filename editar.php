<?php
include_once 'C:/wamp64/www/cursophp.com/28-crud/php-action/db_connect.php';
include_once 'C:/wamp64/www/cursophp.com/28-crud/includes/header.php';

if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect,$_GET['id']);
	$sql="SELECT * FROM clientes WHERE id= '$id'";
	$resultado = mysqli_query($connect,$sql);
	$dados=mysqli_fetch_array($resultado);
endif;
?>


<div class="row">
	<div class="col s12 m6 push-m3 ">
		<h3 class="light">Editar cliente</h3>
		<form action="php-action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for ="nome">nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome"  value="<?php echo $dados['sobrenome'];?>">
				<label for ="sobrenome">sobrenome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="email" id="email"  value="<?php echo $dados['email'];?>">
				<label for ="email">email</label>
			</div>

		    <div class="input-field col s12">
				<input type="text" name="idade" id="idade"  value="<?php echo $dados['idade'];?>">
				<label for ="idade">Idade</label>
			</div>

			<button type="submit" name="btn-editar" class="btn">Atualizar</button>
			<a href="index.php"  class="btn green">Lista de clientes</a>
		</form>	
		

		
	</div>
</div>
<?php
include_once 'C:/wamp64/www/cursophp.com/28-crud/includes/footer.php';

?>