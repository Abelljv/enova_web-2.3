<?php
function obtenerImg($icono){
	
	  if ($icono == 1){
		  $ruta_img = 'imagenes/agr.jpg'; 
	  }
      else if  ($icono == 2){
		  $ruta_img = 'imagenes/mod.jpg'; 
	  }
	  else  if ($icono == 3){
		  $ruta_img = 'imagenes/eli.jpg'; 
	  }
	  else  if ($icono == 4){
		  $ruta_img = 'imagenes/fp.jpg'; 
	  }
	  return  $ruta_img;
	
}
?>
  <!-- Abell && favian -->