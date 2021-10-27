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


    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet"> 

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../moduls/pagination/responsive-paginate.js"></script>
    <script>
        $(document).ready(function () {
            $(".pagination").rPage();
        });
    </script>
</head>
<body>

 <!--==== Menu ====-->
     <nav class="navbar navbar-expand-lg navbar-light bg-faded fixed-top ">
        <a class="navbar-brand" href="../index.html">
            <h4>Enova Tecnologia</h4>
        </a>
        <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto nav-pills">
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="../index.html">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="categorias.php" id="activo">Tienda</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="proyectos.html">Proyectos</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="nosotros.html">Acerca de</a>
                </li>
                <li class="nav-item" id="navbar-nav">
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

$num_mostrar = 9;
@$num_paginas = $_GET['num'];

if (is_numeric($num_paginas)) {
    $inicio = ($num_paginas-1)*$num_mostrar;
    } else {
        $inicio = 0;
}

if (empty($_GET)) {
    $num_paginas = 1; 
}

$query ="select * from productos order by nombre limit $inicio,$num_mostrar";
$resultado = $mysqli->query($query);
$num_total = mysqli_num_rows($resultado2);
$can_paginas = ceil($num_total/$num_mostrar);
?>

    <!--==== Contenido =====-->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <p><h3>Categorias</h3></p>
                <ul id="ulcatg">
                    <li id="licatg"><a href="" class="icon-desktop"> Computadores</a></li>
                    <li id="licatg"><a href="" class="icon-laptop"> Portatiles</a></li>
                    <li id="licatg"><a href="" class="icon-videocam"> Camaras de seguridad</a></li>
                    <li id="licatg"><a href="" class="icon-print"> Insumos de impresion</a></li>
                </ul>
        </div>
        <div class="col-sm-12 col-md-9">
                        <?php 
                            $i =  0;
                            while($resultado1 = $resultado->fetch_assoc()){
                                ${"id" . $i} = $resultado1['id_producto'];
                                ${"nombre" . $i} = $resultado1['nombre'];
                                ${"prec" . $i} = $resultado1['precio'];
                                ${"imgs" . $i} = $resultado1['img'];
                                
                                echo "<div class='col-md-4 col-sm-6' style='float: left;'>";
                                echo '<a href="unidad_producto.php?id='.${'id' . $i}.'">';
                                echo    "<div class='card'>";
                                echo        "<img class='card-img-top' alt='Card image cap' src='../assets/img/productos/". basename(${'imgs' . $i}) ."'>";
                                echo        "<div class='card-body' style='background-color:#ededed;''>";
                                echo            "<p class='card-text'>".${'nombre' . $i}."</p>";
                                echo            "<p style='font-weight: bold; color: red;'>$ ".${'prec' . $i}."</p>";
                                echo        "</div>";
                                echo    "</div>";
                                echo '</a>';
                                echo "</div>"; 
                                $i++;
                            } 
                        ?>


                    <!--Paginacion -->


            </div>


        </div>
    </div>
    
</div>
<div class="container">
            <div class="row">
                <div class="col-md-5">
                    
                </div>
                        
                <div class="col-md-7" style="text-align: center;">
                <?php
                    $min=""; $max="";
                    if ($num_paginas == 1) {
                        $min = "disabled";
                    } elseif ($num_paginas == $can_paginas) {
                        $max = "disabled";
                    }

                    ?>
                  
                        <nav style="width: 50%;">
                            <ul class="pagination pagination-sm">
                                <li class="page-item <?php echo $min; ?>"><a class="page-link" href="?num=1">&laquo;</a></li>
                                <li class="page-item <?php echo $min; ?>"><a class="page-link" href="?num=<?php echo $num_paginas-1; ?>">Anterior</a></li>
                                <?php
                                for ($i=1; $i <= $can_paginas ; $i++) { 
                                    if ($i == $num_paginas) {
                                        echo '<li class="page-item active"><a class="page-link">'.$i.'</a></li>';
                                    } else {
                                        echo '<li class="page-item"><a class="page-link" href="?num='.$i.'">'.$i.'</a></li>';
                                    }
                                }
                                ?>
                                <li class="page-item <?php echo $max; ?>"><a class="page-link" href="?num=<?php echo $num_paginas+1; ?>">Siguiente</a></li>
                                <li class="page-item <?php echo $max; ?>"><a class="page-link" href="?num=<?php echo $can_paginas; ?>">&raquo;</a></li>
                            </ul>
                        </nav>
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
                            <a href="#!">Diseño web</a>
                        </li>
                        <li>
                            <a href="#!">Desarrollo de software</a>
                        </li>
                        <li>
                            <a href="#!">Posicionamiento SEO</a>
                        </li>
                        <li>
                            <a href="#!">Tiendas virtuales</a>
                        </li>
                        <li>
                            <a href="#!">Desarrollo de Apps</a>
                        </li>
                        <li>
                            <a href="#!">Mantenimiento web</a>
                        </li>
                        <li>
                            <a href="#!">Hosting + Dominios</a>
                        </li>
                        <li>
                            <a href="#!">Marketing digital</a>
                        </li>
                        <li>
                            <a href="#!">Servicios TI</a>
                        </li>
                    </ul>
                </div>

                <!--First column-->
                <div class="col-md-4 mx-auto">
                    <h5 class="text-uppercase mb-3 mt-4 font-weight-bold">Contacto</h5>
                    <ul class="list-unstyled">
                        <li>
                            <i class="icon-location-circled"></i>
                             <span id="negrita">Ubicación: </span>Calle 17 #31-22
                        </li>
                        <li>
                            <i class="icon-location-circled"></i>
                           <span id="negrita">Ciudad: </span> sincelejo
                        </li>
                        <li>
                            <i class="icon-mail"></i>
                            <span id="negrita">Email: </span> Enova.com
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <span id="negrita">Teléfono: </span>
                        </li>
                        <li>
                            <i class="icon-mobile-1"></i>
                            <span id="negrita">Celular:</span>
                            
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
                            <a href="#!">Historia</a>
                        </li>
                        <li>
                            <a href="#!">Objetivos</a>
                        </li>
                        <li>
                            <a href="#!">Misión</a>
                        </li>
                        <li>
                            <a href="#!">Visión</a>
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
        <div class="text-center"> <!-- footer-copyright py-3 --> 
            © 2018 Copyright:
            <a href="https://www.invfut.com.co/">InvFut SAS</a>     
        </div>
        <br>
        <!--===== Fin Copyright ====-->
    </footer>

    <!-- Codigo JS -->
    <!-- <script src="../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script> -->
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/slider_home/slider_home.js" type="text/javascript"></script>


    
</body>
<!-- Abell && favian -->
</html>