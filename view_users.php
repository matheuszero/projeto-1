<?php
	session_start();
	if ($_SESSION['dados'] == false) {
		header('location: entrada.php');
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
				<li><?= $item[0] , " - ", $item[2] ," - ", $item[3] , " - ", $item[4] ?></li>
			</ul>
		<?php endforeach ?>
	</body>
</html>	