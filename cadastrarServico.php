<?php  
	$dbname = "id2900246_cadastroserv";
	$usuario="id2900246_users";
	$senha = "if2017";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

	$usuario  = $_POST["nome_do_usuario"];
	$prazo    = $_POST["sobrenome_do_usuario"];
	$valor	  = $_POST["Numero_do_usuario"];
	$serv 	  = $_POST["email"];

	$sql = "INSERT INTO Create_Serv(Nome_User, Sobrenome_User, Senha_User, Email_User, Number_User, Cpf_User) 
		VALUES(:nome, :sobrenome, :senha, :email, :numero, :cpf)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':sobrenome', $sobrenome);
	$stmt->bindParam( ':senha', $senha );
	$stmt->bindParam( ':email',$email );

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	// echo $stmt->rowCount() . "linhas inseridas";
	header("location: entrada.php");
?>