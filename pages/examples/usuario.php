<?php

$usuario=$_POST['usuario'];
$contrasenia=$_POST['contrasenia'];
$usuario= strtolower ($usuario);
$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());

mysql_select_db('erp') or die('No se pudo seleccionar la base de datos');
$query = "SELECT usuario , contrasenia FROM usuarios;"; 
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());


//verificar su el usuario se encunetra en la base de datos...
while($fila = mysql_fetch_array($result)) 
{ 
if ($fila['usuario']==$usuario and $fila['contrasenia']==$contrasenia )
{
$band=1;
break;
}else
{
$band=0;
}
}


if ($band ==0)
{?>
<script language="javascript"> 
	alert("Revisa tu usuario y contraseña..."); 
	 
	location = 'login.html';
	</script> 
<?php
}
else
{
	?>
<script language="javascript"> 
var vari = "bienvenido  : <?php echo $usuario; ?>" ;
	alert(vari); 
	location = '//localhost/erp/inicio.php ';

	</script> 

<?php
}
?>
