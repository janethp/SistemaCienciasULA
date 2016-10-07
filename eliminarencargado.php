<?php include("seguridad2.php"); ?>
<!DOCTYPE HTML>
		<head>
	<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="style.css">



	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Inicio de Sesion</title>
		</head>
<body>
<center>
<div id="header">
		<center> <div class="logo"><a href="#"><img src="images/ci.png" withd="250" height="100" alt="" title="" border="0"></a></div></center>
		
		</div>
		

		<div class="top_center_box"></div>
		<div class="center_box">
			<div id="menu_tab">
				<ul class="menu">
				<li><a href="inde.php" class="nav"> Página Principal</a></li>
					<li class="divider"></li>
					<li><a href="consultarencargado2.php" class="nav"> Consultar Encargado</a></li>
					<li class="divider"></li>
					<li><a href="registrousuario.php" class="nav"> Registrar Encargado</a></li>
					<li class="divider"></li>



				</ul>
				
			</div>
<br><br><br>
<br><br><br>	
<font size="4">	
<?php
include("conexion.php");

$cedula=$_GET['cedula'];
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Delete From estudiantes Where estudiantes.cedula='$cedula'";
mysql_query($sSQL);




 $num=mysql_affected_rows();
 if($num!=1){
 	echo "<center>"."Su registro ha sido eliminado correctamente"."</center>";
	print "<center><img src=images/pulgararriba.jpg withd=100 height=100 alt= title= border=0></center>";
}
else{
	echo "<center>"."Error de eliminación"."</center>";
	print "<center><img src=images/x.png withd=100 height=100 alt= title= border=0></center>";
}



$sSQL="Delete From usuarios Where usuarios.cedula='$cedula'";
mysql_query($sSQL);
mysql_close();

?>
</font>
<br><br><br>

		<div class="center_box">
			<div id="menu_tab">
				<ul class="menu">



				</ul>
				
			</div>
</body>
</html>



