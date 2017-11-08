<?php
	session_start();
    include "header.php";  
?>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/estiloLogin.css"/>
	</head>
	<body>
		<h1>Cadastro</h1>
		<form action="cadastrarUsuario.php" method="POST">
        	Nome: <input type="text" name="nome_do_usuario"><br>
        	Sobrenome: <input type="text" name="sobrenome_do_usuario"><br>
        	Senha: <input type="password" name="senha"><br>
        	Telefone: <input type="number" name="Numero_do_usuario"><br>
        	email: <input type="text" name="email"><br>
            Cpf: <input type="text" name="cpf">
    	   <input  class="btn-lg" type="submit" value="Cadastro"/>
        </form>
    </body>
</html>