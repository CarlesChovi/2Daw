 <?php
	require_once "elemento.php";
	
	class cabecera extends elemento
	{
		
		private $menu=array(
			"home"=>array(
					"txt"=>"Inicio",
					"url"=>"http://192.168.56.1/Daw/practica5/proyecto05/index.php?id=1"
					),
			"Lugares"=>array(
					"txt"=>"Lugares",
					"url"=>"http://192.168.56.1/Daw/practica5/proyecto05/index.php?id=2"
					),
			"contacto"=>array(
					"txt"=>"Contacto",
					"url"=>"http://192.168.56.1/Daw/practica5/proyecto05/index.php?id=3"
					),
			"superdeporte"=>array(
					"txt"=>"Superdeporte",
					"url"=>"http://www.superdeporte.es/"
					)
		);
		
		/*
		* Constructor
		*/
		function __construct()
		{
			$this->setTitulo("");	
		}
		
		/**
		* Cambia la direccion http del enlace del menu
		*/	
		function setDireccion($elementoMenu,$direccionWeb){
			$elemento=$this->menu[$elementoMenu];
			$elemento["url"]=$direccionWeb;
		}
		
		/**
		* Muestra el menu a partir del array
		*/	
		function construirMenu()
		{
			$menu="<div id='cssmenu'><ul>";
			foreach ($this->menu as $elementos) {
				$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["txt"]."</a></li>";
			}		
			$menu=$menu."</ul></div>";
			$this->setContenido($menu);
			}

		
	}
?>