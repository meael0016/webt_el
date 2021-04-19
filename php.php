<!DOCTYPE html>
<html>
<head>
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


