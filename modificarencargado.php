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
<?php
include("conexion.php");

$cedula=$_REQUEST['cedula'];

 $nom=$_POST['nombre'];

 $ape=$_POST['apellido'];

 $usuario=$_POST['user'];

 $clave=$_POST['password'];
  
 $consulta="SELECT * FROM usuarios WHERE cedula='$cedula'";
		
		$resultado=mysql_query($consulta);
		echo mysql_error();
			
	  while($resultad=mysql_fetch_array($resultado)){
	  	$resultadaux['cedula']=$resultad['cedula'];
 		$resultadaux['nombre']=$resultad['nombre'];
		$resultadaux['apellido']=$resultad['apellido'];
	  	$resultadaux['user']=$resultad['user'];
	   	$resultadaux['password']=$resultad['password'];
  	
		}
			
         mysql_free_result($resultado);
			mysql_close(); 
?>
<center> <b> <h3>MODIFICAR DATOS DEL ESTUDIANTE</h3></b></center>
	  
<form method='post' action="modificarencargado2.php"  onsubmit="return validacion()">
<center>
<table border="4"  >
	<tr>
	<h3>Registro de nuevo encargado</h3>
	</tr>
	<tr>
	<td>Cedula* </td>
	<td> <input type ="text" name="cedula" id="cedula"  value="<?php echo $resultadaux['cedula'] ?>"> </td>
	</tr>
	<tr>
	<td>Nombre*</td><td> <input type ="text" name="nombre" id="nombre"  value="<?php echo $resultadaux['nombre'] ?>" ></td>
	</tr>
	<tr>
	<td>Apellido*</td><td> <input type ="text" name="apellido" id="apellido"  value="<?php echo $resultadaux['apellido'] ?>"></td>
	</tr>
	<tr>
	<td>Usuario</td><td> <input type ="text" name="user"  value="<?php echo $resultadaux['user'] ?>" ></td>
	</tr>
	<tr>
	<td>Clave</td><td> <input type ="password" name="clave"  value="<?php echo $resultadaux['password'] ?>"></td>
	</tr>

</table>
<br>
<input type="submit" name="enviar" value="ENVIAR">
<input type="reset" value="LIMPIAR"> 
<br>
<br>

	</select>
</tr>
<br>
<br>

			<div id="menu_tab">
				<ul class="menu">



				</ul>
				
			</div>



</body>
</html>


