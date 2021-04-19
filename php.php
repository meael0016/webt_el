<!DOCTYPE html>
<html>
<head>
	<title>Enviar mensaje GMAIL</title>
	<link rel='stylesheet' type='text/css' href='css/formulario.css'>
</head>
<body>
		<form method="post" id="form" enctype="multipart/form-data">
			<div class="formulario">
				<img src="img/logo.JPEG">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre">
				<input type="gmail" name="gmail" id="gmail" placeholder="Gmail">
				<input type="text" name="asunto" id="asunto" placeholder="Asunto">
				<textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
				<input type="submit" name="boton" id="boton">
			</div>
		</form>
		<?php
	if (isset($_POST["boton"])) {
		if (!empty($_POST["nombre"]) && !empty($_POST["gmail"]) && !empty($_POST["asunto"]) && !empty($_POST["mensaje"])) {

			$name=$_POST["nombre"];
			$gmail=$_POST["gmail"];
			$mensaje=$_POST["mensaje"];
			$asunto=$_POST["asunto"];
			$header="From: juanxita022@gmail.com"."\r\n";
			$header.="Reply-To: juanxita022@gmail.com"."\r\n";
			$header.="X-Mailer: PHP/". phpversion();
			$mail=@mail("meaelsilva@gmail.com",$asunto,$mensaje,$header);
			if ($mail) {
				echo "<h1>enviado corestamente</h1";
			}else{
				echo "<h1>no enviado</h1>";
			}
		}
		
	}

?>
</body>
</html>

