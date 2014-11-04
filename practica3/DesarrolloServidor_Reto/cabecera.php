 <?php
	require_once "elemento.php";
	
	class cabecera extends elemento
	{
		
		private $menu=array(
			"home"=>array(
					"txt"=>"Inicio",
					"url"=>"http://192.168.56.1/Daw/practica3/DesarrolloServidor_Reto/index.php"
					),
			"fotos"=>array(
					"txt"=>"submenu",
					"titulo"=>"Paises",
					"url"=>"#",
					"submenu"=>array(
						"Africa"=>array("txt"=>"Africa",
										"url"=>"http://192.168.56.1/Daw/practica3/DesarrolloServidor_Reto/fotos.php"),
						"Europa"=>array("txt"=>"Europa",
										"url"=>"http://192.168.56.1/Daw/practica3/DesarrolloServidor_Reto/fotos.php")
						)
			),
			"contacto"=>array(
					"txt"=>"Contacto",
					"url"=>"http://192.168.56.1/Daw/practica3/DesarrolloServidor_Reto/contacto.php"
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
			$this->setTitulo();	
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
				/**
				*comparamos dentro del array de menu si la etiqueta es submenu o no
				*/
				if(strcmp($elementos["txt"],"submenu")==0)
				{
					$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["titulo"]."</a>";
					$menu=$menu."<ul>";
					foreach ($elementos["submenu"] as $submenu)
					{
						$menu=$menu."<li><a href=".$submenu["url"].">".$submenu["txt"]."</a></li>";
					}
					$menu=$menu."</ul></li>";
				}else{
					$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["txt"]."</a></li>";
				}
			}
			$menu=$menu."</ul></div>";
			$this->setContenido($menu);
		}

		
	}
?>