<?php include("seguridad.php"); ?> 
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Principal </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script languaje="javascript" src="js/validar.js"></script>
		</head>
<body>
<div id="main_container">
	<div class="parrot"></div>
	<div class="main_content">
		<div id="header">
		<center> <div class="logo"><a href="#"><img src="images/ci.png" withd="250" height="100" alt="" title="" border="0"></a></div></center>
		
		</div>
		<div class="top_center_box"></div>
		<div class="center_box">
			<div id="menu_tab">
<ul class="menu">
					<li><a href="inde.php" class="nav">Principal</a></li>
					<li class="divider"></li>
					<li><a href="estudiante1.php" class="nav">Registro de Usuario</a></li>
					<li class="divider"></li>
					<li><a href="tiempo.php" class="nav">Asignar Maquina</a></li>
					<li class="divider"></li>
					<li><a href="consultaconsulta.php" class="nav">Consulta de Usuario</a></li>
					<li class="divider"></li>
					<li><a href="logout.php" class="nav">Salir <font color='red'> <i><?php echo $_SESSION['nom']?></font></i></a></li>
					<li class="divider"></li>

				</ul>
				
			</div>

<font size='4'>
<?php

include("conexion.php");

 $cmaquina=$_POST['codmaquina'];

 $cedula=$_POST['cedula'];

 $fecha=$_POST['fecha'];

 $hora=$_POST['hora'];

	$sql="INSERT INTO tiempo (cod_maquina, cedula , fecha, hora) VALUES('$cmaquina','$cedula','$fecha','$hora')";

 	$cursor=mysql_query($sql);
 	echo mysql_error();
 	echo "<br>";
  

	$num=mysql_affected_rows();
 		if($num!=0){
			echo "<br>";
			echo "<br>";
			echo "<br>";
 			echo "<center>"."Se ha asignado a la maquina: ".$cmaquina."</center>";
			echo "<br>";
			echo "<br>";
			print "<center><img src=images/pulgararriba.jpg withd=100 height=100 alt= title= border=0></center>";
}
			else{
			echo "<br>";
			echo "<br>";
			echo "<center>Error de inserción</center>";
			print "<center><img src=images/x.png withd=100 height=100 alt= title= border=0></center>";
			}

			mysql_close();

?>  
</font>
<br>

<div class="news_left">
				<br>
				<br>
				<br>
				
				<div id="menu_tab">
				<ul class="menu">

					<li><a href="consultapc1.php" class="nav"> Consulta de PC </a></li>
					<li class="divider"></li>
					<li><a href="consultaf1.php" class="nav">Consulta de Fecha</a></li>
					<li class="divider"></li>
					<li><a href="registromaq.php" class="nav">Registrar Maquina</a></li>
					<li class="divider"></li>
					<li><a href="eliminarmaq.php" class="nav">Eliminar Maquina</a></li>
					<li class="divider"></li>
					<li><a href="consultarencargado2.php" class="nav">Encargados</a></li>
					<li class="divider"></li>
					
				</ul>
			</div>
			
			<div id="footer">
				<div class="fright"> </div>
					<div class="fleft"></div>
				<div class="fcenter"></div>
			</div>
		</div> <!--end of center box-->
	</div> <!--end of main content-->
</div> <!--end of main container-->
</body>
</html>
