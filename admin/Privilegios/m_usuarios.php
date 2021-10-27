<?php
include_once("login.php");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title></title>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="js/themes/base/jquery.ui.all.css">
<script language="javascript" type="text/javascript" src="js/funciones.js" ></script>
<script type="text/javascript" language="javascript" src="js/jquery.js" ></script>
<script type="text/javascript" language="javascript" src="js/jquery-ui.js" ></script>
<script src="js/ui/jquery.ui.core.js"></script>
<script src="js/ui/jquery.ui.widget.js"></script>
<script src="js/ui/jquery.ui.position.js"></script>
<script src="js/ui/jquery.ui.menu.js"></script>
<script src="js/ui/jquery.ui.autocomplete.js"></script>  

<script >
function valida_envia2(){

	if (document.fvalida2.login.value.length==0){ 
		alert("El campo usuario no puede estar vacio")
		document.fvalida2.login.focus();
		return 0;
	}	
		document.fvalida2.submit();		

}
function validaDatos(){
	
	if (document.fvalida2.nombres.value.length==0)
	{
		alert("Los Campos en Rojo son Obligatorios")
		document.fvalida2.nombres.focus()
		return 0;
	}
	if (document.fvalida2.apellidos.value.length==0){ 
		alert("Los Campos en Rojo son Obligatorios")
		document.fvalida2.apellidos.focus()
		return 0;
	}	
			
	if (document.fvalida2.password.value.length==0){ 
		alert("Los Campos en Rojo son Obligatorios")
		document.fvalida2.password.focus()
		return 0;
	}	
	
	if (document.fvalida2.cambiarpass.checked && document.fvalida2.password.value != document.fvalida2.repitaPassword.value){ 
		alert("Las contraseñas no coinciden")
		document.fvalida2.repitapassword.focus()
		return 0;
	}		
	
	if (document.fvalida2.email.value.length != "" && !validaMail(document.fvalida2.email.value))
	{  
		alert("Correo electrónico incorrecto")
		document.fvalida2.email.focus()
		return 0;
	}
	
	document.fvalida2.submit();		
	}
</script>

<script>
$(document).ready(function() {
    $('#login').keypress(function(){
        //Obtenemos el value del input
        var entrada = $(this).val();        
        var dataString = 'campo='+entrada;  

        //Le pasamos el valor del input al ajax
        $.ajax({
			async:true,          
            dataType: "html",            
            type: "POST",
            url: "cargaUsuarios.php",
            data: dataString,
            success: function(datos) {  			
		   		 		 						
			var dataJson = eval(datos);                                                		 
						
			var ac_config = { 
			   source: dataJson,
			   select: function(event, ui){ 
			         $("#coLogin").attr("value",ui.item.id); 
					 $("#coLogin1").attr("value",ui.item.id);
			      }
				
			}; 
			 
			 $("#login").autocomplete(ac_config);		 			   
                      
            }
         });
      }); 
	  // cuando el control gana el foco se selecciona el texto
	   $("#login").click(function(){  		   
		   this.select();		  		  
	     }	   	 	
	  );   
	  
	  	  // cuando el control gana el foco se selecciona el texto
	   $("#envia2").click(function(){  		   
		  
		  	   
		   //Obtenemos el value del input
		   var login = $("#coLogin").val();                  
           var dataString = 'campo='+login; 
		  
           limpiarCampos();
           //Le pasamos el valor del input al ajax
           $.ajax({
			    async:true,          
                dataType: "html",            
                type: "POST",
                url: "traeUsuario.php",
                data: dataString,
                success: function(datos) {  			
		   				 						
			          var dataJson = eval(datos);								 
			          
					  $("#nombres").val(dataJson[0].nom);		
					  $("#apellidos").val(dataJson[0].ape);	
					  $("#password").val(dataJson[0].pass);	
					  $("#email").val(dataJson[0].em);
					  var act = dataJson[0].act == 1 ? true : false;
					  $("#activo").prop('checked',act);
					  //$("#coLogin1").attr("value",dataJson[0].log); 	
					  					
			
			     }				
				 
             })
			
		   	  		  
	     }	   	 	
	  );
	   
	  function limpiarCampos(){
	     
	          $("#nombres").val("");		
		      $("#apellidos").val("");	
			  $("#password").val("");	
			  $("#email").val("");			  
			  $("#activo").prop('checked',false);	
			  $("#coLogin").val("");
			  
			  
      }  
     

  }); 
  
 </script>


			
</head>

