<?php
session_start();

if (isset($_SESSION["logueado"]) && $_SESSION["logueado"] == TRUE) {
  # code...
} else {
  echo "Esta pagina es solo para usuarios registrados.<br>";
  header("Location: ../../admin/");
}
include '../../modulos/conexion/conexion.php';     
$res = 'SELECT * FROM admin';
$result = $mysqli->query($res);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"> </meta>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    </meta>
    <title>Enova tecnologia</title>

    <!-- Llamando a la libreria de Bootstrap 4 -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Llamando a los Estilos generales -->
    <link href="../../assets/css/indexStyle.css" rel="stylesheet" type="text/css">
    <!-- llamando a los iconos -->
    <link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet"> 
    <!-- llamando a los funentes -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <!-- llamando a los iconos -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/fontello.css">
    <!--Estilo formulario cargue de informacion-->
    <link rel="stylesheet" href="../../assets/css/info_grupo.css">
    <!--Fuente google-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet"> 
</head>

<body>

    <?php
        require ('../../modulos/conexion/conexion.php');

        //Consulta para llenar todos los campos
        @$id = $_GET['id'];
        $Consulta = "select * from slider_servicios  where id = $id";
        $result=$mysqli->query($Consulta);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        //-------------------------------------

     ?>
    <div class="container">
            <form  method="post" enctype="multipart/form-data" action="../../modulos/procesos/actualizarSliderService.php">
                <h3>IMAGEN DEL SLIDER SERVICIOS - (Pagina servicios)</h3>

        <fieldset class="scheduler-border">
             <legend class="scheduler-border">Informacion de la imagen:</legend>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                       <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>" >
                        <label for="img">Ruta:</label>
                        <input type="text" class="form-control" id="img" name="img" required="" value="<?php echo $row['img']; ?>" disabled>
                    </div>
                </div>
           
                  <div class="col-md-12">
                     <div class="form-group">
                         <input id="imagen" type="file" name="imagen" value=""value="<?php echo $row['img']; ?>">
                         <input type="hidden" class="form-control" id="img" name="img" value="<?php echo $row['img']; ?>" >
                         <img id="imgSalida" name="imgSalida" src="../../<?php echo $row['img']; ?>" class="img-thumbnail" width="100%" height="100%">
                    </div>
                  </div>
        </fieldset>
        <div class="row boton">
             <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success button icon-upload"> Actualizar imagen</button>
                    </div>
                </div>
            </div>
          </form>
       </div>



    <!-- Codigo JS -->
    <!-- <script src="../../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script> -->
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/slider_home/slider_home.js" type="text/javascript"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../../assets/js/previsualizacion/prew-img.js"></script>
</body>

</html>