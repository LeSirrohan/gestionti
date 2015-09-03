<?php
	session_start();
	if (session_is_registered('_nombre') && !empty($_SESSION['_nombre']))
	{
		session_unset();
		session_destroy();
	}   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>.::Sistemas y Telecomunicaciones Odebrecht::.</title>

<script type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es necesario.\n'; }
    } if (errors) alert('Los sigueintes errores han ocurrido:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
<link href="Nueva carpeta/hoja1.css" rel="stylesheet" type="text/css" />
<link href="Estilos/Verdana.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo3 {
	color: #000000
}
.Estilo4 {
	color: #000
}
.bodystyle.Estilo3 marquee {
	font-size: 26px;
}
.hoja1 {
	font-family: Verdana;
	font-size: 12px;
	line-height: 15px;
	color: #FFF;
}
.bodystyle marquee {
	color: #000;
}

-->
</style>
</head>
<body> 
<div align="center">
  <table width="1024" height="768" border="0" align="center" background="imagenes/IT SISTEMA3.jpg">
    <tr>
      <td width="991">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left">
        <table width="800" height="50" border="0">
          <tr>
            <td height="80" >
              </td>
          </tr>
          <tr>
            <td height="22" class="bodystyle"><marquee scrollamount="4" >
              <span class="texto"><span class="Estilo4"><strong>...Sistema de Reportes TI ODEBRECHT 2011...</strong></span></span>
              </marquee></td>
            </tr>
          </table>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="bodystyle Estilo3"></td>
    </tr>
    <tr>
      <td valign="top"><table width="449" height="176" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="111" height="172">&nbsp;</td>
          <td width="264">          <form id="form1" name="form1" method="post" action="_DirectorioActivo.php">
            <table  width="349" height="152" border="0" align="center">
              <tr>
                <td bordercolor="0">&nbsp;</td>
                <td bordercolor="0">&nbsp;</td>
              </tr>
              <tr>
                <td width="169" bordercolor="0"><div align="right" class="bodystyle Estilo3"><span class="Estilo4"><strong>Usuario:</strong></span></div></td>
                <td width="170" bordercolor="0"><div align="left">
                    <input name="usuario" type="text" id="usuario" size="20" />
                </div></td>
              </tr>
              <tr>
                <td bordercolor="0"><div align="right" class="bodystyle"><span class="Estilo4"><strong>Clave: </strong></span></div></td>
                <td bordercolor="0"><div align="left">
                    <input name="clave" type="password" id="clave" size="20" />
                </div></td>
              </tr>
              <tr>
                <td colspan="2" bordercolor="0">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" bordercolor="0"><div align="center">
                    <input name="Iniciar" type="submit" id="Iniciar" onclick="MM_validateForm('usuario','','R','clave','','R');return document.MM_returnValue" value="Iniciar Sesión" />
                </div></td>
              </tr>
              <tr>
                <td colspan="2" bordercolor="0">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" bordercolor="0">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" bordercolor="0"><div align="center"><span><strong>Caicara del Orinoco, </strong><span><strong>
                  <? include("fecha.php"); $j=fecha(); ?>
                </strong></span></span></div></td>
              </tr>
            </table>
          </form></td>
          <td width="93">&nbsp;</td>
        </tr>
        </table>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td align="center"><strong><span class="hoja1">Sistema realizado bajo ambiente Web por el pasante de Lic en Informática Hiram Loreto</span></strong></td>
    </tr>
  </table>
</div>
</body>
</html>
