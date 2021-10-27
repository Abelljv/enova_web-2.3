<?php
include'../conexion/conexion.php';

/*Variables*/
$Id = $_POST["id"];
$Nombre = $_POST['nombre'];
$Modelo = $_POST["modelo"];
$Referencia = $_POST['referencia'];
$Marca = $_POST["marca"];
$Color = $_POST["color"];
$Condicion = $_POST["condicion"];
$Resolucion = $_POST["resolucion"];
$Led = $_POST['led'];
$Material = $_POST['material'];
$Oferta = $_POST["oferta"]; 
$Precio = $_POST["precio"];
$Descripcion = $_POST["descripcion"];
$Cantidad = $_POST["cantidad"];
$FechaIngreso = $_POST["fecha"];
$Categoria = $_POST["categoria"];
$Img = $_POST["img"];
$Img = basename($Img);

$Rutao = "assets/img/tienda/productos/camaras/";

// Actualizar Imagen
if (!empty($_FILES['imagen']['name'])) {
	$nImg = $_FILES['imagen']['name'];
	$Ruta = "../../".$Rutao.$nImg;
	$Rutao = $Rutao.$nImg;

	if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {

			$update = "UPDATE grupo_camaras SET nombre='$Nombre', modelo='$Modelo', referencia='$Referencia', marca='$Marca', color='$Color', condicion='$Condicion', resolucion='$Resolucion', led='$Led', material='$Material', img='$Rutao', precio='$Precio', oferta='$Oferta', descripcion='$Descripcion', cantidad='$Cantidad', fecha_ingreso='$FechaIngreso',  id_categoria='$Categoria' WHERE  id='$Id'";

      		$result = mysqli_query($mysqli, $update);
		}
	}

} elseif (empty($_FILES['imagen']['name'])) {
	$Ruta = "../../".$Rutao.$Img;
	$Rutao = $Rutao.$Img;

	
			$update = "UPDATE grupo_camaras SET nombre='$Nombre', modelo='$Modelo', referencia='$Referencia', marca='$Marca', color='$Color', condicion='$Condicion', resolucion='$Resolucion', led='$Led', material='$Material', img='$Rutao', precio='$Precio', oferta='$Oferta', descripcion='$Descripcion', cantidad='$Cantidad', fecha_ingreso='$FechaIngreso',  id_categoria='$Categoria' WHERE  id='$Id'";

    $result = mysqli_query($mysqli, $update);

}

if(!$result){
     echo "Error: ".mysqli_error($mysqli);
	}else{
     echo '<script language="javascript">window.location="../../uploadInfo/camaras/listar_camaras.php"</script>;';
	}
    mysqli_close($mysqli);

?>
