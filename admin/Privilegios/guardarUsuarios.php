<?php 
include_once("login.php");  
?>
<?php
$usuario=$_POST['nombreUsuario'];
$password=sha1($_POST['password']);
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$activo = 1;
 		  
require_once("conexion.php");
$con = conexion_bd();
if (!$con)
       echo " No se puede conectar a la Base Datos";
else
{		  
       $sqlUsuarios = "insert into user_admin (login, nombre, apellidos, password, email, activo) values ('$usuario','$nombres',
	   '$apellidos','$password','$email','$activo')"; 
	   
       $result =  mysqli_query($con, $sqlUsuarios);              
		  	                                  
	   if($result)
	   {
   		         mysqli_close();
   		         $valor = 1;
		         header("location:c_usuarios.php?return=$valor");
   	    } 		        
		else {
   		         $valor = mysqli_errno($con); 
				 mysqli_close();   		         
	             header("location:c_usuarios.php?return=$valor");
  		}
}		 
				  
?>
