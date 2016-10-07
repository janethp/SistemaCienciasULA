<!DOCTYPE HTML>
		<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Laboratorio</title>
		</head>
<body>



<?php
//Reanudamos la sesión 
@session_start(); 
//Validamos si existe realmente una sesión activa o no 
if($_SESSION["jerar"] != "1")
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
echo"<script language='javascript'>alert('Disculpe, se necesita ser administrador para acceder a este sitio') </script>";  
header("refresh:0.1 ;url=/servidor/inde.php");
  exit(); 
} 
?>

</body>
</html>
