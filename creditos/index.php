<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8"> </meta>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    </meta>
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
    <!--llamado al estilo de los efectos-->
    <link rel="stylesheet" href="../assets/css/animate.min.css"> 
    <script src="../assets/js/effects_content/wow.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/effects_content/smooth-scroll.js"></script>
    <script src="../assets/js/effects_content/jquery.localScroll.min.js"></script>

    <!-- llamando a los iconos -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontello.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet"> 
   
</head>
<!--Iniciamos el efecto del archivo wow.js-->

 <script>
    new WOW().init();
 </script>

<body>
 <?php
        require ('../modulos/conexion/conexion.php');
        $query = "select * from slider_credito";
        $resultado=$mysqli->query($query);
    ?>
 <!--==== Menu ====-->
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
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../tienda/">Tienda</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../servicios/">Servicios</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../clientes/">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../proyectos/">Proyectos</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../about/">Acerca de</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../contacto/">Contacto</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../creditos/">Creditos</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--====  Fin del Menu  ====-->
     <!--==== Fin Menu ====-->



    <!--=== Slider home ====-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <?php
            while($resultado1 = $resultado->fetch_assoc()){
                $id = $resultado1['id'];
                $img= $resultado1['img'];

                if ($id == 1) {
                    $atrib = "active";
                } elseif ($id != 1) {
                    $atrib = "";
                }

                echo "<div class='carousel-item $atrib'>";
                echo    '<img  src="../'.$img.'" alt="First slide">';
                echo        '<div class="carousel-caption">';
                echo        '</div>';
                echo '</div>';}
    ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="icon-left-open-big" aria-hidden="true" id="icon-carousel"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="icon-right-open-big" aria-hidden="true" id="icon-carousel"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!--====  Fin del Slider  ====-->
<style>
    .jumbo-color,.jumbotron-fluid{background-color: #f9f9f9;}
    .display-4, .lead{text-align: center;}
    .jumbsize{width: 100%; height: 100%;}


    h2
</style>
           
<!-- ==== Fin de Nuestros Servicios ====-->

<!-- ==== Contenido ====-->


    <div class="container-fluid jumbotron jumbo-color  wow bounceInRight">
        <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron jumbo-color  wow bounceInRight">
                        <h2 class="display-4">CREDITOS AL INSTANTE.</h2>
                        <hr id="barra">
                         <form id="form1" name="form1" method="post" action="" >
                           </form>
                        <br>
                       
                        <p class="lead">
                        <p align="justify">
                      <h2>.</p> </p></h2>
                   </div>
                </div>
            </div>
        </div>


    
  

   
 









    


<!-- ==== Fin DelContenido ====-->


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
                            <span id="negrita">Email: </span><span id="texto"> enovatecnologia@outlook.com</span>
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <span id="negrita">Teléfono: </span><span id="texto"> (+035): 2713928</span>
                        </li>
                        <li>
                            <i class="icon-mobile-1"></i>
                            <span id="negrita">Celular: </span><span id="texto"> 301.760.6707</span>
                            
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
    
             

    <!-- Codigo JS -->
    <script src="../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/slider_home/slider_home.js" type="text/javascript"></script>
    <script src="../assets/js/effects_content/wow.min.js"></script>
        <!--EFECTOS DE LA PAGINA SERVICIOS-->
   
   
</body>
<!-- Abell && favian -->
</html>