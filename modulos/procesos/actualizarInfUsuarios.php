<?php
include'../conexion/conexion.php';

/*Variables*/
$id = $_POST["id"];
$NombredeUsuario = $_POST['NombredeUsuario'];
$ApellidodeUsuario = $_POST["ApellidodeUsuario"];
$NumerodeCedula = $_POST['NumerodeCedula'];
$CorreoElectronico= $_POST["CorreoElectronico"];
$Contrase├▒adeUsuario = md5($_POST["Contrase├▒adeUsuario"]);
$CiudaddeUsuario = $_POST["CiudaddeUsuario"];



			$update = "UPDATE user_admin SET nombre='$NombredeUsuario', apellido='$ApellidodeUsuario', cedula='$NumerodeCedula', login='$CorreoElectronico', password='$Contrase├▒adeUsuario', ciudad='$CiudaddeUsuario' WHERE  id=$id";
            
      		$result = mysqli_query($mysqli, $update);

if(!$result){
     echo "Error: ".mysqli_error($mysqli);
	}else{
     echo '<script language="javascript">window.location="../../uploadInfo/usuarios/listar_usuarios.php"</script>;';
	}
    mysqli_close($mysqli);

?>