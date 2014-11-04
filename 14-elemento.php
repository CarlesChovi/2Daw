<?php
class elemento{
	//Variable que almacena el titulo del elemento
	public $titulo;
	//Variable que almacena el contenido del elemento
	public $contenido;
	
	//CONSTRUCTOR
	function __construct(){
		$this->titulo = "";
	}
	
	//Almacenamos en el contenido el código html a escribir public
	public function setContenido($str){
		$this->contenido=$str;
	}
	//Almacenamos en el titulo el codigo html a escribir
	public function setTitulo($str){
		$this->titulo=$str;
	}
	//Devolvemos el elemento
	function __toString(){
		return "<br>".$this->titulo."</br>".$this->contenido."</br>";
	}
}