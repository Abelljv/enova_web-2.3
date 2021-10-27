<?php
include'../conexion/conexion.php';

/*Variables*/
$Id = $_POST["id"];
$Nombre = $_POST['nombre'];
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
$Img = $_POST["img"];
$Img = basename($Img);

$Rutao = "assets/img/tienda/productos/portatiles/";

// Actualizar Imagen
if (!empty($_FILES['imagen']['name'])) {
	$nImg = $_FILES['imagen']['name'];
	$Ruta = "../../".$Rutao.$nImg;
	$Rutao = $Rutao.$nImg;

	if (is_uploaded_file($_FILES['imagen']['tmp_name'])){
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $Ruta)) {

			$update = "UPDATE grupo_portatiles SET nombre='$Nombre', modelo='$Modelo', marca='$Marca', procesador='$Procesador', velocidad_procesador='$Vprocesador', sistema_operativo='$SO', memoria='$Memoria', tipo_memoria='$Tmemoria', disco_duro='$Disco', pulgada='$Pulgada', pantalla='$Pantalla', resolucion='$Resolucion', peso='$Peso', conectividad='$Conectividad', color='$Color', condicion='$Condicion', tecnologia='$Tecnologia', bateria='$Bateria', tipo_bateria='$Tbateria', descripcion='$Descripcion', precio='$Precio', oferta='$Oferta', img='$Rutao', fecha_ingreso='$FechaIngreso', cantidad='$Cantidad', id_categoria='$categoria' WHERE  id='$Id'";

      		$result = mysqli_query($mysqli, $update);
		}
	}

} elseif (empty($_FILES['imagen']['name'])) {
	$Ruta = "../../".$Rutao.$Img;
	$Rutao = $Rutao.$Img;

	$update = "UPDATE grupo_portatiles SET nombre='$Nombre', modelo='$Modelo', marca='$Marca', procesador='$Procesador', velocidad_procesador='$Vprocesador', sistema_operativo='$SO', memoria='$Memoria', tipo_memoria='$Tmemoria', disco_duro='$Disco', pulgada='$Pulgada', pantalla='$Pantalla', resolucion='$Resolucion', peso='$Peso', conectividad='$Conectividad', color='$Color', condicion='$Condicion', tecnologia='$Tecnologia', bateria='$Bateria', tipo_bateria='$Tbateria', descripcion='$Descripcion', precio='$Precio', oferta='$Oferta', img='$Rutao', fecha_ingreso='$FechaIngreso', cantidad='$Cantidad', id_categoria='$categoria' WHERE  id='$Id'";

    $result = mysqli_query($mysqli, $update);

}

if(!$result){
     echo "Error: ".mysqli_error($mysqli);
	}else{
     echo '<script language="javascript">window.location="../../uploadInfo/portatiles/listar_portatiles.php"</script>;';
	}
    mysqli_close($mysqli);

?>
