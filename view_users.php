<?php
	session_start();
	if ($_SESSION['dados'] == false) {
		header('location: entrada.html');
		exit();
	}
	//teste
?>
<html>
	<head>
	</head>
	<body>
		<?php foreach ($_SESSION['dados'] as $chave => $item): ?>
			<ul>
				<li><?= $item[0] , " - ", $item[2] ," - ", $item[3] , " - ", $item[4] ?><a href="delete.php?id=<?=$chave?>"> Remover </a></li>
			</ul>
		<?php endforeach ?>
		<a href="index.php"> Voltar </a>
	</body>
</html>	