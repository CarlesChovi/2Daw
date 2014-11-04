<?php
	class elemento{

		public $titulo;
		/**
		* contenido del elemento
		*/
		public $contenido;
		
		/**
		* Constructor
		*/
		function __construct(){
			$this->titulo = "" ;
		}
		
		/**
		* Almacena el string
		*/
		public function setContenido($str){
			$this->contenido=$str;
		}
		public function setTitulo($str){
			$this->titulo="<h1>".$str."</h1>";
		}	
		

		function __toString(){
			return "</br>".$this->titulo."</br>".$this->contenido."</br>";
		}
	}
?>