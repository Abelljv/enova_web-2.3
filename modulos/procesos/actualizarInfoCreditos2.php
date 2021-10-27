<?php
include'../conexion/conexion.php';

/*Variables*/
$Id = $_POST["id"];
$Valor = $_POST['valor'];
$Articulo = $_POST['articulo'];
$Fecha = $_POST['fecha'];
$Descripcion = $_POST['descripcion'];
/*Variables cliente*/
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Cedula = $_POST['cedula'];
$Direccion = $_POST['direccion'];
$Telefono = $_POST['telefono'];
$Cargo = $_POST['cargo'];
$Vivienda = $_POST['vivienda'];
$Fpago = $_POST['fpago'];
/*Referencia familiar*/
$Nombref = $_POST['nombref'];
$Apellidof = $_POST['apellidof'];
$Direccionf = $_POST['direccionf'];
$Telefonof = $_POST['telefonof'];
/*Referencia personal*/
$Nombrep = $_POST['nombrep'];
$Apellidop = $_POST['apellidop'];
$Direccionp = $_POST['direccionp'];
$Telefonop = $_POST['telefonop'];

/*Variables codeudor*/
$Nombrec = $_POST['nombrec'];
$Apellidoc = $_POST['apellidoc'];
$Cedulac = $_POST['cedulac'];
$Direccionc = $_POST['direccionc'];
$Telefonoc = $_POST['telefonoc'];
/*Referencia familiar del codeudor*/
$Nombrecf = $_POST['nombrecf'];
$Apellidocf = $_POST['apellidocf'];
$Direccioncf = $_POST['direccioncf'];
$Telefonocf= $_POST['telefonocf'];
/*Referencia personal del codeudor*/
$Nombrecp = $_POST['nombrecp'];
$Apellidocp = $_POST['apellidocp'];
$Direccioncp = $_POST['direccioncp'];
$Telefonocp = $_POST['telefonocp'];
$PermisoCont=$_POST['permisoCont'];
$Permiso1=$_POST['permiso1'];



			$update = "UPDATE creditos SET valor='$Valor', articulo='$Articulo', fecha='$Fecha',descripcion='$Descripcion', nombre='$Nombre', apellido='$Apellido', cedula='$Cedula', direccion='$Direccion', telefono='$Telefono', cargo='$Cargo', vivienda='Vivienda', fpago='$Fpago',nombref='$Nombref', direccionf='$Direccionf', telefonof='$Telefonof', nombrep='$Nombrep', apellidop='$Apellidop', direccionp='$Direccionp', telefonop='$Telefonop', nombrec='$Nombrec',apellidoc='$Apellidoc', direccionc='$Direccionc',   telefonoc='$Telefonoc', nombrecf='$Nombrecf', apellidocf='$Apellidocf', direccioncf='$Direccioncf', telefonocf='$Telefonocf', nombrecp='$Nombrecp', apellidocp='$Apellidocp', direccioncp='$Direccioncp', telefonocp='$Telefonocp', permisoCont='$PermisoCont', permiso1='$Permiso1' WHERE  id='$Id'";

     

    $result = mysqli_query($mysqli, $update);


if(!$result){
     echo "Error: ".mysqli_error($mysqli);
	}else{

		//echo "$Valor";
		echo '<script> alert("Registro Exitoso ");</script>';
     echo '<script language="javascript">window.location="../../uploadInfo/creditos/listar_credito2.php"</script>;';
	}



    mysqli_close($mysqli);

?>
