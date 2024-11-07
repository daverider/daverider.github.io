<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['message'];

$mensaje = "este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje = "su e-mail es" . $mail . ",\r\n";

$mensaje = "Mensaje" . $_POST['message'] . ",\r\n";
$mensaje = "Enviado el" . date('d/n/Y',time());

$para = 'daverider.desing@gmail.com';
$asunto = 'mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');








?>