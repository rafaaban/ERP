<?php 

include("funciones.php");
$codigo=new funciones();
$codigo->conectar(); 
$tabla="empleados";
$codigo->insertar($tabla);

?>