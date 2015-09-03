<?php
session_start();
	if (empty($_SESSION['_Nombre']))
	{
		echo '<script language="Javascript">top.location.reload()</script>';
	}

    include ("../../Clases/conectar.php");
    include ("../../Clases/Soportes.php");
    include ("../../Clases/Areas.php");
    include ("../../Clases/Gerencias.php");

?>
<!DOCTYPE html>
<head>
<title>.::Sistemas y Telecomunicaciones Odebrecht::.</title>
<script type="text/javascript" src="../../jscalendar-1.0/calendar.js"></script>
<script type="text/javascript" src="../../jscalendar-1.0/calendar-setup.js"></script>
<script type="text/javascript" src="../../jscalendar-1.0/lang/calendar-es.js"></script>
<script type="text/javascript" src="../../calcular.js"></script>
<style type="text/css"> 
@import url("../../jscalendar-1.0/skins/aqua/theme.css"); .Estilo1 {font-weight: bold}
</style>

<link href="Nueva carpeta/titulos.css" rel="stylesheet" type="text/css" />
<link href="../../Estilos/Verdana.css" rel="stylesheet" type="text/css" />
</head>

<body class="titulos">
<div align="center">
  <table width="850" border="0" align="left">
    <tr>
      <td><form id="form1" name="form1" method="post" action="../Control/AnalizarBusqueda.php">
        <table width="850" border="0">
          <tr>
            <td height="36">
              <div align="center" class="big"><u>B&uacute;squeda</u></div>
          </tr>
          <tr>
            <td><div align="center" class="subbig"> Por favor seleccione el tipo de reporte a imprimir</div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="27"><div align="center" class="bodystyle">
              Mostrar reporte ordenado por<br>
                  <select name="menu2" id="menu2">
                <option value="none">Seleccione</option>
                <option value="1">Nombre</option>
                <option value="2">Area</option>
                <option value="3">Fecha</option>
                <option value="4">Tipo Soporte</option>
                <option value="5">Tecnico</option>
                  </select>
            </div></td>
          </tr>
          <tr>
            <td height="36"><label> </label></td>
            </tr>
          <tr>
            <td>
              </td>
          </tr>
          <tr>
          <td>
          <div align="center" class="big"><u>B&uacute;squeda Avanzada</u></div>
          </td>
            
          </tr>
          <tr>
            <td>
            <table width="850" border="0">
	         <tr class="subbig">
	           <td width="136"><div align="center">Nombre</div></td>
	           <td width="188"><div align="center">Desde</div></td>
	           <td width="188"><div align="center">Hasta</div></td>
               <td width="163"><div align="center">Area</div></td>
               <td width="158"><div align="center">Tipo Soporte</div></td>

	           </tr>
	         <tr>
	           <td>
               <div align="center">
              	<select size="1" cols="30" id="nombre" name="nombre">
					<option value="none">Seleccione</option>
					<?php

          $soporte= new soportes();
          $nombres=$soporte-> consultar_nombre_tecnico();
          $cantidad_tecnicos = $soporte -> cantidad_tecnicos();
          $i=0;
					while ($i < $cantidad_tecnicos)
          {
						$nombre_post=$nombres[$i]["nombre_tecnico"];
					?>
					<option value="<?= $nombre_post ?>"><?php echo $nombre_post;?></option>
					<?php $i++;
					}
					?>
                 </select>
	            </div>
                </td>
	           <td><div align="center">
            <input name="fecha" type="text" id="cal-field-2" size="10" />
            <input type="submit" name="Submit2" id="cal-button-2" value="..." />
            <script type="text/javascript">
            Calendar.setup({
              inputField    : "cal-field-2",
              button        : "cal-button-2",
              ifFormat      :    "%d/%m/%Y"

            });
            </script>
          </div></td>
	           <td><div align="center">
	             <input name="fecha2" type="text" id="cal-field-4" size="10" />
	             <input type="submit" name="Submit4" id="cal-button-4" value="..." />
	             <script type="text/javascript">
        	    Calendar.setup({
            	  inputField    : "cal-field-4",
	              button        : "cal-button-4",
                ifFormat      :    "%d/%m/%Y"
    	        });
        	    </script>
	             </div></td>
				<td width="163"><div align="center">
              	<select size="1" cols="10" id="area" name="area">
					<option value="none">Seleccione</option>
					<?php
					$i=1;

					$sql="SELECT area FROM sis_soporte WHERE TRUE GROUP BY area";
					$ejecuta=pg_query($sql);
					while ($reg = pg_fetch_object($ejecuta)){
					?>
					<option value="<?= $reg->area; ?>"><?php echo substr($reg->area,0,35);?></option>
					<?php $i++;
					}
					?>
                 </select>
	            </div></td>
               <td width="158"><div align="center">
              	<select size="1" cols="10" id="tipo" name="tipo">
					<option value="none">Seleccione</option>
					<?php
					$i=1;

					$sql="SELECT tipo_soporte FROM sis_soporte WHERE TRUE GROUP BY tipo_soporte";
					$ejecuta=pg_query($sql);
					while ($reg = pg_fetch_object($ejecuta)){
					?>
					<option value="<?= $reg->tipo_soporte;?>"><?php echo $reg->tipo_soporte;?></option>
					<?php $i++;
					}
					?>
                 </select>
	            </div></td>	           </tr>
            </table>
          </td>
          </tr>
          <tr>
            <td align="center"><span class="bodystyle">
              <input type="submit" name="enviar2" id="enviar2" value="Reporte" />
            </span></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
        </table>
      </form></td>
    </tr>
  </table>
</div>
</body>
</html>