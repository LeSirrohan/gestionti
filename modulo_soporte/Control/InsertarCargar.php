<?php
session_start();

	if (empty($_SESSION['_Nombre']))
	{
		?><script> alert("Disculpe, debe iniciar sesion para acceder"); </script> <?php
		echo '<script language="Javascript">top.location.reload()</script>';//Funcion para recargar la página
	}
include ("../../Clases/conectar.php");
include ("../../Clases/soportes.php");
include ("../../Clases/areas.php");

	$areas = new areas();
	$soporte= new soportes();


//echo $tecnico;

$soporte->asignarNombre($_POST["nombre_soporte"]);
$soporte->asignarArea($_POST["area"]);
$soporte->asignarFecha($_POST["fecha"]);
$soporte->asignarTipoSoporte($_POST["tipo_soporte"]);
$soporte->asignarNombreTecnico($_SESSION['_Nombre']." ".$_SESSION['_Apellido']);
$soporte->asignarObservacion($_POST["observacion"]);

//echo $nombre_soporte." ".$area." ".$fecha." ".$tipo_soporte." ".$tecnico." ".$observacion;

//echo $soporte->devolverNombre()." ".$soporte->devolverArea()." ".$soporte->devolverFecha()." ".
//$soporte->devolverTipoSoporte()." ".$soporte->devolverNombreTecnico()." ".$soporte->devolverObservacion()."<br>";

$insertar = $soporte ->cargarSoporte();

if($insertar)
	{
	?>
		<link href="../../Estilos/Verdana.css" rel="stylesheet" type="text/css" />
    	<style type="text/css">
    	.alineacion {
			text-align: center;
		}
    	</style>
	<table width="550" border="0" align="center">
	  	<tr >
	  	  <td height="99" class="bodystyle"><div align="center" class="bodystyle">
	  	    <p align="center" class="big"><u>Mensaje</u></p>
	  	    <p>Datos insertados correctamente.<a href="MensajeIndex.html" target="contenido"></a></p>
	      <a href="Cargar.php" target="contenido"></a> </div></td>
	  	<tr class="alineacion" >
	  	  <td height="23" class="bodystyle"><a href="../Vista/Cargar.php" target="contenido">Regresar</a></td>
   	</table>
<?php 	}	
else
{
	?>
	<table width="550" border="0" align="center">
	  <tr >
	    <td height="99" class="bodystyle"><div align="center" class="bodystyle">
	      <p align="center" class="big"><u>Mensaje</u></p>
	      <p>Datos no insertados correctamente.<a href="MensajeIndex.html" target="contenido"></a></p>
	      <a href="Cargar.php" target="contenido"></a></div></td>
	  </tr>
	  <tr class="alineacion" >
	    <td height="22" class="bodystyle"><a href="../Vista/Cargar.php" target="contenido">Regresar</a></td>
	  </tr>
	</table>

<?php 	}
//echo $tecnico;


	?>