  <?php
include'../conexion/conexion.php';

/*Variables*/
/*Variables 1*/
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


   $insertar = "INSERT INTO creditos(valor, articulo, fecha, descripcion, nombre, apellido, cedula, direccion, telefono, cargo, vivienda, fpago, nombref, apellidof, direccionf, telefonof, nombrep, apellidop, direccionp, telefonop, nombrec, apellidoc, cedulac, direccionc, telefonoc, nombrecf, apellidocf, direccioncf, telefonocf, nombrecp,  apellidocp, direccioncp, telefonocp) VALUES ('$Valor', '$Articulo', '$Fecha','$Descripcion', '$Nombre', '$Apellido', '$Cedula', '$Direccion', '$Telefono', '$Cargo', '$Vivienda', '$Fpago', '$Nombref', '$Apellidof', '$Direccionf', '$Telefonof', '$Nombrep', '$Apellidop', '$Direccionp', '$Telefonop', '$Nombrec', '$Apellidoc', '$Cedulac', '$Direccionc', '$Telefonoc', '$Nombrecf', '$Apellidocf', '$Direccioncf', '$Telefonocf', '$Nombrecp', '$Apellidocp', '$Direccioncp', '$Telefonocp')";

      $result = mysqli_query($mysqli, $insertar);

	 


 if(!$result){
     echo '<script> alert("Error al cargar la informacion del producto");</script>';
	}else{
		 echo '<script> alert("Registro Exitoso");</script>';
    	 echo '<script language="javascript">
     window.location="../../uploadInfo/creditos/listar_credito.php"</script>;';
     
		
	}
    mysqli_close($mysqli);
