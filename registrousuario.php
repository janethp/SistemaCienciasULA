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
<br><?php include("seguridad2.php"); ?> 
<font size="4">	

<form method='post' action="registrousuario1.php"  onsubmit="return validacion()">
<center>
<table border="4"  >
	<tr>
	<h3>Registro de nuevo encargado</h3>
	</tr>
	<tr>
	<td>Cedula* </td>
	<td> <input type ="text" name="cedula" id="cedula"> </td>
	</tr>
	<tr>
	<td>Nombre*</td><td> <input type ="text" name="nombre" id="nombre" ></td>
	</tr>
	<tr>
	<td>Apellido*</td><td> <input type ="text" name="apellido" id="apellido"></td>
	</tr>
	<tr>
	<td>Usuario*</td><td> <input type ="text" name="user"  ></td>
	</tr>
	<tr>
	<td>Clave*</td><td> <input type ="password" name="clave"></td>
	</tr>
	<tr>
	<td style="visibility:hidden">Jerarquia</td><td style="visibility:hidden"> <input type ="text" name="jerarquia" value="2"></td>
	</tr>

</table>
<br>
<input type="submit" name="enviar" value="ENVIAR">
<input type="reset" value="LIMPIAR"> 
<br>
<br>
<br>
<center><input type="button" value="Atrás" onClick="history.go(-1)"></center>      
<br>
<br>
</center>
</form>
</font>
<br>
<br>


			<div id="menu_tab">
				<ul class="menu">



				</ul>
				
			</div>

		</div> <!--end of center box-->
	</div> <!--end of main content-->

</div>
</body>
</html>
