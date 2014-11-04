<?php
require_once "14-elemento.php";

class pie extends elemento{
	
	//En este caso no tendrá titulo
	function __construct(){
		$tris->setTitulo("");
	}
	
	//Funcion que define el menu de la cabecera
	function setPie(){
		$str="";
		$str="ahr><center>Creado por Carles Choví</center></hr>";
		$this->setContenido($str);
	}
}
?>