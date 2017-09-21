<?php
	session_start();
	if (!isset($_SESSION['dados'])) {
        $_SESSION['dados'] = array();
    } 
?>
<html>
	<head>
	</head>
	<body>
		<h1>Cadastro</h1>
		<form action="bau.php" method="POST">
        	Nome completo: <input type="text" name="nome"><br>
        	Senha: <input type="password" name="senha"><br>
        	Telefone: <input type="number" name="numero"><br>
        	email: <input type="text" name="email"><br>
        	<input type="submit">
    	</form>
	</body>
</html>