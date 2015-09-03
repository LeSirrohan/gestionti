<?
	session_start();
	if (empty($_SESSION['_login']))
	{
		?><script> alert("Disculpe, debe iniciar sesion para acceder"); </script> <?
		echo '<script language="Javascript">top.location.reload()</script>';
	}
?>
<?
include("../../Clases/conectar.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;
$cedula=$_POST['cedula'];

$conexion = new Clsconexion_bd();
$conectar = $conexion->conexion();
$query="SELECT cedula FROM usuario where cedula='$cedula'"; //consulta a la BD;
$result=pg_query($query);//consultar a la BD;
if(pg_num_rows($result)>0)//verifica si es un usuario con cuenta;
{
	$_SESSION['_cedula']=$cedula;
	echo '<script languaje="Javascript">location.href="SeleccionarModCuen.php"</script>';
}
else
{
	?><script> alert("Disculpe, no existen coincidencias en su búsqueda"); </script> <?
		echo '<script languaje="Javascript">location.href="../Vista/ModificarCuentas.php"</script>';
}?>
