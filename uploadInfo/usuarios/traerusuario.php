<?php
	    header("Content-Type:text/html");
        header("Cache-Control: no-cache, must-revalidate");
		header('Content-Type: application/json; charset=utf-8');
		
	     require_once("conexion.php");
		 $con = conexion_bd();
		 if (!$con)
		      echo " No se puede conectar a la Base Datos";
		 else
		 {				  				  
        	  $arr = array();
			  $restriccion = $_POST['campo'];
			  		  			 			  			  
			  $registro = mysqli_query($con,"SELECT nombre,apellido,cedula,login, password,ciudad,estado from user_admin where login = '".$restriccion."'"); 
        	  if ($row = mysqli_fetch_array($registro)) {        			 
								 										 
					  $arr[] =  array('log' => $row['login'],'nom' => $row['nombre'],'ape' => $row['apellido'],
					  'pass' => $row['password'], 'em' => $row['ciudad'], 'act' => $row['estado']); 						
										 
			   }			
               echo json_encode($arr);    	 
			  
		 }  
		 mysql_close($con);   			
	
?>