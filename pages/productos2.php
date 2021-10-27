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

    <script src="../assets/js/pagination/responsive-paginate.js"></script>
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
     
    </div>
    <!--====  Fin del Slider  ====-->

<?php
require ('./../modulos/conexion/conexion.php');

$query2 ="select * from grupo_portatiles order by nombre";
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

$query ="select * from grupo_portatiles order by nombre limit $inicio,$num_mostrar";
$resultado = $mysqli->query($query);
$num_total = mysqli_num_rows($resultado2);
$can_paginas = ceil($num_total/$num_mostrar);
session_start();

echo $_SESSION["id4"];
?>

    <!--==== Contenido =====-->

    <div class="container" id="contenido">
        <div class="row imagen">
            <div class="col-md-12">
                <img src="../assets/img/slider_home/slider1.jpg" width="100%" height="150px;" alt="">
            </div>
        </div>

		<div class="row text-center text-lg-left" >
			<div class="col-sm-12 col-md-3" id="contenido2">
				<p><h3>Categorias</h3></p>
                <hr>
                <ul id="ulcatg" class="accordion">
                    <li id="licatg"><a href="" class="icon-desktop"> Escritorio</a></li>
                    <li id="licatg"><a href="" class="icon-laptop"> Portatiles</a></li>
                    <li id="licatg"><a href="" class="icon-videocam"> Camaras de seguridad</a></li>
                    <li id="licatg"><a href="" class="icon-print"> Insumos de impresion</a></li>
                </ul>
                
			</div>
			<div class="col-sm-12 col-md-9 cont">
				<div class="container-fluid">
					<div class="row text-center text-lg-left" id="contenido3">
                        <?php 
                            $i =  0;
                            while($resultado1 = $resultado->fetch_assoc()){
                                ${"id" . $i} = $resultado1['id_portatil'];
                                ${"nombre" . $i} = $resultado1['nombre'];
                                ${"procesador" . $i} = $resultado1['procesador'];
                                ${"modelo" . $i} = $resultado1['modelo'];
                                ${"prec" . $i} = $resultado1['precio'];
                                ${"imgs" . $i} = $resultado1['img'];

                                
                                echo "<div class='col-md-4 col-sm-6 contenido3'>";
                                echo '<a href="detallePortatil.php?id='.${'id' . $i}.'" class="card1">';
                                echo    "<div class='card'>";
                                echo        "<img class='card-img-top' src='../".(${'imgs' . $i}) ."'>";
                                echo        "<div class='card-body' style='background-color:#ededed;''>";
                                echo            "<ul style='list-style:none;'>
                                                    <li> ".${'nombre' . $i}." ".${'modelo' . $i}."</li>
                                                    <li>".${'procesador' . $i}."</li>
                                                    <li style='font-weight: bold; color: red;'>$".${'prec' . $i}."</li>
                                                    <li></li>
                                                </ul>";
                                echo        "</div>";
                                echo    "</div>";
                                echo '</a>';
                                echo "</div>"; 
                                $i++;
                            } 
                        ?>
					</div>

                    <?php
                    $min=""; $max="";
                    if ($num_paginas == 1) {
                        $min = "disabled";
                    } elseif ($num_paginas == $can_paginas) {
                        $max = "disabled";
                    }

                    ?>
                        <nav id="paginador" >
                            <ul class="pagination pagination-sm nav justify-content-center">
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
            <a href="#">InvFut SAS</a>     
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