<?php
	session_start();
	if (!isset($_SESSION['dados'])) {
        $_SESSION['dados'] = array();
    } 
//sessao de dados
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
    	   <input type="submit">
        </form>
        <a href="entrada.html"> Voltar </a>
       

    </body>
</html>