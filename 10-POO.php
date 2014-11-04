<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
//Definimos una clase plantilla
class layout{
	//Definimos dentro de la clase una variable
	var $titulo="TITULO DE LA PAGINA 2";
	//Establecemos una funcion
	function getCabecera(){
		return $this->titulo;
	}
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
	$pagina = new layout();
	
	echo $pagina->getCabecera();
?>
<body>
</body>
</html>
