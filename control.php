<?php
session_start();
$log=$_POST['user']; /// recibo los datos de login
$cont=$_POST['password']; // recibo los datos de la contraseña
$con = mysql_connect('localhost', 'root', 'secretariaula')  or die('No se pudo conectar:' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('laboratorio') or die('No se pudo seleccionar la base de datos');
mysql_set_charset('utf8');

$sql="SELECT * FROM usuarios WHERE usuarios.user='$log' AND usuarios.password='$cont'"; // realizo la comparación con la base de datos
 echo mysql_error($sql);    
$res=mysql_query($sql,$con);
 
    if($row=mysql_fetch_array($res)){
    @session_start();
    $_SESSION['jerar']=$row['jerarquia']; // descargo id de la bd
    $_SESSION['nom']=$row['user']; // descargo el nombre de la base de datos
    $ns=$row['jerarquia']; // descargo el niver de usuario

 
 if($ns==1){ // relizo la comparacion para saber a q menu de usuario me va direcionar si es NivelUsuario 1 va al pagina inicio administrador
            header("refresh:0.1 ;url=/servidor/inde.php");
}else{header("refresh:0.1 ;url=/servidor/inde.php"); //si el NivelUsuario es mayor o diferente a 1 va la pagina inicio del usuario normal
}
            }else{
        echo"<script language='javascript'>alert('Error En el Usuario o Clave Intente de Nuevo'); </script>";
            header("refresh:0.1 ;url=/servidor/index.php");
    }




?>
