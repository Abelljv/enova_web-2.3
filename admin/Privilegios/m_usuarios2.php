<?php  
include_once("login.php");  
?>
<?php
$login = $_POST["coLogin1"]; 
$nombre = $_POST["nombres"];	
$apellidos=$_POST['apellidos'];
$password= sha1(stripslashes($_POST['password']));
$email=$_POST['email'];
$activo=  isset($_POST['activo']) ? 1 : 0;
$cambiarPass = $_POST['cambiarpass'];
  
		  
require_once("conexion.php");
$con = conexion_bd();
 mysqli_query ("SET NAMES 'utf8'");
if (!$con)
     echo " No se puede conectar a la Base Datos";
else
{		  	   
      if (isset($cambiarPass)){
    	  $sql= "UPDATE user_admin SET nombre='$nombre',  
	      apellidos='$apellidos',  password='$password', email='$email' ,
	      activo='$activo' where login='$login'"; 
	  }
	  else{
		  $sql= "UPDATE user_admin SET nombre='$nombre',  
	      apellidos='$apellidos', email='$email' ,
	      activo='$activo' where login='$login'"; 
	  }
		
	  $result=mysqli_query($sql);	   		    		   			 
		   
	  if($result) {
   		    mysqli_close();
   		    $valor = 1;
		    header("location:m_usuarios.php?return=$valor");
   	  }
 	  else {
   		    mysqli_close();
   	        $valor = 2;
	        header("location:m_usuarios.php?return=$valor");
  	  }
}			  
		
		  
?>