<body onload="obtieneFoco('login')">
<div align="center">
 <!--<form id="fvalida2" name="fvalida2" method="POST" autocomplete="OFF" action="m_usuarios.php">-->
 
    <table width="897" border="0">
      <tr>
        <td colspan="5" align="left"><span class="com_titulo"><img src="imagenes/ta.jpg" alt="" width="20" height="20" /> 
          Modificar Usuario</span>
        <hr /></td>
      </tr>
      <tr>
        <td width="147">&nbsp;</td>
        <td width="115">&nbsp;</td>
        <td width="442">&nbsp;</td>
      </tr>
      <tr>
        <td width="147" align="center" class="com">&nbsp;</td>
        <td width="115" align="center" class="com2">Usuario</td>
         
        <td width='442' align="center"><span class="com">
          <label for="login"></label>
          <input name="login" type="text" id="login" size="63" /></span>
          </td>
          <td width='175'>
          <input name="envia2" type="button" class="boton_nuevo" id="envia2" onclick="valida_envia2()" value="Cargar Usuario" />
          
          </td>
        
         <?php
		  	require_once("conexion.php");
			$con = conexion_bd();
		  			 
	    	$login=$_POST['coLogin']; 
		 
		    $resultados = mysqli_query($con,"select * from user_admin where login = '$login' ");
    					   		
    		$activo = 0;
			while( $row = mysqli_fetch_array($resultados))
			{ 				
  			    $login = $row["login"];
				$nombre = $row["nombre"];
   			    $apellidos = $row["apellidos"];
    		    $password = $row["password"];
			    $email = $row["email"];
			    $activo = $row["activo"];		
			    
			}
			mysqli_free_result($resultados);		
		?>
        
        
      </tr>
      
      <tr>
        <td colspan="5"><hr/></td>
      </tr>
      
                             
      <tr>
       <form id="fvalida2" name="fvalida2" action="m_usuarios2.php" method="post">
           <table width="700" border="0">
           <tr>
             <td  width="60" align="center" class="com">&nbsp;</td>
             <td width="150" class="com" align="left" >Contraseña:</td>
             <td align="left" ><label for="password"></label>
             <input name="password"  class = "obligatorio" type="password" id="password" size="50"  /></td>
             <td width="20" align="left" class="com">Cambiar</td><td><input type="checkbox" name="cambiarpass" id="cambiarpass" /> </td>
            </tr>
            </table> 
            
            <table  width="700" border="0">
            <tr>
             <td width="60" align="center" class="com">&nbsp;</td>
             <td width="150" align="left" class="com">Repita contraseña:</td>
             <td align="left" size="50"><label for="repitaPassword"></label>
             <input name="repitaPassword" type="password" id="repitaPassword" class = "obligatorio2" size="50" /></td>
             
            </tr>
            </table>
            
            <table width="700" border="0">
            <tr>
            <td width="60" align="center" class="com">&nbsp;</td>
            <td width="150" align="left" class="com">Nombre:</td>
            <td align="left"><label for="nombres"></label>
              <input name="nombres"  class = "obligatorio" type="text" id="nombres" size="50" /></td>
            </tr>
            </table>
            
            <table width="700" border="0">
            <tr>
             <td width="60" align="center" class="com">&nbsp;</td>
             <td width="150" align="left" class="com">Apellidos:</td>
             <td align="left"><label for="apellidos"></label>
             <input name="apellidos" type="text" id="apellidos" class = "obligatorio" size="50" /></td>
            </tr>
            </table>
            
            <table width="700" border="0">
            <tr>
             <td width="60" align="center" class="com">&nbsp;</td>
             <td width="150" align="left" class="com">Email:</td>
             <td align="left"><label for="email"></label>
             <input  name="email" type="text" id="email" size="50" class = "obligatorio2" /></td>
            </tr>
            </table>
            
            <table width="700" border="0">
            <tr>
             <td width="60" align="center" class="com">&nbsp;</td>
             <td width="150" align="left" class="com">Activo:</td>
             <td align="left"><label for="activo"></label>            
			 <input   name="activo" type="checkBox" id="activo" size="50" checked /></td>	
             
             <label for="titular"></label>
             <input type="hidden" name="coLogin" id="coLogin" />
             <input type="hidden" name="coLogin1" id="coLogin1" />				  
            
            </tr>
            </table>
            
            
            <table width="700" border="0">
            <tr>
              <td width="874" bgcolor="#990000" class="com">&nbsp;</td>
            </tr>
            <tr>
            <td><hr /></td>
            </tr>
            <tr>           
            <td colspan="6" align="center" class="com"><input name="envia2" type="button" class="boton_nuevo"  
              onclick="validaDatos()" value="Guardar Datos" /></td>
            </tr>
           
            </table>       
         </form>          
      </tr>
      
      
      <tr>
        <td colspan="3" align="center"><span class="com">
        <?php
				  
			$return=$_GET['return'];
					
			if ($return == 1)
			{
			   echo "<table border='0'>";
      		   echo "<tr>";
        	   echo "<td><img src='imagenes/g1.jpg' width='25' height='25'></td>";
			   echo "<td><span class='good'>La actualización se realizó Correctamente</span></td>";
      		   echo "</tr>";
   			   echo "</table>"; 
					
			}
			if ($return == 2)
			{
			   echo "<table border='0'>";
      		   echo "<tr>";
        	   echo "<td><img src='imagenes/g2.jpg' width='25' height='25'></td>";
        	   echo "<td><span class='error2'>!!!Error al digitar la informacion&iexcl;&iexcl;&iexcl;</span></td>";
      		   echo "</tr>";
   			   echo "</table>"; 
					
			}
						
		?>
        </span></td>
      </tr>
    </table>
   <!--</form>-->
</div>
</body>
</html>


