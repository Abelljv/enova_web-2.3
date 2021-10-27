<?php
include '../conexion/conexion.php';

/*Variables*/
$Nombre = $_POST["nombre"];
$Modelo = $_POST["modelo"];
$Marca = $_POST["marca"];
$Color = $_POST["color"];
$Condicion = $_POST["condicion"];
$Descripcion = $_POST["descripcion"];
$Board = $_POST["board"];
$Procesador = $_POST["procesador"];
$Vprocesador = $_POST["vprocesador"];
$Puertos = $_POST["puertos"];
$SO = $_POST["selectSO"];
$Memoria = $_POST["memoria"];
$Tmemoria = $_POST["tmemoria"];
$Disco = $_POST["disco"];
$Monitor = $_POST["monitor"];
$Pulgada = $_POST["pulgada"];
$Resolucion = $_POST["resolucion"];
$Teclado = $_POST["teclado"];
$Mouse = $_POST["mouse"];
$Fuente = $_POST["fuente"];
$Unidad = $_POST["unidad"];
$Precio = $_POST["precio"];
$Oferta = $_POST["oferta"];
$FechaIngreso = $_POST["fecha"];
$Cantidad = $_POST["cantidad"];
$Categoria = $_POST["categoria"];


// ------------- Guardar imagen ------------- //
$nImg = $_FILES['imagen']['name'];
$Rutao = "assets/img/tienda/productos/computadores/";
$Ruta = "../../".$Rutao.$nImg;
$Rutao = $Rutao.$nImg;

if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
	
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {

			/*Consulta para insertar datos*/
$insertar = "INSERT INTO grupo_computadores(nombre, modelo, marca, color, condicion, descripcion, board, procesador, velocidad_procesador, puertos, sistema_operativo, memoria, tipo_memoria, disco_duro, monitor, pulgada, resolucion, teclado, mouse, fuente, unidad, precio, oferta, img, fecha_ingreso, cantidad, id_categoria) VALUES('$Nombre', '$Modelo', '$Marca','$Color', '$Condicion', '$Descripcion', '$Board', '$Procesador', '$Vprocesador', '$Puertos', '$SO', '$Memoria', '$Tmemoria', '$Disco', '$Monitor', '$Pulgada', '$Resolucion', '$Teclado', '$Mouse', '$Fuente', '$Unidad', '$Precio', '$Oferta', '$Rutao', '$FechaIngreso', '$Cantidad', '$Categoria')";

			$result = mysqli_query($mysqli, $insertar);
	}
}

/*Ejecuta la consulta*/
$id_port = "SELECT id FROM grupo_computadores order by id desc limit 1"; 
$consult = $mysqli->query($id_port);

while($temp = $consult->fetch_assoc()){
 		$id_p = $temp['id'];
 	}

if(!$result){
    echo '<script> alert("Error al cargar la informacion del producto");</script>';
	}else{
   echo '<script language="javascript">window.location="../../tienda/detallecomputadores.php?id='.$id_p.'"</script>;';
	}
mysqli_close($mysqli);