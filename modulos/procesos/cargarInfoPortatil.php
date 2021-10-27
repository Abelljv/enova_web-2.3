<?php
include'../conexion/conexion.php';

/*Variables*/
$Nombre = $_POST["nombre"];
$Modelo = $_POST["modelo"];
$Marca = $_POST["marca"];
$Procesador = $_POST["procesador"];
$Vprocesador = $_POST["vprocesador"];
$SO = $_POST["selectSO"];
$Memoria = $_POST["memoria"];
$Tmemoria = $_POST["tmemoria"];
$Disco = $_POST["disco"];
$Pulgada = $_POST["pulgada"];
$Pantalla = $_POST["pantalla"];
$Resolucion = $_POST["resolucion"];
$Peso = $_POST["peso"];
$Conectividad = $_POST["conectividad"];
$Color = $_POST["color"];
$Condicion = $_POST["condicion"];
$Tecnologia = $_POST["tecnologia"];
$Bateria = $_POST["bateria"];
$Tbateria = $_POST["tbateria"];
$Descripcion = $_POST["descripcion"];
$Precio = $_POST["precio"];
$Oferta = $_POST["oferta"]; 
$FechaIngreso = $_POST["fecha"];
$Cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];

// ------------- Guardar imagen ------------- //
$nImg = $_FILES['imagen']['name'];
$Rutao = "assets/img/tienda/productos/portatiles/";
$Ruta = "../../".$Rutao.$nImg;
$Rutao = $Rutao.$nImg;

if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
	
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {


/*Consulta para insertar datos*/
$insertar = "INSERT INTO grupo_portatiles(nombre, modelo, marca, procesador, velocidad_procesador, sistema_operativo, memoria, tipo_memoria, disco_duro, pulgada, pantalla, resolucion, peso, conectividad, color, condicion, tecnologia, bateria, tipo_bateria, descripcion, precio, oferta, img, fecha_ingreso, cantidad, id_categoria) VALUES('$Nombre', '$Modelo', '$Marca', '$Procesador', '$Vprocesador', '$SO', '$Memoria', '$Tmemoria', '$Disco', '$Pulgada', '$Pantalla', '$Resolucion', '$Peso', '$Conectividad', '$Color', '$Condicion', '$Tecnologia', '$Bateria', '$Tbateria', '$Descripcion', '$Precio', '$Oferta', '$Rutao', '$FechaIngreso', '$Cantidad', '$categoria')";

      $result = mysqli_query($mysqli, $insertar);

	}
}

/*Ejecuta la consulta*/
$id_port = "SELECT id FROM grupo_portatiles order by id desc limit 1"; 
$consult = $mysqli->query($id_port);

while($temp = $consult->fetch_assoc()){
 		$id_p = $temp['id'];
 	}


 if(!$result){
     echo '<script> alert("Error al cargar la informacion del producto");</script>';
	}else{
     echo '<script language="javascript">window.location="../../tienda/detalleportatiles.php?id='.$id_p.'"</script>;';
	}
    mysqli_close($mysqli);


