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
<script type="text/javascript">
<!--
		var entrar=confirm("?Desea eliminar todos los datos de esta cuenta?")
		if(entrar)
			location.href="Eliminar.php"; 
		else
		{
			alert("No hubo modificaciones en la Base de datos");
			location.href="EliminarCuenta.php";
		} 
	//-->
</script>

