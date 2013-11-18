<?php

	// $postdata = file_get_contents("php://input");
	// $request = json_decode($postdata);

	// $nombre = $_GET["nombre"];
	// $telefono = $_GET["telefono"];

	$nombre = $request->nombre;
	$telefono = $request->telefono;

	// Enviamos un email con los datos de acceso

	$para = 'marioip@gmail.com';
	$titulo = 'Solicitud de contacto de Mundoludic';
	$mensaje = "Datos de contacto: \n\nNombre: $nombre \nTeléfono: $telefono";
	$cabeceras = 'From: soporte@mundoludic.com' . "\r\n" .
	    'Reply-To: soporte@mundoludic.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	$salida = mail($para, $titulo, $mensaje, $cabeceras);

	echo $salida;

?>