 <?php
	require "pagina.php";
	require_once "autentificar.php";



	$auth = new autentificar();
    //Comprobamos la seguridad siempre que no estemos en inicio o contacto
	if(isset($_GET["id"])){
		if($_GET["id"]==2){
			$auth->security();
		}
	}
	if(isset($_GET["autentificar"])){
		//Comprobamos la autentificacion
		if($_GET["autentificar"]=="SI"){
			$auth->checkAuth($_POST["Usuario"],$_POST["Password"]);
		}
	}
	if(isset($_GET["salir"])){
		//Comprobamos la autentificacion
		if($_GET["salir"]=="SI"){
			$auth->salir();
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style>
#cssmen{
	float:right;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./css/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
 <script src="./js/script.js"></script>
<div id="navbar" class="navbar-collapse collapse">

<?php
	//en caso de que el usuario sea incorrecto
	/*if(isset($_GET["errorusuario"])){
		if($_GET["errorusuario"]=="si"){
			echo "<h3 color='#aaoooo'>Usuario y contraseña incorrectos</h3>";
		}
	}*/
?>
<?php
//Comprobar SESSION autentificdo

if(isset($_SESSION["autentificado"])){
	if($_SESSION["autentificado"]="SI"){
?>
	<a href="salir.php" id="cssmen">Salir de la sesión</a>
<?php
	}else{	
?>
        <form method="post" action="control.php" id="cssmen">
        <div class="form-group">
        <input class="form-control" type="text" name="usuario" placeholder="Usuario">
        <input class="form-control" type="password" name="contraseña" placeholder="Contraseña">
        <button class="btn btn-success" type="submit" value="Entrar">Iniciar sesión</button>
        </div>
        </form>
<?php
	}
}else{
?>
    <form method="post" action="control.php" id="cssmen">
    <div class="form-group">
    <input class="form-control" type="text" name="usuario" placeholder="Usuario">
    <input class="form-control" type="password" name="contraseña" placeholder="Contraseña">
    <button class="btn btn-success" type="submit" value="Entrar">Iniciar sesión</button>
    </div>
    </form>
<?php
}
?>
<title>PROYECTO_5</title>
</head>

<?php
	$pagina = new pagina();
	$pagina->setCabecera();
	/**
	*Filtra si hay contenido
	*/
	if(isset($_GET["id"])){
		switch($_GET["id"]){
			case 1:$pagina->setCuerpoContenido("Inicio","Esta es una prueba de contenido");
			break;
			case 2:$pagina->setCuerpoContenidoLugares("Lugares Visitados");
			break;
			case 3:$pagina->setCuerpoContenido("Contacto","Estas en la página de contacto");
			break;
			default:
			$pagina->setCuerpoContenido("Registro para acceder","Necesitas registrarte para poder ver este contenido");
		}
	}else{
		$pagina->setCuerpoContenido("Registro para acceder","Usuario y contraseña incorrectos");		
	}
	$pagina->setPie();
	echo $pagina->getPagina();
?>

<body>
</body>
</html>