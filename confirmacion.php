<?php
include ("seguridad.php");
include("consulta.php");
$cedula=$_GET['cedula'];


echo "<script>if(confirm('¿Estas seguro que deseas eliminar el registro?')){ 
document.location='./seguridad3.php?cedula=".$cedula."';} 
else{ alert('Operacion Cancelada'); 
}</script>";
?>


