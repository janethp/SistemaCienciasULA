<?php include("seguridad2.php"); ?> 
<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8"/>
	<meta name="description" content="curso html5 desde 0" />
	<title>Registrar Maquina</title>
	<link href="index.css" rel="stylesheet" type="text/css" />
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

<br>
<br>
<br>
<center><h1>Eliminar Maquina</h1></center>
<form action="eliminarmaq1.php" method="post" onsubmit="return validacion()">
<center>
<table border="0"  >

	<td>Maquina</td><td>  <select name="codmaquina" size="1" style="width:186px">
	<option></option>
	<?php

	 include("conexion.php");

	$consulta_mysql="SELECT * FROM maquina";
	$resultado_consulta_mysql=mysql_query($consulta_mysql);
	echo mysql_error();


	while($registro=mysql_fetch_array($resultado_consulta_mysql)){

?>
	
	<option  value="<?php echo $registro['cod_maquina']?> ">
    	                <?php echo $registro['cod_maquina']; ?>
                   </option> 

    <?php
    }   
    ?>   
	</select>
</table>

<br>
<br>              

<input type="submit" value="ELIMINAR">
</center>

</form>
<br><br><br>

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
				<div class="fright"></div>
					<div class="fleft"></div>
				<div class="fcenter"></div>
			</div>
		</div> <!--end of center box-->
	</div> <!--end of main content-->
</div> <!--end of main container-->
</body>
</html> 
