<?php
require_once "cabecera.php";
require_once "cuerpo.php";
require_once "pie.php";
require "db.php";


	class pagina{
		private $cabecera,$cuerpo,$pie;
		
		/**
		* Constructor
		*/
		function __construct(){
			$this->cabecera = new cabecera();
			$this->cuerpo = new cuerpo();
			$this->pie = new pie();
		}
		
		function setCabecera(){
			$this->cabecera->construirMenu();
		}

		function setCuerpoContenido($titulo,$str){
			$this->cuerpo->setContenidoSimple($titulo,$str);
		}
		
		function setCuerpoContenidoPerfil(){
			$this->cuerpo->setPerfil();
		}
		
		function setCuerpoContenidoLugares($tit){
			$db=new db("localhost","root","3pro654,F","lugares");
			$db->conectar_base_datos();
			$this->cuerpo->setContenidoSimple($tit,$db->getLugares());
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