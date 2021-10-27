<?php
    include_once("login.php"); 
    $usuario = $_POST['usuarios'];
    $items = $_POST['coSeleccion'];
      
    $vector = preg_split("/[,]+/", $items);
  
    require_once("conexion.php");
	$con = conexion_bd();
	if (!$con)
		 echo " No se puede conectar a la Base Datos";
	else
	{	
	    $sqlElim = "delete from privilegios where usuario = '$usuario'";	        
	    $resulElim = mysqli_query($con, $sqlElim);	     
        for ($i=0; $i<count($vector);$i++){
			$idPadre = floor($vector[$i]);
			
	        $sql = "insert into privilegios(usuario,idItem,idpadre) values('$usuario','".$vector[$i]."','".$idPadre."')"  ;	        
			$resul = mysqli_query($con, $sql);	  
			
       }
  
      if($resul) {
          mysqli_close();
          $valor = 1;
   	      header("location:privilegios.php?return=$valor");
      }
      else {
         mysqli_close();
         $valor = 2;
	     header("location:privilegios.php?return=$valor");
      }   
	} 

?>
