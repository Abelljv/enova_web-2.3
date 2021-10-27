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
        $query = "select * from categorias";
        $resultado=$mysqli->query($query);
    ?>

    <div class="container">
            <form  method="post" enctype="multipart/form-data" action="../../modulos/procesos/cargarInfoEscritorio.php">
                <h3 style="color: black;">INGRESO DE INFORMACIÓN DEL PRODUCTO - (Escritorio)</h3>

        <fieldset class="scheduler-border">
             <legend class="scheduler-border">Información del producto:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required="">
                    </div>
                </div>
           
                 <div class="col-md-4">
                     <div class="form-group">
                        <label for="modelo">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" required="">
                    </div>
                 </div>

                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" class="form-control" id="marca" name="marca" required="">
                    </div>
                  </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" id="color" name="color" required="">
                    </div>
                </div>

                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="condicion">Condicion:</label>
                        <input type="text" class="form-control" id="condicion" name="condicion" required="">
                    </div>
                  </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="descripcion">Descripción del producto</label>
                        <textarea  class="form-control border-input" name="descripcion" id="descripcion" cols="100" rows="5" required=""></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
        <br>
   
         <fieldset class="scheduler-border">
             <legend class="scheduler-border">Información de hardware y software:</legend>
            <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="procesador">Board:</label>
                        <input type="text" class="form-control" id="board" name="board" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="procesador">Procesador:</label>
                        <input type="text" class="form-control" id="procesador" name="procesador" required="">
                    </div>
                </div>
           
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="vprocesador">Velocidad del procesador:</label>
                        <input type="text" class="form-control" id="vprocesador" name="vprocesador" required="">
                    </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="memoria">Memoria RAM:</label>
                        <input type="text" class="form-control" id="memoria" name="memoria" required="">
                    </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="tmemoria">Tipo de Memoria RAM:</label>
                        <input type="text" class="form-control" id="tmemoria" name="tmemoria" required="">
                    </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="disco">Disco duro:</label>
                        <input type="text" class="form-control" id="disco" name="disco" required="">
                    </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="pantalla">Monitor:</label>
                        <input type="text" class="form-control" id="monitor" name="monitor" required="">
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="pulgada">Pulgadas:</label>
                        <input type="text" class="form-control" id="pulgada" name="pulgada" required="">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="resolucion">Resolucion de pantalla:</label>
                        <input type="text" class="form-control" id="resolucion" name="resolucion" required="">
                    </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="resolucion">Puertos:</label>
                        <input type="number" class="form-control" id="puertos" name="puertos" required="">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="resolucion">Teclado:</label>
                        <input type="text" class="form-control" id="teclado" name="teclado" required="">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="resolucion">Mouse:</label>
                        <input type="text" class="form-control" id="mouse" name="mouse" required="">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="resolucion">Fuente:</label>
                        <input type="text" class="form-control" id="fuente" name="fuente" required="">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="resolucion">Unidad optica:</label>
                        <input type="text" class="form-control" id="unidad" name="unidad" required="">
                    </div>
                </div>
                  
                </div>
      <div class="row">
       <div class="col-md-12">
                     <div class="form-group">
                        <label for="categoria">Sistema operativo</label>
                            <select class="form-control" id="selectSO" name="selectSO" required="">
                              <option>Seleccione el sistema operativos</option>
                              <?php
                                    
                                    $query2 = "select * from sistema_operativo";
                                    $resultado2=$mysqli->query($query2);
                                ?>
                              <?php while($roww = $resultado2->fetch_assoc()) { ?>
                              <option value="<?php echo $roww['nombre']; ?>"><?php echo $roww['nombre']; ?></option>
                              <?php } ?>
                            </select>
                    </div>
                </div>
            </div>   
            <br>


        </fieldset>
        <fieldset class="scheduler-border">
             <legend class="scheduler-border">Información de precio y categoria :</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="precio">Precio del producto:</label>
                        <input type="number" class="form-control" id="precio" name="precio" required="">
                    </div>
                </div>
           
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="oferta">Oferta:</label>
                        <input type="number" class="form-control" id="oferta" name="oferta" required="">
                    </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                        <label for="fecha">Fecha de ingreso de la informacion:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required="">
                    </div>
                 </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" required="">
                    </div>
                 </div>

                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="categoria">Categoria</label>
                            <select class="form-control" id="categoria" name="categoria" required="">
                              <option>Seleccione la Categoria</option>
                              <?php while($row = $resultado->fetch_assoc()) { ?>
                              <option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['nombre']; ?></option>
                              <?php } ?>
                            </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                         
                         <input id="file_url" type="file" name="imagen" required=""> 
                         
                    </div>
                </div>
        </fieldset>
        <div class="row boton">
             <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success button icon-upload"> Cargar información</button>
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