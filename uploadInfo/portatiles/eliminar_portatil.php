<?php
include_once('eliminar.php');
$id = isset($_GET['id'])? $_GET['id'] : 0;
borrar($id);
die();
?>