<?php  

// Llamando a los campos
$Nombre = $_POST['nombre'];
$Correo = $_POST['correo'];
$Telefono = $_POST['telefono'];
$Asunto = $_POST['asunto'];
$Mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "enovatecnologia@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta .= "De: $Nombre \n";
$carta .= "Correo: $Correo \n";
$carta .= "Telefono: $Telefono \n";
$carta .= "Asunto: $Asunto \n";
$carta .= "Mensaje: $Mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-enviado.html');

?>
  <!-- Abell && favian -->