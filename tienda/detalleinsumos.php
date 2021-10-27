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
    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet"> 

    <!-- llamando a los iconos -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontello.css">
    <!-- llamando a los efectos del contenido -->
    <link rel="stylesheet" href=../"assets/css/eskju.jquery.scrollflow.css">



<?php
    // 1-- llamada a la conexion
    // 2-- consulta la tabla productos y almacena los datos en la variable productos
    include '../modulos/conexion/conexion.php';

    session_start();
    $grupo = $_SESSION["grupos"];

    $menusql = "SELECT * FROM";
    $itemsmenu = $mysqli->query($menusql);

    @$id_p = $_GET['id'];

    if (is_numeric($id_p)) {
        $producto = "SELECT * FROM grupo_insumos where id = ".$id_p; 
        $detalleproducto = $mysqli->query($producto);
    } else {
        ECHO '<P>ID INGRESDO POR URL INCORRECTO</P>';
    }
    
?>

<body>
   <!--==== Menu ====-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded fixed-top ">
        <a class="navbar-brand" href="../">
            <h4>Enova Tecnologia</h4>
        </a>
        <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto nav-pills">
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../">Inicio</a>
                </li>
                <li class="nav-item active" >
                    <a class="nav-link" href="../tienda/">Tienda</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../servicios/">Servicios</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../proyectos/">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about/">Acerca de</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../contacto/">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <!--====  Fin del Menu  ====-->



