<?php

session_start();

require_once 'C:/wamp64/www/cursophp.com/28-crud/php-action/db_connect.php';


if(isset($_POST['btn-editar'])):
	$nome=mysqli_escape_string($connect,$_POST['nome']);
	$sobrenome=mysqli_escape_string($connect,$_POST['sobrenome']);
	$email=mysqli_escape_string($connect,$_POST['email']);
	$idade=mysqli_escape_string($connect,$_POST['idade']);
	$id=mysqli_escape_string($connect,$_POST['id']);

	$sql="UPDATE clientes SET nome= '$nome', sobrenome ='$sobrenome',email='$email',idade = '$idade' WHERE id='$id' ";

	if(mysqli_query($connect,$sql)):
		$_SESSION['mensagem']="atualizado com sucesso !";
		header('Location: ../index.php?');
		
	else:
		$_SESSION['mensagem']="Erro ao atualizar";
		header('Location: .../index.php?');
		
	endif;
endif;