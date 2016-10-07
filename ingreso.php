<html>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>

<body>
<?php
include("conexion.php");

$cedula=$_GET['cedula'];
$consulta="SELECT cedula FROM estudiantes WHERE Cedula='$cedula'";
$resultado=mysql_query($consulta);
echo mysql_error();

 $num=mysql_affected_rows();
 if($num!=0){
   header('Location: tiempo.php?cedula='.$cedula);
            }
            else{
	          header('Location: estudiante1.php?cedula='.$cedula);
                }

mysql_free_result($resultado);
mysql_close(); 
?>
			
