<?php include("seguridad.php"); ?> 
<!DOCTYPE HTML>
		<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Laboratorio</title>
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

	<center>

<br>
<br>
<br>
<br>
<br>
<font size="4">		
<?php

include("conexion.php");

 $cedula=$_POST['cedula'];

 $nom=$_POST['nombre'];

 $snom=$_POST['snombre'];

 $ape=$_POST['apellido'];

 $sape=$_POST['sapellido'];

 $sexo=$_POST['sexo'];

 $carrera=$_POST['carrera'];

 $maquina=$_POST['codmaquina'];

 $fecha=$_POST['fecha'];

 $hora=$_POST['hora'];
 
 

 $sql="INSERT INTO estudiantes (cedula, pri_nom, seg_nom, pri_ape, seg_ape, sexo, id_carrera) VALUES ('$cedula','$nom','$snom','$ape','$sape','$sexo','$carrera')";

 $cursor=mysql_query($sql);
 echo mysql_error();
 echo "<br>";
  



 $num=mysql_affected_rows();

 if($num!=0){
	
 	echo"Su registro ha sido insertado correctamente";
	echo "<br>";
	echo "<br>";
	print "<center><img src=images/pulgararriba.jpg withd=100 height=100 alt= title= border=0></center>";
}
else{
	echo "Error de registro";
	echo "<br>";
	echo "<br>";
	print "<center><img src=images/x.png withd=100 height=100 alt= title= border=0></center>";
}

mysql_close();

?>


</font>
</center>
	<div class="news_left">
				<br>
				<br>
				<br>
					<div class="news_box">
						
						<div class="news_content">
						
					
						</div>
					</div>
					<div class="news_box">
							<div id="menu_tab"><center>

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
						<div class="news_content">
					
						</div>
					</div>
				</div>
			</div><!--end of left content-->


			
			<div id="footer">
				<div class="fright">Designed  </div>
					<div class="fleft"></div>
				<div class="fcenter"></div>
			</div>
		</div> <!--end of center box-->
	</div> <!--end of main content-->
</div> <!--end of main container-->
</body>
</html> 
