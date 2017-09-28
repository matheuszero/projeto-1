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
				<li><?= $item[0] ?></li>
				<li><?= $item[2] ?></li>
				<li><?= $item[3] ?></li>
			</ul>
		<?php endforeach ?>
	</body>
</html>