<?php
	session_start();
	if (!isset($_SESSION['itens2'])) {
        $_SESSION['itens2'] = array();
    } 
	$qtd = $_POST['qtdFuncionario'];
	array_push($_SESSION['itens2'], [$qtd , ] );
	header('location: login.php');
?>