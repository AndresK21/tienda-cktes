<?php
class Desarrollo extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $descripcion = null;

	//Métodos para sobrecarga de propiedades
	//ESTE ES EL ID DE LA IMPORTACION
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
	}
	//ESTE ES EL NOMBRE DE LA IMPORTACION
	public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre;
	}
    //ESTE ES LA DESCRIPCION DE LA IMPORTACION
	public function setDescripcion($value){
		if($this->validateAlphanumeric($value, 1, 200)){
			$this->descripcion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
    
	//Metodos para el manejo del CRUD
	public function getTipo_Desarrollo(){
		$sql = "SELECT id_tipo_desarrollo, tipo_desarrollo from tipo_desarrollo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	

}
?>