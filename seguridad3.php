<?php 

include ("confirmacion.php");

//Reanudamos la sesión 
@session_start(); 
$cedula=$_GET['cedula'];
//Validamos si existe realmente una sesión activa o no 
if($_SESSION["jerar"] == "1")

{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 

header('Location: eliminar.php?cedula='.$cedula); 
echo "hizo su registro";
 
} else { 
echo "error";
}
?>
