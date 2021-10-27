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

   $query = "select * from fpago";
        $resultado=$mysqli->query($query);
   $query = "select * from pcargo";
        $resultado1=$mysqli->query($query);
   $query = "select * from tvivienda";
        $resultado2=$mysqli->query($query);
   $query = "select * from finan_articulo";
    $resultado3=$mysqli->query($query);

    $query = "select * from estadocredito";
    $resultado9=$mysqli->query($query);

    $query = "select * from treferencia";
    $resultado4=$mysqli->query($query);
    

         $query = "select * from credito";
        $resultadoii=$mysqli->query($query);
        // ------------------------------------

        //Consulta para llenar todos los campos
        @$id = $_GET['id'];
        //$Consulta = "select A.*, B.nombre as id from creditos A inner join categoria B on A.id = B.id where A.id = $id";

        //$Consulta = "select * from creditos where id=$id ";
        $Consulta ="SELECT id, valor, articulo, fecha, descripcion, nombre, apellido, cedula, direccion, telefono, cargo, vivienda, fpago, nombref, apellidof, direccionf, telefonof, nombrep, apellidop, direccionp, telefonop, nombrec, apellidoc, cedulac, direccionc, telefonoc, nombrecf, apellidocf, direccioncf, telefonocf, nombrecp,  apellidocp, direccioncp, telefonocp, permisoCont, permiso1 FROM creditos WHERE id=$id";

        $result=$mysqli->query($Consulta);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);



    ?>
    
    <div class="container">
            <form  method="POST" enctype="multipart/form-data" action="../../modulos/procesos/actualizarInfoCreditos2.php">
                <h3>INGRESO DE INFORMACIÓN PARA SOLICITUD DE CREDITO.</h3>

        <fieldset class="scheduler-border">
          <legend class="scheduler-border">Información del credito:</legend>
            <div class="row">
            
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor">Valor Del Solicitado:</label>
                        
                        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $row['valor']; ?>"">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="descripcion">Articulo Para el Credito</label>
                      <input type="text" class="form-control" id="articulo" name="articulo" name="articulo" value="<?php echo $row['articulo']; ?>"">
                    </div>
                </div>
           
                 <div class="col-md-4">
                     <div class="form-group">
                        <label for="fecha">Fecha de solicitud del credito:</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>"">
                    </div>
                 </div> 
                 </div>


                 <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="descripcion">Descripción del Articulo</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row['descripcion']; ?>""></textarea>
                        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                    </div>
                </div>
            </div> 
        </fieldset>

        <br>
        <fieldset class="scheduler-border">
             <legend class="scheduler-border">Información del Interesado:</legend>
             <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombrec">Nombres:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"value="<?php echo $row['nombre']; ?>"">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidoc">Apellidos:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $row['apellido']; ?>"">
                    </div>
                </div>
           
                 <div class="col-md-4">
                     <div class="form-group">
                        <label for="cedulac">Cedula:</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $row['cedula']; ?>"">
                    </div>
                 </div>

                 
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccion">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $row['direccion']; ?>"">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefono">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $row['telefono']; ?>"">
                    </div>
                </div>

                 <div class="col-md-4">
                      <div class="form-group">
                        <label for="cargo">Personas a Cargo.</label>
                            <input type="text" class="form-control" id="cargo" name="cargo" name="cargo" value="<?php echo $row['cargo']; ?>"">
                    </div>
                  </div>
                     <div class="col-md-4">
                      <div class="form-group">
                        <label for="vivienda">Tipo de Vivienda.</label>
                          <input type="text" class="form-control" id="vivienda" name="vivienda" name="vivienda" value="<?php echo $row['vivienda']; ?>"">
                  </div>
                   
                   </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="fpago">Forma de Pago.</label>
                        <input type="text" class="form-control" id="fpago" name="fpago" name="fpago" value="<?php echo $row['fpago']; ?>"">
                            
                    </div>
                  </div>
            </div>

           
        </fieldset>
        <br>
        
        <br>
        
         <fieldset class="scheduler-border">
             <legend class="scheduler-border">Fererencia Familiar:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombref">Nombres:</label>
                        <input type="text" class="form-control" id="nombref" name="nombref" value="<?php echo $row['nombref']; ?>"">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidof">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidof" name="apellidof" value="<?php echo $row['apellidof']; ?>"">
                    </div>
                </div> 
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccionf">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccionf" name="direccionf" value="<?php echo $row['direccionf']; ?>"">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonof">Telefono:</label>
                        <input type="text" class="form-control" id="telefonof" name="telefonof" value="<?php echo $row['telefonof']; ?>"">
                    </div>
                </div>
                 
            </div>

           
        </fieldset>                 
        <br>
        
         <fieldset class="scheduler-border">
             <legend class="scheduler-border">Referencia Personal:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombrep">Nombres:</label>
                        <input type="text" class="form-control" id="nombrep" name="nombrep" value="<?php echo $row['nombrep']; ?>"">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidop">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidop" name="apellidop" value="<?php echo $row['apellidop']; ?>"">
                    </div>
                </div>   
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccionp">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccionp" name="direccionp" value="<?php echo $row['direccionp']; ?>"">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonop">Telefono:</label>
                        <input type="text" class="form-control" id="telefonop" name="telefonop" value="<?php echo $row['telefonop']; ?>"">
                    </div>
                </div>
                 
            </div>

           
        </fieldset>

        <fieldset class="scheduler-border">
             <legend class="scheduler-border">Terminos y Condiciones:</legend>
            <div class="row">
                
                    
                        La presente solicitud está sujeta a estudio y verificación de los datos allí consignados, cualquier anomalía o inconsistencia se anulará.  Así mismo, no compromete a ENOVA TECNOLOGIA a la aprobación directa y se reserva el derecho de aceptación o no del crédito.
                        
                    
                </div>
                           
        </fieldset>
        <fieldset class="scheduler-border">
          </br>
               <div class="row">
               <div class="col-md-6">Firma del Solicitante:______________________________________</div>
               <div class="col-md-6">Cedula:________________________________________</div>
               </div>
                </br>           
        </fieldset>
 
                <br>
        
         <fieldset class="scheduler-border">
             <legend class="scheduler-border">Información del Codeudor:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombrec">Nombres:</label>
                        <input type="text" class="form-control" id="nombrec" name="nombrec" value="<?php echo $row['nombrec']; ?>"">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidoc">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidoc" name="apellidoc" value="<?php echo $row['apellidoc']; ?>"">
                    </div>
                </div>
           
                 <div class="col-md-4">
                     <div class="form-group">
                        <label for="cedulac">Cedula:</label>
                        <input type="text" class="form-control" id="cedulac" name="cedulac" value="<?php echo $row['cedulac']; ?>"">
                    </div>
                 </div>

                 
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccionc">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccionc" name="direccionc" value="<?php echo $row['direccionc']; ?>"">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonoc">Telefono:</label>
                        <input type="text" class="form-control" id="telefonoc" name="telefonoc" value="<?php echo $row['telefonoc']; ?>"">
                    </div>
                </div>
                 
            </div>

       
        <fieldset class="scheduler-border">
            <div class="row">
                         Despues de aceptado el credito en caso de que el codeudor principal no se encuentre al dia el deudor podra adquirir la deuda, de acuerdo con el compromiso adquirido con aterioridad con el <strong> ENOVA TECNOLOGIA </strong>              
        </fieldset>

        <br>
        
         <fieldset class="scheduler-border">
             <legend class="scheduler-border">Referencia Familiar Del Codeudor:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombrecf">Nombres:</label>
                        <input type="text" class="form-control" id="nombrecf" name="nombrecf" value="<?php echo $row['nombrecf']; ?>"">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidocf">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidoc" name="apellidocf" value="<?php echo $row['apellidocf']; ?>"">
                    </div>
                </div>    
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccioncf">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccioncf" name="direccioncf" value="<?php echo $row['direccioncf']; ?>"">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonocf">Telefono:</label>
                        <input type="text" class="form-control" id="telefonocf" name="telefonocf" value="<?php echo $row['telefonocf']; ?>"">
                </div>
                 
            </div>

           
        </fieldset>

         <br>
        
         <fieldset class="scheduler-border">
             <legend class="scheduler-border">Referencia Personal Del Codeudor:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombrecp">Nombres:</label>
                        <input type="text" class="form-control" id="nombrecp" name="nombrecp" value="<?php echo $row['nombrecp']; ?>"">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidocp">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidocp" name="apellidocp" value="<?php echo $row['apellidocp']; ?>"">
                    </div>
                </div>   
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccioncp">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccioncp" name="direccioncp" value="<?php echo $row['direccioncp']; ?>"">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonocp">Telefono:</label>
                        <input type="text" class="form-control" id="telefonocp" name="telefonocp" value="<?php echo $row['telefonocp']; ?>"">
                    </div>
                </div>
               
           
                 
                 
            </div>

           
        </fieldset>
        <fieldset class="scheduler-border">
             <legend class="scheduler-border">Estado Particular del Credito:</legend>
            
            <div class="row">
              
                
                <div class="col-md-4">
                      <div class="form-group">
                        <label for="permisoCont">Estado del Credito.</label>
                            <input type="text" class="form-control" id="permisoCont" name="permisoCont" name="permisoCont" value="<?php echo $row['permisoCont']; ?>"">
                    </div>
                  </div>
           
                 <div class="col-md-12">
                    <div class="form-group">
                        <label for="permiso1">Nota</label>
                        <input type="text" class="form-control" id="permiso1" name="permiso1" name="permiso1" value="<?php echo $row['permiso1']; ?>"">
                    </div>
                </div>
                 
            </div>

           
        </fieldset>
        
        <br>
        <div class="row boton">
             <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success button icon-upload" required> Cargar información</button>
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