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

<br><br>

<?php
include("conexion.php");

$cedula=$_REQUEST['cedula'];

 $nom=$_POST['nombre'];

 $ape=$_POST['apellido'];

 $usuario=$_POST['user'];

 $clave=$_POST['clave'];
  

$consulta= "UPDATE usuarios SET cedula='$cedula', nombre='$nom', apellido='$ape', user='$usuario', password='$clave' WHERE cedula='$cedula'";
$resultado=mysql_query($consulta);
echo mysql_error();
echo "<br>";
 
 $num=mysql_affected_rows();
 if($num!=0){
   echo"<b> <center> Sus Datos han sido Modificados </center></b>";
print "<center><img src=images/pulgararriba.jpg withd=100 height=100 alt= title= border=0></center>";
            }
            else{
	           echo " <b> <center>Error de Modificación </center></b>";
			print "<center><img src=images/x.png withd=100 height=100 alt= title= border=0></center>";
                }

mysql_close();
?>

<br>
<br>
<br>
<br>
			<div id="menu_tab">
				<ul class="menu">



				</ul>
				
			</div>



</div>
</body>
</html>
