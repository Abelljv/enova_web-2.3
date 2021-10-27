<?php

session_start();

if(isset($_POST["enviar"])) {
  require('../modulos/conexion/conexion.php');

  $loginNombre = $_POST["login"];
  $loginPassword = md5($_POST["password"]);

  $consulta = "SELECT * FROM user_admin WHERE login='$loginNombre' AND password='$loginPassword'";

  if($resultado = $mysqli->query($consulta)) {

    while($row = $resultado->fetch_array()) { 
      $userok = $row["login"];
      $passok = $row["password"];
    }
    $resultado->close();
  }
  $mysqli->close();

  if(isset($loginNombre) && isset($loginPassword)) {

    if($loginNombre == $userok && $loginPassword == $passok) {
      $_SESSION["logueado"] = TRUE;
      $_SESSION["usuario"]= $userok;
      header("Location: ../uploadInfo/index2.php");
      } else {
          Header("Location: index.php?error=inc");
    }
  }
} else {
  header("Location: index.php");
}

?>
  <!-- Abell && favian -->