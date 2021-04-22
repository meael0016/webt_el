<!DOCTYPE html>
<html>
<head>
<title>Decoluly</title>

<link rel='stylesheet' type='text/css' href='css/css.css'>

<script
      src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"
      data-auto-a11y="true">
      	
 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
	<div class="principal">
		<form method="POST"   id="form" >
			<div id="quit1">
					<i class="fas fa-backspace" ></i>
				</div>
			<div  class="formulario" >
				<img src="img/logo.jpeg">
				<input type="text" name="nombre">
				<input type="gmail" name="gmail">
				<input type="text" name="asunto">
				<textarea></textarea>
				<input type="submit" name="boton" id="boton" >
			</div>
		</form>
		<?php
			include("php.php");
		?>

	
		
	
		<div class="modal" id="modal">
			
			<div class="conte1" id="conte1">
				<i class="fas fa-backspace" ></i>

				<p>Somos una pequeña empresa destidada alos detalles personalizados,desdes <a href="#">cajas</a> súper elaboradas,hasta cuadros descorados.ofresemos diferentes productos con los cuales puedes realizar el regaloideal para sorprender a esa persona especial.</p>
				<br>
				<p>Nuestra empresa surge con la necesidad de brindar productos diferentes en el mercado descorativo,para que a la hora de obsequiar algúnregalo puedas contar con opciones opciones diferentes.</p>
				<br>
				<p>llevamos en el mercado 3 años laborando, brindando nuestros servicios a personas destallistas y/o con parejas.Nuestra vición se basa en ser el #1 a la hola de querer sorprender a  alguien, que puedas contar siempre con nuestros productos y/o servicios para poder desarrollar esa sorpresa anhelada.</p>
				<div>
					<img class="img_modal" src="img/logo.JPEG">
				</div>
			</div>
		
		</div>
		<img class="fondo1" src="img/fondo1.jpg">
		<div class="navegador"> 
			<nav >
				
				<img  class="logo" src="img/logo.JPEG"/>
						
					<ul class="menu" id="menu" >
						<div id="fa-times">
							<i class="fas fa-times" ></i>
						</div>
						<li><a href="#"><i class="fas fa-home"></i>Inicio</a></li>
						<li class="quienes_somos" id="quienes_somos" ><a  href="#"><i class="far fa-eye"></i>Quiénes somos</a></li>
						<li class="nuestros_productos" id="nuestros_productos"><a  href="#" onclick="pulso();">Nuestros productos  <i class="fas fa-caret-down"></i></a>
						

							<ul class="despegable" >
								<div id="despegable">
									<a  href="#"><li><i class="fas fa-box"></i>Cajas</li></a>
								
								
									<a href="#"><li><i class="fas fa-portrait"></i>Cuadros</li></a>
									
									
									<a  href="#"><li><i class="fas fa-gifts"></i>Arreglos</li></a>
									
									
									<a  href="#"><li><i class="fas fa-layer-group"></i>Articulos para fiestas</li></a>
								</div>
							</ul>

						</li>
						
					</ul>
				
				<div class="menu1" id="menu1">
					<i class="fas fa-bars"></i>
				</div>		
				
			</nav>
		</div>
	</div>
	<div class="respuestas">
		<div class="cajas_personalizadas">
			<h2>Cajas personalizadas:</h2>
			<p>Ofresemos unos altos servicios de cajas personalizadas,diferentes formas y colores.</p>
		</div>

		<div class="arreglos_personalizados">
			<h2>Arreglos personalizados:</h2>
			<p>Variedad de arreglos perzonalizados;Desde los modelos que desee hasta los que tenemos incorporados.</p>
		</div>

		<div class="articulos_para_fiestas" >
			<h2>Articulos para fiestas:</h2>
			<p>Contamos con algunos articulos para tus fiestas.</p>
		</div>	
	</div>