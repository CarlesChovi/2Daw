<?php
	session_start();
	session_unset();
	session_destroy();
	
	
	header("Location:index.php");
	//y también salimos del script
	exit();

?>
