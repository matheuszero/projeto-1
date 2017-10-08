<?php
	session_start();
	if ($_SESSION['logado'] == false) {
		header('location: paginaEntrada.php');
	}
?>
<html>
	<head>
	</head>
	<body>
		<h1>Seja bem vindo!</h1>
		<a href="sair.php">Sair</a>
	</body>
</html>