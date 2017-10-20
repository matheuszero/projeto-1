
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
      <img src="mercado_de_servicos.jpeg" alt="mercado_de_servicos" style="margin: auto; width: 100%; height: 560px;">
    </div>

    <div class="item">
      <img src="servicos.jpeg" alt="servicos" style="margin: auto; width: 100%; height: 560px;">
    </div>

    <div class="item">
      <img src="escolha.jpeg" alt="escolha" style="margin: auto; width: 100%; height: 560px;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
		
		<!-- 	<div id="meuSlider" class="carousel slide" data-ride="carousel">
    			<ol class="carousel-indicators">
        			<li data-target="#meuSlider" data-slide-to="0" class="active"></li>
        			<li data-target="#meuSlider" data-slide-to="1"></li>
        			<li data-target="#meuSlider" data-slide-to="2"></li>
    			</ol>
    <div class="carousel-inner">
        	<div class="item active"><img src="mercado_de_servicos.jpeg" alt="Slider 1" style="margin: auto;" /></div>
        	<div class="item"><img src="servicos.jpeg" alt ="Slide 2" /></div>
        	<div class="item"><img src="escolha.jpeg" alt="Slide 3" /></div>
    </div>
    <a class="left carousel-control" href="#" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div> -->
		<?php 
		include "Rodape.php"
		?>
	</body>
</html>
<!-- modific: lipeh777 -->