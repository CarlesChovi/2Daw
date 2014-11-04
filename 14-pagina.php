<?php
require_once "14-cabecera.php";
require_once "14-cuerpo.php";
require_once "14-pie.php";

class pagina{
	
	public $titulo="TITULO DE LA PAGINA";
	private $cabecera,$cuerpo,$pie;
	
	function __construct(){
		
		$tris->cabecera = new cabecerea();
		$this->cabecera->setMenu(3);
		$tris->cuerpo = new cuerpo;
		$tris->cuerpo->setTabla(3,4);
		$this->pie = new pie;
		$this->pie->setPie();
	}
	
	function getPagina(){
		echo $this->cabecera.$this->cuerpo.$this->pie;
	}
}
?>