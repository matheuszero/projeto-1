<?php
	session_start();
	if ($_SESSION['dados'] == false) {
		header('location: entrada.html');
		exit();
	}
?>
<html>
	<head>
	</head>
	<body>
		<?php foreach ($_SESSION['dados'] as $item): ?>
			<ul>
				<li><?= $item[0] , " - ", $item[2] ," - ", $item[3] , " - ", $item[4] ?></li>
			</ul>
		<?php endforeach ?>
		<a href="index.php"> Voltar </a>
	</body>
</html>