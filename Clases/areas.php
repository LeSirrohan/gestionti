<?php
class areas extends conectar
{
	private $id_area, $nombre_area, $cod_area,$cod_ger;


	function consultar_areas()
	{
		$sql="select * from sis_area as a, sis_gerencia as b where a.cod_ger=b.cod_gerencia";
		$resultado=parent::consultar($sql);
		$todos_registros = parent::obtener_todo($resultado);
		if($todos_registros[0]['id_area'])
 		{
 			return $todos_registros;
 		}
 		else
 		{

 			return false;
 		}	
 	}
 	function cantidad_areas()
	{
		$sql="select * from sis_area as a, sis_gerencia as b where a.cod_ger=b.cod_gerencia";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	
 	function cantidadObjetos()
	{
		$sql="select * from sis_soporte";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function asignarArea($area)
	{
		$this->area=$area;
	}
	function devolverArea()
	{
		return $this -> area;
	}

	function consultar_area()
	{
		$sql="SELECT * FROM sis_area WHERE cod_area='$this->area'";
		$resultado=parent::consultar($sql);
		$todos_registros = parent::obtener_todo($resultado);
		if($todos_registros[0]['id_area'])
 		{
 			return $todos_registros;
 		}
 		else
 		{

 			return false;
 		}	
	}
	function obtener_nombre_areas()
	{
		$sql="SELECT * FROM sis_area WHERE cod_area='$this->area'";
		$resultado=parent::consultar($sql);
		$registro = parent::obtener_objetos($resultado);
		if($registro[0]['id_area'])
 		{
 			$this->nombre_area = $registro[0]['nombre_area'];
 			return $this->nombre_area;
 		}
 		else
 		{

 			return false;
 		}	
	}
	function consultar_todas_areas()
	{
		$sql="SELECT * FROM sis_area WHERE TRUE ORDER BY nombre_area";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["id_area"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}
	}
	 function cantidad_todas_areas()
	{
		$sql="SELECT * FROM sis_area WHERE TRUE ORDER BY nombre_area";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	
}
?>