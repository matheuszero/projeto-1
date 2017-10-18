<?php
	session_start();
	if (!isset($_SESSION['dados'])) {
        $_SESSION['dados'] = array();
    } 
    include "header.php"
?>
<html>
	<head>
        <link rel="stylesheet"   type="text/css" href="css/estiloLogin.css"/>
	</head>
	<body>
		<h1>Cadastro</h1>
		<form action="bau.php" method="POST">
        	Nome: <input type="text" name="nome"><br>
        	Sobrenome: <input type="text" name="sobrenome"><br>
        	Senha: <input type="password" name="senha"><br>
        	Telefone: <input type="number" name="numero"><br>
        	email: <input type="text" name="email"><br>
            Qual tipo de serviço?<br>
            <input type="text" name="serviço">
    	   <input  class="btn-lg" type="submit" value="Cadastro"/>
        </form>
       

    </body>
</html>