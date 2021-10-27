<?php
function conexion_bd(){
   $result = mysqli_connect("localhost", "root", "", "enova_bd")  or die ("Error al conectar");
   mysqli_set_charset($result, 'utf8');
   //mysqli_query ("SET NAMES 'utf8'");
   if (!$result)
      return false;
  // if (!mysql_select_db("privilegios",$result))
    //  return false;

   return $result;
}

?>
