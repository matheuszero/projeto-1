<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
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
    include "../header.php" 
?>

    <div id="esquerda">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
      <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
              <img src="../imagens/novo.jpg" alt="mercado_de_servicos" style="margin: auto; width: 57%; height: 400px;">
            </div>
      
            <div class="item">
              <img src="../imagens/financas empresas.jpg" alt="servicos" style="margin: auto; width: 57%; height: 400px;">
            </div>
      
            <div class="item">
              <img src="../imagens/financas issnvestir.jpg" alt="escolha" style="margin: auto; width: 57%; height: 400px;">
            </div>
        </div>
    
      <!-- esquerda e direita controles -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> 
    </div>
<div class="col-6 col-m-9">
  <h1>Speed Manager</h1>
  <p>Speed Manager è um site com a função de lhe alciliar. Você que deseja anunciar seus serviços proficionais.</p>
</div>

<div class="col-6 col-m-12">
  <div class="aside">
    <h2>Informações</h2>
    <p>Saiba mais sobre a Speed Manager.</p>
    <h2>Saiba como evoluir</h2>
    <p>Aqui ajudaremos você a subir muito.</p>
    <h2>Fale conosco</h2>
    <p>Entre em contato com o nosso pessaol e tirem suas duvidas.</p>
  </div>
</div>

</div>

<div class="footer">
  <p>Todos os direitos reservados da Speed Manager 2017.</p>
</div>

</body>
</html>

