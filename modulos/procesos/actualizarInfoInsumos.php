<?php
include'../conexion/conexion.php';

/*Variables*/
$Id = $_POST["id"];
$Nombre = $_POST['nombre'];
$Marca = $_POST["marca"];
$Referencia = $_POST['referencia'];
$Cantidad = $_POST["cantidad"];
$Descripcion = $_POST["descripcion"];
$Precio = $_POST["precio"];
$Oferta = $_POST["oferta"]; 
$FechaIngreso = $_POST["fecha"];
$Categoria = $_POST["categoria"];
$Img = $_POST["img"];
$Img = basename($Img);

$Rutao = "assets/img/tienda/productos/insumos/";

// Actualizar Imagen
if (!empty($_FILES['imagen']['name'])) {
	$nImg = $_FILES['imagen']['name'];
	$Ruta = "../../".$Rutao.$nImg;
	$Rutao = $Rutao.$nImg;

	if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {

			$update = "UPDATE grupo_insumos SET nombre='$Nombre', marca='$Marca', referencia='$Referencia', cantidad='$Cantidad', descripcion='$Descripcion', precio='$Precio', oferta='$Oferta', img='$Rutao', fecha_ingreso='$FechaIngreso',  id_categoria='$Categoria' WHERE  id='$Id'";

      		$result = mysqli_query($mysqli, $update);
		}
	}

} elseif (empty($_FILES['imagen']['name'])) {
	$Ruta = "../../".$Rutao.$Img;
	$Rutao = $Rutao.$Img;

	
			$update = "UPDATE grupo_insumos SET nombre='$Nombre', marca='$Marca', referencia='$Referencia', cantidad='$Cantidad', descripcion='$Descripcion', precio='$Precio', oferta='$Oferta', img='$Rutao', fecha_ingreso='$FechaIngreso',  id_categoria='$Categoria' WHERE  id='$Id'";

    $result = mysqli_query($mysqli, $update);

}

if(!$result){
     echo "Error: ".mysqli_error($mysqli);
	}else{
     echo '<script language="javascript">window.location="../../uploadInfo/insumosImpresion/listar_insumos.php"</script>;';
	}
    mysqli_close($mysqli);

?>
