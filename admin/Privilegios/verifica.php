<?php
session_start();
$servidor= 'localhost';
$username= 'root';
$password= ''; 
$db_name= 'enova_bd'; 
$tbl_name= 'user_admin'; 

$con = mysqli_connect($servidor, $username, $password, $db_name)or die("cannot connect"); 
//($db_name,$con)or die("cannot select DB");
if(mysqli_connect_errno())
{
	prinf("error", mysqli_connect_errno());
	exit();
}

$myusername=$_POST['login']; 
$mypassword=$_POST['pass']; 



$myusername = stripslashes($myusername);
$mypassword = stripslashes(sha1($mypassword));
//$myusername = mysqli_real_escape_string($con,$myusername);
//$mypassword = mysqli_real_escape_string($con,$mypassword);

$result =	mysqli_query($con,"SELECT * FROM $tbl_name WHERE login='$myusername' and password='$mypassword' and estado = 1");
//$result=mysqli_query($sql);

$count=mysqli_num_rows($result);

if($count==1){
	$row = mysqli_fetch_array($result);	
   
    $_SESSION["usuario"]= $myusername;
    $_SESSION["password"]= $mypassword;   
 
    header("location:admin.php");
}
else {
	 $valor = 1;
	 header("location:index.php?return_to_pass=$valor");
}


?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>.: Panel de Administración :.</title>
</head>
</head>
<body>
</body>
</html>