<?php
	session_start();
	$login = $_POST['input_User'];
	$senha = $_POST['input_Pass'];
	$_SESSION['logado'] = false;
	if (isset($_SESSION['dados'])) {
		foreach ($_SESSION['dados'] as $item) {
			if ($login == $item[0] && $senha == $item[1]) {
				$_SESSION['logado'] = true;
				header("location:index.php");
			}
			else{
				echo "Senha ou nome do usuário estão incorretos.";
			}
		}
			echo "Senha ou nome estão errados. Ou você não é cadastrado!"
				header("location: create_users.php");
	} 
	
?>