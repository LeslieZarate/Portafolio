<?php
$name = $POST['name'];
$email = $POST['email'];
$message = $POST['message'];


$header = 'From:' . $email ."\r\n";
$header .= "X-Mailer : PHP/" . phpversion() ."\r\n";
$header .= "Mime-version: 1.0 .\r\n";
$header .="Content-Type: text/plain";

$contenido = "Nombre" . $name ."\nEmail" . $email ."\nMensaje:" .$message."\r\n";

$destino = 'fiorelly30zarate@gmail.com';
$asunto ='Mensaje de contacto laboral';


mail($destino,$asunto,utf8_decode($contenido,$header))

?>