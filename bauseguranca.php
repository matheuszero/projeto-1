<?php
	session_start();
	$seguranca = $_POST['seguranca'];
	array_push($_SESSION['dados'], [$seguranca , ]);
	header('location: index.php');
?>