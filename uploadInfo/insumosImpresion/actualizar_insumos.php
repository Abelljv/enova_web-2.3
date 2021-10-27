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
//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

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

        //Consulta para enlistar las categorias
        $query = "select * from categorias";
        $resultado=$mysqli->query($query);
        // ------------------------------------

        //Consulta para llenar todos los campos
        @$id = $_GET['id'];
        $Consulta = "select A.*, B.nombre as id_nom from grupo_insumos A inner join categorias B on A.id_categoria = B.id_categoria where A.id = $id";
        $result=$mysqli->query($Consulta);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        //-------------------------------------

     ?>
    <div class="container">
            <form  method="post" enctype="multipart/form-data" action="../../modulos/procesos/actualizarInfoInsumos.php">
                <h3>INGRESO DE INFORMACIÓN DEL PRODUCTO - (Insumos de impresión)</h3>

        <fieldset class="scheduler-border">
             <legend class="scheduler-border">Información del producto:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                       <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>" >
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required="" value="<?php echo $row['nombre']; ?>">
                    </div>
                </div>
           
                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" class="form-control" id="marca" name="marca" required="" value="<?php echo $row['marca']; ?>">
                    </div>
                  </div>
        
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="color">Referencia:</label>
                        <input type="text" class="form-control" id="referencia" name="referencia" required="" value="<?php echo $row['referencia']; ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="descripcion">Descripción del producto</label>
                        <textarea  class="form-control border-input" name="descripcion" id="descripcion" cols="100" rows="5" required=""><?php echo $row['descripcion']; ?></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
        <br>
   
         </fiefieldset>
        <fieldset class="scheduler-border">
             <legend class="scheduler-border">Información de precio y categoria :</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="precio">Precio del producto:</label>
                        <input type="number" class="form-control" id="precio" name="precio" required="" value="<?php echo $row['precio']; ?>">
                    </div>
                </div>
           
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="oferta">Oferta:</label>
                        <input type="number" class="form-control" id="oferta" name="oferta" required="" value="<?php echo $row['oferta']; ?>">
                    </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="fecha">Fecha de ingreso de la informacion:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required="" value="<?php echo $row['fecha_ingreso']; ?>">
                    </div>
                 </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" required="" value="<?php echo $row['cantidad']; ?>">
                    </div>
                 </div>
              <div class="col-md-12">
                     <div class="form-group">
                        <label for="categoria">Categoria</label>
                            <select class="form-control" id="categoria" name="categoria" required="">
                              <option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['id_nom']; ?></option>

                              <?php 
                              while($roww = $resultado->fetch_assoc()) { 
                              if (($roww['id_categoria'])!=($row['id_categoria'])) {
                                ?>
                                <option value="<?php echo $roww['id_categoria']; ?>"><?php echo $roww['nombre']; ?></option>
                                <?php }} ?>
                            </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                         <input id="imagen" type="file" name="imagen">
                         <input type="hidden" class="form-control" id="img" name="img" value="<?php echo $row['img']; ?>" >
                         <img id="imgSalida" name="imgSalida" src="../../<?php echo $row['img']; ?>" class="img-thumbnail" width="150" height="140">
                    </div>
                  </div>
        </fieldset>
        <div class="row boton">
             <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success button icon-upload"> Actualizar información</button>
                    </div>
                </div>
        </div>


            </form>
       </div>
   


    <!-- Codigo JS -->
    <script src="../../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/slider_home/slider_home.js" type="text/javascript"></script>
</body>

</html>