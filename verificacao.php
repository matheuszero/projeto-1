<?php
session_start();
$host = "localhost";
$banco = "id2900246_financasecustos";
$user = "id2900246_rhodolfo";
$pass = "rfm2017";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
</head>
<body>

	<?php  
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$sql = mysqli_query($conexao,"SELECT * FROM LoginUser WHERE Nome_User = '$login' and Senha_User = '$senha'") or die(mysql_error('Login ou senha errado'));
	$row = mysqli_num_rows($sql);
	if($row > 0){
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['logado'] = True;
		header('loocation: home.php');

	}
?>

</body>
</html>