<!-- ==== Nuestros Servicios ====-->
    <div class="jumbotron top-space">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <?php
                    while($mostrarInfo = $detalleproducto->fetch_assoc()){
                echo '<h4>'.$mostrarInfo['nombre'].' '.$mostrarInfo['marca'].' </h4>
                    <p>Marca: '.$mostrarInfo['marca'].'</p>
                <hr>
            </div>

        </div>
        <div class="row">
            <div class="col-md-5">
                <img id="zoom" src="../'.$mostrarInfo['img'].'"  data-zoom-image="../'.$mostrarInfo['img'].'" alt="" class="img-fluid" >
                
            </div>

            <div class="col-md-4">
                <ul style="list-style: circle;  font-size: 16px; padding-left: 40px;">

                    <li>Nombre:  '.$mostrarInfo['nombre'].'</li>
                    <li>Marca:  '.$mostrarInfo['marca'].'</li>
                    <li>Referencia:  '.$mostrarInfo['referencia'].'</li>
                  
                </ul>
                
            </div>
            <div class="col-md-3">

                <ul style="list-style: none;">
                    <li style="color: red; font-weight: bold; padding: 5px;">$'.$mostrarInfo['precio'].'</li>
                    <li style="padding: 5px;">Cantidad: '.$mostrarInfo['cantidad'].' Uds.</li>
                    <button type="button" class="btn btn-success icon-basket disabled" style="padding: 5px;"> Añadir al carrito</button>
                </ul>
                
            </div>
        </div>
        <br>
         <hr>
        <div class="row">
            <div class="col-md-8">
                <ul style="list-style: none;">
                   
                    <li><span style="font-size: 21px;">Detalle del producto</span></li></br>
                    <li><span style="font-weight: bold">'.$mostrarInfo['nombre'].' '.$mostrarInfo['referencia'].'</span>
                        <p style="font-size: 16px;">'.$mostrarInfo['descripcion'].'</p></li>
                    
                </ul>
            </div>
            <div class="col-md-4">
                <ul style="list-style: none;">                  
                    <li><span style="font-size: 21px;">Caracteristicas</span></li>                   
                </ul>

                <table class="table table-striped" style="font-size: 14px;">
                  <thead>
                    
                  </thead>
                  <tbody>

                    <tr>
                      <th colspan="4">Marca</th>
                      <td>'.$mostrarInfo['marca'].'</td>
                    </tr>
                     <tr>
                      <th colspan="4">Referencia</th>
                      <td>'.$mostrarInfo['referencia'].'</td>
                    </tr>
                   <tr>
                      <th colspan="4">Oferta</th>
                      <td>'.$mostrarInfo['oferta'].'%</td>
                    </tr>

                     <tr>
                      <th colspan="4">Cantidad</th>
                      <td>'.$mostrarInfo['cantidad'].' Uds.</td>
                    </tr>

                  </tbody>
                </table>
            </div>
        </div>';}?>

        
        
    </div>
    
    </div>

    <!-- ==== Fin de Nuestros Servicios ====-->

    <!-- ==== Pie de Pagina ====-->
 <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
        <!--Footer Links-->
        <div class="container text-center text-md-left">
            <div class="row">
                
                        
                <!--/.First column-->
                <hr class="clearfix w-100 d-md-none">
                <!--Second column-->
                <div class="col-md-4 mx-auto">
                    <h5 class="text-uppercase mb-3 mt-4 font-weight-bold">Servicios</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="../servicios/#dev_soft">Desarrollo de software</a>
                        </li>
                        <li>
                            <a href="../servicios/#dev_app">Desarrollo de Apps</a>
                        </li>
                         <li>
                            <a href="../servicios/#dev_web">Diseño web</a>
                        </li>
                         <li>
                            <a href="../servicios/#host">Hosting + Dominios</a>
                        </li>
                        <li>
                            <a href="../servicios/#seo">Posicionamiento SEO</a>
                        </li>
                        <li>
                            <a href="../servicios/#tienda">Tiendas virtuales</a>
                        </li>
                        <li>
                            <a href="../servicios/#mant">Mantenimiento de computadores</a>
                        </li>
                        <li>
                            <a href="../servicios/#mark">Marketing digital</a>
                        </li>
                        <li>
                            <a href="../servicios/#serv">Servicios TI</a>
                        </li>
                    </ul>
                </div>

                <!--First column-->
                <div class="col-md-4 mx-auto">
                    <h5 class="text-uppercase mb-3 mt-4 font-weight-bold">Contacto</h5>
                    <ul class="list-unstyled">
                        <li>
                            <i class="icon-location-circled"></i>
                             <span id="negrita">Ubicación: </span> <span id="texto">Calle 17 #31-22</span>
                        </li>
                        <li>
                            <i class="icon-location-circled"></i>
                           <span id="negrita">Ciudad: </span><span id="texto"> sincelejo</span>
                        </li>
                        <li>
                            <i class="icon-mail"></i>
                            <span id="negrita">Email: </span><span id="texto"> Enova.com</span>
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <span id="negrita">Teléfono: </span><span id="texto"></span>
                        </li>
                        <li>
                            <i class="icon-mobile-1"></i>
                            <span id="negrita">Celular:</span><span id="texto"></span>
                            
                        </li>
                    </ul>
                </div>
              
                <!--/.Third column-->
                <hr class="clearfix w-100 d-md-none">
                <!--Fourth column-->
                <div class="col-md-4 mx-auto">
                    <h5 class="text-uppercase mb-3 mt-4 font-weight-bold">Nosotros</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="../about/">Historia</a>
                        </li>
                        <li>
                            <a href="../about/">Objetivos</a>
                        </li>
                        <li>
                            <a href="../about/">Misión</a>
                        </li>
                        <li>
                            <a href="../about/">Visión</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->
                </hr>
                </hr>
                </hr>
            </div>
        </div>
        <!--/.Footer Links-->
        <hr>

        <!--==== Redes Sociales =====-->
        <div class="text-center">
            <ul class="social-network social-circle list-unstyled list-inline">
                <li class="list-inline-item">
                    <a class="icoRss" href="https://web.whatsapp.com/%F0%9F%8C%90/es" id="icon" title="Whatsapp">
                    <i class="fab fa-whatsapp"></i>
                   </a>
                </li>
                <li class="list-inline-item">
                    <a class="icoFacebook" href="https://www.facebook.com/" id="icon" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                   </a>
                </li>
                <li class="list-inline-item">
                    <a class="icoTwitter" href="https://twitter.com/" id="icon" title="Twitter">
                    <i class="fab fa-twitter"></i>
                   </a>
                </li>
                <li class="list-inline-item">
                    <a class="icoLinkedin" href="https://www.youtube.com/?gl=CO&hl=es-419" id="icon" title="YouTube">
                    <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
        <hr>
        <!--==== Fin Redes Sociales =====-->

        <!--==== Copyright =====-->
        <div class="text-center" id="footer2"> <!-- footer-copyright py-3 --> 
            © 2018 Copyright:
            <a href="#">TeamCor</a>     
        </div>
        <!--===== Fin Copyright ====-->
    </footer>

    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/effects_content/jquery.elevatezoom.js"></script>
   
   <script>
   
   $("#zoom").elevateZoom({
            zoomWindowFadeIn: 100,
            zoomWindowFadeOut: 100,
            lensFadeIn: 100,
            lensFadeOut: 100});
   </script>
<script language="JavaScript">
    if (screen.width<1000){
      
    }
    else
    if (screen.width<1280)
    //codigo resolución mediana
    else
    //codigo resolución grande
</script> 
        
  
  
    <!-- Codigo JS -->
    
    
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/slider_home/slider_home.js" type="text/javascript"></script>
    <script src="../assets/js/effects_content/eskju.jquery.scrollflow.min.js"></script>
    <script src="../assets/js/effects_content/viewportchecker.js"></script>
   

</body>
<!-- Abell && favian -->
</html>
