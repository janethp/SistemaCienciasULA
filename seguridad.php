<?php 
//Reanudamos la sesión 
@session_start(); 
//Validamos si existe realmente una sesión activa o no 
if($_SESSION["jerar"] != "1")
if($_SESSION["jerar"] != "2")
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: index.php"); 
  exit(); 
} 
?>
