<?php
include '../modulos/sesion/sesion.php';
include '../modulos/conexion/conexion.php';     
$res = 'SELECT * FROM user_admin';
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
  


        <!-- ------------------------------------------------------------------------- -->
        <?php  
session_start();
//include_once("login.php");  
require_once("../modulos/conexion/conexion2.php");
require_once("../modulos/conexion/funciones.php");
?>
<?php
 
  $cantidadColumnasPanel = 4; 
  $con = conexion_bd(); 
  //mysqli_query ("SET NAMES 'utf8'");            
  if(!$con)
    echo " No se puede conectar a la Base Datos";
  else   
  {  
      echo '<div class="row">';

      $sql = "select usuario, iditem FROM privilegios WHERE usuario = '". $_SESSION['usuario']."' ORDER BY iditem;";
      $consultaItems = mysqli_query($con, $sql);

      while ($rowI = mysqli_fetch_array($consultaItems)){   
                        
                    if( $rowI['iditem']==2.1){   
                  echo '<div class="col-sm-12 col-md-3"> <a href="computadores/listar_computadores.php" style="text-decoration: none;">
                  <div class="card" id="card">
                      <span class="icon-desktop text-center" style="color: #fff;"></span>
                    <h3 id="h3">Desktop</h3>
                    </div>
                    </a></div>';
                  }
                 if( $rowI['iditem']==3.1){
                 echo '<div class="col-sm-12 col-md-3"> <a href="portatiles/listar_portatiles.php" style="text-decoration: none;">
                  <div class="card" id="card2">
                    <span class="icon-laptop text-center" style="color: #fff;"></span>
                    <h3 id="h3">portatiles</h3>
                  </div></a></div>'; 
                }
             if( $rowI['iditem']==4.1){
                 echo '<div class="col-sm-12 col-md-3"> <a href="camaras/listar_camaras.php" style="text-decoration: none;">
                   <div class="card" id="card3">
                   <span class="icon-isight text-center" style="color: #fff;"></span>
                   <h3 id="h3">Camaras</h3>
                   </div></a></div>';
              }
             if( $rowI['iditem']==5.1){
                 echo '<div class="col-sm-12 col-md-3"> <a href="insumosImpresion/listar_insumos.php" style="text-decoration: none;"><div class="card" id="card4">
                     <span class="icon-print text-center" style="color: #fff;"></span>
                     <h3 id="h3">Insumos</h3>
                   </div></a></div>';
                  }
                  if( $rowI['iditem']==6.1){
                 echo '
               <div class="col-sm-12 col-md-3">
                   <a href="accesorios/listar_accesorios.php" style="text-decoration: none;"><div class="card" id="card6">
                     <span class="icon-cog-alt text-center" style="color: #fff;"></span>
                     <h3 id="h3">Accesorios</h3>
                   </div></a></div>';
            }
            if( $rowI['iditem']==7.1){
                 echo '<div class="col-sm-12 col-md-3">
                   <a href="slider/listar_slider.php" style="text-decoration: none;"><div class="card" id="card7">
                     <span class="icon-website text-center" style="color: #fff;"></span>
                     <h3 id="h3">Banner Inicio</h3>
                   </div></a></div>';
            }if( $rowI['iditem']==8.1){
                 echo '<div class="col-sm-12 col-md-3">
                   <a href="slider_servicios/listar_sliderService.php" style="text-decoration: none;"><div class="card" id="card8">
                     <span class="icon-website text-center" style="color: #fff;"></span>
                     <h3 id="h3">Banner Servicios</h3>
                   </div></a></div>';
            }
            if( $rowI['iditem']==9.1){
                 echo '<div class="col-sm-12 col-md-3">
                   <a href="creditos/listar_credito.php" style="text-decoration: none;">
                   <div class="card" id="card8">
                     <span class="icon-website text-center" style="color: #fff;"></span>
                     <h3 id="h3">Banner Creditos</h3>
                   </div></a></div>';
            }
            if( $rowI['iditem']==1.1){
                 echo '<div class="col-sm-12 col-md-3">
            <a href="usuarios/crear_usuarios.php" style="text-decoration: none;"><div class="card" id="card10">
                 <span class="icon-website text-center" style="color: #fff;"></span>
                 <h3 id="h3">Crear Usuario</h3>
               </div></a></div>';
            }
            if( $rowI['iditem']==1.2){
                 echo' <div class="col-sm-12 col-md-3">
            <a href="usuarios/listar_usuarios.php" style="text-decoration: none;"><div class="card" id="card11">
                 <span class="icon-website text-center" style="color: #fff;"></span>
                 <h3 id="h3">Modificar Usuario</h3>
               </div></a></div>';
            }
              if( $rowI['iditem']==1.3){
                 echo '<div class="col-sm-12 col-md-3">
            <a href="../admin/Privilegios/privilegios.php" style="text-decoration: none;">
            <div class="card" id="card9">
                 <span class="icon-website text-center" style="color: #fff;"></span>
                 <h3 id="h3">Privilegios de Usuario</h3>
             </div></a></div>';
            
            }
            if( $rowI['iditem']==10.1){
                 echo '<div class="col-sm-12 col-md-3">
            <a href="creditos/listar_credito2.php" style="text-decoration: none;">
            <div class="card" id="card9">
                 <span class="icon-website text-center" style="color: #fff;"></span>
                 <h3 id="h3"> Revision De Creditos </h3>
             </div></a></div>';
            
            }

    }//while
   mysqli_close($con);
  
  }//end else
                                  
  ?>
        <!-- ------------------------------------------------------------------------- -->



            
        </fieldset>
        
        </form>

   </div>

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