<?php
	$ipPlayer = $_SERVER["REMOTE_ADDR"];
?>
<?php
	session_start();
	if($_SESSION['dados'] == false){
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
				<li> <a href=""> Contato </a> </li>
				<li> <a href=""> Admin </a> </li>
			
			</ul> 

		</div>
		<div class="Conteudo"> </div>
			
				</form><span> WebSite &copy - Todos os direitos reservados </span> <br />
			<a href="#">SOBRE </a> | <a href="#"> CONTATO </a> | <a href="cadastro.php"> CADASTRO </a>
			</div>
		</div>
	</body>
</html>