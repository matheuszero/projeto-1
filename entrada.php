<?php
	include "header.php"
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Web-site MK</title>
		<link rel="stylesheet"   type="text/css" href="css/estiloLogin.css"/>
		<script src="style.js"></script>
	</head>
	<body>
		<form action="verificacao.php" method="POST">
			<span> Nome </span>
			<input name="input_User" type="text" size="30" />
			<span> Senha </span>
			<input name="input_Pass" type="password"/>
			<input  class="btn-lg" type="submit" value="Login"/>
		</form>	
	</body>
</html>
<!-- modific: lipeh777 -->