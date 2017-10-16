<?php
	session_start();
	if (!isset($_SESSION['dados'])) {
        $_SESSION['dados'] = array();
    } 
//sessao de dados
?>
<html>
	<head>
	</head>
	<body>
		<h1>Cadastro</h1>
		<form action="bau.php" method="POST">
        	Nome: <input type="text" name="nome"><br>
        	Sobrenome: <input type="text" name="sobrenome"><br>
        	Senha: <input type="password" name="senha"><br>
        	Telefone: <input type="number" name="numero"><br>
        	email: <input type="text" name="email"><br>
        </form>
        <select id="seletor">
             <option value=""> - </option>
            <option value="segurança">Serviços de Segurança</option>
            <option  value="gerais">Serviços Gerais</option>
        </select>
       <form action="bauseguranca.php" id="f1" class="hide">
            <input type="number" name="qtdFuncionario">
            <input type="submit" value="Enviar">
        </form>
        <form action="baugerais.php" id="f2" class="hide">
            <input type="number" name="qtdFuncionario">
            <input type="submit" value="Enviar">
        </form>
    	<input type="submit">

    </body>
</html>