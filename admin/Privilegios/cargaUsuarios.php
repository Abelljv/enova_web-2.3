<?php
     header( 'Content-type: text/html; charset=iso-8859-1' );
     require_once("conexion.php");	 
	 $restriccion = $_POST['campo'];
	 $i = 0;
	 	 
  	 $sql = "select login, concat(nombre,' ',apellidos)  as nombreC from user_admin where nombre like '".$restriccion."%'". "order by login ";
	 
     $con = conexion_bd();
	 $arreglo_php = array();	 
     if (!$con)
   	    echo " No se puede conectar a la Base Datos";
     else
     {
       $res = mysqli_query($sql);
       $arr = array();
       if(mysqli_num_rows($res)==0)
          echo "No hay datos";
       else{		  
          while($registros = mysqli_fetch_array($res)){             
			 $arr[] =  array('id' => $registros['login'],
			                 'nom' => $registros['nombreC']);	 			            			 						
					
          } 
		  $resultado = array(); 
		  $ciudadAux = array();
		  foreach($arr as $titular){ 		 
		      $titular['value'] = $titular['nom']; 
			  $titular['label'] =   "{$titular['nom']}";  
			  $resultado[] = $titular; 
		  } 		  
		  echo json_encode($resultado);    	 		 		  
				
       }
	   
	  
     }		 	 
   	 mysqli_close($con);   		
				

?>