<?php
require_once "14-elemento.php";

class cabecera extends elemento{
	
	//En este caso no tendrá titulo
	function __construct(){
		$tris->setTitulo("");
	}
	
	//Funcion que define el menu de la cabecera
	function setMenu($numElementos){
		
		$str="";
		for($i_0;$i<=$numElementos;$i++){
			$str=str."&nbsp;"."Enlace".$i;
		}
		$this->setContenido($str);
	}
}
?>