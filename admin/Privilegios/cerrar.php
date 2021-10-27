<?php
include_once("login.php");  
?>
<html>
<head>
<title>.: Panel de Administraci&oacute;n :.</title>

<style type="text/css">
<!--
body {
background: url(../imagenes/imagenes/d.jpg) repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>



<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="../estilos.css" rel="stylesheet" type="text/css">

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
</head>

<body>
<table width="994" border="0"  align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="101" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="61" valign="top" bgcolor="#FFFFFF"><img src="imagenes/panel_admin.jpg" width="994" height="140"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="24" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="23" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="3" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="3"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="19"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="167" height="23">&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="170" height="23">&nbsp;</td>
          <td width="23" valign="top"><img src="imagenes/ug.jpg" width="23" height="23"></td>
          <td width="6">&nbsp;</td>
          <td width="337" valign="middle" class="com">
		  
		    <div align="left">
		      <?
		    session_start();
			session_unset();
			session_destroy();
					echo "<table border='0'>";
      					echo "<tr>";
        				//echo "<td><img src='imagenes/imagenes/g1.jpg' width='25' height='25'></td>";
        				echo "<td><span class='good'>Su Sesi&oacute;n han sido Finalizada Correctamente</span></td>";
      					echo "</tr>";
   						 echo "</table>";
			
		  ?>
          <script  type="text/javascript">
function envia(){
 window.location="index.php";
 }
setTimeout("envia()",1000);
 </script> &nbsp;</div></td>
          <td width="291">&nbsp;</td>
        </tr>
        <tr>
          <td height="0"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="5"></td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
        <tr>
          <td height="4"></td>
        </tr>
        <!--DWLayoutTable-->
        <tr>
          <td width="827" height="1"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="42">&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="169" height="2"></td>
          <td width="658"></td>
        </tr>
        <tr>
          <td height="23"></td>
          <td></td>
        </tr>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <tr>
          <td height="7"></td>
          <td></td>
        </tr>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
    </table></td>
  </tr>
  <tr>
    <td height="36">&nbsp;</td>
    <td width="827">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="3" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="3"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="25" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="19" valign="top"><div align="center">
            <?
					 
					
					echo "<table border='0'>";
      					echo "<tr>";
        				echo "<td ><a href='http://www.centrocomputo.com' target='_blank' style='text-decoration:none'  ><img src='imagenes/centrocomputo.jpg'  border='0'></a></td>";
        				 echo "</table>";
					
					?>
          </div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="19" valign="top"><div align="center"></div></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>



