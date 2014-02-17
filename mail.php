<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	$para = 'k@suburbio.com.ve';
	$titulo = 'mensaje';
	$header = 'From: ' . $email;
	$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
		if ($_POST['enviar']) {
			if (mail($para, $titulo, $msjCorreo, $header)) {
				echo "<script language='javascript'>
					alert('Mensaje enviado, muchas gracias.');
					window.location.href = 'http://suburbio.com.ve';
						</script>";
							} else 
						{
							echo 'Falló el envio';
							}
								}
?>

