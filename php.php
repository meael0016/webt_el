<?php
	if (isset($POST["boton"])) {
		if (!empty($POST["nombre"]) && !empty($POST["gmail"]) && !empty($POST["asunto"]) && !empty($POST["mensaje"])) {
			$name=$POST["nombre"];
			$gmail=$POST["gmail"];
			$asunto=$POST["asunto"];
			$mensaje=$POST["mensaje"];
			$header="From: meaelsilva@gmail.com";
			$header.="Reply-to: meaelsilva@gmail.com ";
			$header.="X.Mailer= PHP/". phpversion();
			$mail=mail($gmail,$asunto,$mensaje,$header);
			if ($mail) {
				echo "se mando";
			}else{
				echo "no se mando";
			}

		}
		
	}
?>