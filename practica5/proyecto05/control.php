<?php
//comprobamos si el usuario y la contraseña son correctos
if($_POST["usuario"]=="carles" && $_POST["contraseña"]=="carles"){
	//usuario y contraseña correctos
	//definimos sesión y guardamos datos
	session_start();
	$_SESSION["autentificado"]="SI";
	header("Location:lugares.php");
}else{
	//si son incorrectos lo redirigiremos al index
	header("Location:index.php?errorusuario=si");
}
?>