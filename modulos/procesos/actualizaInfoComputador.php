<?php
include'../conexion/conexion.php';

/*Variables*/
$Id = $_POST["id"];
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
$Img = $_POST["img"];
$Img = basename($Img);

$Rutao = "assets/img/tienda/productos/computadores";

// Actualizar Imagen
if (!empty($_FILES['imagen']['name'])) {
	$nImg = $_FILES['imagen']['name'];
	$Ruta = "../../".$Rutao.$nImg;
	$Rutao = $Rutao.$nImg;

	if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {

			$update = "UPDATE grupo_computadores SET nombre='$Nombre', modelo='$Modelo', marca='$Marca',color='$Color', condicion='$Condicion', descripcion='$Descripcion', board='$Board', procesador='$Procesador', velocidad_procesador='$Vprocesador', puertos='$Puertos', sistema_operativo='$SO', memoria='$Memoria', tipo_memoria='$Tmemoria', disco_duro='$Disco', monitor='$Monitor', pulgada='$Pulgada', resolucion='$Resolucion', teclado='$Teclado', mouse='$Mouse', fuente='$Fuente',unidad='$Unidad', precio='$Precio',   oferta='$Oferta', img='$Rutao', fecha_ingreso='$FechaIngreso', cantidad='$Cantidad', id_categoria='$Categoria' WHERE  id='$Id'";

      		$result = mysqli_query($mysqli, $update);
		}
	}

} elseif (empty($_FILES['imagen']['name'])) {
	$Ruta = "../../".$Rutao.$Img;
	$Rutao = $Rutao.$Img;

	$update = "UPDATE grupo_computadores SET nombre='$Nombre', modelo='$Modelo', marca='$Marca',color='$Color', condicion='$Condicion', descripcion='$Descripcion', board='$Board', procesador='$Procesador', velocidad_procesador='$Vprocesador', puertos='$Puertos', sistema_operativo='$SO', memoria='$Memoria', tipo_memoria='$Tmemoria', disco_duro='$Disco', monitor='$Monitor', pulgada='$Pulgada', resolucion='$Resolucion', teclado='$Teclado', mouse='$Mouse', fuente='$Fuente',unidad='$Unidad', precio='$Precio',   oferta='$Oferta', img='$Rutao', fecha_ingreso='$FechaIngreso', cantidad='$Cantidad', id_categoria='$Categoria' WHERE  id='$Id'";

    $result = mysqli_query($mysqli, $update);

}

if(!$result){
     echo "Error: ".mysqli_error($mysqli);
	}else{
     echo '<script language="javascript">window.location="../../uploadInfo/computadores/listar_computadores.php"</script>;';
	}
    mysqli_close($mysqli);

?>
