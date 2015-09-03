<?
session_start();//contral de sesion;
echo $_SESSION['_login']." ".$_SESSION['_password']." ".$_SESSION['_Nombre']." ".$_SESSION['_Apellido']." ".$_SESSION['_NombreTecnico']." ";
echo $_SESSION['_Tipo']." ";
echo $_SESSION['_FechaInicial']." ";
echo $_SESSION['_FechaFinal']." ";

?>