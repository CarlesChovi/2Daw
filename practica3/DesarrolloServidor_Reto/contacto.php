<?php
	require "pagina.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./css/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
 <script src="./js/script.js"></script>
<title>PROYECTO_3</title>
</head>
<?php
	$pagina = new pagina();
	$pagina->setCabecera();
	$pagina->setCuerpoContenido("Contacto","Para ponerse en contacto conmigo, enviar correo a <mail_to:46Chovi9@gmail.com>");
	$pagina->setPie();
	echo $pagina->getPagina();
?>

<body>
</body>
</html>