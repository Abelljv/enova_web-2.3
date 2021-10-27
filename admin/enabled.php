<? 
session_start();
header('Content-Type: text/html; charset=UTF-8');
if(!isset($_SESSION["usuario"])){
   header("location:index.php");
}

?>
  <!-- Abell && favian -->