<?php
	session_start();
	include "header.php";
	$login = $_POST['input_User'];
	$senha = $_POST['input_Pass'];
	$_SESSION['logado'] = false;

	if (isset($_SESSION['dados'])) {
		foreach ($_SESSION['dados'] as $item) {
			if ($login == $item[0] && $senha == $item[1]) {
				$_SESSION['logado'] = true;
				header("location:index.php");
			}
		}
			echo "Senha ou nome estão errados. Ou você não é cadastrado!";
	} 
	
?>