<?php
	session_start();
	if (!session_is_registered('nombre') && empty($_SESSION['nombre']))
	{
		?><script> alert("Disculpe, debe iniciar sesion para acceder"); </script> <?
		echo '<script languaje="Javascript">location.href="index.php"</script>';
	}
?>
<?php
$_SESSION['brapcamp']=$camp;
$camp=" ";
if($parametro!='nombre'&&$parametro!='apellido')
header ("Location:BusquedaRapCed.php");

?>