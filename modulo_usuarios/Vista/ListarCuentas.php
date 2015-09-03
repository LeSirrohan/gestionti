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
<link href="Estilos/Verdana.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.bodystyle table {
	color: #000;
}
-->
</style>
<link href="../../Estilos/Verdana.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="780" border="0" align="center">
  <tr>
    <td class="big">&nbsp;</td>
  </tr>
  <tr>
    <td class="big"><div align="center" class="Titulos"><u>Listar Cuentas</u></div></td>
  </tr>
  <tr>
    <td class="big">&nbsp;</td>
  </tr>
  <tr>
    <td class="big">&nbsp;</td>
  </tr>
  <tr>
    <td class="bodystyle"><table width="800" border="0" align="center">
      <tr bgcolor="#00CCCC" class="Texto1">
        <td width="97" ><div align="center" class="subbig Estilo1">login:</div></td>
        <td width="161" ><div align="center" class="subbig Estilo1">Nombre</div></td>
        <td width="160" ><div align="center" class="subbig Estilo1">
          <div align="center">Clave:</div>
        </div></td>
        <td width="155" ><div align="center" class="subbig Estilo1">
          <div align="center">Tipo de Usuario (*) :</div>
        </div></td>
          <td width="155"><div align="center" class="subbig Estilo1">
          <div align="center">Correo electronico:</div>
        </div></td>
        </tr>
     
      <?
include("../../Clases/conectar.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;
include("../../Clases/empleados.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;
include("../../Clases/usuario.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;

$usuarios = new usuario();

$listar_usuarios = $usuarios -> listarUsuario();
$cantidad_usuarios = $usuarios ->cantidadUsuarios();

//print_r($listar_usuarios);

if($cantidad_usuarios==0)//verifica si es un usuario con cuenta;
{
	?><script> alert("No hay resultados que coincidad con su busqueda"); </script> <?
	//echo '<script languaje="Javascript">location.href="administrarcuentas.html"</script>';
}
$sql2="";
for ($i=0; $i < $cantidad_usuarios; $i++) { 
?>
  <tr bgcolor="#D5FFFF" class="caja">
    <td width="97" class="subbig2 Estilo1"><div align="center"><? echo $listar_usuarios[$i]["cedula"];?></div></td>
    <td width="161" class="subbig2 Estilo1"><div align="center"><? echo $listar_usuarios[$i]["nombre"]." ".$listar_usuarios[$i]["apellido"];?></div></td>
    <td width="160" class="subbig2 Estilo1"><div align="center"><? echo $listar_usuarios[$i]["password"];?></div></td>
    <td width="155" class="subbig2 Estilo1"><div align="center"><? echo $listar_usuarios[$i]["tipo"];?></div></td>
    <td width="155" class="subbig2 Estilo1"><div align="center"><? echo $listar_usuarios[$i]["correo_electronico"];?></div></td>
  </tr>
  <? }?>
    </table></td>
  </tr>
</table>

<p align="center" class="caja"><strong>(*) </strong><em>Usuario: </em>Se le permite manegar varias funciones del sistema exceptuando la adminitraci&oacute;n de cuentas.<em> Administrador:</em> Posee todos las opciones del sistema disponibles.</p>
</body>
</html>
