<?php
	session_start();
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$sobrenome = $_POST['sobrenome'];
	$numero = $_POST['numero'];
	$email = $_POST['email'];
	array_push($_SESSION['dados'], [$nome , $senha , $sobrenome ,  $numero , $email]);
	header('location: entrada.html')
	// redirecionar a páginda de entrada
?>