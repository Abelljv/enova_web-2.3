<?php  
session_start();
include_once("login.php");  
require_once("conexion.php");
         require_once("funciones.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.: Panel de Administraci&oacute;n :.</title>
<style type="text/css">
<!--
body {
background: url(imagenes/d.jpg) repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
		 var isNS = (navigator.appName == "Netscape") ? 1 : 0;
		  if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
		  function mischandler(){
		   return false;
		 }
		  function mousehandler(e){
		 	var myevent = (isNS) ? e : event;
		 	var eventbutton = (isNS) ? myevent.which : myevent.button;
		    if((eventbutton==2)||(eventbutton==3)) return false;
		 }
		 document.oncontextmenu = mischandler;
		 document.onmousedown = mousehandler;
		 document.onmouseup = mousehandler;
	</script>
<style type="text/css">
<!--
.Estilo2 {color: #3442FF}
-->
</style>
<?php 
echo "<script type='text/javascript' src='js/jquery.js'></script>";
echo "<script type='text/javascript' src='js/thickbox.js'></script>";
echo "<link rel='stylesheet' href='estilos/thickbox.css' type='text/css' />";
?>


</head>
<body>
<table width="994" border="0"  align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="140" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="140" valign="top" bgcolor="#FFFFFF"><p><img src="imagenes/logo.PNG" width="342" height="87">    </p>
          <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td height="9"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    
  </tr>
  <tr>
    <td height="24" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="8" height="23">&nbsp;</td>
          <td width="23" valign="top"><img src="imagenes/ug.jpg" width="23" height="23"></td>
          <td width="5">&nbsp;</td>
          <td width="414" valign="middle" class="com">
		    <div align="left">
		      <?php
		     	echo "Sesi&oacute;n Iniciada Correctamente ";
			
			  ?>
	      &nbsp;</div></td>
          <td width="416">&nbsp;</td>
          <td width="23" valign="top"><img src="imagenes/lg.jpg" width="23" height="23"></td>
          <td width="3">&nbsp;</td>
          <td width="99" valign="middle" class="error2"><div align="left">
            <?php
			echo "<a href='cerrar.php' style='text-decoration:none' class='error2' >Cerrar Sesi&oacute;n</a> ";
			
			?>
          </div>
          <div align="right"></div></td>
        </tr>
        <tr>
          <td height="0"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="200" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="12"></td>
        </tr>
        <tr>
          <td height="21" valign="middle" bgcolor="#CCCCCC"><div align="center" class="com">
            <div align="center" class="bold"><span class="azul Estilo2"><font color="black">Administraci&oacute;n de la P&aacute;gina</span></div>
          </div>
          </font>          </td>
        </tr>
        <tr>
          <td height="8" valign="top">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="994" height="8"></td>
              </tr>
          </table></td>
        </tr>
        
        <tr>
         
          <td height="159" valign="top"><?php
               echo "<table style='margin-left:15' width='102.5%' border='0' cellpadding='0' cellspacing='0'>";
            
        
            
         
			   $cantidadColumnasPanel = 4; 
	           $con = conexion_bd(); 
               //mysqli_query ("SET NAMES 'utf8'");    			   
	           if(!$con)
		          echo " No se puede conectar a la Base Datos";
	           else   
	           {	
			     $consultaMenus = mysqli_query($con,"SELECT distinct(M.id), M.descripcion  from privilegios P,menus M  where 
				 P.idPadre = M.id and P.usuario = '". $_SESSION['usuario']."' order by M.id ") ; 
                                 				  
				 $padre = 0;
				// $numFilas = mysqli_num_rows($consultaMenus)  or die(mysqli_error());				 
				 $cfilas = 0;
											
				 $padres = array();
				 $x = 0;
				 while ($rowM = mysqli_fetch_array($consultaMenus)) { 
				 
				         $padre =  $rowM['id'];						
						 $padres[$x] = $padre;
						 $x++;
						 
						 if ($cfilas % $cantidadColumnasPanel == 0){
							  if ($cfilas>1)
   							      echo "<tr><td>&nbsp;</td></tr>";								  					      
							  echo "<tr>";																						  						                         }
						 
						 echo "<td height='25' valign='top' ><span class='com'>";          
				         echo "<table width='240px' height='25'  border='0'>";
      			         echo "<tr>";
        		         echo "<td width='30px'><img src='imagenes/ta.jpg' width='25' height='25' border='0'></td>";
        		         echo "<td width='100px'>"."<p class='azul'><font color='#000000'>".$rowM['descripcion']."</font> </p>"."</td>";
      			         echo "</tr>";
   				         echo "</table>";
				         echo "</span>";
                         echo "</td>";				 					                    							 						
					
          
          				 			  			 											
								  
						 if ( ($cfilas > 0 &&  ($cfilas+1) % $cantidadColumnasPanel == 0) || ( $cfilas == $numFilas-1 ) ){					      
							 echo "</tr>";										 		 
							 echo "<tr>";
															       
							 for ($i=0;$i<$x;$i++){ 
					  
               					  $consultaItems = mysqli_query($con,"SELECT P.usuario,I.id,I.descripcion as dItem, I.url, I.texto_Alt ,
								  I.ancho, I.alto,I.idPadre, I.icono,M.descripcion as dMenu  from privilegios P,menus M ,items I  where 
				                  P.idItem = I.id and P.idPadre = M.id and usuario = '". $_SESSION['usuario']."' and 
								  I.idPadre = '".$padres[$i]."' order by I.icono");
						 		
								  echo "<td height='45' valign='top'>";
								  echo "&nbsp;";							 							  										  
								 								  
						          while ($rowI = mysqli_fetch_array($consultaItems)){		
								     							
						 						     
							         // se obtiene la img a partir del campo icono de la tabla items
    							     $ruta_img = obtenerImg($rowI['icono']);				             
		                     
				    			     echo "<a href='".$rowI['url']."?TB_iframe=true&height=".$rowI['alto']."&width=".$rowI['ancho']."' 
							         title=".$rowI['texto_Alt']." class='thickbox' style='text-decoration:none'>
							         <img title=".$rowI['dItem']." src=".$ruta_img." alt=".$rowI['texto_Alt']." width='45' height='45' 
						             border='0'></a>";						 															 					        		
						          }	
								   echo "</td>";					 						  							  							  							  
						       }
							   $x = 0;							  
							   echo "</tr>";				
						 			  
						 }
						 $cfilas++; 		
				      }	
					  if ( $cfilas == $numFilas ) {						  
						  	  echo "</tr>";								  				
					  }	 					 								  
	                  mysqli_close($con);
	          }
                                  
          echo"</table>";
		  ?></td>
        </tr>
        
        


        
        

  </table></td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="3"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="26" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="19" valign="top"><div align="center">
            <?php
					 
					
					echo "<table border='0'>";
      					echo "<tr>";
        				echo "<td ><a href='https://es-la.facebook.com/Enovatic/' target='_blank' style='text-decoration:none'  ><img src='imagenes/logo.png'  border='0'></a></td>";
        				 echo "</table>";
					
					?>
          </div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="19" valign="top"><div align="center"></div></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>



