<?php
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='iso-8859-1'?>\n";

require "rico2/plugins/php/ricoXmlResponse.php";
require_once("conexion.php");
$con = conexion_bd();

$id=isset($_GET["id"]) ? $_GET["id"] : "";
$parent=isset($_GET["Parent"]) ? $_GET["Parent"] : "";
 
$num="2";

echo "\n<ajax-response><response type='object' id='".$id."_updater'>";
$oXmlResp=new ricoXmlResponse();
echo "\n<rows update_ui='true' offset='0'>";

if ($parent == "") {
  $oXmlResp->WriteTreeRow("","","Seleccione los privilegios del usuario","C",0);
}

$rest=intval($num)-strlen($parent);

if (!$con)
   echo " No se puede conectar a la Base Datos";
else
   {	
    if ($rest > 1) {  
	    $consultaMenus = mysqli_query($con,"SELECT id,descripcion from menus"); 
        while ($rowM = mysqli_fetch_array($consultaMenus)) {   
				
		       $idMenu = $rowM['id'];
			   $descripcionMenu = $rowM['descripcion'];	
			   // se agregan los nodos padre
			   $oXmlResp->WriteTreeRow($parent,$idMenu,$descripcionMenu,"C",0);
			   
			   $consultaItems = mysqli_query($con,"SELECT id,descripcion from items where idPadre = '".$idMenu."'"); 
               while ($rowI = mysqli_fetch_array($consultaItems)) {
				      
					  $idItem = $rowI['id'] ;
					  $descripcionItem = $rowI['descripcion'];
					  // se agregan los nodos hijos
				      $oXmlResp->WriteTreeRow($idMenu,$idItem,$descripcionItem,"L",1);				
			   }
		}
    
	}
		
} 

echo "\n</rows>";
$oXmlResp=NULL;
echo "\n</response></ajax-response>";

?>