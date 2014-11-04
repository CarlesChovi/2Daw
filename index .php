<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Documento sin título</title>
	</head>

	<body>
	<table align="center" border="2">;

<?php
	
		for ($i=0;$i<=4;$i++){
		echo "<tr>";
		echo "<td>";
		echo "<img src='imagenes/pato1.jpg' alt='$i' height='120' width='120'/></br><a href='http://www.blogodisea.com/wp-content/uploads/2012/01/animales-graciosos-patos.jpg'>Foto1</a>";
		echo "</td>";
		echo "<td>";
		echo "<img src='imagenes/pato2.jpg' alt='$i' height='120' width='120'/></br><a href='http://www.imagenesgraciosas8.com/wp-content/uploads/2013/09/no-soy-simplemente-un-pato.jpg'>Foto2</a>";
		echo "</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>";
		echo "<img src='imagenes/pato3.jpg' alt='$i' height='120' width='120'/></br><a href='http://frasesconimagenes.net/wp-content/uploads/pictures/patos-jugando1.jpg?d6ddd5'>Foto3</a>";
		echo "</td>";
		echo "<td>";
		echo "<img src='imagenes/pato4.jpg' alt='$i' height='120' width='120'/></br><a href='http://4.bp.blogspot.com/-lxONKJSaUxE/TaINHIM7WeI/AAAAAAAAOLg/gtYI6Hd2F34/s1600/quelachi%2B%252824%2529.jpg'>Foto4</a>";
		echo "</td>";
		echo "</tr>";
				
		}
		
?>
</table>

	</body>
</html>
