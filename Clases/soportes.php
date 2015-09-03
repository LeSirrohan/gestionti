<?php
class soportes extends conectar
{
	private $num_soporte, $nombre_soporte, $fecha,$tipo_soporte,$area,$nombre_tecnico,$observacion;
	private $fecha2;

	function AsignarValores()
	{
		$this->nombre_soporte='';
		$this->fecha='';
		$this->fecha2='';
		$this->tipo_soporte='';
		$this->area='';
		$this->nombre_tecnico='';
		$this->observacion='';
	}

	function asignarNombre($nombre_soporte)
	{
		$this->nombre_soporte = $nombre_soporte;
	}

	function asignarFecha($fecha)
	{
		$this -> fecha = parent::FechaPostgres($fecha);
	}

	function asignarFecha2($fecha2)
	{
		$this -> fecha2 = parent::FechaPostgres($fecha2);
	}


	function asignarTipoSoporte($tipo_soporte)
	{
		$this -> tipo_soporte = $tipo_soporte;
	}

	function asignarArea($area)
	{
		$this -> area = $area;
	}

	function asignarNombreTecnico($nombre_tecnico)
	{
		$this -> nombre_tecnico = $nombre_tecnico;
	}

	function asignarObservacion($observacion)
	{
		$this -> observacion = $observacion;
	}
	
	function devolverNombre()
	{
		return $this -> nombre_soporte;
	}

	function devolverFecha()
	{
		return $this -> fecha;
	}
	function devolverFecha2()
	{
		return $this -> fecha2;
	}
	function devolverNombreTecnico()
	{
		return $this -> nombre_tecnico;
	}

	function devolverObservacion()
	{
		return $this -> observacion;
	}

	function devolverTipoSoporte()
	{
		return $this -> tipo_soporte;
	}

	function devolverArea()
	{
		$sql= "select * from sis_area where cod_area='".$this->area."'";
		$ejecutar = parent::consultar($sql);
		$registros= parent::asociar($ejecutar);
		if($registros["id_area"])
		{
			return $registros["nombre_area"];
		}
		else
		{
			return false;
		}
	}

	function asignarNombreArea()
	{
		$sql= "select * from sis_area where cod_area='".$this->area."'";
		$ejecutar = parent::consultar($sql);
		$registros= parent::asociar($ejecutar);
		if($registros["id_area"])
		{
			$this->area=$registros["nombre_area"];
		}
		else
		{
			return false;
		}
	}



	function cargarSoporte()
	{
		$this->asignarNombreArea();
		$sql="
		INSERT INTO sis_soporte (nombre_soporte, fecha, tipo_soporte, area, nombre_tecnico, observacion) 
		VALUES	('".$this ->nombre_soporte."', '".$this ->fecha."', '".$this ->tipo_soporte."', '".$this ->area."','".$this ->nombre_tecnico."', '".$this ->observacion."')";
		$ejecutar=parent::consultar($sql);
		$numero_columnas=parent::num_columnas($ejecutar);
		if($ejecutar>0)
			return true;
		else
			return false;
	}

	function consultar_soporte()
	{
		$sql="select * from sis_soporte where cedula='".$this->cedula."'";
		$resultado=parent::consultar($sql);
		$todos_registros = parent::obtener_todo($resultado);
		if($todos_registros[0]['num_soporte'])
 		{
 			return $todos_registros;
 		}
 		else
 		{

 			return false;
 		}	
 	}
 	function consultar_nombre_tecnico()
 	{
		$sql="SELECT nombre_tecnico FROM sis_soporte WHERE TRUE GROUP BY nombre_tecnico";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["nombre_tecnico"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}


 	}

 	function cantidad_tecnicos()
	{
		$sql="SELECT nombre_tecnico FROM sis_soporte WHERE TRUE GROUP BY nombre_tecnico";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}

