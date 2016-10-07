<?php
 
$conexion=mysql_connect("localhost","root","");
if (!$conexion){
	echo "error de conexion";
   echo "<br>";
   echo mysql_error();
   echo "<br>";
   
}

   
mysql_select_db("laboratorio");

 echo mysql_error();
?>
