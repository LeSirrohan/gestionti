<?php
session_start();//contral de sesion;

include("../../Clases/conectar.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;
include("../../Clases/login.php");
include("../../Clases/empleados.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$_SESSION['_login']=$usuario;
$_SESSION['_password']=$clave;
//echo $usuario." ".$clave;
$login = new login();

$login->asignarLogin($usuario);
$login->asignarPassword($clave);

//$login->escribir_login()." ".$login->escribir_password();



if($login->autenticar_usuario())//verifica si es un usuario con cuenta;
{
	$resultado=$login->obtenerObjetos();
	
	$cedula=$resultado[0]['cedula'];
	$empleado= new empleados();

	//echo $cedula;
	$empleado->obtener_cedula($cedula);
	$reg2=$empleado->consultar_cedula_empleado();
	//echo "<br>".$empleado->escribir_nombre()." ".$empleado->escribir_apellido();

	$_SESSION['_Nombre']=$empleado->escribir_nombre();//alamacena el login en el arreglo de sesion;
	$_SESSION['_Apellido']=$empleado->escribir_apellido();//alamacena el login en el arreglo de sesion;
			
	//echo $_SESSION['_Nombre']." ".$_SESSION['_Apellido'];
	echo "Redireccionando, por favor, espere...";
	if($resultado[0]['tipo']=='Usuario')
		echo '<script languaje="Javascript">location.href="../../modulo_soporte/Vista/index2.php"</script>'; //Redireccionamiento
	else
		echo '<script languaje="Javascript">location.href="../../modulo_soporte/Vista/index3.php"</script>'; //Redireccionamiento*/
}
else
{
	?> <script> alert("Disculpe, Nombre de usuario o Clave incorrectos, por favor verifique"); </script> <?php
	echo '<script languaje="Javascript">location.href="../Vista/index.php"</script>'; //MENSAJE DE COMPROBACION;
}	
?>