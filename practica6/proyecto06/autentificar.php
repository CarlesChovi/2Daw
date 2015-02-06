<?php
	class autentificar{
		
		function __construct(){
			if(session_status() == PHP_SESSION_NONE){
				session_start();
				if(!isset($_SESSION["autentificado"])) $_SESSION["autentificado"]="NO"; 
			}
		}
		
		public function security(){
			
			if($_SESSION["autentificado"] !="SI"){
				header("Location: index.php?id=4");
				exit();
			}else{
			}
		}
		
		public function isAuth(){
			if(isset($_SESSION["autentificado"])){
				if($_SESSION["autentificado"] != "SI"){
					return false;
			}else{
					return true;
			}
		}
		}
		
		public function salir(){
			session_unset();
			session_destroy();
		}
		
		public function checkAuth($usr,$pass){
			if($usr=="carles" && $pass=="carles"){
				$_SESSION["autentificado"]="SI";
				header ("Location:index.php");
			}else{
				header("Location:index.php?errorusuario=si");
			}
		}
		}
?>