<?php
require_once "elemento.php";

class cuerpo extends elemento
{
	
	//En este caso no tendrá titulo
	function __construct()
	{
		$this->setTitulo("FOTOGRAFIAS");	
	}
	
	//Funcion que define la tabla
	function setTabla($filas,$columnas)
	{
		$str="";
		$contador=1;
		
		$str="<table>";
		for($i=1;$i<=$filas;$i++)
		{
			$str=$str."<tr>";
			for($j=1;$j<=$columnas;$j++)
			{
				$str=$str."<td><img src='imagenes/imagen".$contador.".jpg' width='150' height='150'></td>";
				$contador++;
			}
			$str=$str."</tr>";
		}
		$str=$str."</table>";
		
		$this->setContenido($str);
	}
	
}
?>