 	function consultar_fecha()
 	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY fecha ASC";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}


 	}
	
 	function cantidad_soportes_fechas()
	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY fecha ASC";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function consultar_nombre()
 	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY nombre_soporte";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;
 		}
 		else
 		{

 			return false;
 		}
 	}
 	function cantidad_soportes_nombres()
	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY nombre_soporte";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function consultar_tipo_soporte()
 	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY tipo_soporte";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}
 	}
 	function cantidad_tipo_soporte()
	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY tipo_soporte";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function consultar_areas()
 	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY area";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}
 	}
 	function cantidad_areas()
	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY area";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function consultar_nombres_tecnicos()
 	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY nombre_tecnico";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}
 	}
 	function cantidad_nombres_tecnicos()
	{
		$sql="SELECT * FROM sis_soporte WHERE TRUE ORDER BY nombre_tecnico";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
 	function cantidadObjetos()
	{
		$sql="select * from sis_soporte";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_nombre()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico= '".$this->nombre_tecnico."' ";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_busqueda_nombre()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico= '".$this->nombre_tecnico."' ";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_fechas()
	{
		$sql="SELECT * FROM sis_soporte WHERE (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_busqueda_fechas()
	{
		$sql="SELECT * FROM sis_soporte WHERE (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_areas()
	{
		$sql="SELECT * FROM sis_soporte WHERE area like '%".$this->area."%'";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_busqueda_areas()
	{
		$sql="SELECT * FROM sis_soporte WHERE area like '%".$this->area."%'";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_tipo_soporte()
	{
		$sql="SELECT * FROM sis_soporte WHERE tipo_soporte like '%".$this->tipo_soporte."%'";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_busqueda_tipo_soporte()
	{
		$sql="SELECT * FROM sis_soporte WHERE tipo_soporte like '%".$this->tipo_soporte."%'";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_nombre_fecha()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."'
		 AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_nombre_fecha()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."' 
		AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')";

		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_nombre_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."' 
		AND  area = '".$this->area."'
		ORDER BY fecha";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_nombre_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."' 
		AND  area = '".$this->area."'
		ORDER BY fecha";

		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_nombre_tipo()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."' 
		AND  tipo_soporte like '".$this->tipo_soporte."'
		ORDER BY fecha";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_nombre_tipo()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."' 
		AND  tipo_soporte = '".$this->tipo_soporte."'";

		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_nombre_area_fechas()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."'
		AND  area = '".$this->area."'
		AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')
		ORDER BY fecha";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_nombre_area_fechas()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."'
		AND  area like '".$this->area."'
		AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_nombre_tipo_fechas_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."'
		AND  tipo_soporte = '".$this->tipo_soporte."'
		AND  area = '".$this->area."'
		AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')
		ORDER BY fecha";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_nombre_tipo_fechas_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."'
		AND  tipo_soporte = '".$this->tipo_soporte."'
		AND  area = '".$this->area."'
		AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')
		ORDER BY fecha";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}

	function busqueda_nombre_tipo_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."'
		AND  tipo_soporte = '".$this->tipo_soporte."'
		AND  area = '".$this->area."'
		ORDER BY fecha";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_nombre_tipo_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE nombre_tecnico='".$this->nombre_tecnico."'
		AND  tipo_soporte = '".$this->tipo_soporte."'
		AND  area = '".$this->area."'";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_fechas_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE 
		area = '".$this->area."'
		AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')
		ORDER BY fecha";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_fechas_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE 
		area = '".$this->area."'
		AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')
		ORDER BY fecha";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	function busqueda_tipo_fechas()
	{
		$sql="SELECT * FROM sis_soporte WHERE  tipo_soporte = '".$this->tipo_soporte."'
		AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')
		ORDER BY fecha";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_tipo_fechas()
	{
		$sql="SELECT * FROM sis_soporte WHERE  tipo_soporte = '".$this->tipo_soporte."'
		AND  (fecha BETWEEN '".$this->fecha."' AND '".$this->fecha2."')
		ORDER BY fecha";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}

	function busqueda_tipo_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE tipo_soporte = '".$this->tipo_soporte."'
		AND  area = '".$this->area."'
		ORDER BY fecha";
		$ejecutar=parent::consultar($sql);
		$registros = parent::obtener_todo($ejecutar);
		if($registros[0]["num_soporte"])
 		{
 			return $registros;

 		}
 		else
 		{

 			return false;
 		}

	}
	function cantidad_tipo_area()
	{
		$sql="SELECT * FROM sis_soporte WHERE  tipo_soporte = '".$this->tipo_soporte."'
		AND  area = '".$this->area."'";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
}
?>