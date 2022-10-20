<?php
 	$destino="Correo de Stabile solutions";
 	$nombre = $_POST["nombreform"];
	$correo = $_POST["emailform"];
	$asunto = $_POST["asuntoform"];
 	$mensaje = $_POST["mensajeform"];
 	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje . "\nMensaje: " . $mensaje;

 	mail($destino,"Formulario-Contacto", $contenido);
 	header("location:gracias.php");

?>