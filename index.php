<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"> </meta>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">

    <title>Enova tecnologia</title>


    <!-- Llamando a la libreria de Bootstrap 4 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Llamando a los Estilos generales -->
    <link href="assets/css/indexStyle.css" rel="stylesheet" type="text/css">
    <!-- llamando a los iconos -->
    <link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet"> 
    <!-- llamando a los funentes -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <!-- llamando a los iconos -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontello.css">
    <!-- llamando a los efectos del contenido -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <script src="assets/js/effects_content/wow.min.js"></script>
    

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet"> 

              <script>
                 new WOW().init();
              </script>


<body>
    <?php
        require ('modulos/conexion/conexion.php');
        $query = "select * from slider_home";
        $resultado=$mysqli->query($query);
    ?>
    <!--==== Menu ====-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded fixed-top">
        <a class="navbar-brand" href="index.html">
            <h4>Enova Tecnologia</h4>

        </a>
          <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto nav-pills">
                <li class="nav-item  active">
                    <a class="nav-link" href="">Inicio</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="tienda/">Tienda</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="servicios/">Servicios</a>
                </li>
                 <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="clientes/">Clientes</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="proyectos/">Proyectos</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="about/">Acerca de</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="contacto/">Contacto</a>
                </li>
                <li class="nav-item" id="navbar-nav">
                    <a class="nav-link" href="creditos/">Creditos</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--====  Fin del Menu  ====-->

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
                echo    '<img  src="'.$img.'" alt="First slide">';
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
        #parrafo1{
            font-size: 16px;
        }
        #parf-serv{
            font-size: 16px; 
        }
    </style>

    <!-- ==== Nuestros Servicios ====-->
	<div class="jumbotron top-space">
		<div class="container">
			<h2 class="text-center wow bounceInLeft">Quienes Somos</h2>
            <hr id="barra">
            <div class="row">
                <div class="col-sm-12">
                    <p id="parrafo1" class="wow bounceInLeft" align="">
                    <P ALIGN="justify"><h3>
                        Es una empresa de servicios tecnológicos   especializada comercializar productos tecnológicos, diseñar, producir, comercializar software, prestar servicios TI, capacitaciones TI que ayudan de forma integral a facilitar el desarrollo de los procesos administrativos para las distintas empresas o entidades que así lo requieran. Para ello contamos con una amplia experiencia profesional, una planta de ingenieros calificados, infraestructura y equipo técnico que nos permite brindar una atención eficiente y oportuna, ajustada a las necesidades de nuestros clientes. Todo esto enmarcado dentro de los más altos estándares de calidad y servicio. 
                        </P></h3>
                    </p>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>

			<div class="row">
               <div class="col-md-3 col-sm-6 highlight">   
                    <div class="h-body text-center wow bounceInLeft">
                        <i class="icon-desktop-circled" id="icons"></i>
                        <h5>SERVICIOS TI</h5>
                        <p id="parf-serv" ALIGN="justify">Enova Tecnología  estará enfocada a Resolver cada uno de tus incidentes donde encontraras  especialistas, para brindarte el apoyo necesario para darle continuidad a tu negocio sin crear traumas con tus usuarios y en tus procesos sabemos que el mayor activo es tu información y para eso contamos con planes de continuidad del negocio para brindarte el soporte necesario.</p>
                    </div>
                </div></a>
				<div class="col-md-3 col-sm-6 highlight">
                    <div class="h-body text-center wow bounceInLeft">
                        <i class="icon-cog-circled"  id="icons"></i>
                        <h5>DESARROLLO DE SOFTWARE</h5>
                        <p id="parf-serv" ALIGN="justify">Diseñamos soluciones acorde a tus necesidades con nuestra experiencia, realizamos herramientas de gestion de software a la medida logrando que nuestros aplicativos se ajusten a lo que necesitan.</p> 
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 highlight">
                    <div class="h-body text-center wow bounceInRight">
                        <i class="icon-wrench-circled" id="icons"></i>
                        <h5>SERVICIO TECNICO COMPUTADORES</h5>
                        <p id="parf-serv" ALIGN="justify">El soporte técnico es un servicio que proporciona asistencia técnica con sus computadores, ya sea para el hardware o software. Nuestros servicios de soporte técnico trata de ayudar al usuario o cliente para que pueda resolver determinados problemas con su computador, para que no se pierda tiempo valioso en su empresa u organización</p>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 highlight">  
                    <div class="h-body text-center wow bounceInRight">
                        <i class="icon-basket-circled" id="icons"></i>
                        <h5>TIENDA VIRTUAL</h5>
                        <p id="parf-serv" ALIGN="justify">Ofrecerles a tus clientes la forma más cómoda de conocer tus productos adapta a tu empresa a las últimas tendencias usando como medio transaccional tu sitio web y con la seguridad de pagar desde cualquier lugar </p>
                    </div>
                </div>
			</div> <!-- /row  -->
            <br>
           <div class="row">
              <div class="col-md-3 col-sm-6">   
                    <div class="h-body text-center wow bounceInLeft">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 highlight">   
                    <div class="h-body text-center wow bounceInLeft">
                        <i class="icon-website" id="icons"></i>
                        <h5>DISEÑO WEB</h5>
                        <p id="parf-serv" ALIGN="justify">Contamos con profesionales especialistas atender sus requerimientos y con gran habilidad creativa para que tu página web, sea dinámica y permanezca actualizada a través de gestores de contenidos personalizados. También utilizamos los últimos lenguajes para el desarrollo HTML. CSS JQUERY PHP MYSQL PRESTASHOP, MAGENTO.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-body text-center wow bounceInLeft">
                        <i class="icon-search-circled"  id="icons"></i>
                        <h5>POSICIONAMIENTO SEO</h5>
                        <p id="parf-serv"ALIGN="justify">A través del posicionamiento SEO logramos incrementar un buen número de mayor visita a tu página web, logrando posicionándola   en la primera página de los buscadores y estar por encima de los competidores.</p> 
                    </div>
                </div>

            </div> <!-- /row  -->
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
                            <a href="servicios/#dev_soft">Desarrollo de software</a>
                        </li>
                        <li>
                            <a href="servicios/#dev_app">Desarrollo de Apps</a>
                        </li>
                         <li>
                            <a href="servicios/#dev_web">Diseño web</a>
                        </li>
                         <li>
                            <a href="servicios/#host">Hosting + Dominios</a>
                        </li>
                        <li>
                            <a href="servicios/#seo">Posicionamiento SEO</a>
                        </li>
                        <li>
                            <a href="servicios/#tienda">Tiendas virtuales</a>
                        </li>
                        <li>
                            <a href="servicios/#mant">Mantenimiento de computadores</a>
                        </li>
                        <li>
                            <a href="servicios/#mark">Marketing digital</a>
                        </li>
                        <li>
                            <a href="servicios/#serv">Servicios TI</a>
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
                           <span id="negrita">Ciudad: </span><span id="texto"> Sincelejo</span>
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
                            <span id="negrita">Celular:</span><span id="texto"> 301.760.6707</span>
                            
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
                            <a href="about/">Historia</a>
                        </li>
                        <li>
                            <a href="about/">Objetivos</a>
                        </li>
                        <li>
                            <a href="about/">Misión</a>
                        </li>
                        <li>
                            <a href="about/">Visión</a>
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
            <a href="#/">JS:JM</a>     
        </div>
        <!--===== Fin Copyright ====-->
    </footer>
    

    <!-- Codigo JS -->
    <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/slider_home/slider_home.js" type="text/javascript"></script>
    <script src="assets/js/effects_content/eskju.jquery.scrollflow.min.js"></script>
    <script src="assets/js/effects_content/viewportchecker.js"></script>
   

   
</body>
  <!-- Abell && favian -->
</html>