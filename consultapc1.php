<?php include("seguridad.php"); ?> 
<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script languaje="javascript" src="js/validar2.js"></script>
			<title>Consulta de PC</title>

	
	<title>Consulta PC</title>
	<link rel="stylesheet" type="text/css" href="style.css">

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
 <center> <b><h3> CONSULTA DE LA PC </h3></b> </center>
 <br>
<center>
<form action="consultapc.php" onsubmit="return validacion()">
Seleccione el Computador a consultar  <select name="codmaquina" id="codmaquina" onchange="salta(this.form)" size="1" style="width:186px">
<option></option>
		<?php
	 include("conexion.php");

	$consulta_mysql="SELECT * FROM maquina";
	$resultado_consulta_mysql=mysql_query($consulta_mysql);
	echo mysql_error();


	while($row=mysql_fetch_array($resultado_consulta_mysql)){

?>
	
	 <option value=" <?php echo $row['cod_maquina'] ?> " >
        <?php echo $row['cod_maquina']; ?>
        </option>

    <?php
    }   
    ?>  
</select>
				<br>
				<br>
				<br>
<input type="submit" value="Enviar">
<input type="reset" value="Eliminar">
<br>
				<br>
				<br>
				<br>
				<br>
</form>
</center>

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
				<div class="fright"> </div>
					<div class="fleft"></div>
				<div class="fcenter"></div>
			</div>
		</div> <!--end of center box-->
	</div> <!--end of main content-->
</div> <!--end of main container-->
</body>
</html>
</body>

</html>
