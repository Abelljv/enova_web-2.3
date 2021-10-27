<?php
include '../modulos/sesion/sesion.php';
include '../modulos/conexion/conexion.php';     
$res = "SELECT * FROM user_admin";
$result = $mysqli->query($res);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> </meta>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    </meta>
    <title>Enova tecnologia</title>

    <!-- Llamando a la libreria de Bootstrap 4 -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Llamando a los Estilos generales -->
    <link href="../assets/css/indexStyle.css" rel="stylesheet" type="text/css">
    <!-- llamando a los iconos -->
    <link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet"> 
    <!-- llamando a los funentes -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <!-- llamando a los iconos -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontello.css">
    <!--Estilo formulario cargue de informacion-->
    <link rel="stylesheet" href="../assets/css/info_grupo.css">
    <!--Fuente google-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet"> 
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-faded fixed-top">
        <a class="navbar-brand" href="../uploadInfo/">
            <h4>Enova Tecnologia</h4>

        </a>
          <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
        </button>
        <style>
          .navbar-toggler-icon{font-size: 15px;}
          button{background-color:  #fff!important;}
        </style>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto nav-pills">
                <li class="nav-item" id="navbar-nav">
                  <span class="nav-link" style="font-size: 14px; color: #fff; -webkit-user-select: none;">Bienvenido: <?php echo $row['usuario']; ?></span>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../admin/logout.php">Salir</a>
                </li>
            </ul>
        </div>
    </nav>


   
   <div class="container-fluid">
        <form action="" style=" width: 100%; margin-top: 7%;">
            <fieldset class="scheduler-border">
             <legend class="scheduler-border">Panel Principal:</legend>
            <div class="row">
              
                <div class="col-sm-12 col-md-3">
                <a href="computadores/listar_computadores.php" style="text-decoration: none;"><div class="card" id="card">
                     <span class="icon-desktop text-center" style="color: #fff;"></span>
                     <h3 id="h3">Desktop</h3>
                   </div>
                 </div></a>
                <a href="portatiles/listar_portatiles.php" style="text-decoration: none;"><div class="ol-sm-12 col-md-3">
                      <div class="card" id="card2">
                        <span class="icon-laptop text-center" style="color: #fff;"></span>
                        <h3 id="h3">portatiles</h3>
                      </div></a> 
                 </div>
                 <a href="camaras/listar_camaras.php" style="text-decoration: none;"> <div class="ol-sm-12 col-md-3">
                       <div class="card" id="card3">
                       <span class="icon-isight text-center" style="color: #fff;"></span>
                       <h3 id="h3">Camaras</h3>
                       </div></a>
                  </div>
                 <div class="col-sm-12 col-md-3">
                       <a href="insumosImpresion/listar_insumos.php" style="text-decoration: none;"><div class="card" id="card4">
                         <span class="icon-print text-center" style="color: #fff;"></span>
                         <h3 id="h3">Insumos</h3>
                       </div>
                  </div></a>

              </div>
               
                <div class="row">
                   <div class="col-sm-12 col-md-3">
                       <a href="accesorios/listar_accesorios.php" style="text-decoration: none;"><div class="card" id="card6">
                         <span class="icon-cog-alt text-center" style="color: #fff;"></span>
                         <h3 id="h3">Accesorios</h3>
                       </div>
                  </div></a>
                 <div class="col-sm-12 col-md-3">
                       <a href="slider/listar_slider.php" style="text-decoration: none;"><div class="card" id="card7">
                         <span class="icon-website text-center" style="color: #fff;"></span>
                         <h3 id="h3">Banner Inicio</h3>
                       </div>
                  </div></a>
                  <div class="col-sm-12 col-md-3">
                       <a href="slider_servicios/listar_sliderService.php" style="text-decoration: none;"><div class="card" id="card8">
                         <span class="icon-website text-center" style="color: #fff;"></span>
                         <h3 id="h3">Banner Servicios</h3>
                       </div>
                  </div></a>
                  
                  <div class="col-sm-12 col-md-3">
                       <a href="creditos/listar_credito.php" style="text-decoration: none;"><div class="card" id="card8">
                         <span class="icon-website text-center" style="color: #fff;"></span>
                         <h3 id="h3">Banner Creditos</h3>
                       </div>
                  </div></a>
            
        </fieldset>
        
        </form>

        <!-- ------------------------------------------------------------------------- -->
        <?php  
session_start();
//include_once("login.php");  
require_once("../modulos/conexion/conexion2.php");
require_once("../modulos/conexion/funciones.php");
?>
        <?php
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
         $numFilas = mysqli_num_rows($consultaMenus)  or die(mysqli_error());        
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
                echo "<tr>";                                                                                   }
             
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
      ?>
        <!-- ------------------------------------------------------------------------- -->

   </div>
   <div class="container-fluid">
        <form action="" style=" width: 100%; margin-top: 7%;">
            <fieldset class="scheduler-border">
             <legend class="scheduler-border">Panel Administrativo:</legend>
            <div class="row">
              
                

                  <div class="col-sm-12 col-md-3">
                <a href="usuarios/crear_usuarios.php" style="text-decoration: none;"><div class="card" id="card10">
                     <span class="icon-website text-center" style="color: #fff;"></span>
                     <h3 id="h3">Crear Usuario</h3>
                   </div>
                 </div></a>
                  
                 <div class="col-sm-12 col-md-3">
                <a href="usuarios/listar_usuarios.php" style="text-decoration: none;"><div class="card" id="card11">
                     <span class="icon-website text-center" style="color: #fff;"></span>
                     <h3 id="h3">Modificar Usuario</h3>
                   </div>
                 </div></a>
                                        
                 <div class="col-sm-12 col-md-3">
                <a href="../admin/Privilegios/privilegios.php" style="text-decoration: none;"><div class="card" id="card9">
                     <span class="icon-website text-center" style="color: #fff;"></span>
                     <h3 id="h3">Privilegios de Usuario</h3>
                   </div>
                 </div></a>

   <style>
   .scheduler{width: 100%;}
   .card{width: 100%;}
   .row{margin: 30px auto; color: #fff; padding: 10px;}
   span{font-size: 50px;}
    #card{background: crimson; border-radius: 5px; margin-bottom: 15px;}
    #card2{background: #1B6DA9; border-radius: 5px; margin-bottom: 15px;}
    #card3{background: #01A456; border-radius: 5px; margin-bottom: 15px;}
    #card4{background: #E2900F; border-radius: 5px; margin-bottom: 15px;} 
    #card5{background: #17A2B8; border-radius: 5px; margin-bottom: 15px;}
    #card6{background: #8E44AD; border-radius: 5px; margin-bottom: 15px;}
    #card7{background: #008081; border-radius: 5px; margin-bottom: 15px;}
    #card8{background: #01435D; border-radius: 5px; margin-bottom: 15px;}
    #card9{background: #F2490F; border-radius: 5px; margin-bottom: 15px;}
    #card10{background: #42B607; border-radius: 5px; margin-bottom: 15px;}
    #card11{background: #182DE6; border-radius: 5px; margin-bottom: 15px;}
    #h3{margin:0 15px 15px 15px; text-align: center; color: #fff;}
    a{color: #fff; text-decoration: none;}
     a:hover{color: white;}

   </style>


        




    <!-- Codigo JS -->
    <script src="../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/slider_home/slider_home.js" type="text/javascript"></script>
</body>

</html>