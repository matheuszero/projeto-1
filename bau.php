<?php
	session_start();
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$sobrenome = $_POST['sobrenome'];
	$numero = $_POST['numero'];
	$email = $_POST['email'];
	$serviço = $_POST['serviço'];
	array_push($_SESSION['dados'], [$nome , $senha , $sobrenome ,  $numero , $email , $serviço]);
	header('location: entrada.php');
	// redirecionar a páginda de entrada
?>	