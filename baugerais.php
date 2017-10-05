<?php
	session_start();
	if (!isset($_SESSION['itens2'])) {
        $_SESSION['itens2'] = array();
    } 
	$qtd = $_POST['qtdFuncionarios'];
	array_push($_SESSION['itens2'], [$qtd , ] );
	header('location: index.php');
?>