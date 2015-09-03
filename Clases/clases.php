<?php
class Conexion  	
{
	private $_query;
	private $_consultado;
	private $_resultado;

	function Conectar($bd_host,$bd_user,$bd_password,$bd_base)
	{	
		$_con=mysql_connect($bd_host,$bd_user,$bd_password);
		mysql_select_db($bd_base,$_con);
	}
	
	function InsertarDatos($dirigido,$cargo,$cedula,$fecha,$hora,$cantidad,$codigo)
	{	
		
		$_query="insert into docu_solicitud (dirigido_a, institucion, cedula, fecha, hora, cantidad, codigo)values ('$dirigido','$cargo','$cedula','$fecha','$hora','$cantidad','$codigo')";
		$_consultado=mysql_query($_query);
		if($_consultado)
			{
				?> <script> alert("DATOS INSERTADOS"); </script> <?php
				echo '<script languaje="Javascript">location.href="registrado.html"</script>'; //MENSAJE DE COMPROVACION
			} 
	} 
	
}//fin de la clase

?>
		 



