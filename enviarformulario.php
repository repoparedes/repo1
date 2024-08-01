<?php

$nombre = $_POST['name'];
$email = $_POST['email']; 
$mensaje = $_POST['message'];
$para = 'portfolioparedes@gmail.com';

$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "El asunto es: " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$asunto = 'Mensaje del sitio: Portfolio Paredes';

mail($para, $asunto, utf8_decode($mensaje), $header);
header('Location:index.html');

?>