<?php
  session_start();
  if (empty($_SESSION['_login']))
  {
    ?><script> alert("Disculpe, debe iniciar sesion para acceder"); </script> <?php
    echo '<script language="Javascript">top.location.reload()</script>';
  }
?>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<table width="820" align="center">
  <tr class="Estilo3">
        <td colspan="2" bgcolor="#FFFFFF" align="center"><a target="_NEW" href="../../modulo_reportes/pdfphp/php-pgsql.php">Imprimir PDF</a></td>
        <td colspan="2" bgcolor="#FFFFFF" align="center"><a href="../../modulo_reportes/pdfphp/php-excel.php">Imprimir Excel</a></td>
        <td colspan="2" bgcolor="#FFFFFF" align="center"><a href="../Vista/Busqueda.php">Regresar</a></td>

   <tr bgcolor="#99CCFF" class="Estilism" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
       <td width="170"><div align="center">Nombre</div></td>
       <td width="120"><div align="center">Area</div></td>
       <td width="120"><div align="center">Tipo Soporte</div></td>
       <td width="100"><div align="center">Fecha</div></td>
       <td width="140"><div align="center">Tecnico</div></td>
       <td width="170"><div align="center">Observacion</div></td>
    </tr>
<?php
/*require 'clases.php'; 						
$miconexion = new Conexion; */
    include ("../../Clases/conectar.php");
    include ("../../Clases/Soportes.php");
  $soporte = new soportes();

  $reg=$soporte->consultar_nombre();
  $cantidad_registros = $soporte->cantidad_soportes_nombres();
if($cantidad_registros<=0)
{
  echo "<script> alert('Disculpe usted no posee solicitudes para listar'); </script>";      
  echo '<script languaje="Javascript">location.href="MensajeIndex.html"</script>'; 
}
else 
{
  $i=0;
  while ($i<$cantidad_registros)
  {
    
    ?>
      
   
      <tr bgcolor="#99FFFF" class="Estilo3">
        <td><div align="center"><?php echo $reg[$i]["nombre_soporte"];?></div></td>
        <td><div align="center"><?php echo $reg[$i]["area"];?></div></td>
        <td><div align="center"><?php echo $reg[$i]["tipo_soporte"];?></div></td>
        <td><div align="center"><?php echo $soporte->PostgresFecha($reg[$i]["fecha"]);?></div></td>
        <td><div align="center"><?php echo $reg[$i]["nombre_tecnico"];?></div></td>
        <td><div align="center"><?php echo $reg[$i]["observacion"];?></div></td>

    <?php
	  //echo $reg->Total." ";
	  //echo $total;
    $i++;
  }
}

?>
      
  </table>
