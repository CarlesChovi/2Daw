<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
		//Todos los tipos de varialbes
		//ENTEROS
		$numero_uno=1;
		$numero_dos=2;
		$numero_tres=3;
		$numero_negativo=-50;
		
		//Coma flotante
		$decimal=2.345;
		
		//Cadenas
		$frase="Esra es una frase completa";
		
		//Boolean
		$verdadero=TRUE;
		
		//Constante
		define("PI",3.14);
		
		?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
	
		//Sacaremos por pantalla las variables creadas, con su correspondiente texto y linea
		echo "la variable numero_uno contiene: $numero_uno<br/>";
		echo "la variable numero_dos contiene: $numero_dos<br/>";
		echo "la variable numero_tres contiene: $numero_tres<br/>";
		echo "la variable numero_negativo contiene: $numero_negativo<br/>";
		echo "la variable decimal contiene: $decimal<br/>";
		echo "la variable frase contiene: $frase<br/>";
		echo "la variable verdadero contiene: $verdadero<br/>";
		echo "la variable Pi contiene: ".PI."<br/>";
	?> 

</body>
</html>
