
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="header">
  <h1>Speed Manager</h1>
</div>

<div class="row">

<?php
    include "header.php" 
?>

  <h1>Cadastro</h1>
    <form action="cadastrarUsuario.php" method="POST">
          Nome: <input type="text" name="nome_do_usuario"><br>
          Sobrenome: <input type="text" name="sobrenome_do_usuario"><br>
          Senha: <input type="password" name="senha"><br>
          Telefone: <input type="number" name="Numero_do_usuario"><br>
          email: <input type="text" name="email"><br>
            Cpf: <input type="text" name="cpf">
         <input  class="btn-lg" type="submit" value="Cadastro"/>
        </form>

<div class="footer">
  <p>Todos os direitos reservados da Speed Manager 2017.</p>
</div>

</body>
</html>

