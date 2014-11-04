<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
	//Establecemos las variables incluso fuera del html para comprovar que el servidor lo ejecuta igual
	$diaSemana=date("w");
	$diaMes=date("d");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<h3>DIA MES</h3>
    <?=$diaMes?>
    <?php
		if($diaMes<=15){
			echo "Primera quincena";
		}else{
			echo "Segunda quincena";
		}
	?>
    <h3>DIA SEMANA</h3>
     <?=$diaSemana?>
    <?php
	if ($diaSemana == 0) {
		echo "El dia es Domingo";
	}else if ($diaSemana == 1) {
		echo "El dia es Lunes";
	}else if ($diaSemana == 2) {
		echo "El dia es Martes";
	}else if ($diaSemana == 3) {
		echo "El dia es Miercoles";
	}else if ($diaSemana ==4) {
		echo "El dia de la semana es Jueves";
	}else if ($diaSemana ==5) {
		echo "El dia de la semana es Viernes";
	}else if ($diaSemana ==6) {
		echo "El dia de la semana es Sabado";
	}
	?>
</body>
</html>
