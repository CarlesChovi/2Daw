<?php
require_once "cabecera.php";
require_once "cuerpo.php";
require_once "pie.php";

	class pagina{
		private $cabecera,$cuerpo,$pie;
		
		/**
		* Constructor
		*/
		function __construct(){
			$this->cabecera = new cabecera();
			$this->cuerpo = new cuerpo();
			$this->pie = new pie;
		}
		
		function setCabecera(){
			$this->cabecera->construirMenu();
		}

		function setCuerpoContenido($titulo,$str){
			$this->cuerpo->setContenidoSimple($titulo,$str);
		}
		
		function setCuerpoFotos($titulo,$numFilas,$numColumnas){
		$this->cuerpo->setTablaFotos($titulo,$numFilas,$numColumnas);
		}

		function setPie(){
			$this->pie->setPie();
		}
	
		function getPagina()
		{
			return $this->cabecera.$this->cuerpo.$this->pie;
		}
	}
?>