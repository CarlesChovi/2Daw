<?php
require_once "elemento.php";
class cabecera extends elemento
{
	
	//En este caso no tendrá titulo
	function __construct()
	{
		$this->setTitulo("");	
	}
	
	//Funcion que define el menu de la cabecera
	function setMenu($numElementos)
	{
		$contador=1;
		$str="";
		$str=$str."<a href='index.php'>Home</a>";
		for($i=1;$i<=$numElementos;$i++){	
			$str=$str."<td><a href='pagina".$contador.".php'>Enlace".$i."</a></td>";
			$contador++;
		}
		$this->setContenido($str);
	}
	
}
?>