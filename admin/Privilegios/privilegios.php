<?php
  include_once("login.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Privilegios</title>

<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
<link href="estilos/estiloTree.css" type="text/css" rel="stylesheet" />
<script src="rico2/src/prototype.js" type="text/javascript"></script>
<script src="rico2/src/rico.js" type="text/javascript"></script>


<script type='text/javascript' language="javascript">

Rico.loadModule('Tree');
var tree1;

Rico.onLoad( function() {
  // initialize tree
  var options={
    showCheckBox : true,
    showLines    : false,
    showPlusMinus: false,
    showFolders  : true,
    leafIcon     : 'none'
  }
  tree1=new Rico.TreeControl("tree1", "tree.php", options);
  tree1.setTreeDiv('tree1');
  tree1.open();  
    
  
});

// Este metodo permite  escoger los datos seleccionados
function obtenerSeleccion(e) {
	
     var items=tree1.getCheckedItems();  
     var msg=items.length==0 ? 'No hay privilegios seleccionados' : items.join(',');
     // se configura el campo oculto con los items seleccionados
     document.getElementById("coSeleccion").value = msg;        
}

// Este metodo permite  seleccionar todos los elementos
function seleccionarTodos(activado) {

    var inp = tree1.treeDiv.getElementsByTagName('input'); 
	
	var x = tree1.treeDiv.getElementsByTagName('div');
    for (var i=0; i<x.length; i++) { 
	   	x[i].style.display='inline';
	}
		    
    for (var i=0; i<inp.length; i++) { 
        if (inp[i].type=='checkbox'){		   
	  	  inp[i].checked = activado; 	
		 
	   }
   }    
            
}


function traerPrivilegios(cb){
	 var idUsuario = cb.value; 
	 	 
     var xmlhttp = null;
     if( window.XMLHttpRequest ){
         xmlhttp = new XMLHttpRequest();
     }else if(window.ActiveXObject) {
         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
     }else{
        return false;
     }
 
     xmlhttp.open('GET', 'obtenerPrivilegios.php?usuario='+idUsuario,true);
	 xmlhttp.send( null );
	 
	 var inp = tree1.treeDiv.getElementsByTagName('input'); 	
	 var x = tree1.treeDiv.getElementsByTagName('div');
	 
	 // se deseleccionan todos los checkboxes
	 for (var k=0; k < inp.length; k++) {  
	  	 inp[k].checked = false; 		 
	 }
 
     xmlhttp.onreadystatechange = function(){
         if( xmlhttp.readyState == 4 && xmlhttp.status == 200 ){ 
        
		     var r = "(" + xmlhttp.responseText + ")";
		     var json=eval(r); 
			 			              			                  			 			
             for (var i=0; i<inp.length; i++) { 
			    for(var j=0;j<json.length; j++ ){ 
				    
                    if (inp[i].type=='checkbox' && json[j].itemH == inp[i].value ){	   
	  	               inp[i].checked = true; 		 
	                }
				}
             }          
			  // se muestran todos los checkboxes
			 for (var i=0; i<x.length; i++) { 
	             	x[i].style.display='inline';
	         }
		    
       
         }
     } 
  
}


</script>



<style type="text/css">
div.ricoTree {
  background-color:#eeeedd;
  width:315px;
  height:235px;
  border:1px solid black;
  padding:4px;
  margin-left:100px;
}
.botones{
   margin-left : 100px;	
  
}
</style>


</head>

<body>

<form name="form1" method="post" action="guardarPrivilegios.php" >
  <p align="left">
    <img src="imagenes/ta.jpg" width="20" height="20" />
    <label for="privilegios" class="com_titulo"> Privilegios de Usuario</label>
  <hr /></p>
  <label for="escojer" class="botones"><strong>Escoja un Usuario</strong></label>
  : 
  <label for="usuarios"></label>
  <select name="usuarios" id="usuarios" onChange="traerPrivilegios(this);">
      
    <option selected="selected" disabled="disabled">Seleccione un usuario</option>
    <?php
		   require_once("conexion.php");
		   $con = conexion_bd();
		   if (!$con)
		        echo " No se puede conectar a la Base Datos";
		   else
		      {				  				  
        		$consulta = mysqli_query($con,"SELECT login,concat(nombre,' ',apellido) as nombreC from user_admin where estado = 1 "); 
        	    while ($row = mysqli_fetch_array($consulta)) { 
        			
					   $cat1 = $row['login']; 
					   $cat = $row['nombreC']; 
    				  ?>
    <option value="<?=$cat1?>">
      <?=$cat?>
    </option>
    <?php
        		} 
		  }
    ?>
  </select>
  <input type="hidden" name="coSeleccion" id="coSeleccion">
  <p>
    <!--<input name="selTodos" type="button" class="botones" id="selTodos"  onclick=' seleccionarTodos(true)' value="Seleccionar todos">
    <input type="button" name="deseleccionar" id="deseleccionar"  onclick=' seleccionarTodos(false)' value="Deseleccionar todos" />-->
    <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../../uploadInfo/index.php"">Atras</a>
                </li>
     <img title="Selecciona todos los privilegios"  onclick=' seleccionarTodos(true)' class="botones" src="imagenes/seleccionar_on.jpg" width="30" height="30">
  <img  title="Deselecciona todos los privilegios"  onclick=' seleccionarTodos(false)' class="botones" src="imagenes/seleccionar_off.jpg" 
     width="30" height="30">  <p/>
     

  <table width="400" border="0" height="200">
    <!--DWLayoutTable-->
    <tr>
      <td width="410" ><div id='tree1' class='ricoTree'></div> </td>
    </tr>
    <tr>
      <td height="24" valign="top">
        <div align="center"><span class="botones">
          <button class="bold" id='TreeButton1' onclick='obtenerSeleccion(event)'>Guardar</button>
        </span> </div></td>
     </tr>
    <tr>
      <td height="5" valign="top" align="center"><?php
           $return=$_GET['return'];
					
		  if ($return == 1)
		   {
			  echo "<table border='0'>";
      		  echo "<tr>";
        	  echo "<td width='50px'><img  style='margin-left:100px' src='imagenes/g1.jpg' width='25' height='25'></td>";
			  echo "<td><span class='good'>Privilegios guardados correctamente</span></td>";
      		  echo "</tr>";
   			  echo "</table>"; 
					
		    }
			if ($return == 2)
			{
			  echo "<table border='0'>";
      		  echo "<tr>";
        	  echo "<td width='50px'><img  style='margin-left:100px'  src='imagenes/g2.jpg' width='25' height='25'></td>";
        	  echo "<td ><span class='error2'>!!!Error al guardar los Privilegios&iexcl;&iexcl;&iexcl;</span></td>";
      		  echo "</tr>";
   			  echo "</table>"; 
					
		    }					
			?>
       </td>
    </tr>
    <tr>
      <td height="11"></td>
    </tr>
  </table>
  <div align="center"></div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>

</body>
</html>
