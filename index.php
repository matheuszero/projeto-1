
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
		
	</head>
	<body>
		 
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
     	 <a href="sair.php"> SAIR </a>
		<?php 
		include "Rodape.php"
		?>
	</body>
</html>
<!-- modific: lipeh777 -->