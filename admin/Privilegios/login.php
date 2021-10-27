<? 
session_start();
if(!isset($_SESSION["usuario"])){
   header("location:index.php");
   mysqli_query ("SET NAMES 'utf8'");
}
?>