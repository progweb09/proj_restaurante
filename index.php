<!doctype html>
<html lang="es">
<head>
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/sweetalert.css" />
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Oswald:700'
	rel='stylesheet' type='text/css'>
<meta charset="UTF-8" />
<title>Restaurante</title>
</head>
<body>
	<div id="wrapper">
		<header>
			<img src="images/logo.gif" class="logo">
			<nav>
				<ul>
					<li><a href="">HOME</a></li>
					<li><a href="">CARTA</a></li>
					<li><a href="" id="linkPromo">PROMOCIONES</a></li>
					<li><a href="">CONTACTENOS</a></li>
				</ul>
			</nav>
		</header>

		<section id="main">
			<?php
			$platos = array (
					"carne.jpg",
					"ensaladas.jpg",
					"pasta.jpg",
					"pechuga.jpg",
					"pizza.jpg",
					"tarta.jpg" 
			);
			$precio = array (
					"150 PESOS",
					"120 PESOS",
					"140 PESOS",
					"145 PESOS",
					"100 PESOS",
					"115 PESOS" 
			);
			$diaActual = date ( 'w' );
			echo "<h1 style='text-align: center; color:#e20018'>MENÚ DEL DÍA</h1>";
			
			?>
			<img src="images/<?php echo $platos[$diaActual]?>"
				alt="Foto del plato" />
			<div class="precio"><?php echo $precio[$diaActual]?></div>
	<div id="servicios"></div>
		</section>
		
		<footer>
			<p>
				&copy; 2016 <span id="destacado">Todos los derechos reservados</span>
			</p>
		</footer>
	</div>
	<script>
	$(document).ready(function(){
		$.getJSON("servicios.json",function(datos){
		for (var i in datos.prestaciones){
			var tipoServicios=datos.prestaciones[i].descripcion;
			$("#servicios").append("/"+tipoServicios+"/");
			}
			});
			});

	</script>

	<script>
			function mostrarPromocion(){
			sweetAlert('¡Promoción!','Abonando en efectivo 10% de descuento.');	
}
			linkPromo.addEventListener('click', mostrarPromocion);
	</script>
</body>
</html>
