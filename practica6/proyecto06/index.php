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
	/*if(isset($_GET["salir"])){
		//Comprobamos la autentificacion
		if($_GET["salir"]=="SI"){
			setcookie("errores",0,time()+60);
			$auth->salir();
		}
	}*/

?>
<!--Cookies-->
<?php
	if(isset($_GET["errorusuario"])){
		if($_GET["errorusuario"]=="si"){
			if(!isset($_COOKIE["errores"])){
				setcookie("errores",0,time()+60);
			}else{
				setcookie("errores",$_COOKIE["errores"]+1,time()+60);
			}
		}
	}elseif(!isset($_GET["errorusuario"])&&(!isset($_COOKIE["errores"]))){
			setcookie("errores",1,time()+60);
	}
?>
<!--Cookies-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style>
#cssmen{
	float:right;
}
h3{
	float:right;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./css/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src='./js/script.js'></script>
<div id="navbar" class="navbar-collapse collapse">
<title>PROYECTO_6</title>
</head>
<body>

<?php

$pagina = new pagina();

//Comprobar SESSION autentificdo
if(isset($_SESSION["autentificado"])){
	if($_SESSION["autentificado"]=="SI"){
?>
	<a href="salir.php" id="cssmen">Salir de la sesión</a>
<?php
	}else{	
		//if(isset($_GET["errorusuario"])){
				//if($_GET["errorusuario"]=="si"){
					if(isset($_COOKIE["errores"])){
						if($_COOKIE["errores"]<=3){
							$pagina->setCuerpoContenido("Usuario y contraseña erroneos","Has errado ".$_COOKIE["errores"]." veces");
?>
                            <form method="post" action="control.php" id="cssmen">
                            <div class="form-group">
                            <input class="form-control" type="text" name="usuario" placeholder="Usuario">
                            <input class="form-control" type="password" name="contraseña" placeholder="Contraseña">
                            <button class="btn btn-success" type="submit" value="Entrar">Iniciar sesión</button>
                            </div>
                            </form>
<?php	
    					}else{
?>			
					<h3>3 minutos de espera para volver a intentarlo</h3>
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
				}
}
?>
</div>
<?php
	$pagina->setCabecera();
	/**
	*Filtra si hay contenido
	*/		
				if(isset($_GET["id"])){
					switch($_GET["id"]){
						case 1:
							$pagina->setCuerpoContenido("Inicio","Esta es una prueba de contenido");
						break;
						case 2:$pagina->setCuerpoContenidoLugares("Lugares Visitados");
						break;
						case 3:$pagina->setCuerpoContenido("Contacto","Estas en la página de contacto");
						break;
						case 4:$pagina->setCuerpoContenido("Error","Debes estar registrado para poder acceder");
						break;
						case 5:$pagina->setCuerpoContenidoPerfil();
						break;
						default:
						$pagina->setCuerpoContenido("Registro para acceder","Necesitas registrarte para poder ver este contenido");
						}
				}else{
					if(isset($_GET["errorusuario"])){
						if($_GET["errorusuario"]=="si"){
								if(isset($_COOKIE["errores"])){
								$pagina->setCuerpoContenido("Usuario y contraseña erroneos","Has errado ".$_COOKIE["errores"]." veces");	
								}
		}
	}
}
	$pagina->setPie();
	echo $pagina->getPagina();
?>
</body>
</html>