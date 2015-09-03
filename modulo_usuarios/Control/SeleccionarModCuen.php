<?
	session_start();
  if (empty($_SESSION['_login']))
	{
		?><script> alert("Disculpe, debe iniciar sesion para acceder"); </script> <?
		echo '<script language="Javascript">top.location.reload()</script>';
	}
?>
<script>
function cambiarDisplay(id) 
{
	if (!document.getElementById) 
		return false;
	fila = document.getElementById(id);
	if (fila.style.display != "none") 
		fila.style.display = "none"; //ocultar
	else 
		fila.style.display = ""; //mostrar
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
$cedula=$_SESSION['_cedula'];
include("../../Clases/conectar.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;
$conexion = new Clsconexion_bd();
$conectar = $conexion->conexion();
$sql="SELECT * FROM usuario where cedula='$cedula'";
$result=pg_query($sql);
$reg=pg_fetch_object($result);
//echo $_SESSION['_cedula'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Documento sin t&iacute;tulo</title>
<link href="../Vista/Estilos/Verdana.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo3 {color: #000000; font-weight: bold; }
.Estilo4 {color: #000000; }
-->
</style>
</head>

<body>
<table width="550" border="0" align="center">
  <tr>
    <td><form id="form1" name="form1" method="post" action="../Vista/FinalModCuen.php">
      <table width="550" border="0">
        <tr>
          <td colspan="4" class="bodystyle"><p align="center" class="hoja1">&nbsp;</p>
                <p align="center" class="titulo"><span class="ti"><span class="big"><u>Modificar datos de una Cuenta </u></span></span></p>
            <p align="center" class="hoja1"></p></td>
        </tr>
        <tr>
          <td colspan="4" class="bodystyle"><div align="center"><strong>Datos Actuales:</strong></div></td>
          </tr>
        <tr bgcolor="#00CCCC">
          <td class="bodystyle"><div align="center" class="Estilo3">Cédula:</div></td>
          <td width="177" class="bodystyle"><div align="center" class="Estilo3">Nombre de Usuario:</div></td>
          <td width="148" class="bodystyle"><div align="center" class="Estilo3">Clave:</div></td>
          <td width="135" class="bodystyle"><div align="center" class="Estilo3">Tipo de Usuario:</div></td>
        </tr>
        <tr bgcolor="#D5FFFF">
          <td class="bodystyle"><div align="center" class="Estilo4"><? echo $cedula;?></div></td>
          <td class="bodystyle"><div align="center" class="Estilo4"><? echo $reg->login;?></div></td>
          <td class="bodystyle"><div align="center" class="Estilo4"><? echo $reg->password;?></div></td>
          <td class="bodystyle"><div align="center" class="Estilo4"><? echo $reg->tipo;?></div></td>
        </tr>
        <tr bgcolor="#D5FFFF">
          <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        
        <tr bgcolor="#D5FFFF">
          <td colspan="4" bgcolor="#FFFFFF"><div align="center" class="subbig">Por favor seleccione su opción y luego ingrese el nuevo valor:</div></td>
        </tr >
        <tr bgcolor="#D5FFFF">
          <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr bgcolor="#D5FFFF">
          <td width="162" bgcolor="#FFFFFF"><label>
          
            <div align="center">			</div>
          </label></td>
          <td colspan="3" bgcolor="#FFFFFF">  <p align="left">
              <span>
              <input name="checkbox13" type="checkbox" id="checkbox13"  onclick="cambiarDisplay('oculto')" value="otro" />
              Nuevo Nombre de Usuario <span id="oculto" style="display:none;">
                <input type="text" name="otro_tipo" id="otro_tipo"/> 
              </span></span> </p>
            <p align="left">
                <span>
                <input name="checkbox14" type="checkbox" id="checkbox14"  onclick="cambiarDisplay('oculto2')" value="otro2" />
                Nueva Clave del Usuario <span id="oculto2" style="display:none;">
                <input type="text" name="otro_tipo2" id="otro_tipo2"/> 
              </span></span> </p>
               <p align="left">
                <span>
<input name="checkbox15" type="checkbox" id="checkbox15"  onclick="cambiarDisplay('oculto3')" value="otro3" />
Cambiar Tipo de Usuario</span> <span id="oculto3" style="display:none;">
                <select name="menuusu" id="menuusu">
                  <option>Seleccione...</option>
                  <option>Administrativo</option>
                  <option>Usuario</option>
                </select>
            </span>            </p></td>
        </tr>
        <tr>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4">
            <div align="center">
              <input type="submit" name="button" id="button" value="Enviar" />
              </div></td>
          </tr>
      </table>
      <label></label>
      <div align="center"></div>
    </form></td>
  </tr>
</table>
</body>
</html>
