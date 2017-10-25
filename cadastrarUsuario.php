<?php  
	$dbname = "id2900246_financasecustos";
	$usuario="id2900246_rhodolfo";
	$senha = "rfm2017";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

	$nome 		  = $_POST["nome_do_usuario"];
	$sobrenome    = $_POST["sobrenome_do_usuario"];
	$contato	  = $_POST["Numero_do_usuario"];
	$email 		  = $_POST["email"];
	$senha 		  = $_POST["senha"];
	$cpf          = $_POST['cpf'];

	$sql = "INSERT INTO LoginUser(Nome_User, Sobrenome_User, Senha_User, Email_User, Number_User, Cpf_User) 
		VALUES(:nome, :sobrenome, :senha, :email, :numero, :cpf)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':sobrenome', $sobrenome);
	$stmt->bindParam( ':senha', $senha );
	$stmt->bindParam( ':email',$email );
	$stmt->bindParam( ':numero', $contato);
	$stmt->bindParam( ':cpf', $cpf);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	// echo $stmt->rowCount() . "linhas inseridas";
	header("location: entrada.php");
?>