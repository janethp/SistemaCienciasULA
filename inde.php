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
			<div class="middle_box">
				<div class="middle_box_text_content">
					<div class="middle_box_title"></div>
					<p class="middle_text"> </p>
				</div>
			</div>
			<div class="left_content"><div class="inner_copy"></div>
				<div class="calendar_box">
					<div class="calendar_box_content">




						<h1>Bienvenido al Sistema</h1>

 <center> <b><h3> CONSULTA DEL USUARIO </h3></b> </center>
<center>
<form action="ingreso.php" onsubmit="return validacion()">
Ingrese el número de cédula
<br>
<br>
 <input type="text" name="cedula" id="cedula" size="10" value="V">
<br>
<br>
<input type="submit" value="Enviar">
<input type="reset" value="Eliminar">

</form>



					<p><br/><br/>
						</p>
					</div>
				</div>
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
					
				</ul>
				
			</div>
						<div class="news_content">
					
						</div>
					</div>
				</div>
			</div><!--end of left content-->


			
			
			</div>
		</div> <!--end of center box-->
	</div> <!--end of main content-->
</div> <!--end of main container-->
<div id="footer">

				<div class="fright">Designed by Janeth Perez and Luis Maldonado<br> 
						<center>Janeth.perez17@gmail.com<br>
						luis5maldonado@hotmail.com</center>					
</div>
					<div class="fleft"> </div>
				<div class="fcenter"></div>
</body>
</html>
