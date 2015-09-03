<?php
session_start();
	if (empty($_SESSION['_nombre']))
	{
		?><script> alert("Disculpe, debe iniciar sesion para acceder"); </script> <?
		echo '<script language="Javascript">top.location.reload()</script>';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sin t&iacute;tulo</title>
<link href="../Vista/Estilos/Verdana.css" rel="stylesheet" type="text/css" />
</head>
<?php

include("../../Clases/conectar.php");
include("../../Clases/usuario.php");
$usuarios = new usuario();
$usuario = $_POST['usuario']
$cedula = $_POST['cedula'];
$clave = $_POST['clave'];
$Repita_clave = $_POST['Repita_clave'];

$var=0;

if($clave!=$Repita_clave)
{
	$var=1;
	$mensaje="- Las claves ingresadas no coinciden";
}
$cedulabuscada= $usuarios->buscarCedula($cedula);
if($cedulabuscada>0)
{
	$var=1;
	$mensaje2="- El nombre de usuario ingresado ya existe";
}


if($var==1)
{
	$var=0;
	?><script> alert("<? echo "Los siguientes errores han ocurrido:", '\n',$mensaje,'\n',$mensaje1,'\n',$mensaje2?> "); </script> <?
	echo '<script languaje="Javascript">location.href="NuevaCuenta.php"</script>';
}
else
{
	$result=$usuarios -> insertarUsuario($usuario,$clave,$cedula,$tipo,$email)
	echo "Se insertaron los siguiente valores: ";
	echo "Usuario: ".$usuario." Cedula: ".$cedula." Tipo Usuario: ".$tipo;

	if($result)
	{
		?><script> alert("Cuenta de usuario Creada correctamente"); </script> <?
		echo '<script languaje="Javascript">location.href="administrarcuentas.html"</script>';
	}
}
?>