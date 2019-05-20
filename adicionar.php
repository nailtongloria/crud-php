<?php

include_once 'C:/wamp64/www/cursophp.com/28-crud/includes/header.php';
?>


<div class="row">
	<div class="col s12 m6 push-m3 ">
		<h3 class="light">Novo cliente</h3>
		<form action="php-action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for ="nome">nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for ="sobrenome">sobrenome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for ="email">email</label>
			</div>

		    <div class="input-field col s12">
				<input type="text" name="idade" id="idade">
				<label for ="idade">Idade</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
			<a href="index.php"  class="btn green">Lista de clientes</a>
		</form>	
		

		
	</div>
</div>
<?php
include_once 'C:/wamp64/www/cursophp.com/28-crud/includes/footer.php';

?>