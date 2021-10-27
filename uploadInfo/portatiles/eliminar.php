<?php

function borrar($id)
{
require_once('../../modulos/conexion/conexion.php');     
$res = "DELETE FROM grupo_portatiles WHERE id = {$id}";
$result = $mysqli->query($res);
}

header('Location: listar_portatiles.php');

?>