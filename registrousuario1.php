<?php("seguridad2.php"); ?>
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

					<li><a href="inde.php" class="nav"> Página Principal</a></li>
					<li class="divider"></li>
					<li><a href="consultarencargado2.php" class="nav"> Consultar Encargado</a></li>
					<li class="divider"></li>
					<li><a href="registrousuario.php" class="nav"> Registrar Encargado</a></li>
					<li class="divider"></li>



				</ul>
				
			</div>


<font size='5'>
<?php

include("conexion.php");

 $cedula=$_POST['cedula'];

 $nom=$_POST['nombre'];

 $ape=$_POST['apellido'];

 $user=$_POST['user'];

 $clave=$_POST['clave'];

 $jerar=$_POST['jerarquia'];
 

 $sql="INSERT INTO usuarios (cedula, nombre, apellido, user, password, jerarquia) VALUES ('$cedula','$nom','$ape','$user','$clave','$jerar')";

 $cursor=mysql_query($sql);
 echo mysql_error();
 echo "<br>";
  



 $num=mysql_affected_rows($cursor);
 if($num != 1){
 	echo"<center>Su registro ha sido insertado correctamente</center>";
	echo "<br>";
	echo "<br>";
	print "<center><img src=images/pulgararriba.jpg withd=100 height=100 alt= title= border=0></center>";
}
else{
	echo "Error de registro";
	echo "<br>";
	echo "<br>";
	print "<center><img src=images/x.png withd=100 height=100 alt= title= border=0></center>";
}

mysql_close();

?>
</font>
<br>
<br>
<center>
<form action="inde.php" method="post">
<input type="submit" value="Página Principal">
</form>
</center>

<br>
<br>
<br>
<br>

		<div class="center_box">
			<div id="menu_tab">
				<ul class="menu">



				</ul>
				
			</div>


		</div> <!--end of center box-->
	</div> <!--end of main content-->
</div>
</body>
</html>
