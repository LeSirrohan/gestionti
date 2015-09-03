<?
	session_start();
	if (empty($_SESSION['_login']))
	{
		?><script> alert("Disculpe, debe iniciar sesion para acceder"); </script> <?
		echo '<script language="Javascript">top.location.reload()</script>';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
</body>
</html>
<? 
$login=$_POST['otro_tipo'];
$password=$_POST['otro_tipo2'];
$menuusuario=$_POST['menuusu'];
$cedula=$_SESSION['_cedula'];
$checkbox13=$_POST['checkbox13'];
$checkbox14=$_POST['checkbox14'];
$checkbox15=$_POST['checkbox15'];



echo "password: ".$password." cedula: ".$cedula." login: ".$login." checkbox13: ".$checkbox13." checkbox14 ".$checkbox14." checkbox15".$checkbox15;

include("../../Clases/conectar.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;
$conexion = new Clsconexion_bd();
$conectar = $conexion->conexion();

$var=0;

if($checkbox13)
{	
	if($login!='')
	{
		$query="UPDATE usuario SET login='$login' where cedula='$cedula'"; //consulta a la BD;
		$result=pg_query($query);//consultar a la BD;
		$var=1;
	}
}

if($checkbox14=='otro2')
{	
	if($password!='')
	{
		$query2="UPDATE usuario SET password='$password' where cedula='$cedula'"; //consulta a la BD;
		$result2=pg_query($query2);//consultar a la BD;	
		$var=1;	
	}
}

if($checkbox15)
{	
	if($menuusu!='Seleccione...')
	{
		$query3="UPDATE usuario SET tipo='$menuusu' where cedula='$cedula'"; //consulta a la BD;
		$result3=pg_query($query3);//consultar a la BD;
		$var=1;	
	}
}

if($var==1)
{
		unset($_SESSION['_cedula']);
		?><script> alert("datos cambiados"); </script> <?
		echo '<script languaje="Javascript">location.href="administrarcuentas.html"</script>';
				echo "Valor: ".$var;

}
if($var==0)
{
			echo "Valor: ".$var;

		unset($_SESSION['_cedula']);
		?><script> alert("No Se han producido ningun cambio"); </script> <?
		echo '<script languaje="Javascript">location.href="administrarcuentas.html"</script>';

}
?>
