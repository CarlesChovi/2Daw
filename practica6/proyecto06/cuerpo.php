<?php
require_once "elemento.php";

	class cuerpo extends elemento
	{
		/**
		* Constructor
		*/
		function __construct(){
		}
		/**
		*funcion del proyecto 3(imagenes)
		function setTablaLugares($tit,$filas,$columnas){
			$this->setTitulo($tit);	
			
			$str="";
			$contador=1;
			$strFoto01="<img src=\"img/";
			$strFoto02=".jpg\" height=150 width=150>";
			
			$str="<table>";
			for($i=1;$i<=$filas;$i++){
				$str=$str."<tr>";
				for($j=1;$j<=$columnas;$j++){
					$str=$str."<td><img src='imagenes/imagen".$contador.".jpg' width='150' height='150'></td>";
				$contador++;
				}
				$str=$str."</tr>";
			}
			$str=$str."</table>";
			$this->setContenido($str);
		}
		*/
		
		function setPerfil(){
			
			$str= '<form class="form-signin" role="form" action="up.php" method="post" enctype="multipart/form-data">
			 <h2 class="form-signin-heading">Fichero que deseas subir</h2>
			<label for="inputFile" class="sr-only">Fichero</label>
			<input class="file" type="file" name="archivo" id="archivo"></input>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
		  </form>';
		 	$this->setTitulo('Perfil');
			$this->setContenido($str);
		}

		
		
		
		/**
		* Construye el cuerpo a partir de un texto simple
		*/
		function setContenidoSimple($tit,$str){
			$this->setTitulo($tit);	
			$this->setContenido($str);
		}
		
	}
?>