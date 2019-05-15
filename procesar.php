<?php
$destino = "contacto@escuelacentrosur.com, centrosur@vera.com.uy";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$contenido = "Un cliente se quiere contactar por via web, a continuacion se adjuntan los datos: \n\nNombre: " . $name . "\nTelefono: " . $phone . "\nEmail: " . $email . "\nMensaje: " . $message;

mail($destino,"Web Escuela Centro Sur - Contacto de cliente via web -", $contenido);
header("Location:exito.html")
?>
