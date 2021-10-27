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
        $query = "select * from slider_servicios";
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
                <li class="nav-item active">
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
                <li class="nav-item" id="navbar-nav">
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
                        <h2 class="display-4">NUESTROS SERVICIOS</h2>
                        <br>
                        <p class="lead">
                        <p align="justify">
                       <h2> Cuenta con una tienda física y virtual para que realices las compras de computadores portátiles computadores de escritorio y tus accesorios, dispositivos insumos para impresoras y partes para computadores estamos a la vanguardia del E-COMERCE brindándole la facilidad y desde la comodidad de tu casa poder realizar las comprar y pagar a través de cualquier medio de pago y recibir el producto en tu casa. Es la tienda de tecnología online líder. Conservicio de calidad y atención personalizada, los clientes tienen a su disposición el mejor precio de venta online en la más amplia variedad de productos tecnológicos: entre otros, componentes, portátiles/ordenadores, periféricos, smartphones y móviles, audio, fotografía, vídeo, redes y cables, artículos gaming, electro-hogar, tablets/eBooks y consumibles.</p> </p></h2>
                   </div>
                </div>
            </div>
        </div>


    <div class="container-fluid jumbotron jumbsize  wow bounceInRight"><a name="dev_soft"></a>
        <div class="row">
                <div class="col-md-7">
                    <div class="jumbotron">
                        <br>
                        <br>
                        <h2 class="display-4">DESARROLLO DE SOFTWARE.</h2>
                        <br>
                        <p class="lead">
                        <p align="justify">
                        <h2>
                        
                        Disponemos de personal capacitado para ayudarte en la gestión de tu negocio logrando optimizar tus procesos mostrarte a través de levantamiento de la información como llevar a cabo todo tipo de proyecto software a la medida, intranet, desarrollo de aplicativos web y App.</p> </p></h2>
                   </div>
                </div>
                   <div class="col-md-5">
                      <div class="jumbotron jumbsize">
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/DIW.png" alt="Pagina web">
                      </div>
                  </div>
                </div>
          </div>


    <div class="container-fluid jumbotron jumbo-color jumbsize" id="dev_app">
        <div class="row">
            <div class="col-md-5">
                      <div class="jumbotron jumbo-color wow bounceInLeft" >
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/DA.png" alt="Pagina web">
                      </div>
                  </div>
                <div class="col-md-7">
                    <div class="jumbotron wow bounceInLeft jumbo-color">
                        <h2 class="display-4">DESARROLLO DE APP.</h2>
                        <p>
                            <ul type="circle" style= "font-size: 20px; margin-left: 25px;" >
                            <h2>
                                <li>Construimos ideas digitales a nuestros clientes.</li>
                                <li>Ayudamos a marcas y personas con ambición, a desarrollar aplicaciones basadas en las necesidades que enfrentan.</li>
                                <li>Vivimos en un mundo digital y móvil Cada día más personas se conectan a través de dispositivos móviles. Nuestro equipo está especializado en desarrollo de aplicaciones móviles para iOS, Android y Windows Phone.</li></h2>
                            </ul></p>
                     </div>
                  </div> 
                </div>
          </div>

    <div class="container-fluid jumbotron jumbsize wow bounceInRight" id="dev_web">
        <div class="row">
                <div class="col-md-7">
                    <div class="jumbotron" >
                        <h2 class="display-4">DISEÑO WEB.</h2>
                        <p class="lead">
                        <p align="justify"><h2>Contamos con profesionales especialistas atender sus requerimientos y con gran habilidad creativa para que tu página web, sea dinámica y permanezca actualizada a través de gestores de contenidos personalizados. También utilizamos los últimos lenguajes para el desarrollo HTML. CSS JQUERY PHP  MYSQL PRESTASHOP, MAGENTO.</p> </p></h2>
                   </div>
                </div>
                <div class="col-md-5">
                      <div class="jumbotron jumbsize wow bounceInRight" >
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/DW.png" alt="Pagina web">
                      </div>
                  </div>
            </div>
        </div>


    <div class="container-fluid jumbotron jumbsize jumbo-color" id="host">
        <div class="row">
            <div class="col-md-5">
                      <div class="jumbotron jumbo-color wow bounceInLeft">
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/HD.png" alt="Pagina web">
                      </div>
                  </div>
                <div class="col-md-7">
                    <div class="jumbotron wow bounceInLeft jumbo-color" >
                        <h2 class="display-4">HOSTING + DOMINIO.</h2>
                        <p class="lead"><p align="justify"><h2>Contamos con profesionales Y con aliados comerciales donde logramos posicionar tu marca y contamos con varios servidores donde podemos alojar tu web donde puedes contratar un dominio (.com.co.org.net.es.edu ) y tu hosting con cuentas asociadas al nombre de tu empresa ilimitadas dependiendo el plan que escojas así también tendrás copias de seguridad semanales o mensualmente te ofrecemos las mejores prestaciones de servicio al mejor costo y soporte</p></h2></p>
                     </div>
                  </div> 
                </div>
          </div>

      <div class="container-fluid jumbotron jumbsize" id="seo">
        <div class="row">
                <div class="col-md-7">
                    <div class="jumbotron wow bounceInRight">
                        <h2 class="display-4">POSICIONAMIENTO WEB</h2>
                        <p class="lead"><p align="justify"><h2>Contamos con profesionales especialistas atender sus requerimientos y con gran habilidad creativa para que tu página web, sea dinámica y permanezca actualizada a través de gestores de contenidos personalizados. También utilizamos los últimos lenguajes para el desarrollo HTML. CSS JQUERY PHP  MYSQL PRESTASHOP, MAGENTO.</p></p></h2>
                   </div>
                </div>
                <div class="col-md-5">
                      <div class="jumbotron wow bounceInRight">
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/PW.png" alt="Pagina web">
                      </div>
                  </div>
            </div>
        </div>

    <div class="container-fluid jumbotron jumbsize jumbo-color" id="tienda">
        <div class="row">
            <div class="col-md-5">
                      <div class="jumbotron wow bounceInLeft jumbo-color">
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/TV.png" alt="Pagina web">
                      </div>
                  </div>
                <div class="col-md-7">
                    <div class="jumbotron wow bounceInLeft jumbo-color">
                        <h2 class="display-4">TIENDAS VIRTUALES.</h2>
                        <p class="lead"><p align="justify"><h2>Ofrecemos a tus clientes la forma más cómoda de conocer tus productos adapta a tu empresa a las últimas tendencias usando como medio transaccional tu sitio web y con la seguridad de pagar desde cualquier lugar.</p></p></h2>
                     </div>
                  </div> 
                </div>
          </div>

      <div class="container-fluid jumbotron jumbsize" id="mant">
        <div class="row">
                <div class="col-md-7">
                    <div class="jumbotron wow bounceInRight" >
                        <h2 class="display-4">MANTENIMIENTO DE PC</h2>
                        <p class="lead"><p align="justify"><h2>Contamos con profesionales especialistas atender sus requerimientos y con gran habilidad creativa para que tu página web, sea dinámica y permanezca actualizada a través de gestores de contenidos personalizados. También utilizamos los últimos lenguajes para el desarrollo HTML. CSS JQUERY PHP  MYSQL PRESTASHOP, MAGENTO</p></p></h2>
                   </div>
                </div>
                <div class="col-md-5">
                <br>
                      <div class="jumbotron jumbsize wow bounceInRight" >
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/MC.png" alt="Pagina web">
                      </div>
                  </div>
            </div>
        </div>

    <div class="container-fluid jumbotron jumbsize jumbo-color" id="mark">
        <div class="row">
            <div class="col-md-5">
                      <div class="jumbotron jumbo-color wow bounceInLeft" >
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/MD.png" alt="Pagina web">
                      </div>
                  </div>
                <div class="col-md-7">
                    <div class="jumbotron wow bounceInLeft jumbo-color" >
                        <h2 class="display-4">MARKETING DIGITAL.</h2>
                        <p style=" font-size: 20px;"> <p align="justify"><h2>Actualmente las redes sociales no solo son utilizadas para conectar amigos e intercambiar información entre ellos y conocer nuevas amistades, sino que también se ha utilizado para que las empresas puedan promocionar sus productos y servicios a través de las redes logrando a traer por medio de una estrategia de marketing digital incrementar sus ventas.
                            <ul type="circle" style="margin-left: 25px; font-size: 20px;">
                            <p>
                                <li>Marketing social que ofrece apoyo, información y atención al cliente.</li>
                                <li>Detectan deficiencias en el servicio y en la atención post-venta.</li>
                                <li>Crean efectos de marketing viral. Sus publicaciones en redes sociales se extenderán más allá de tus seguidores.</li>
                                <li>Se puede anunciar en Twitter, YouTube, Facebook, Pinterest e Instagram.</li>
                            </ul></p></p></h2>
                     </div>
                  </div> 
                </div>
          </div>

    <div class="container-fluid jumbotron" id="serv">
        <div class="row">
                <div class="col-md-7">
                    <div class="jumbotron wow bounceInRight" >
                        <h2 class="display-4">SERVICIOS TI</h2>
                        <p class="lead"> <p align="justify"><h2>Enova Tecnología  estará enfocada a Resolver cada uno de tus incidentes donde encontraras  especialistas, para brindarte el apoyo necesario para darle continuidad a tu negocio sin crear traumas con tus usuarios y en tus procesos sabemos que el mayor activo es tu información y para eso contamos con planes de continuidad del negocio para brindarte el soporte necesario.</p></p></h2>
                   </div>
                </div>
                <div class="col-md-5">
                      <div class="jumbotron jumbsize wow bounceInRight" >
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/ST.png" alt="Pagina web">
                      </div>
                  </div>
            </div>
        </div>

     <div class="container-fluid jumbotron jumbsize jumbo-color">
        <div class="row">
            <div class="col-md-5">
                      <div class="jumbotron jumbo-color wow bounceInLeft" >
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/IC.png" alt="Pagina web">
                      </div>
                  </div>
                <div class="col-md-7">
                    <div class="jumbotron wow bounceInLeft jumbo-color" >
                        <h2 class="display-4">INSTALACIÓN DE CAMARAS DE SEGURIDAD.</h2>
                        <p style=" font-size: 20px;"> <p align="justify"><h2>Del correcto funcionamiento de su Camaras de seguridad depende que pueda monitorear y revisar los eventos de su empresa nosotros nos encargamos de que trabajen perfectamente. Contamos con el personal calificado para que su sistema de vigilancia trabaje sin contra tiempos y evite perder los eventos y grabaciones por falta de mantenimiento.
								<p>
                            <ul type="circle" style="margin-left: 25px; font-size: 20px;">
                                <li>Instalacion Cámaras de Seguridad.</li>
                                <li>Configuracion Camaras de Vigilancia</li>
                                <li>Adicionales Nuevo Proyectos.</li>
                            </ul></p></p> </h2>
                     </div>
                  </div> 
                </div>
          </div>

    <div class="container-fluid jumbotron jumbsize">
        <div class="row">
                <div class="col-md-7">
                    <div class="jumbotron wow bounceInRight" >
                        <h2 class="display-4">INSTALACIÓN ALARMAS</h2>
                        <p class="lead"> <p align="justify"><h2>Obtenga tranquilidad y seguridad para su hogar mediante la instalación de nuestras alarmas en su hogar. Disponemos de modernos sistemas de seguridad conectados a vía telefónica para activar alertas en caso de eventos de inseguridad. Puede instalar este sistema para administrarlo usted mismo o contratar nuestro servicio de monitoreo para aumentar aún más la efectividad del sistema gracias a nuestra avanzada central con personal activo las 24 hs. del día.</p></p></h2>
                        <p class="lead"><p align="justify"><h2>Contratando nuestro servicio de instalación de alarmas nuestro equipo técnico especializado se encarga de la provisión de los componentes, la instalación propiamente dicha en su hogar y la puesta en marcha del sistema para asegurar el correcto funcionamiento de la alarma y la garantía de los componentes instalados. </p></p></h2>
                   </div>
                </div>
                <div class="col-md-5">
                      <div class="jumbotron jumbsize wow bounceInRight" >
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/IA.png" alt="Pagina web">
                      </div>
                  </div>
            </div>
        </div>

    <div class="container-fluid jumbotron  jumbsize jumbo-color">
        <div class="row">
            <div class="col-md-5">
                      <div class="jumbotron jumbo-color wow bounceInLeft" >
                        <img class="image img-fluid mx-auto" src="../assets/img/services/img/CE.png" alt="Pagina web">
                      </div>
                  </div>
                <div class="col-md-7">
                    <div class="jumbotron jumbo-color wow bounceInLeft" >
                        <h2 class="display-4">CABLEADO ESTRUCTURADO VOZ Y DATOS.</h2>
                       <p class="lead"><p align="justify"><h2>Contamos con certificaciones y homologaciones que nos avalan, garantizando nuestro prestigio en este campo, la idoneidad de los proyectos en los que participamos, la satisfacción y confianza de nuestros clientes y la inmejorable relación calidad/precio de nuestra instalación cableado estructurado.</p></p></h2>
                        <p class="lead"><p align="justify"><h2>Ofrecemos soluciones de conectividad y de cableado estructurado voz y datos para redes de comunicaciones. Proporcionamos las infraestructuras inalámbricas, de fibra y de cobre que habilitan una gran cantidad de servicios de comunicaciones. Así como tendidos, conectorización y fusión de fibra óptica multimodo y monomodo.
                        </p></p></h2>
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