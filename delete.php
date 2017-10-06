<?php
	session_start();
	$id = $_GET['id'];
	unset($_SESSION['dados'][$id]); 
	header('location: view_users.php');

?>