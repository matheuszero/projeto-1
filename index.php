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
		<link rel="stylesheet"   type="text/css" href="../css/estilo.css"/>
		<script src="../javaScript/style.js"></script>
	</head>
	<body>
		<div class="container">
		<div class="logo">
		<img src="Mortal.png" alt="logo do Site" title="logo do blog Web-site" /> </div>
		<div class="menu">
			<ul>
				<li> <a href=""> Home </a> </li>
				<li> <a href="about_for_users.html"> Sobre </a> </li>
				<li><a href="view_users.php"> Contatos </a></li>
			
			</ul> 

		</div>

		<div class="Conteudo"> 
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
     	 </div>
			
				</form><span> WebSite &copy - Todos os direitos reservados </span> <br />
			<a href="about_for_users.html">SOBRE </a> | <a href="view_users.php"> CONTATOS </a> | <a href="create_users.php"> CADASTRO </a> | <a href="sair.php"> SAIR </a>
			</div>
		</div>
	</body>
</html>
<!-- modific: lipeh777 -->