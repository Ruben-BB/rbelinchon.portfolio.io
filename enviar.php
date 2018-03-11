<?php

$nombre = strip_tags($_POST['nombre']);
$correo = strip_tags($_POST['email']);
$comentario = strip_tags($_POST['comentarios']);

$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

$correoDestino = "ruben.belinchon.92@gmail.com";

//Formateo el asunto del correo
$asunto = "Ruben-BB Portfolio new message";
 
//Formateo el cuerpo del correo
$cuerpo = "<b>Enviado por:</b> " . $nombre . " el día " . $fechaFormateada . "<br>" . "<b>E-mail:</b> " . $correo . "<br>" . "<b>Comentario:</b> " . $comentario;

$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Envío el mensaje
$enviado = mail( $correoDestino, $asunto, $cuerpo, $cabeceras);
 
if ($enviado)
	header('Location: http://ruben-bb.github.io');
else
	echo 'Error en el envío del email';

?>