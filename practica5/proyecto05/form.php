<?php
require_once "db.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROYECTO_5</title>
</head>

<body>
<?php
	$db=new db("localhost","root","3pro654,F","lugares");
	$db->conectar_base_datos();
	$db->setLugar($_POST["usuario"],$_POST["contraseña"]);
	foreach($_POST as $index=>$value){
		echo "<br>Campo enviado: ".index." con el valor: ".$value."</br>";
	}
?>
</body>
</html>