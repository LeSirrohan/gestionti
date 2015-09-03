<?php


class conectar
{
	private $driver, $host, $dbname, $port, $user, $clave,$recurso;
	function obtenerValores()
	{
		$this->driver="pgsql";
		$this->host="localhost";
		$this->dbname="sisreportes";
		$this->port="5432";
		$this->user="hloreto";
		$this->clave="Odebrecht2011";

	}
	function conectar()
	{
		$this->obtenerValores();
		$this->conexion = pg_connect("host='$this->host' dbname='$this->dbname' user='$this->user' password='$this->clave'");
	}
	function obtener_objetos($recurso)
	{
		return pg_fetch_object($recurso);
	}
	function asociar($recurso)
	{
		return pg_fetch_assoc($recurso);
	}
	function obtener_array($recurso)
	{
		return pg_fetch_array($recurso);
	}
	function num_columnas($query)
	{
		return pg_num_rows($query);
	}
	function desconectar_bd()
	{
		pg_close();
	}
	function consultar($sql)
	{
		 return pg_query($sql);
	}
	function obtener_todo($sql)
	{
		return pg_fetch_all($sql);
	}		
	function FechaPostgres($fecha)
	{
		$otra_fecha= explode("/", $fecha);// en la posición 1 del arreglo se encuentra el mes en texto.. lo comparamos y cambiamos
	  //$buena= $otra_fecha[0]."/".$otra_fecha[1]."/".$otra_fecha[2];// volvemos a armar la fecha

		$buena= $otra_fecha[2]."-".$otra_fecha[1]."-".$otra_fecha[0];// volvemos a armar la fecha
	  	return $buena;  
	}
	function PostgresFecha($fecha)
	{
		$otra_fecha= explode("-", $fecha);// en la posición 1 del arreglo se encuentra el mes en texto.. lo comparamos y cambiamos
	  //$buena= $otra_fecha[0]."/".$otra_fecha[1]."/".$otra_fecha[2];// volvemos a armar la fecha
		$buena= $otra_fecha[2]."-".$otra_fecha[1]."-".$otra_fecha[0];// volvemos a armar la fecha
	  	return $buena;  
	}

}
 ?>
