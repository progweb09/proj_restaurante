<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Restaurante</title>
<link href="css/main.css" type="text/css" rel="stylesheet">
<link href="css/sweetalert.css" type="text/css" rel="stylesheet">
<script src="js/sweetalert.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<header>
			<img src="images/logo.gif" class="logo">
			<nav>
				<ul>
					<li><a href="#" title="Home">Home</a></li>
					<li><a href="#" title="Carta">Carta</a></li>
					<li><a href="#" title="Promociones" id="lnk_promociones">Promociones</a></li>
					<li><a href="#" title="Contactenos">Contactenos</a></li>
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
			
			$diaActual = date ('w');
			
			echo "<h1 style='text-align:center;color:#e20018'> MENÚ DEL DIA </h1>";
						
		?>
		
		   <img style="display: block; margin: 0px auto"
				src="images/<?php echo $platos[$diaActual] ?>" alt="foto del plato">
				
		   <br>
		   
		<?php
			echo "<h1 style='display: block; margin: 0px auto; width:20%; 
			text-align:center;color:#ffffff;background-color:#000000'> 
			$precio[$diaActual] </h1>";
		?>
			
		   
		   
		   
		</section>
		<footer>
			<p>
				&copy; 2016 <span id="destacado">Todos los derechos reservados</span>
			</p>
		</footer>
	</div>
	
	<script>

    function mostrarPromocion(){

    	sweetAlert('¡ Promoción !', 'Abonando en Efectivo 10% de Descuento.');	

        
    }

    lnk_promociones.addEventListener('click', mostrarPromocion);

	</script>
	
	
</body>
</html>
