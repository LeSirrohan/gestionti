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
	$cedula=$_SESSION['_cedula'];
	require("../../Clases/conectar.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;
	//selecciona la BD;
	$sql="DELETE FROM usuario WHERE cedula='$cedula'"; //consulta a la BD
	unset($_SESSION['_cedula']);
	$result=pg_query($sql);//consultar a la BD;
	if($result)
	{
		?><script> alert("Cuenta de usuario eliminada correctamente"); </script> <?
		echo '<script languaje="Javascript">location.href="EliminarCuenta.php"</script>';
	}
		
?>