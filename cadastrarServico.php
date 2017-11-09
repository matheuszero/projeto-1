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

	$prazo    = $_POST["prazo"];
	$valor	  = $_POST["valor"];
	$serv 	  = $_POST["serv"];

	$sql = "INSERT INTO Create_Serv(Prazo_Serv, Valor_Serv, Serv_Serv) 
		VALUES(:prazo, :valor, :serv)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':prazo', $prazo );
	$stmt->bindParam( ':valor', $valor);
	$stmt->bindParam( ':serv', $serv );

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	// echo $stmt->rowCount() . "linhas inseridas";
	header("location: entrada.php");
?>