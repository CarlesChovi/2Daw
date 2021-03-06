<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
		//Definición de array
		
		//de forma desordenada
		$ciudades[]="Valencia";
		$ciudades[]="Barcelona";
		$ciudades[]="Madrid";
		
		//de forma ordenada
		$provincias[0]="Castellon";
		$provincias[1]="Alicante";
		$provincias[2]="Valencia";
		
		//con la función array()
		$comunidades[]=array("Cataluña","Comunidad Valenciana","Madrid");
		
		//Una vez creados, los podemos mostrar
		foreach ($ciudades as $valor){
			echo ("Una ciudad es $valor <br>");
		}
		
		//tambien podemos definir los arrays con indices
		$capitales=array("España"=>"madrid","Francia"=>"paris","Italia"=>"roma");
		echo "La capital de España es $capitales[España]<br>";
		
		//En este caso es muy interesante el foreach
		foreach ($capitales as $indice => $valor) {
			echo ("La capital de $indice es $valor<br>");
		}
		
		//Multidimensionales
		$comunidades=array("Cataluña"=>array("Barcelona","Lérida","Tarragona","Gerona"),
					"Com Valenciana"=>array("Castellón","Alicante","Valencia"));
		
		foreach ($comunidades as $indice => $valor){
			foreach ($valor as $provincia){
				echo ("Una provincia de $indice es $provincia<br>");
			}
		}

?>
</body>
</html>