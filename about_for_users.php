<?php
	session_start();
	include "firstheader.php";
	if($_SESSION['logado'] == false){
		header('location:entrada.php');
		exit();
}
?>



<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/estiloLogin.css">
	
		<title>sobre</title>
	</head>
	<body>
		<h1>Speed manager</h1>
		<h2>Os idealizadores dessa plataforma, tiveram a brilhante ideia de criá-la, levando em conta a crise econômica atual nacional que o Brasil presencia.</h2>
		<h2>Foi craida para ajudar os micro ou grandes empresários, ou até mesmo empresas que momentaneamente necessitam dos serviços de uma pessoa jurídica ou de outra empresa/instituição.</h2>
		<h2>O usuário pode criar uma conta em nossa página, e assim informar seus interesses de serviços ou necessidades empresariais.</h2>
		<p>Filipe Izidorio. Email: filipeizidorio@outlook.com<br></p>
		<p>Rhodolfo Santana. Email: rhodolfo.dodo@hotmail.com<br></p>
		<p>Matheus Henrique.<br></p>
		<p>Ruan Matheus. Email: ruano172016@gmail.com telefone: (81) 9 8568-6926<br></p>
		<p>Lucas Magnum. Email: magnolucas63@gmail.com Telefone (81) 9 8579-9294<br></p>
		<p>Tennyson Beserra. Email:tennysos23@gmail.com Telefone: (81) 9 8824-5009<br></p>
		<p>Gabriel Carreiro. Email: gabrielcorreirodesouza@gmail.com Telefone: (81) 9 9697-2570<br></p>
		<p>Barbara Suzana. Email: barbarasfraga@outlook.com Telefone: (81) 9 8926-2354<br></p>
		<p>Hozana Thallyta. Email: thallytando@gmail.com Telefone: (81) 9 8459-7300<br></p>
		<p>Vanlediana Nicolau. Email: vanlediana@gmail.com Telefone :(81) 9 8598-9422<br></p>
	</body>
</html>