
<?php
	include "header.php"
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estiloLogin.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	</head>
	<body>

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
              <img src="novo.jpg" alt="mercado_de_servicos" style="margin: auto; width: 57%; height: 400px;">
            </div>
      
            <div class="item">
              <img src="financas empresas.jpg" alt="servicos" style="margin: auto; width: 57%; height: 400px;">
            </div>
      
            <div class="item">
              <img src="financas issnvestir.jpg" alt="escolha" style="margin: auto; width: 57%; height: 400px;">
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
		<?php 
		include "Rodape.php"
		?>
	</body>
</html>
<!-- modific: lipeh777 -->