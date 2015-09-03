<?php
include ('class.ezpdf.php');
include ('conectar.php');	
$pdf =& new Cezpdf('LETTER');
$pdf->selectFont('Courier.afm');
$pdf->ezSetCmMargins(1,1,1,1);

$sql = "select * from soporte"; 
$consul=mysql_query($sql) or die (mysql_error());

      $ixx = 0;
  
      while($datatmp = mysql_fetch_assoc($consul)) {
          $ixx = $ixx+1;
		  $datos_tabla[] = array_merge($datatmp, array('num_soporte'=>$ixx));

      }

      $titulos_tabla = array(
	     	   'num_soporte'=>'<b>No </b>',
               'nombre_soporte'=>'<b>Nombre</b>',
			   'fecha'=>'<b>Fecha</b>',
               'tipo_soporte'=>'<b>Tipo Soporte/b>',
               'area'=>'<b>Area</b>',
			   'nombre_tecnico'=>'<b>Técnico</b>',
			   'obsevacion'=>'<b>Observación</b>'

			   );
      $opciones = array(
                      'shadeCol'=>array(0.8,0.8,0.8),
                      'xOrientation'=>'center',
                      'width'=>550
                  );
				  $pdf->ezImage("img.jpg", 0, 420, 'none', 'left');

      $pdf->ezTable($datos_tabla, $titulos_tabla, '', $opciones);
      $pdf->ezText("\n\n\n", 10);
      $pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
      $pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
      $pdf->ezStream();
?>