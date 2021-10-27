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
			  $usua = $_GET['usuario']; 
			  $cad = '[';
			 			  			  
			  $consulta = mysqli_query($con,"SELECT idItem,idPadre from privilegios where usuario = '".$usua."'"); 
        	  while ($row = mysqli_fetch_array($consulta)) {         			 
										
					 // se construye una cadena en formato JSON
					 $cad = $cad . '{itemH : '. $row['idItem'].','.
					 'padre :'. $row['idPadre'] .'}';
					 					
					 $cad = $cad . ',' ;									 
										 
			   }
			   $cad = subStr($cad,0,strLen($cad)-1);		   			     
			   $cad = $cad . ']';	 		  		  	       		 	
		       echo $cad;
			  
		 }  
		 mysqli_close($con);   			
	
?>