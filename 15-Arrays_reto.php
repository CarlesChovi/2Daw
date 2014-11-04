<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php

	//Array multidimensional
			$comunidades=array("Cataluña"=>array("Barcelona","Lérida","Tarragona","Gerona"),
						"Com Valenciana"=>array("Castellón","Alicante","Valencia"));
			$capitales=array("España"=>"madrid","Francia"=>"paris","Italia"=>"roma");
			
			foreach ($comunidades as $indice => $valor){
				foreach ($valor as $provincia){
					echo ("Una provincia de $indice es $provincia<br>");
				}
			}
			
			foreach ($capitales as $indice => $valor){
				foreach ($valor as $capitales){
					echo ("La capital de $indice es $capitales<br>");
				
				}
			}
?>
<body>
</body>
</html>