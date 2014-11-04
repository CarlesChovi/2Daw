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