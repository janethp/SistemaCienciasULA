<?php 
// datos para la coneccion a mysql 
define('DB_SERVER','localhost'); 
define('DB_NAME','laboratorio'); 
define('DB_USER',''); 
define('DB_PASS',''); 

$con=mysql_connect("localhost","root","");
mysql_select_db(laboratorio,$con); 
?>

