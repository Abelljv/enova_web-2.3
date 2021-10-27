
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
    <!-- llamando a los iconos -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontello.css">
    <!--Estilo formulario cargue de informacion-->
    <link rel="stylesheet" href="../assets//css/login.css">
    <!--Fuente google-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet"> 
</head>

<body>

    <form class="form-signin" action="validar.php" method="post">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal text-center">Ingrese su Cuenta</h1><br>
      <label>Correo Electronico</label>
      <input type="correo" id="inputcorreo" class="form-control" name="login" placeholder="Correo Electronico" required autofocus><br>
      <label>Contraseña</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Contraseña" required>
      <?php

      @$inco = $_GET['error'];

      if($inco == "inc") {
        echo '<hr>';
        echo '<div class="alert alert-danger" role="alert">
          <strong>Error!</strong> Usuario y/o Contraseña erroneos. Intentelo de nuevo.
        </div>';
      }
      ?>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar" style="margin-top: 25px;">Entrar</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>



    <!-- Codigo JS -->
    <script src="../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/slider_home/slider_home.js" type="text/javascript"></script>
</body>
  <!-- Abell && favian -->
</html>