<?php include("seguridad.php"); ?> 
<!DOCTYPE HTML>
<head>


	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	
	<title>Laboratorio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script languaje="javascript" src="js/validar2.js"></script>
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
<?php
include("conexion.php");

$cedula=$_GET['cedula'];

 $nom=$_POST['nombre'];

 $snom=$_POST['snombre'];

 $ape=$_POST['apellido'];

 $sape=$_POST['sapellido'];

 $sexo=$_POST['sexo'];

 $carrera=$_POST['carrera'];
  
 $consulta="SELECT * FROM estudiantes WHERE cedula='$cedula'";
		
		$resultado=mysql_query($consulta);
		echo mysql_error();
			
	  while($resultad=mysql_fetch_array($resultado)){
	  	$resultadaux['cedula']=$resultad['cedula'];
 		$resultadaux['nombre']=$resultad['pri_nom'];
		$resultadaux['snombre']=$resultad['seg_nom'];
		$resultadaux['apellido']=$resultad['pri_ape'];
		$resultadaux['sapellido']=$resultad['seg_ape'];
	  	$resultadaux['sexo']=$resultad['sexo'];
	   	$resultadaux['carrera']=$resultad['id_carrera'];
  	
		}
			
         mysql_free_result($resultado);
			mysql_close(); 
?>
<center> <b> <h3>MODIFICAR DATOS DEL ESTUDIANTE</h3></b></center>
	  

<form action="modificar2.php" method="post"  onsubmit="return validacion()">
<table align="center">
<tr>
<td>Cedula</td> <td><input type="text" name="cedula" id="cedula" value="<?php echo $resultadaux['cedula'] ?>"> </td>
</tr>
<tr>
<td>Primer Nombre</td> <td> <input type="text" name="nombre" id="nombre" value="<?php echo $resultadaux['nombre'] ?>"></td>
</tr>
<tr>
<td>Segundo Nombre</td> <td> <input type="text" name="snombre" value="<?php echo $resultadaux['snombre'] ?>"></td>
</tr>
<tr>
<td>Primer Apellido</td> <td><input type="text" name="apellido" id="apellido" value="<?php echo $resultadaux['apellido'] ?>"> </td>
</tr>
<tr>
<td>Segundo Apellido</td> <td><input type="text" name="sapellido" value="<?php echo $resultadaux['sapellido'] ?>"> </td>
</tr>
<tr>

<td>Sexo</td> <td> Femenino <input type="radio" name="sexo" value="femenino" />
              Masculino <input type="radio" name="sexo" value="masculino" /></td>
<tr>
<td>Carrera </td> <td><select name="carrera" onchange="salta(this.form)" size="1" style="width:186px" id="carrera">
	<option ></option> 
<?php

	 include("conexion.php");

	$consulta_mysql="SELECT * FROM carrera";
	$resultado_consulta_mysql=mysql_query($consulta_mysql);
	echo mysql_error();


	while($registro=mysql_fetch_array($resultado_consulta_mysql)){
		echo $registro['nom_carrera']."<br>";
		
		echo $registro['id_carrera'];
?>
	
	<option  value="<?php	echo $registro['id_carrera'];?> ">

    	                <?php echo $registro['nom_carrera']; ?>
                   </option> 

    <?php
    }   
    ?>   

	</select>
</tr>

<?php
echo "<input type='hidden' name='cedula' value='$cedula'>"
 ?>      
</table>
<br>
<br>              
<center>
<input type="submit" value="MODIFICAR">
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
					<div class="fleft"> </div>
				<div class="fcenter"></div>
			</div>
		</div> <!--end of center box-->
	</div> <!--end of main content-->
</div> <!--end of main container-->
</body>
</html> 
