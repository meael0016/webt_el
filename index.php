<?php
	if (isset($_POST["boton"])) {
		if (!empty($_POST["nombre"]) && !empty($_POST["gmail"]) && !empty($_POST["asunto"]) && !empty($_POST["mensaje"])) {
			$gmail=$_POST["gmail"];
			$asunto=$_POST["asunto"];
			$mensaje=$_POST["mensaje"];
			$header="From: meaelsilva@gmail.com";
			$header.="Reply-To:meaelsilva@gmail.com";
			$header.="X-Mailer: PHP/". phpversion();
			$mail=@mail($gmail,$asunto,$mensaje,$header);
		}
		if ($mail) {
			echo "se mando";
		}
	}