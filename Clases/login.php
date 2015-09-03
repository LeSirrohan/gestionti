<?php
class login extends conectar
{
	private $id_usuario, $login, $password,$cedula,$correo;


	function autenticar_usuario()
	{
		$sql="select * from sis_usuario where login='".$this->login."' and password='".$this->password."'";
		$ejecutar=parent::consultar($sql);
		$numero_columnas=parent::num_columnas($ejecutar);
		if($numero_columnas>0)
			return true;
		else
			return false;
	}

	function obtenerObjetos()
	{
		$sql="select * from sis_usuario where login='".$this->login."' and password='".$this->password."'";
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
 	function cantidadObjetos()
	{
		$sql="select * from sis_usuario";
		$resultado=parent::consultar($sql);

		return parent::num_columnas($resultado);
	}
	
	function num_columnas($query)
	{
		parent::num_columnas($query);
	}

	function asignarLogin($login)
	{
		$this->login=$login;
	}

	function asignarPassword($password)
	{
		$this->password=$password;
	}

	function escribir_login()
	{
		echo $this->login;
	}

	function escribir_password()
	{
		echo $this->password;
	}

	function obtener_cedula($cedula)
	{
		$this->cedula=$cedula;
	}
	
}
?>