// JavaScript Document
function validar() 
{
	if (form1.usuario.value.length < 6) 
	{
    	alert("Escriba por lo menos 6 caracteres en el campo \"Usuario\".");
    	return (false);
	}
}