<?php

class db{
	
	private $servidor;
	private $usuario;
	private $pass;
	private $base_datos;
	private $descriptor;
	private $conectado;
	private $info;
	
	function __construct($servidor,$usuario,$pass,$base_datos){
		$this->servidor=$servidor;
		$this->usuario=$usuario;
		$this->pass=$pass;
		$this->base_datos=$base_datos;
		$this->contenido=false;
		$this->info="";
	}
	
	public function conectar_base_datos(){
	
		$this->descriptor=new mysqli($this->servidor,$this->usuario, $this->pass, $this->base_datos);
		if($this->descriptor->connect_error){
				$this->$info="Fallo al conectar a MySQL: (".$this->descriptor->connect_error.")" .$this->descriptor->connect_error;
				$this->conectado=false;
			}else{
				$this->info="Conectado al servidor MySQL: " .$this->descriptor->host_info;
				$this->conectado=true;
				$this->descriptor->query("SET NAMES 'utf8'");
			}
		
		return $this-> conectado;
	}
		
	public function getInfo(){
		return $this->info;
	}
		
	/**
	* tabla
	*/
	public function getLugares(){
		$str="";
		if($resultado=$this->descriptor->query("SELECT * FROM lugares")){
			$str=$str."<table border=1><tr bgcolor=\"#dddddd\"><td>id</td><td>nombre</td><td>descripcion</td><td>fecha</td></tr>";
			for ($num_fila = 0; $num_fila < $resultado->num_rows; $num_fila++){
				$resultado->data_seek($num_fila);
				$fila=$resultado->fetch_assoc();
				$str=$str."<tr>";
				$str=$str."<td>".$fila['id']."</td>";
				$str=$str."<td>".$fila['nombre']."</td>";
				$str=$str."<td>".$fila['descripcion']."</td>";
				$str=$str."<td>".$fila['fecha']."</td>";
				$str=$str."</tr>";
			}
			$str=$str."</table>";
		}else{
			printf("Error: $s\n", $this->descriptor->error);
		}
		return $str;
	}
	
	public function setLugar($lugar, $descripcion,$fecha){
		if($resultado = $this->descriptor->query("INSERT INTO lugares (nombre, descripcion, fecha) VALUES ('$lugar','$descripcion','$fecha')")){
			echo "OK<br>";
		}else{
			echo "ERROR<br>";
			printf("Error: $s\n", $this->descriptor->error);
		}
	}
}
?>