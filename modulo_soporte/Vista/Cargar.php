<?php
	session_start();

$nombre=$_SESSION['_Nombre'];
$apellido=$_SESSION['_Apellido'];
$nombre_tecnico=$nombre." ".$apellido;
//echo $_SESSION['_login'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style type="text/css">
<!--
.Estilo5 {font-size: 10px}
.Estilo7 {font-size: 10px}
-->
</style>
<script type="text/JavaScript">
<!--
function lista(area) {
//mediante etiquetas php creamos el bucle que recorre la tabla
	<?php
	
		$areas='<script languaje="Javascript"> document.write(area)</script>';
    include ("../../Clases/conectar.php");
    include ("../../Clases/Soportes.php");
    include ("../../Clases/Areas.php");
    include ("../../Clases/Gerencias.php");
		echo $areas;
    $soporte = new soportes();
    $area  = new areas();
    $gerencia = new Gerencias();
		$reg=$area->consultar_areas();
    $cantidad = $area -> cantidad_areas();

    $i=0;
		while ($i < $cantidad){
 	
			?>
		var cod_area = "<?= $reg[$i]['cod_area'];?>";
		var cod_area_ger = "<?= $reg[$i]['cod_ger'] ?>";
		var cod_ger = "<?= $reg[$i]['cod_gerencia'];?>";
		var nombre = "<?= $reg[$i]['nombre_gerencia']; ?>";
    alert(nombre);
		if ( cod_area == area ) {
		  carga.gerencia.value=nombre;
      alert(nombre);
		 }
		<?php
    $i++;
	 }
	?>
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById){ x=d.getElementById(n); return x;
}
function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es necesario.\n'; }
  } if (errors) alert('Los siguientes errores han ocurrido:\n'+errors);
  document.MM_returnValue = (errors == '');
}

//-->
</script>
<script type="text/javascript" src="../../jscalendar-1.0/calendar.js"></script>
<script type="text/javascript" src="../../jscalendar-1.0/calendar-setup.js"></script>
<script type="text/javascript" src="../../jscalendar-1.0/lang/calendar-es.js"></script>

<style type="text/css"> 
@import url("../../jscalendar-1.0/skins/aqua/theme.css"); .Estilo1 {font-weight: bold}
</style>
</head>
<body>
<div align="center">
  <table width="600" border="0">
    <tr>
      <td><form id="carga" name="carga" method="post" action="../Control/InsertarCargar.php">
        <table width="600" border="0">
          <tr>
            <td colspan="2"><p align="center" class="hoja1">&nbsp;</p>
              <p align="center" class="titulo"><span class="titulo"><span class="ti"><span class="Titulos"><u>Soporte</u></span></span></span></p>
              <p align="center" class="hoja1">
                <input type="hidden" name="nombre_tecnico" id="nombre_tecnico" value="<?php echo $nombre_tecnico; ?>" />

              </p>
              <p align="center" class="hoja1"></p>              <div align="center" class="bodystyle"></div>              <div align="center" class="Titulos">Por favor ingrese el dato del empleado: </div></td>
          </tr>
          <tr>
            <td width="297" class="Estilo1"><div align="right"><strong>Nombre</strong></div></td>
            <td width="293" class="Texto1"><div align="left">
              <label for="nombre"></label>
              <input type="text" cols="30" name="nombre_soporte" id="nombre_soporte" size="50" />
            </div></td>
          </tr>
          <tr>
            <td height="21" class="Estilo1"><div align="right"><strong>&Aacute;rea</strong></div></td>
            <td class="Texto1"><div align="left">
              <select size="1" cols="30" id="area" name="area"  onchange = "javascript:lista(area.value); alert(area.value);">
				<option value="none">Seleccione un area</option>
				<?php
		      $reg = $area->consultar_todas_areas();
          $cantidad = $area->cantidad_todas_areas();
          $i=0;
				
					while ($i<$cantidad){
					?>
				<option value="<?= $reg[$i]["cod_area"]; ?>"><?php echo $reg[$i]["nombre_area"]; ?></option>
				<?php $i++;
				}
				?></select>
            </div></td>
          </tr>
          <tr>
            <td class="Estilo1"><div align="right"><strong>Gerencia</strong></div></td>
            <td class="Texto1"><div align="left">
              <input type="text" disabled="disabled" name="gerencia" id="gerencia" size="40" value="" />
            </div></td>
          </tr>
          <tr>
            <td height="21" class="Estilo1"><div align="right"><strong>Fecha</strong></div></td>
            <td class="Texto1"><div align="left">
            <input name="fecha" type="text" id="cal-field-2" value="dd/mm/aaa" size="10" />
            <input type="submit" name="Submit2" id="cal-button-2" value="..." />
            <script type="text/javascript">
            Calendar.setup({
              inputField    : "cal-field-2",
              button        : "cal-button-2",
              ifFormat      :    "%d/%m/%Y"
            });
            </script>
          </div></td>
          </tr>
          <tr>
            <td class="Estilo1"><div align="right"><strong>Tipo Soporte</strong></div></td>
            <td class="Texto1"><div align="left">
              <label for="tipo_soporte"></label>
              <label for="Area"></label>
              <select name="tipo_soporte" id="tipo_soporte">
                <option value="Telefonia" selected="selected">Telefonía</option>
                <option value="Redes">Redes</option>
                <option value="Soporte Tecnico">Soporte Tecnico</option>
                <option value="Actualización de Software">Actualizacion de Software</option>
                <option value="Configuración de Impresora">Configuracion de Impresora</option>
                <option value="Eliminación de virus">Eliminacioon de virus</option>
                <option value="Radio">Radio</option>
                </select>
              </div></td>
          </tr>
          <tr>
            <td class="Estilo1"><div align="right"><strong>Observaci&oacute;n</strong></div></td>
            <td class="Texto1"><div align="left">
              <textarea name="observacion" cols="35" id="observacion"></textarea>
            </div></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="2"><div align="center"><input name="enviar" type="submit" id="enviar" onClick="MM_validateForm('campo','','R');return document.MM_returnValue" value="Enviar" />              </div></td>
          </tr>
          </table>
      </form></td>
    </tr>
  </table>
</div>
</body>
</html>