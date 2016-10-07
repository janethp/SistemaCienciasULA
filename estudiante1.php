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



<?php

 echo "<br>";

 $cedula=$_GET['cedula'];



?>



<form method='post' action="estudiante.php"  onsubmit="return validacion()">

<center>
<table border="0"  >
	<tr>
	<h1>Registro de Usuario</h1>
	</tr>
	<tr>
	<td>Cedula*</td>
	<td> <input type ="text" name="cedula" value="<?php echo $cedula ?>"  id="cedula"> </td>
	</tr>
	<tr>
	<td>Primer Nombre*</td><td> <input type ="text" name="nombre" id="nombre" ></td>
	</tr>
	<tr>
	<td>Segundo Nombre</td><td> <input type ="text" name="snombre"></td>
	</tr>
	<tr>
	<td> Primer Apellido*</td><td>   <input type ="text" name="apellido" id="apellido"> </td>
	</tr>
	<tr>
	<td> Segundo Apellido</td><td>   <input type ="text" name="sapellido"> </td>
	</tr>
	<tr>
	<td>Sexo </td>   <td><input type="radio" name="sexo" value="femenino" />    Femenino 
                            <input type="radio" name="sexo" value="masculino" />Masculino </td> 
	</tr>
	<td>Carrera* </td> <td>  <select name="carrera" id="carrera" onchange="salta(this.form)" size="1" style="width:186px">
	<option></option>

<?php

	 include("conexion.php");

	$consulta_mysql="SELECT * FROM carrera";
	$resultado_consulta_mysql=mysql_query($consulta_mysql);
	echo mysql_error();


	while($registro=mysql_fetch_array($resultado_consulta_mysql)){
		echo $registro['nom_carrera']."<br>";
		echo $registro['id_carrera'];

?>
	
	<option value="<?php echo $registro['id_carrera']?>"><?php echo $registro['nom_carrera'];?></option> 

    <?php
    }   
    ?>   

	</select>
	<tr>
	

</table>
<br>
<input type="submit" name="enviar" value="ENVIAR">
<input type="reset" value="ELIMINAR">  
      
<br>
<br>
</center>
</form>
	
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
				<div class="fright"> </div>
					<div class="fleft"></div>
				<div class="fcenter"></div>
			</div>
		</div> <!--end of center box-->
	</div> <!--end of main content-->
</div> <!--end of main container-->
</body>
</html>    
