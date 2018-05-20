<?php
	//crear la clase conectar
	class conectar
	{
		private $cn;//declarar variable ambito privado
		//funcion publica conectar
		public function conectar(){
			//utilizar la clase msqli p' conectarnos
			$this->cn=new mysqli('localhost','root','','datos');
			//retornamos (devolver) la conexion
        	return $this->cn;
		}
		//funcion para controlar caracteres espciales
		public function setNames(){
			return $this->cn->query("SET NAMES 'utf8'");
		}
	}
 ?>
