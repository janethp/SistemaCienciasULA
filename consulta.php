<?php include("seguridad.php"); ?> 
<!DOCTYPE HTML>
		<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Consulta de Usuario</title>
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
<center><big><b>Datos del Usuario</b></big>
<br>
<br>
<tr><table border="1" >
<tr>
<th>Cédula</th>
<th>Nombre</th>
<th>Segundo Nombre</th>
<th>Apellido</th>
<th>Segundo Apellido</th>
<th>Sexo</th>

<th> carrera </th>
</tr>
</center>
<?php




	include("conexion.php");	

		$cedula=$_REQUEST['cedula'];
		$cedula==true;

	   $consulta="SELECT * FROM estudiantes,carrera WHERE estudiantes.cedula='$cedula' AND estudiantes.id_carrera=carrera.id_carrera";


		$resultado=mysql_query($consulta);
		echo mysql_error();
		$num = @mysql_num_rows ($resultado);


		if($num != 0) { 
		while($fila=mysql_fetch_array($resultado)){
      echo "<tr>";
		echo"<center>";    
     		echo "<td>".$fila['cedula']."</td>";		
		echo "<td>".$fila['pri_nom']."</td>";
		echo "<td>".$fila['seg_nom']."</td>";	   
		echo "<td>".$fila['pri_ape']."</td>";         
 		echo "<td>".$fila['seg_ape']."</td>"; 
		echo "<td>".$fila['sexo']."</td>"; 
	
		echo "<td>".$fila['nom_carrera']."</td>";
		
	 	
		echo"</center>";
		
	   echo "</tr>";
		}

       mysql_free_result($resultado);
	
 	}else {
        
  echo @header("location:consulta2.php");;


}

 
?>
</table>

<br>

<br>
<form action="" method="post">

<input type="submit" name="modificar" value="Modificar"/>

<input type="submit" name="Maquina" value="Asignar Maquina"/>

<input type="submit" name="eliminar" value="Eliminar Registro"/>

</form>

<?php

if(isset($_POST['modificar'])){
 echo header ("location:modificar.php?cedula=".$cedula);
}

if(isset($_POST['Maquina'])){
 echo header ("location:tiempo.php?cedula=".$cedula);
}

if(isset($_POST['eliminar'])){
 echo header ("location:confirmacion.php?cedula=".$cedula);
}

?>


<br>
<br>
<br>
<center><big><b>Historial de Entrada al Laboratorio</b></big></caption>
<br>
<table border="1" >
<br>
<tr>
<th>Maquina</th>
<th>Fecha</th>
<th>Hora</th>
</tr>
</center>
<?php

include("conexion.php");
		
		$cedula=$_REQUEST['cedula'];
			
	   $consulta="SELECT * FROM tiempo WHERE tiempo.cedula='$cedula'";
	
		$resultado=mysql_query($consulta);
		echo mysql_error();

      while($fila=mysql_fetch_array($resultado)){
      echo "<tr>";	 
		echo "<td>".$fila['cod_maquina']."</td>";
		echo "<td>".$fila['fecha']."</td>";
		echo "<td>".$fila['hora']."</td>";
		
	   echo "</tr>";


		}
         mysql_free_result($resultado);
			mysql_close(); 
?>
</table>
<br>
<br>
<form>
<center><input type="button" value="imprimir" onClick="window.print()"></center>
</form>

<div class="news_left">
				<br>
				<br>
				<br>

						
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
