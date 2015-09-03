<?php
class empleados extends conectar
{
	var $id_empleados, $nombre, $apellido,$cedula;


	function autenticar_cedula()
	{
		$sql="select * from sis_empleados where cedula='".$this->cedula."'";
		$ejecutar=parent::consultar($sql);
		$numero_columnas=parent::num_columnas($ejecutar);
		if($numero_columnas>0)
			return true;
		else
			return false;
	}

	function consultar_cedula_empleado()
	{
		$sql="select * from sis_empleados where cedula='".$this->cedula."'";
		$resultado=parent::consultar($sql);
		$todos_registros = parent::obtener_todo($resultado);
		if($todos_registros[0]['id_empleados'])
 		{
 			$this->nombre=$todos_registros[0]['nombre'];
 			$this->apellido=$todos_registros[0]['apellido'];
 		}
 		else
 		{

 			return false;
 		}	
 	}
 	function cantidadObjetos()
	{
		$sql="select * from sis_empleados";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function obtener_nombre($nombre)
	{
		$this->nombre=$nombre;
	}

	function obtener_apellido($apellido)
	{
		$this->apellido=$apellido;
	}

	function escribir_nombre()
	{
		return $this->nombre;
	}

	function escribir_apellido()
	{
		return $this->apellido;
	}

	function obtener_cedula($cedula)
	{
		$this->cedula=$cedula;
	}
	
}
?>