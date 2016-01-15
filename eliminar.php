<?php
$DELETE=mysqli_connect("localhost","root","");
mysqli_select_db($DELETE, "erp");
mysqli_query($DELETE, "DELETE FROM empleados WHERE ID=".$_GET["ID"]);
mysqli_close($DELETE); 
echo "Se ha borrado este campo";
?>