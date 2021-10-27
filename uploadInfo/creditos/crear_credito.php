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
/*$row=mysqli_fetch_array($result,MYSQLI_ASSOC);*/

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

    
    ?>
    
    <div class="container">
            <form  method="POST" enctype="multipart/form-data" action="../../modulos/procesos/cargarInfoCredito.php">
                <h3>INGRESO DE INFORMACIÓN PARA SOLICITUD DE CREDITO.</h3>

        <fieldset class="scheduler-border">
          <legend class="scheduler-border">Información del credito:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor">Valor Del Solicitado:</label>
                        <input type="text" class="form-control" id="valor" name="valor" required oninvalid="setCustomValidity('Ingrese Valor del Credito')" oninput="setCustomValidity('')">
                    </div>
                </div>

                 <div class="col-md-4">
                      <div class="form-group">
                        <label for="categoria">Articulo Para el Credito.</label>
                            <select class="form-control" id="articulo" name="articulo" required oninvalid="setCustomValidity('Ingrese el Articulo')"oninput="setCustomValidity('')">>
                              <option>Seleccione el Articulo.</option>
                              <?php while($row1 = $resultado3->fetch_assoc()) { ?>
                              <option value="<?php echo $row1['nombre']; ?>"><?php echo $row1['id_art']; ?></option>
                              <?php } ?>
                            </select>
                    </div>
                  </div>
           
                 <div class="col-md-4">
                     <div class="form-group">
                        <label for="fecha">Fecha de solicitud del credito:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required oninvalid="setCustomValidity('Ingrese la Fechas del Credito')"oninput="setCustomValidity('')">
                    </div>
                 </div> 
                 </div>


                 <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="descripcion">Descripción del Articulo</label>
                        <textarea  class="form-control border-input" name="descripcion" id="descripcion" cols="100" rows="5" required oninvalid="setCustomValidity('Ingrese la Descripcion del Articulo')" oninput="setCustomValidity('')"></textarea>
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
                        <input type="text" class="form-control" id="nombre" name="nombre" required  oninvalid="setCustomValidity('Ingrese Nombre del Interesado')"oninput="setCustomValidity('')">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidoc">Apellidos:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required oninvalid="setCustomValidity('Ingrese Apellido del Interesado')"oninput="setCustomValidity('')">
                    </div>
                </div>
           
                 <div class="col-md-4">
                     <div class="form-group">
                        <label for="cedulac">Cedula:</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" required oninvalid="setCustomValidity('Ingrese Cedula del Interesado')"oninput="setCustomValidity('')">
                    </div>
                 </div>

                 
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccion">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required oninvalid="setCustomValidity('Ingrese Direccion de Cliente')"oninput="setCustomValidity('')">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefono">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required oninvalid="setCustomValidity('Ingrese Telefono del Cliente')"oninput="setCustomValidity('')">
                    </div>
                </div>

                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="cargo">Personas a Cargo.</label>
                            <select class="form-control" id="cargo" name="cargo" required oninvalid="setCustomValidity('Ingrese Personas a su Cargo')"oninput="setCustomValidity('')">
                              <option>Seleccione las personas a cargo.</option>
                              <?php while($row8 = $resultado1->fetch_assoc()) { ?>
                              <option value="<?php echo $row8['nombre']; ?>"><?php echo $row8['id_c']; ?></option>
                              <?php } ?>
                            </select>
                    </div>
                  </div>
                     <div class="col-md-4">
                      <div class="form-group">
                        <label for="vivienda">Tipo de Vivienda.</label>
                            <select class="form-control" id="vivienda" name="vivienda" required oninvalid="setCustomValidity('Ingrese el tipo de Vivienda')"oninput="setCustomValidity('')">
                              <option>Seleccione el tipo de vivienda.</option>
                              <?php while($row7 = $resultado2->fetch_assoc()) { ?>
                              <option value="<?php echo $row7['nombre']; ?>"><?php echo $row7['id_v']; ?></option>
                              <?php } ?>
                            </select>
                    </div>
                  </div>
                   
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="fpago">Forma de Pago.</label>
                            <select class="form-control" id="fpago" name="fpago" required oninvalid="setCustomValidity('Ingrese forma de Pago')"oninput="setCustomValidity('')">
                              <option>Seleccione el pago.</option>
                              <?php while($row2 = $resultado->fetch_assoc()) { ?>
                              <option value="<?php echo $row2['nombre']; ?>"><?php echo $row2['id_pa']; ?></option>
                              <?php } ?>
                            </select>
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
                        <input type="text" class="form-control" id="nombref" name="nombref" required  oninvalid="setCustomValidity('Ingrese Nombres de la Referencia Familiar')"oninput="setCustomValidity('')">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidof">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidof" name="apellidof" required oninvalid="setCustomValidity('Ingrese Apellidos de la Referencia Familiar')"oninput="setCustomValidity('')">
                    </div>
                </div> 
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccionf">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccionf" name="direccionf" required oninvalid="setCustomValidity('Ingrese Direccion de la Referencia Familiar')"oninput="setCustomValidity('')">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonof">Telefono:</label>
                        <input type="text" class="form-control" id="telefonof" name="telefonof" required oninvalid="setCustomValidity('Ingrese Telefono de la Referencia Familiar')"oninput="setCustomValidity('')">
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
                        <input type="text" class="form-control" id="nombrep" name="nombrep" required  oninvalid="setCustomValidity('Ingrese Nombre de la Referencia Personal')"oninput="setCustomValidity('')">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidop">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidop" name="apellidop" required oninvalid="setCustomValidity('Ingrese Apellido de la Referencia Personal')"oninput="setCustomValidity('')">
                    </div>
                </div>   
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccionp">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccionp" name="direccionp" required oninvalid="setCustomValidity('Ingrese Direccion de la Referencia Personal')"oninput="setCustomValidity('')">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonop">Telefono:</label>
                        <input type="text" class="form-control" id="telefonop" name="telefonop" required oninvalid="setCustomValidity('Ingrese Telefono de la Referencia Personal')"oninput="setCustomValidity('')">
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
                        <input type="text" class="form-control" id="nombrec" name="nombrec" required  oninvalid="setCustomValidity('Ingrese Nombre del Codeudor')"oninput="setCustomValidity('')">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidoc">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidoc" name="apellidoc" required oninvalid="setCustomValidity('Ingrese Apellido del Codeudor')"oninput="setCustomValidity('')">
                    </div>
                </div>
           
                 <div class="col-md-4">
                     <div class="form-group">
                        <label for="cedulac">Cedula:</label>
                        <input type="text" class="form-control" id="cedulac" name="cedulac" required oninvalid="setCustomValidity('Ingrese Cedula del Codeudor')"oninput="setCustomValidity('')">
                    </div>
                 </div>

                 
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccionc">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccionc" name="direccionc" required oninvalid="setCustomValidity('Ingrese Direccion del Codeudor')"oninput="setCustomValidity('')">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonoc">Telefono:</label>
                        <input type="text" class="form-control" id="telefonoc" name="telefonoc" required oninvalid="setCustomValidity('Ingrese El Telefono del Codeudor')"oninput="setCustomValidity('')">
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
                        <input type="text" class="form-control" id="nombrecf" name="nombrecf" required  oninvalid="setCustomValidity('Ingrese Nombre de la Referencia Familiar')"oninput="setCustomValidity('')">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidocf">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidoc" name="apellidocf" required oninvalid="setCustomValidity('Ingrese Apellido de la Referencia Familiar')"oninput="setCustomValidity('')">
                    </div>
                </div>    
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccioncf">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccioncf" name="direccioncf" required oninvalid="setCustomValidity('Ingrese Direccion de la Referencia Familiar')"oninput="setCustomValidity('')">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonocf">Telefono:</label>
                        <input type="text" class="form-control" id="telefonocf" name="telefonocf" required oninvalid="setCustomValidity('Ingrese Telefono de la Referencia Familiar')"oninput="setCustomValidity('')">
                    </div>
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
                        <input type="text" class="form-control" id="nombrecp" name="nombrecp" required  oninvalid="setCustomValidity('Ingrese Nombre de la Referencia Personal')"oninput="setCustomValidity('')">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellidocp">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidocp" name="apellidocp" required oninvalid="setCustomValidity('Ingrese Apellido de la Referencia Personal')"oninput="setCustomValidity('')">
                    </div>
                </div>   
            </div>
            <div class="row">
              <div class="col-md-4">
                      <div class="form-group">
                        <label for="direccioncp">Direccion de Recidencia:</label>
                        <input type="text" class="form-control" id="direccioncp" name="direccioncp" required oninvalid="setCustomValidity('Ingrese Direccion de la Referencia Personal')"oninput="setCustomValidity('')">
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefonocp">Telefono:</label>
                        <input type="text" class="form-control" id="telefonocp" name="telefonocp" required oninvalid="setCustomValidity('Ingrese Telefono de la Referencia Personal')"oninput="setCustomValidity('')">
                    </div>
                </div>
                 
            </div>

           
        </fieldset>
         <fieldset class="scheduler-border">
               </br>
               <div class="row">
               <div class="col-md-6">Firma del Solicitante:________________________________________</div>
               <div class="col-md-6">Cedula:___________________________________________</div>
               </div>
                </br>          
        </fieldset>
        <fieldset class="scheduler-border">
             <legend class="scheduler-border"> Para Uso Exclusivo Del Fondo De La Empres:</legend>
            <div class="row">
                        Declaro que toda la información declarada en este formulario es totalmente trasparente. Así que doy previa autorización a la empresa ENOVA TECNOLOGIA. De poder consultar la información en centrales de riesgos. 
                </div>                 
        </fieldset>
         <fieldset class="scheduler-border">
            <div align="center">
              <legend class="scheduler-border" >FIRMAS DE APROBACION COMITE DE CREDITO</legend>
               </br>
               </br>
               <div class="row">
               <div class="col-md-6">
               <div class="row">____________________________________________</div>
               <div class="row">Supervisor de Ventas PAP</div>
               </div>
               <div class="col-md-6">
               <div class="row">_____________________________________________</div>
               <div class="row">Secretario de Ventas</div>
               </div>
               </div> 
               </br>
               <div class="row">
               <div class="col-md-6">
               <div class="row">______________________________________________</div>
               <div class="row">Gerente General</div>
               </div>
               <div class="col-md-6">
               <div class="row">_______________________________________________</div>
               <div class="row">Cartera</div>
               </div>
               </div>
               </br>
               </br>
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