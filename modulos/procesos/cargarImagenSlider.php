<?php
include '../../modulos/conexion/conexion.php';

$nImg = $_FILES['imagen']['name'];
$Rutao = "assets/img/slider_home/";
$Ruta = "../../".$Rutao.$nImg;
$Rutao = $Rutao.$nImg;

if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
	
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {

			/*Consulta para insertar datos*/
			$insertar = "INSERT INTO slider_home VALUES('$Rutao')";
			$result = mysqli_query($mysqli, $insertar);
	}
}


if($result){
    echo '<script> alert(s"Error al cargar la imagen");</script>';
	}else{
    echo '<script language="javascript">window.location="../../"</script>';
	}
mysqli_close($mysqli);