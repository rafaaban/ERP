<html>
<body>
<?php
$ID=$_POST["id_empleado"];
$SEGURO=$_POST["id_seguro_social"];
$APELLIDOP = $_POST["apellido_paterno"];  
$APELLIDOM = $_POST["apellido_materno"];  
$NOMBRE=$_POST["nombre"];
$FECHA_NACIMIENTO =$_POST["fecha_nacimiento"];
$RFC = $_POST["rfc"];  
$EMAIL=$_POST["email"];
$FAX =$_POST["fax"];
$TEL_CEL = $_POST["tel_cel"];  
$TEL_TRABAJO =$_POST["tel_trabajo"];
$ID_AREA =$_POST["id_area"];
$JEFE_INMEDIATO= $_POST["jefe_inmediato"];  
$ESTADO=$_POST["estado"];
$NOMBRE_USUARIO =$_POST["nombre_usuario"];
$CONTRASENA = $_POST["contrasena"];  
$FECHA_CONTRATO_INI =$_POST["fecha_contrato_ini"];
$FECHA_CONTRATO_FIN =$_POST["fecha_contrato_fin"];
$UPDATE=mysqli_connect("localhost","root","");
mysqli_select_db($UPDATE, "erp"); 
mysqli_query($UPDATE,"UPDATE empleados   SET  id_empleado='$id_empleado',id_seguro_social='$id_seguro_social',apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno',nombre='$nombre',fecha_nacimiento='$fecha_nacimiento',rfc='$rfc',email='$email',fax='$fax',tel_cel='$tel_cel',tel_trabajo='$tel_trabajo',id_area='$id_area',jefe_inmediato='$jefe_inmediato',estado='$estado',nombre_usuario='$nombre_usuario',contrasena='$contrasena',fecha_contrato_ini='$fecha_contrato_ini',fecha_contrato_fin='$fecha_contrato_fin'   WHERE ID='$ID'") ;  
mysqli_close($UPDATE);    
echo '<p>Los datos han sido guardados con exito.</p>'   
?>  
</body>  
<p align="center"><a href="inicio.php">&lt;volver</a> </p>
</html> 