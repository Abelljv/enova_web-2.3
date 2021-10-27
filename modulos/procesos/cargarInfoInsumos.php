<?php
include'../conexion/conexion.php';

/*Variables*/
$Nombre = $_POST['nombre'];
$Marca = $_POST["marca"];
$Referencia = $_POST["referencia"];
$Cantidad = $_POST["cantidad"];
$Descripcion = $_POST["descripcion"];
$Precio = $_POST["precio"];
$Oferta = $_POST["oferta"]; 
$FechaIngreso = $_POST["fecha"];
$categoria = $_POST["categoria"];


// ------------- Guardar imagen ------------- //
$nImg = $_FILES['imagen']['name'];
$Rutao = "assets/img/tienda/productos/insumos/";
$Ruta = "../../".$Rutao.$nImg;
$Rutao = $Rutao.$nImg;

if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
	
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {


/*Consulta para insertar datos*/
$insertar = "INSERT INTO grupo_insumos(nombre, marca, referencia, cantidad, descripcion, precio, oferta, img, fecha_ingreso, id_categoria) VALUES('$Nombre','$Marca', '$Referencia', '$Cantidad','$Descripcion', '$Precio', '$Oferta', '$Rutao', '$FechaIngreso', '$categoria')";

      $result = mysqli_query($mysqli, $insertar);

	}
}

/*Ejecuta la consulta*/
$id_port = "SELECT id FROM grupo_insumos order by id desc limit 1"; 
$consult = $mysqli->query($id_port);

while($temp = $consult->fetch_assoc()){
 		$id_p = $temp['id'];
 	}


 if(!$result){
     echo '<script> alert("Error al cargar la informacion del producto");</script>';
	}else{
     echo '<script language="javascript">window.location="../../tienda/detalleinsumos.php?id='.$id_p.'"</script>;';
	}
    mysqli_close($mysqli);


