<?php
include'../conexion/conexion.php';

/*Variables*/

$Id = $_POST["id"];
$Img = $_POST["img"];
$Img = basename($Img);

$Rutao = "assets/img/slider_home/";

// Actualizar Imagen
if (!empty($_FILES['imagen']['name'])) {
	$nImg = $_FILES['imagen']['name'];
	$Ruta = "../../".$Rutao.$nImg;
	$Rutao = $Rutao.$nImg;

	if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {

			$update = "UPDATE slider_home SET  img='$Rutao' WHERE  id='$Id'";

      		$result = mysqli_query($mysqli, $update);
		}
	}

} elseif (empty($_FILES['imagen']['name'])) {
	$Ruta = "../../".$Rutao.$Img;
	$Rutao = $Rutao.$Img;

	
				$update = "UPDATE slider_home SET  img='$Rutao' WHERE  id='$Id'";
    $result = mysqli_query($mysqli, $update);

}

if(!$result){
     echo "Error: ".mysqli_error($mysqli);
	}else{
     echo '<script language="javascript">window.location="../../uploadInfo/slider/listar_slider.php"</script>;';
	}
    mysqli_close($mysqli);

?>
