<?php
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Documento sin t&iacute;tulo</title>
<link href="Estilos/Verdana.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo1 {
	color: #000;
}
-->
</style>
</head>
<?php
$_SESSION['_cedula']=$cedula;
include("../../Clases/conectar.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;
$conexion = new Clsconexion_bd();
$conectar = $conexion->conexion();
$query="SELECT * FROM usuario where cedula='$cedula'";
$result=pg_query($query);//consultar a la BD;
if(pg_num_rows($result))//verifica si es un usuario con cuenta;
{
	$query2="SELECT * FROM empleados where cedula='$cedula'"; //consulta a la BD;
	$result2=pg_query($query2);//consultar a la BD;
	if(pg_num_rows($result2)>0)//verifica si es un usuario con cuenta;
	{
		$reg2=pg_fetch_object($result2);
		?>
	<table width="600" border="0" align="center">
  	<tr>
    <td width="303">&nbsp;</td>
    <td width="327">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><u class="big">Datos del usuario de la cuenta</u></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="bodystyle">&nbsp;</td>
    <td class="bodystyle">&nbsp;</td>
  </tr>
</table>
<table width="600" border="0" align="center">
  <tr bgcolor="#00CCCC">
    <td width="135" ><div align="center" ><span class="Estilo1"><strong>C&eacute;dula</strong>:</span></div></td>
    <td width="215" ><div align="center" ><span class="Estilo1"><strong>Nombre(s):</strong></span></div></td>
    <td width="205" ><div align="center"><span class="Estilo1"><strong>Apellido(s):</strong></span></div></td>
    <td width="80"><div align="center" class="subbig Estilo1"><span class="Estilo1">Acci&oacute;n</span></div></td>
  </tr>
  <form id="form1" name="form1" method="post" action="FinalEliminarCuen.php">
   <input type="hidden" name="cedula" value="<?php  echo $reg2->cedula; ?>" />
    <tr bgcolor="#D5FFFF">
      <td width="135" class="bodystyle"><div align="center"><span class="Estilo1"><?php echo $reg2->cedula;?></span></div></td>
      <td width="215" class="bodystyle"><div align="center"><span class="Estilo1"><?php echo $reg2->Nombre;?></span></div></td>
      <td width="205" class="bodystyle"><div align="center"><span class="Estilo1"><?php echo $reg2->Apellido;?></span></div>        <div align="center"></div></td>
      <td width="80"><div align="center">
        <span class="Estilo1">
        <input type="submit" name="Submit" value="Eliminar" />
      </span></div></td>
    </tr>
  </form>
</table>

<?php } 
}
else
{
?><script> alert("Disculpe, no existen coincidencias en su búsqueda"); </script> <?
	echo '<script languaje="Javascript">location.href="EliminarCuenta.php"</script>';
}?>

