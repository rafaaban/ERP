
<?php
class funciones{

private $link=null;

function conectar(){
$this->link=mysql_connect("localhost","root","fernanda");
mysql_select_db("erp");
if($this->link)
return true;
else
return false;
}// fin de la funcion conectar

function iniciar($usuario,$pass){
	session_start();
	if($this->conectar() == true)
		{
			$resultado=mysql_query("select * from  empleados where user_username='".$usuario."' and user_password='".$pass."'",$this->link);
			$filas2=mysql_num_rows($resultado);
			$ro=mysql_fetch_array($resultado);

		if($filas2==1){
			$_SESSION['autentificado']="1";
			$_SESSION['nombre']=$ro['user_username'];
			$_SESSION['id']=$ro['id'];
				header("location:editorial.php");
			}else{
					echo "<script type='text/javascript'>alert('Error de usuario o contraseña')</script>";
					echo "<script type='text/javascript'> window.location = 'index.php?errorusuario=1'</script>";
			}
		}
	   else	{
			die("La Conexion A Fallado");
		}
}// fin de la funcion login

function insertar($tabla){
	if($this->conectar() == true)
	{
			$arraypost=array();
			foreach($_POST as $k => $v) $arraypost[]="$k='$v'";
			$sql="INSERT INTO $tabla SET ".implode(', ',$arraypost);  
			mysql_query($sql);
	?>
 		
			<script>
				alert("Cliente Registrado");
				window.location.href = '../alta.php';
			</script>
			
<?php
	}
	else	
	{
		die("La Conexion A Fallado");
	}
}

//eliminar un cliente
function eliminar($id){
	if($this->conectar() == true)
	{
		if($id !=null or $id!=""){
		$estatus="baja";
		mysql_query("update clientes set estatus='".$estatus."' where id=".$id);
	?>		
			<script>
				alert("Cliente dado de baja");
				window.location.href = '../baja.php';
			</script>
			
<?php
		}
		else{
		?>		
			<script>
				alert("Selecciona un cliente para eliminar");
				window.location.href = '../baja.php';
			</script>
			
			<?php
		
		}
	
	}
	else	
	{
		die("La Conexion A Fallado");
	}
}

function modificar($tabla,$id){
	if($this->conectar() == true)
	{
			$arraypost=array();
			foreach($_POST as $k => $v) $arraypost[]="$k='$v'";
			$sql="update $tabla SET ".implode(', ',$arraypost)." where id=".$id;  
			mysql_query($sql);
	?>		
			<script>
				alert("Cliente Modificado");
				window.location.href = '../modificacion.php';
			</script>
			
<?php
	}
	else	
	{
		die("La Conexion A Fallado");
	}
}
	
}// fin de la clase
?>
