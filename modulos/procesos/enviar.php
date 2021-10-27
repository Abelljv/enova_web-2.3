<?php  

// Llamando a los campos
$Nombre = $_POST['nombre'];
$Correo = $_POST['correo'];
$Telefono = $_POST['telefono'];
$Asunto = $_POST['asunto'];
$Mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "codytron.info@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $Nombre \n";
$carta .= "Correo: $Correo \n";
$carta .= "Telefono: $Telefono \n";
$carta .= "Asunto: $Asunto \n"
arta .= "Mensaje: $Mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>