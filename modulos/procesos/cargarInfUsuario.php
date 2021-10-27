 <?php
include'../conexion/conexion.php';

/*Variables*/
$nombre=$_POST['NombredeUsuario'];
$apellido=$_POST['ApellidodeUsuario'];
$cedula=$_POST['NumerodeCedula'];
$login=$_POST['CorreoElectronico'];
$password=sha1($_POST['ContraseñadeUsuario']);
$ciudad=$_POST['CiudaddeUsuario'];
$estado = 1;


  $insertar = "INSERT INTO user_admin(nombre, apellido, cedula, login, password, ciudad, estado) VALUES ('$nombre',
     '$apellido', '$cedula','$login','$password','$ciudad','$estado')";

      $result = mysqli_query($mysqli, $insertar);

	 


 if(!$result){
     echo '<script> alert("Error al cargar la informacion del producto");</script>';
	}else{
		 echo '<script> alert("Registro Exitoso");</script>';
    	 echo '<script language="javascript">
     window.location="../../uploadInfo/index.php"</script>;';
     
		
	}
    mysqli_close($mysqli);
