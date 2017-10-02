<?php
	session_start();
	$gerais = $_POST['gerais'];
	array_push($_SESSION['conteudo'], [$gerais , ]);
	header('location: index.php');
?>