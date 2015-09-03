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
.Estilo1 {
	font-size: 10px;
	font-weight: bold;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' debe contener solo númeross.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es obligatorio.\n'; }
    } if (errors) alert('Los siguientes errores han ocurrido:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
</head>

<body onLoad="document.form1.cedula.focus()">

<table width="540" border="0" align="center">
  <tr>
    <td><form id="form1" name="form1" method="post" action="../Control/InsertarNueUsu.php">
      <table width="540" border="0">
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center" class="big"><u>Nueva Cuenta de usuario</u></div>
                <p align="center" class="hoja1"></p></td>
          </tr>
        <tr>
          <td colspan="2"><div align="center"></div></td>
          </tr>
        <tr>
          <td width="250"><div align="right"><span class="bodystyle">Usuario:</span></div></td>
          <td width="280"><input name="usuario" type="text" id="usuario" size="12" /></td>
        </tr>
        <tr>
          <td><div align="center" class="bodystyle">
            <div align="right">Clave: </div>
          </div></td>
          <td><span class="bodystyle">
            <input name="clave" type="password" id="clave" size="12" />
          </span></td>
        </tr>
        <tr>
          <td class="bodystyle"><div align="right">Repita Clave:</div></td>
          <td><span class="bodystyle">
            <input name="Repita_clave" type="password" id="Repita_clave" size="12" />
          </span></td>
        </tr>
        <tr>
          <td><div align="right"><span class="bodystyle">Cedula:</span></div></td>
          <td><input name="cedula" type="text" id="cedula" size="12" /></td>
        </tr>
        <tr>
          <td><div align="right"><span class="bodystyle">Correo Electr&oacute;nico:</span></div></td>
          <td><input name="email" type="text" id="email" size="12" /></td>
        </tr>
        <tr>
          <td class="bodystyle"><div align="right" class="bodystyle">Tipo de usuario:</div></td>
          <td class="bodystyle"><label>
            <select name="tipo" id="tipo">
              <option>Administrador</option>
              <option>Usuario</option>
              </select>
            <strong>(*)            </strong></label></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="bodystyle"><p align="center">
            <input name="button" type="submit" id="button" onClick="MM_validateForm('cedula','','RisNum','usuario','','R','clave','','R','Repita_clave','','R');return document.MM_returnValue" value="Enviar" />
          </p>            </td>
        </tr>
        
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <p class="bodystyle"><em><strong>(*) </strong>Usuario: </em>Se le permite manegar varias funciones del sistema exceptuando la adminitraci&oacute;n de cuentas.<em> Administrador :</em> Posee todos las opciones del sistema disponibles.</p>
            </div></td>
        </tr>
      </table>
    <label></label>
    </form></td>
  </tr>
</table>
</body>
</html>
