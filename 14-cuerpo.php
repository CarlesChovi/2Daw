<?php
require_once "14-elemento.php";

class cuerpo extends elemento{
	
	//En este caso no tendra titulo
	function __construct(){
		$this->setTitulo("TABLA");
	}
	
	//Funcion que define la tabla
	function setTabla($filas,$columnas){
		$str="";
		$contador=1;
		
		$str="<table>";
		for($i=1;$i<=$filas;$i++){
			$str=$str."<tr>";
			for($j=1;$j<=$columnas;$j++){
				$str=$str."<td>".$contador++."</td>";
			}
			$str=$str."</tr>";
		}
		$str=$str."</table>";
		
		$this->setContenido($str);
	}
}
?>