<?php
session_start();

if (isset($_SESSION["logueado"]) && $_SESSION["logueado"] == TRUE) {
  # code...
} else {
  echo "Esta pagina es solo para usuarios registrados.<br>";
  header("Location: ../../user_admin/");
}

include '../../modulos/conexion/conexion.php';     
$res = 'SELECT * FROM user_admin';
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


<body>
    
<div class="container">
  <form  method="POST" enctype="multipart/form-data" action="../../modulos/procesos/cargarInfUsuario.php">
  <h3>INGRESO DE INFORMACIÓN DE USUARIO.</h3>

    <fieldset class="scheduler-border" aling="center" >
          <legend class="scheduler-border">Información del Usuario:</legend>
            
<form>
  <br>
  <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>" >
                        <label for="NombredeUsuario"></label>
                        <input type="text" class="form-control" id="NombredeUsuario" name="NombredeUsuario" placeholder="Nombre de Usuario"value="<?php echo $row['NombredeUsuario']; ?>" required="">
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="form-group">
                        <label for="ApellidodeUsuario"></label>
                        <input type="text" class="form-control" id="ApellidodeUsuario" name="ApellidodeUsuario" placeholder="Apellido de Usuario" value="<?php echo $row['ApellidodeUsuario']; ?>" required="">
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label for="NumerodeCedula"></label>
                        <input type="text" class="form-control" id="NumerodeCedula" name="NumerodeCedula" placeholder="Numero  de Cedula"value="<?php echo $row['NumerodeCedula']; ?>" required="">
                    </div>
                </div>
              </div>
            </br>
              <br>
  <div class="row">
                <div class="col-md-4">
                     <div class="form-group">
                        <label for="CorreoElectronico"></label>
                        <input type="text" class="form-control" id="CorreoElectronico" name="CorreoElectronico" placeholder="Correo Electronico" value="<?php echo $row['CorreoElectronico']; ?>" required="">
                     </div>
                </div>
                <div class="col-md-4">
                     <div class="form-group">
                        <label for="ContraseñadeUsuario"></label>
                        <input type="text" class="form-control" id="ContraseñadeUsuario" name="ContraseñadeUsuario" placeholder="Contraseña de Usuario" value="<?php echo $row['ContraseñadeUsuario']; ?>" required="">
                     </div>
                </div>
                <div class="col-md-4">
                     <div class="form-group">
                        <label for="CiudaddeUsuario"></label>
                        <input type="text" class="form-control" id="CiudaddeUsuario" name="CiudaddeUsuario" placeholder="Ciudad de Usuario" value="<?php echo $row['CiudaddeUsuario']; ?>" required="">
                     </div>
                </div>
  </div>
              </br>
   <!--- <div class="form-row">
  <div class="col">
  <select class="custom-select" id="EstadodeUsuario" name="EstadodeUsuario">
  <option selected>Estado del Usuario</option>
  <option value="1">Activo</option>
  </select>
   </div>
     </div>
   </br>-->

    
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


    <!-- Codigo JS -->
    <script src="../../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/slider_home/slider_home.js" type="text/javascript"></script>
</body>

</html>