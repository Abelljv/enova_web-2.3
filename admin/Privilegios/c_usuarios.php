<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuarios</title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="js/themes/base/jquery.ui.all.css">
<script language="javascript" type="text/javascript" src="js/funciones.js" ></script>
<script type="text/javascript" language="javascript" src="js/jquery.js" ></script>
<script type="text/javascript" language="javascript" src="js/jquery-ui.js" ></script>

<script>

$(document).ready(function(){
	
	setTimeout(function(){ 
	    $("#msgRes").fadeOut(800);
	}, 3000);  
	
});
function validaDatos(){
	
	if (document.formUsuarios.nombres.value.length==0)
	{
		alert("Los Campos en Rojo son Obligatorios")
		document.formUsuarios.nombres.focus()
		return 0;
	}
	
	if (document.formUsuarios.nombreUsuario.value.length==0){ 
		alert("Los Campos en Rojo son Obligatorios")
		document.formUsuarios.nombreUsuario.focus()
		return 0;
	}
	
	if (document.formUsuarios.password.value.length==0){ 
		alert("Los Campos en Rojo son Obligatorios")
		document.formUsuarios.password.focus()
		return 0;
	}	
	
	if (document.formUsuarios.password.value != document.formUsuarios.repitaPassword.value){ 
		alert("Las contraseñas no coinciden")
		document.formUsuarios.repitapassword.focus()
		return 0;
	}		
	
	if (document.formUsuarios.email.value.length != "" && !validaMail(document.formUsuarios.email.value))
	{  
		alert("Correo electrónico incorrecto")
		document.formUsuarios.email.focus()
		return 0;
	}
	
	document.formUsuarios.submit();		
	}


</script>
</head>

<body onload="obtieneFoco('nombreUsuario')">
<table width="700" border="0" align="center">
  <tr>
    <td><form id="formUsuarios" name="formUsuarios" method="post" action="guardarUsuarios.php">
      <table width="700" border="0">      
      <tr >
           <td height="10" align="left" valign="middle" class="com"><span class="com_titulo">
           <img src="imagenes/ta.jpg" width="20"     height="20" /> Creaci&oacute;n de Usuarios</span><br />
           <hr /><br />
           </td>
           <td align="left" valign="middle" class="com">&nbsp;</td>          
          
      </tr>
        
      </table>    
      <table width="700" border="0">
        <tr>
          <td width="70" align="center" class="com">&nbsp;</td>
          <td width="200" align="left" class="com">Nombre de usuario:</td>
          <td><label for="nombreUsuario"></label>
            <input name="nombreUsuario" class = "obligatorio" type="text" id="nombreUsuario" size="50" /></td>
        </tr>
    </table>
      <table width="700" border="0">
        <tr>
          <td width="70" align="center" class="com">&nbsp;</td>
          <td width="200" align="left" class="com">Contraseña:</td>
          <td><label for="password"></label>
            <input name="password"  class = "obligatorio" type="password" id="password" size="50" /></td>
        </tr>
    </table>
      <table width="700" border="0">
        <tr>
          <td width="70" align="center" class="com">&nbsp;</td>
          <td width="200" align="left" class="com">Repita contraseña:</td>
          <td size="50"><label for="repitaPassword"></label>
            <input name="repitaPassword" type="password" class="obligatorio" id="repitaPassword" size="50" /></td>
        </tr>
    </table>
      <table width="700" border="0">
        <tr>
          <td width="70" align="center" class="com">&nbsp;</td>
          <td width="200" align="left" class="com">Nombre(s):</td>
          <td><label for="nombres"></label>
            <input name="nombres"  class = "obligatorio" type="text" id="nombres" size="50" /></td>
        </tr>
    </table>
      <table width="700" border="0">
        <tr>
          <td width="70" align="center" class="com">&nbsp;</td>
          <td width="200" align="left" class="com">Apellido(s):</td>
          <td><label for="apellidos"></label>
            <input name="apellidos" type="text" class="obligatorio2" id="apellidos" size="50" /></td>
        </tr>
    </table>
      <table width="700" border="0">
        <tr>
          <td width="70" align="center" class="com">&nbsp;</td>
          <td width="200" align="left" class="com">Email:</td>
          <td><label for="email"></label>
            <input name="email" type="text" class="obligatorio2" id="email" size="50" /></td>
        </tr>
    </table>
      <table width="700" border="0">
        <tr>
              <td width="874" bgcolor="#990000" class="com">&nbsp;</td>
            </tr>
        <tr>
         <td colspan="6" align="center" class="com"><hr>  <input name="envia2" type="button" class="boton_nuevo"  onclick="validaDatos()" value=         "Guardar Datos" /></td>
        </tr>
        <tr>
          <td colspan="6" align="center" class="com"><?
				  
			   $return=$_GET['return'];
					
			   if ($return == 1)
		       {
				   echo "<table id='msgRes' border='0'>";
      			   echo "<tr>";
        		   echo "<td><img src='imagenes/g1.jpg' width='25' height='25'></td>";
				   echo "<td><span class='good'>Los datos se guardaron Correctamente</span></td>";
      			   echo "</tr>";
   				   echo "</table>"; 
					
				}
				// clave duplicada
				else if ($return == 1062)
				{
				   echo "<table id='msgRes' border='0'>";
      			   echo "<tr>";
        		   echo "<td><img src='imagenes/g2.jpg' width='25' height='25'></td>";
        		   echo "<td><span class='error2'>!!!Usuario ya registrado con este nombre</span></td>";
      			   echo "</tr>";
   				   echo "</table>"; 
					
				}	
				// cualqier otro error
				else{	
				   if (isset($return)){				 
   				      echo "<table id='msgRes' border='0'>";
        			  echo "<tr>";
           		      echo "<td><img src='imagenes/g2.jpg' width='25' height='25'></td>";
            		  echo "<td><span class='error2'>!!!Error al digitar la informacion&iexcl;&iexcl;&iexcl;</span></td>";
      			      echo "</tr>";
   				      echo "</table>"; 					
				   }
				}
						
			?></td>
            
        </tr>
    </table>
    </form></td>
  </tr>
</table>
</body>
</html>