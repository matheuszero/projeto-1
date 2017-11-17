<?php
session_start();
$host = "localhost";
$banco = "id2900246_financasecustos";
$user = "id2900246_rhodolfo";
$pass = "rfm2017";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());

$login = $_POST['input_User'];
$senha = $_POST['input_Pass'];
$sql = mysqli_query($conexao,"SELECT * FROM LoginUser WHERE Nome_User = '$login' and Senha_User = '$senha'") or die(mysql_error('Login ou senha errado'));
$row = mysqli_num_rows($sql);
if($row > 0){
	$_SESSION['login'] = $login;
	$_SESSION['logado'] = True;
	echo "<script>location.href='index.php';</script>"; 
	
}

?>

