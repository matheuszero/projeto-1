<?php
	session_start();
	if (!isset($_SESSION['itens1'])) {
        $_SESSION['itens1'] = array();
    } 
	$qtd = $_POST['qtdFuncionario'];
	array_push($_SESSION['itens1'], [$qtd , ] );
	header('location: index.php');
?>