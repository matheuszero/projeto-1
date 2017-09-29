<?php
	session_start();
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$numero = $_POST['numero'];
	$email = $_POST['email'];
	array_push($_SESSION['dados'], [$nome , $senha , $numero , $email]);
	header('location: entrada.html')
	// redirecionar a páginda de entrada
?>