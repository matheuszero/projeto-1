<?php
	session_start();
	$login = $_POST['input_User'];
	$senha = $_POST['input_Pass'];
	$_SESSION['logado'] = false;
	if (isset($_SESSION['dados'])) {
		foreach ($_SESSION['dados'] as $item) {
			if ($login == $item[0] && $senha == $item[1]) {
				$_SESSION['logado'] = true;
				header("location: login.php");
			}
		}
				echo "Nome ou senha está errado.";
	} 
	
?>