<?php

	// $postdata = file_get_contents("php://input");
	// $request = json_decode($postdata);

	$nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];

	echo $request;

	// $nombre = $request->nombre;
	// $telefono = $request->telefono;

	// Enviamos un email con los datos de acceso

	$para = 'soporte@mundoludic.com, info@mundoludic.com';
	$titulo = 'Solicitud de contacto de Mundoludic';
	$mensaje = "Datos de contacto: \n\nNombre: $nombre \nTeléfono: $telefono";
	$cabeceras = 'From: soporte@mundoludic.com' . "\r\n" .
	    'Reply-To: soporte@mundoludic.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	$salida = mail($para, $titulo, $mensaje, $cabeceras);

	echo $salida;

?>