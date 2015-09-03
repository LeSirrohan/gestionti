<?php
	session_start();
	if (empty($_SESSION["_login"]))
	{
    unset($_SESSION['_login']);
    unset($_SESSION['_password']);
    unset($_SESSION['_Nombre']);
    unset($_SESSION['_Apellido']);
		echo "<script> alert('Disculpe, debe iniciar sesion para acceder'); </script> ";
		echo "<script>location.href='../../modulo_login/index.php';</script>";

	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>.::Sistemas y Telecomunicaciones Odebrecht::.</title>

<script src="../../scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
function abrir(url) { 
open(url,'','top=300,left=300,width=350,height=300') ; 
} 
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
.hoja1 {
	font-family: Verdana;
	font-size: 12px;
	line-height: 15px;
	color: #FFF;
}
.EstiloCentro {
	text-align: center;
}
.EstiloCentro1 {
	text-align: center;
}
body p {
	color: #FFF;
}
-->
</style>
<link href="Estilos/Verdana.css" rel="stylesheet" type="text/css" />
</head>

<body onLoad="MM_preloadImages('../../imagenes/BotonInicioSobre.jpg','../../imagenes/BotonBRapidaSobre.jpg','../../imagenes/BotonBOrdenadaSobre.jpg','../../imagenes/BotonBAvanzadaSobre.jpg','../../imagenes/BotonNuevoESobre.jpg','../../imagenes/BotonNcargaFSobre.jpg','../../imagenes/BotonMdatosESobre.jpg','../../imagenes/BotonEdatosESobre.jpg','../../imagenes/Cuentas2.jpg','../../imagenes/Inicio2.gif','../../imagenes/Cargar2.gif','imagenes/Reportes2.gif','../../imagenes/Cuentas2.gif','../../imagenes/Salir2.gif')">
<table width="1020" border="0" align="center" background="../../imagenes/IT SISTEMA2.jpg">
  <tr>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td height="46" colspan="2">
    <table width="1020" border="0" >
          <tr>
            <td colspan="2"><div align="right" class="hoja1">
      <strong>Caicara de Orinoco,
        <?php	include("../Control/fecha.php"); $j=fecha(); ?>
      </strong>
    </div></td>
          </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="60" colspan="2"><div align="right" class="hoja1"><strong>Usuario:</strong> <?php echo $_SESSION['_Nombre']; echo " "; echo $_SESSION['_Apellido']; ?></div></td>
  </tr>
  
  <tr>
    <td valign="top"><table width="139" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td width="139" align="center"><a href="MensajeIndex.html" target="contenido" onMouseOver="MM_swapImage('Image7','','../../imagenes/Inicio2.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="../../imagenes/Inicio1.gif" name="Image7" width="115" height="40" border="0" id="Image7" /></a></td>
        </tr>
      <tr>
        <td align="center"><a href="Cargar.php" target="contenido" onMouseOver="MM_swapImage('Image8','','../../imagenes/Cargar2.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="../../imagenes/Cargar1.gif" name="Image8" width="115" height="40" border="0" id="Image8" /></a></td>
        </tr>
      <tr>
        <td align="center"><a href="Busqueda.php" target="contenido" onMouseOver="MM_swapImage('Image9','','../../imagenes/Reportes2.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="../../imagenes/Reportes1.gif" name="Image9" width="115" height="40" border="0" id="Image9" /></a></td>
        </tr>
      <tr>
        <td align="center"><a href="administrarcuentas.html" target="contenido" onMouseOver="MM_swapImage('Image101','','../../imagenes/Cuentas2.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="../../imagenes/Cuentas1.gif" alt="Salir" name="Image101" width="115" height="40" border="0" id="Image101" /></a></td>
      </tr>
        <td align="center"><a href="../../modulo_login/Vista/index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','../../imagenes/Salir2.gif',1)"><img src="../../imagenes/Salir1.gif" name="Image10" width="115" height="40" border="0" id="Image10" /></a></td>
        </tr>
      <tr>
        <td align="center"><img src="../../imagenes/barra.png" width="170" height="20" align="middle" /></td>
        </tr>
      
    </table>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="175" height="175" id="FlashID" title="clock">
        <param name="movie" value="../../imagenes/clock40.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="6.0.65.0" />
        <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
        <param name="expressinstall" value="../../scripts/expressInstall.swf" />
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="../../imagenes/clock40.swf" width="175" height="175">
          <!--<![endif]-->
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="6.0.65.0" />
          <param name="expressinstall" value="../../scripts/expressInstall.swf" />
          <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
          <div>
            <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
<img src="../../imagenes/barra.png" width="170" height="20" align="center" />
    <td  valign="top" bgcolor="#FFFFFF"" align="center"><iframe src="MensajeIndex.html" name="contenido"  width="875" height="520" scrolling="Auto" id="contenido" >Sistema Desarrollado Utilizando Iframe, Navegador no Permitido</iframe></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><strong><div align="center" class="hoja1">Sistema realizado bajo ambiente Web por el pasante de Lic en Inform&aacute;tica Hiram Loreto</div></strong></td>
  </tr>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
