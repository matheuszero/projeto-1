<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/estiloLogin.css"/>
	</head>
	<body>
		<h1>Cadastro</h1>
		<form action="cadastrarServico.php" method="POST">
        	Enquanto tempo entrega o trabalho?<br>
        	 <input type="number" name="prazo"><br>
        	Qual o valor em média você cobrará?<br>
        	 <input type="number" name="valor"><br>
        	Qual o tipo de serviço?
        	 <input type="text" name="serv"><br>
    	   <input  class="btn-lg" type="submit" value="Cadastro"/>
        </form>
    </body>
</html>