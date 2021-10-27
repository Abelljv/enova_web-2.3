<?php

function borrar($id)
{
require_once('../../modulos/conexion/conexion.php');     
$res = "DELETE FROM creditos WHERE id = {$id}";
$result = $mysqli->query($res);
}

header('Location: listar_credito.php');

?>