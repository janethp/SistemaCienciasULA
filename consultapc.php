<?php include("seguridad.php"); ?> 
<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
			<title>Consulta de PC</title>

	
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
<br>
<br>
<center><big><caption style='font-size:10pt'> <b>Control de la PC</b></caption></big>
<br>
<br>
<tr><table border="1" >
<tr>
<th>Maquina</th>
<th>fecha</th>
<th>hora</th>
<th> cedula</th>
</tr>
</center>
<?php

	include("conexion.php");

	$maquina=$_REQUEST['codmaquina'];
	
  $consulta="SELECT * FROM tiempo WHERE tiempo.cod_maquina='$maquina'";

 
		$resultado=mysql_query($consulta);
		echo mysql_error();


	 $num=mysql_affected_rows($resultado);
         if($num != 1) { 
         while($fila=mysql_fetch_array($resultado)){
      echo "<tr>";
		echo"<center>";  
		echo "<td>".$fila['cod_maquina']."</td>";    
     		echo "<td>".$fila['fecha']."</td>";
		echo "<td>".$fila['hora']."</td>";
		echo "<td>".$fila['cedula']."</td>";$c=$fila['cedula'];
		echo"</center>";
		echo "</tr>";	
		}
       mysql_free_result($resultado);

	}else {
        
  echo @header("location:consultapc2.php");


}

?>
</table>



				<br><br>
				<br>
				<br>
    <form>
<center><input type="button" value="imprimir" onClick="window.print()"></center>
</form>
<br>
				<br>
				<br>




</body>
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
