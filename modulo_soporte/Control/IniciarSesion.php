<?php
session_start();//contral de sesion;
include("../../Clases/conectar.php");//trae datos necesarios para establecer la conexion del archivo configuracion.php;
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$_SESSION['_login']=$usuario;
$_SESSION['_password']=$clave;
//echo $usuario." ".$clave;
$conexion = new conexion();
$conectar = $conexion->conectar();
$query="SELECT * FROM usuario where login='$usuario' and password='$clave'"; //consulta a la BD;
$result=mysql_query($query);//consultar a la BD;

if(mysql_num_rows($result)>0)//verifica si es un usuario con cuenta;
{
	$reg=mysql_fetch_object($result);
	echo $reg->cedula;
	$query2="SELECT * FROM empleados WHERE cedula='$reg->cedula'"; //consulta a la BD;
	$result2=mysql_query($query2);//consultar a la BD
	$reg2=mysql_fetch_object($result2) ;
	$nombre=$reg2->Nombre;
	$_SESSION['_Nombre']=$reg2->Nombre;//alamacena el login en el arreglo de sesion;
	$_SESSION['_Apellido']=$reg2->Apellido;//alamacena el login en el arreglo de sesion;

	if($reg->tipo=='Usuario')
		header("Location:../Vista/Index2.php");//redireccionamiento;
	else
	if($reg->tipo=='Administrador')//verifica que tipo de empleado (depende la vista a mostrar)cambiar luego por numero;
		header("Location:../Vista/Index3.php");//redireccionamiento;	
}
else
{
	?> <script> alert("Disculpe, Nombre de usuario o Clave incorrectos, por favor verifique"); </script> <?php
	echo '<script languaje="Javascript">location.href="../Vista/index.php"</script>'; //MENSAJE DE COMPROBACION;
}	
?>