<?php
	$ipPlayer = $_SERVER["REMOTE_ADDR"];
?>
<?php
	session_start();
	if($_SESSION['logado'] == false){
		header('location:entrada.html');
		exit();
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Web-site MK</title>
		<link rel="stylesheet"   type="text/css" href="estilo.css"/>
	</head>
	<body>
		<div class="container">
		<div class="logo">
		<img src="Mortal.png" alt="logo do Site" title="logo do blog Web-site" /> </div>
		<div class="menu">
			<ul>
				<li> <a href=""> Home </a> </li>
				<li> <a href=""> Sobre </a> </li>
				<li><a href="view_users.php"> Contatos </a></li>
			
			</ul> 

		</div>

		<div class="Conteudo"> 
			<select>
        		<option value="bauseguranca.php">Serviços de Segurança</option>
        		<option action="baugerais.php">Serviços Gerais</option>
      		</select>
     	 </div>
			
				</form><span> WebSite &copy - Todos os direitos reservados </span> <br />
			<a href="#">SOBRE </a> | <a href="view_users.php"> CONTATOS </a> | <a href="create_users.php"> CADASTRO </a> | <a href="sair.php"> SAIR </a>
			</div>
		</div>
	</body>
</html>