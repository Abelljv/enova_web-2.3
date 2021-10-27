<?php
include'../conexion/conexion.php';

/*Variables*/
$Nombre = $_POST['nombre'];
$Modelo = $_POST["modelo"];
$Marca = $_POST["marca"];
$Referencia = $_POST["referencia"];
$Color = $_POST["color"];
$Condicion = $_POST["condicion"];
$Resolucion = $_POST["resolucion"];
$Led = $_POST["led"];
$Material = $_POST["material"];
$Precio = $_POST["precio"];
$Oferta = $_POST["oferta"];
$Descripcion = $_POST["descripcion"];
$Cantidad = $_POST["cantidad"]; 
$FechaIngreso = $_POST["fecha"];
$Categoria = $_POST["categoria"];


// ------------- Guardar imagen ------------- //
$nImg = $_FILES['imagen']['name'];
$Rutao = "assets/img/tienda/productos/camaras/";
$Ruta = "../../".$Rutao.$nImg;
$Rutao = $Rutao.$nImg;

if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
	
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {


/*Consulta para insertar datos*/
   $insertar = "INSERT INTO grupo_camaras(nombre, modelo, marca, referencia, color, condicion, resolucion, led, material, img, precio, oferta, descripcion, cantidad, fecha_ingreso, id_categoria) VALUES('$Nombre', '$Modelo', '$Marca', '$Referencia', '$Color', '$Condicion', '$Resolucion', '$Led', '$Material', '$Rutao','$Precio', '$Oferta',  '$Descripcion', '$Cantidad', '$FechaIngreso', '$Categoria')";

      $result = mysqli_query($mysqli, $insertar);

	}
}

/*Ejecuta la consulta*/
$id_port = "SELECT id FROM grupo_camaras order by id desc limit 1"; 
$consult = $mysqli->query($id_port);

while($temp = $consult->fetch_assoc()){
 		$id_p = $temp['id'];
 	}


 if(!$result){
     echo '<script> alert("Error al cargar la informacion del producto");</script>';
	}else{
     echo '<script language="javascript">window.location="../../tienda/detallecamaras.php?id='.$id_p.'"</script>;';
	}
    mysqli_close($mysqli);


