<?php
	session_start();
	session_unset();
	session_destroy();
	setcookie("errores",0,time()+60);
	
	header("Location:index.php");
	//y también salimos del script
	exit();

?>
