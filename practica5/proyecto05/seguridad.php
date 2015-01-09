<?php
//inicio sesión
session_start();

//Comprueba su el usuario se ha autentificado
if($_SESSION["autentificado"] !="SI") {
	//si no es correcto el usuario, se redirecciona a la pagina de autentificacion
	header("Location: index.php");
	//y también salimos del script
	exit();
}
?>