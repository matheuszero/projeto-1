  
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="header">
  <h1>Speed Manager</h1>
</div>

<div class="row">

<?php
    include "header.php" 
?>

<form action="verificacao.php" method="POST">
      <span> Nome </span>
      <input name="input_User" type="text" size="30" />
      <span> Senha </span>
      <input name="input_Pass" type="password"/>
      <input  class="btn-lg" type="submit" value="Login"/>
    </form> 

<div class="footer">
  <p>Todos os direitos reservados da Speed Manager 2017.</p>
</div>

</body>
</html>

