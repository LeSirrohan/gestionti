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
<link href="../Control/Estilos/Verdana.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' debe contener solo números.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es necesario.\n'; }
  } if (errors) alert('Los siguientes errores han ocurrido:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body onLoad="document.form1.cedula.focus()">
<table width="600" border="0" align="center">
  <tr>
    <td><form id="form1" name="form1" method="post" action="../Control/AnalizarElimCuen.php">
      <table width="600" border="0">
        <tr>
          <td><p align="center" class="hoja1">&nbsp;</p>
                <p align="center" class="titulo"><span class="ti"><span class="big"><u>Eliminar Cuenta  </u></span></span></p>
                <p align="center" class="hoja1">&nbsp;</p>
            <p align="center" class="hoja1"></p></td>
        </tr>
        <tr>
          <td><div align="center" class="bodystyle"></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center" class="subbig">Por favor ingrese la cedula del usuario: </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><table width="151" border="0" align="center">
            <tr>
              <td width="90"><span class="hoja1">
                <input name="cedula" type="text" id="cedula" size="15" />
              </span></td>
              <td width="51"><label>
                <input name="enviar" type="submit" id="enviar" onClick="MM_validateForm('cedula','','RisNum');return document.MM_returnValue" value="Enviar" />
              </label></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
