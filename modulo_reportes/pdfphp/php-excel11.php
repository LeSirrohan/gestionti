<?php
session_start();
include ("../../Clases/conectar.php");
$conexion = new Clsconexion_bd();
$conectar = $conexion->conexion();
$nombreXLS = date("d-m-Y_his");
	$_nombre=$_SESSION['_NombreTecnico'];
	$area=$_SESSION['_Area'];
	$sql="SELECT *
FROM soporte
WHERE area LIKE '%$area%'
AND nombre_tecnico LIKE '%$nombre%'";
 	$con=pg_query($sql);

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=REPORTES_GestionTI_".$nombreXLS.".xls");
echo '<table width="820" align="center" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
	   <tr class="Estilism">
    	   <td width="126" bgcolor="#99CCFF"><div align="center">Nombre</div></td>
	       <td width="174" bgcolor="#99CCFF"><div align="center">&Aacute;rea</div></td>
    	   <td width="118" bgcolor="#99CCFF"><div align="center">Tipo Soporte</div></td>
		   <td width="93" bgcolor="#99CCFF"><div align="center">Fecha</div></td>
		   <td width="130" bgcolor="#99CCFF"><div align="center">T&eacute;cnico</div></td>
		   <td width="151" bgcolor="#99CCFF" align="center"><div align="center">Observaci&oacute;n</div></td>
		</tr>';
if(pg_num_rows($con)<=0)
{
	?>
<script> alert("No hay nombres seleccionados"); </script>
      <?
	echo '<script languaje="Javascript">location.href="MensajeIndex.html"</script>'; 
}
if (pg_num_rows( $con) >0)
while ($reg = pg_fetch_object($con))
{
    echo '<tr class="Estilo3">';
	echo '<td bgcolor="#99FFFF"><div align="center">'.$reg->nombre_soporte.'</div></td>';
	echo '<td bgcolor="#99FFFF"><div align="center">'.$reg->area.'</div></td>';
	echo '<td bgcolor="#99FFFF"><div align="center">'.$reg->tipo_soporte.'</div></td>';
	echo '<td bgcolor="#99FFFF"><div align="center">'.$reg->fecha.'</div></td>';
    echo '<td bgcolor="#99FFFF"><div align="center">'.$reg->nombre_tecnico.'</div></td>';
    echo '<td bgcolor="#99FFFF"><div align="center">'.$reg->observacion.'</div></td>';
	echo '</tr>';
	  //echo $reg->Total." ";
	  //echo $total;
}//} 
  //    */
	echo '</table>';
unset($_SESSION['_NombreTecnico']);
unset($_SESSION['_Area']);
?>

