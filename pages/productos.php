<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> </meta>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="
    viewport">
    </meta>
    <title>Enova productos</title>

    <!-- Llamando a la libreria de Bootstrap 4 -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Llamando a los Estilos generales -->
    <link href="../assets/css/indexStyle.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/productos.css" rel="stylesheet" type="text/css">
    <!-- llamando a los iconos -->
    <link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet"> 
    <!-- llamando a los funentes -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <!-- llamando a los iconos -->
    <link rel="stylesheet" type="text/css" href="../assets//css/fontello.css">
</head>
<body>

 <!--==== Menu ====-->
   <nav class="navbar navbar-expand-lg navbar-light bg-faded fixed-top ">
        <a class="navbar-brand" href="#">
            <h4>Enova Tecnologia</h4>
        </a>
        <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto nav-pills" id="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="activo">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categorias.php">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="proyectos.html">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.html">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.html">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--====  Fin del Menu  ====-->

    <!--=== Slider home ====-->
    <div class="carousel slide bg-inverse ml-auto mr-auto" data-ride="carousel" id="myCarousel">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
            <li data-slide-to="1" data-target="#myCarousel"></li>
            <li data-slide-to="2" data-target="#myCarousel"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img alt="First slide" class="d-block w-100" src="../assets/img/slider_home/slider1.jpg">
                <div class="carousel-caption">
                    <h3>First slide</h3>
                    <p>This is the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="Second slide" class="d-block w-100" src="../assets/img/slider_home/slider2.jpg">
                <div class="carousel-caption">
                    <h3> Second slide</h3>
                    <p> This is the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="Third slide" class="d-block w-100" src="../assets/img/slider_home/slider3.jpg">
                <div class="carousel-caption">
                    <h3> Third slide</h3>
                    <p>This is the third slide.</p>
                </div>
            </div>
        </div>
    	 <a class="carousel-control-prev" data-slide="prev" href="#myCarousel" role="button" >
            <span aria-hidden="true" class="icon-left-open-big " id="chevron"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" data-slide="next" href="#myCarousel" role="button">
            <span aria-hidden="true" class="icon-right-open-big"  id="chevron"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--====  Fin del Slider  ====-->

<?php
require ('../moduls/conexion.php');
$query2 ="select * from productos order by nombre";
$resultado2 = $mysqli->query($query2);

$num_mostrar = 6;
@$num_paginas = $_GET['num'];

if (is_numeric($num_paginas)) {
    $inicio = ($num_paginas-1)*$num_mostrar;
    } else {
        $inicio = 0;
    }

$query ="select * from productos order by nombre limit $inicio,$num_mostrar";
$resultado = $mysqli->query($query);
$num_total = mysqli_num_rows($resultado2);

$can_paginas = ceil($num_total/$num_mostrar);
   
//$query ="select * from productos";
//$resultado = $mysqli->query($query);

/*
$i =  0;
while($resultado1 = $resultado->fetch_assoc()){
    ${"id" . $i} = $resultado1['nombre'];
    ${"prec" . $i} = $resultado1['precio'];
    ${"imgs" . $i} = $resultado1['img'];
    $i++; 
} */

?>

    <!--==== Contenido =====-->

    <div class="container" id="contenido">
		

		<div class="row text-center text-lg-left">
			<div class="col-sm-12 col-md-3">
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
			
			<div class="col-sm-12 col-md-9">
				<div class="container-fluid">
					<div class="row text-center text-lg-left">

                        <?php 

                            //$query ="select * from productos";
                            //$resultado = $mysqli->query($query);

                            $i =  0;
                            while($resultado1 = $resultado->fetch_assoc()){
                                ${"nombre" . $i} = $resultado1['nombre'];
                                ${"prec" . $i} = $resultado1['precio'];
                                ${"imgs" . $i} = $resultado1['img'];
                                

                                echo "<div class='col-md-4 col-sm-6'>";
                                echo    "<div class='card'>";
                                echo        "<img class='card-img-top' alt='Card image cap' src='../assets/img/productos/". basename(${'imgs' . $i}) ."'>";
                                echo        "<div class='card-body' style='background-color:#ededed;''>";
                                echo            "<p class='card-text'>".${'nombre' . $i}."</p>";
                                echo            "<p style='font-weight: bold; color: red;'>$ ".${'prec' . $i}."</p>";
                                echo        "</div>";
                                echo    "</div>";
                                echo "</div>";

                                if ($i > 2) {
                                    //echo "<hr class='featurette-divider'>";
                                    echo "hola";
                                } 

                            }
                            $i++;

                        ?>
                    <hr class="featurette-divider">
					</div>

<?php

echo '<div class="mx-auto w-50 p-3 text-white text-center">';

    echo '<ul class="pagination">';

    for ($a=1 ; $a <= $can_paginas ; $a++ ) {
        if ($a == $num_paginas) {
               echo '<li class="page-item active">
                <a class="page-link" href="productos.php?num='.$a.'">'.$a.'</a>
            </li>'; 
            } else {
                echo '<li class="page-item">
                <a class="page-link" href="productos.php?num='.$a.'">'.$a.'</a>
            </li>';
            }   

            }

    echo '</ul>';
echo '</div>';

    ?>

    <style> 


  

</style>



                     <!--   <nav aria-label="">

                          <ul class="pagination">


                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                        

                          </ul>
                        </nav> -->



				</div>

			</div>

  

		</div>

    </div>
    	




    <!--==== Fin contenido =====-->


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

    <!-- Codigo JS -->
    <script src="../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/slider_home/slider_home.js" type="text/javascript"></script>


    
</body>
<!-- Abell && favian -->
</html>