<?php
Class usuario extends empleados
{
	 var $id;
	 var $login;
	 var $password;
	 var $cedula;
	 var $tipo;
	 var $correo_electronico;
	 var $sql;

	 public function listarUsuario()
	 {
	 	$sql="select a.*, b.* FROM sis_usuario as a, sis_empleados as b where a.cedula=b.cedula"; //consulta a la BD
		$resultado=parent::consultar($sql);
		$todos_registros = parent::obtener_todo($resultado);
		if($todos_registros[0]['id'])
 		{
 			return $todos_registros;
 		}
 		else
 		{

 			return false;
 		}	
 	}
 	public function cantidadUsuarios()
	{
	 	$sql="select a.*, b.* FROM sis_usuario as a, sis_empleados as b where a.cedula=b.cedula"; //consulta a la BD
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	public function buscarCedula($cedula)
	{		
		$query="SELECT cedula FROM sis_usuario WHERE cedula='$cedula'";
		$resultado=parent::consultar($query);//consultar a la BD
		return $resultado;

	}
	public function insertarUsuario($usuario, $clave, $cedula, $tipo, $email)
	{		
		$query="INSERT INTO sis_usuario VALUES ('$usuario','$clave','$cedula','$tipo','$email')"; //insercion a la BD;
		$resultado=parent::consultar($query);//consultar a la BD
		return $resultado;

	}
}
?>