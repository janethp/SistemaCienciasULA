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
<br>
<br>

<br>


<br>
<center><big><b>Datos del encargado</b></big>
<br>
<br>
<tr><table border="1" >
<tr>
<th>Cédula</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Usuario</th> 

</tr>
</center>



<?php




	include("conexion.php");	

		

	   $consulta="SELECT * FROM usuarios";


		$resultado=mysql_query($consulta);
		echo mysql_error();
		$num = @mysql_num_rows ($resultado);


		if($num != 0) { 
		while($fila=mysql_fetch_array($resultado)){
      echo "<tr>";
		echo"<center>";    
     		echo "<td>".$fila['cedula']."</td>";		
		echo "<td>".$fila['nombre']."</td>";
		echo "<td>".$fila['apellido']."</td>";	   
		echo "<td>".$fila['user']."</td>"; 
        	
		
	 	
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
<input type="text" name="nombre" style="visibility:hidden"><?php echo "<td>".$fila['password']."</td>"; ?>
</form>

Ingrese el número de cedula de quien desee modificar o eliminar:
<br>
<br>
<form action="" method="post">
<input type="text" name="cedula"  />
<input type="submit" name="modificar" value="modificar"/>
<input type="submit" name="eliminar" value="Eliminar"/>
</form>



<br>
<br>

<?php

$cedula=$_POST['cedula'];

if(isset($_POST['modificar'])){
 echo header ("location:modificarencargado.php?cedula=".$cedula);
}


if(isset($_POST['eliminar'])){
 echo header ("location:eliminarencargado.php?cedula=".$cedula);
}

?>
<br>
<br>
		
		<div class="center_box">
			<div id="menu_tab">
				<ul class="menu">



				</ul>
				
			</div>
</body>
</html>



