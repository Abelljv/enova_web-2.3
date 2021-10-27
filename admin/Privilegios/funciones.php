<?php
function F_gen_password($Paswd_Length)
{ 	$lower_ascii_bound = 50; 
	$upper_ascii_bound = 122; 
	
	$notuse = array (58,59,60,61,62,63,64,73,79,91,92,93,94,95,96,108, 111); 
	$i = 0; 
	$password = ''; 
	while ($i < $Paswd_Length)
	{ 	mt_srand((double)microtime() * 1000000); 
		
		$randnum = mt_rand($lower_ascii_bound, $upper_ascii_bound); 
		if (!in_array($randnum, $notuse))
		{ 	$password = $password.chr($randnum); 
			$i++; 
		}
	}; 
	return $password; 
} 

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