<?php

session_start();
$grupo = $_SESSION["grupos"];
$id_cat = $_SESSION["id"];

@$id_p = $_GET['id'];

echo $id_cat;

if ($id_cat==1) {
	header("Location: detallecomputadores.php?id=$id_p");
} elseif ($id_cat==2) {
	header("Location: detalleportatiles.php?id=$id_p");
} elseif ($id_cat==3) {
	header("Location: detallecamaras.php?id=$id_p");
} elseif ($id_cat==4) {
	header("Location: detalleinsumos.php?id=$id_p");
}
  elseif ($id_cat==5) {
	header("Location: detalleaccesorios.php?id=$id_p");
} 



?>