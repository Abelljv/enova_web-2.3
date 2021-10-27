<?php
//cierra sesion si viene logeado de otro lado y pide iniciar de nuevo
			session_start();
 			session_unset();
			session_destroy();
			
//////////////////////////////////////////////////////////////////////

?>


<html>
<head>
<title>.: Panel de Administraci&oacute;n :.</title>
<script language="javascript" type="text/javascript" src="js/funciones.js" ></script>



<style type="text/css">

body {
background: url("imagenes/d.jpg") repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

</style>

<script>
  function valida_envia(){
	//valido el nombre
	if (document.fvalida.login.value.length==0)
	{
		location.href="index.php?validar=1";
		document.fvalida.login.focus();
		return 0;
	}
	else
		{
		if (document.fvalida.pass.value.length==0)
		{
		location.href="index.php?validar=2";
		document.fvalida.pass.focus();
		return 0;
		}
		else
		{							 
			document.fvalida.submit();
							
		}
	}
}

</script>



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
.Estilo2 {color: #2E31FA}
-->
</style>
</head>

<body onLoad="obtieneFoco('login')">
<table width="994" border="0"  align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="81" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="61" valign="top" bgcolor="#FFFFFF"><img src="imagenes/logo.PNG" width="378" height="84"></td>
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
    <td width="167" height="3"></td>
    <td width="827" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="827" height="3"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="22" valign="middle" bgcolor="#CCCCCC"><div align="center" class="bold Estilo2"><font color="black">Ingreso al Sistema</div></td>
        </tr>
    </table></td>
  <tr>
    <td height="133" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="244" height="133">&nbsp;</td>
          <td width="176" rowspan="2" valign="top" bgcolor="#CCCCCC"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="32" height="131">&nbsp;</td>
                <td width="144" valign="top"><div align="right"><img src="imagenes/ima_login.jpg" width="114" height="131"></div></td>
              </tr>
          </table></td>
          <td width="12">&nbsp;</td>
          <td width="238" valign="top"><form name="fvalida" method="POST" autocomplete="OFF" action = "verifica.php">
              <table width="286" border="0">
                <!--DWLayoutTable-->
                <tr>
                  <td width="1"></td>
                  <td width="84" class="com"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  <td colspan="2"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  <td width="43"></td>
                </tr>
                <tr>
                  <td height="24"></td>
                  <td class="com"><div align="right"><strong>Usuario</strong></div></td>
                  <td colspan="2" valign="top"><input name="login" type="text" class="com" id="login" size="20"></td>
                <td>&nbsp;</td>
                </tr>
                <tr>
                  <td></td>
                  <td class="com"><div align="right"><strong>Contrase&ntilde;a</strong></div></td>
                  <td colspan="2"><input name="pass" type="pass" class="com" id="pass" size="20"></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td height="26"></td>
                  <td width="135" valign="top"><input type="button" class="boton" onClick="return valida_envia()" value="Ingresar">                 </td>
                <td width="2">&nbsp;</td>
                <td></td>
                </tr>
                <tr>
                  <td height="26" colspan="5" valign="top"><div align="center">
                    <?php
                
					 
            $validar=$_GET['validar'];
					if ($validar == 1 or $validar == 2)
					{
					echo "<table border='0'>";
      					echo "<tr>";
        				echo "<td width='30' align='right'><img src='imagenes/no_login.jpg' width='25' height='25'></td>";
        				echo "<td align='center' ><span class='error'>Ingrese Usuario y Contrase&ntilde;a</samp></td>";
      					echo "</tr>";
   						echo "</table>";
					
					}
        
					?>
                    <?php
					 $return_to_pass=$_GET['return_to_pass'];
					if ($return_to_pass == 1)
					{
					echo "<table border='0'>";
      					echo "<tr>";
        				echo "<td><img src='imagenes/no_login.jpg' width='25' height='25'></td>";
        				echo "<td><span class='error'>Error al Iniciar Sesi&oacute;n</samp></td>";
      					echo "</tr>";
   						echo "</table>";
					//echo "<img src='imagenes/imagenes/no_login.jpg' width='25' height='25'>";
					//echo " Error al Iniciar Sesi&oacute;n";
					}
					?>
                  </div></td>
                </tr>
              </table>
          </form></td>
          <td width="324">&nbsp;</td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        
        <tr>
          <td height="2"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="34" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="994" height="19" valign="top"><div align="center">
            <?php
					 
					
					echo "<table border='0'>";
      					echo "<tr>";
        				echo "<td ><a href=''https://es-la.facebook.com/Enovatic/' target='_blank' style='text-decoration:none'  ><img src='imagenes/logo.png'  border='0'></a></td>";
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



