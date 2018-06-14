<?php
class Tipo_desarrollo extends Validator{
	//Declaración de propiedades
	private $id_tipo_desarrollo = null;
	private $descripcion = null;
    private $tipo_desarrollo = null;

    //Métodos para sobrecarga de propiedades
    public function setId_tipo($value){
		if($this->validateId($value)){
			$this->id_tipo_desarrollo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo(){
		return $this->id_tipo_desarrollo;
	}
	
	public function setDescripcion($value){
		if($this->validateAlphabetic($value, 1, 250)){
			$this->descripcion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescripcion(){
		return $this->descripcion;
    }
    
	public function setTipo_desarrollo($value){
		if($this->validateAlphabetic($value, 1, 50)){
			$this->tipo_desarrollo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo_desarrollo(){
		return $this->tipo_desarrollo;
    }

	//Metodos para el manejo del CRUD
	public function getTipo_desarrollos(){
		$sql = "SELECT id_tipo_desarrollo, descripcion, tipo_desarrollo FROM tipo_desarrollo ORDER BY id_tipo_desarrollo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchTipo_desarrollo($value){
		$sql = "SELECT id_tipo_desarrollo, descripcion, tipo_desarrollo FROM tipo_desarrollo WHERE tipo_desarrollo LIKE ? ORDER BY id_tipo_desarrollo";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createTipo_desarrollo(){
		$sql = "INSERT INTO tipo_desarrollo(tipo_desarrollo, descripcion) VALUES (?, ?)";
		$params = array($this->tipo_desarrollo, $this->descripcion);
		return Database::executeRow($sql, $params);
	}
	public function readTipo_desarrollo(){
		$sql = "SELECT tipo_desarrollo, descripcion FROM tipo_desarrollo WHERE id_tipo_desarrollo = ? ORDER BY id_tipo_desarrollo";
		$params = array($this->id_tipo_desarrollo);
		$tipo_desarrollo = Database::getRow($sql, $params);
		if($tipo_desarrollo){
			$this->tipo_desarrollo = $tipo_desarrollo['tipo_desarrollo'];
			$this->descripcion = $tipo_desarrollo['descripcion'];
			return true;
		}else{
			return null;
		}
	}
	public function updateTipo_desarrollo(){
		$sql = "UPDATE tipo_desarrollo SET tipo_desarrollo = ?, descripcion = ? WHERE id_tipo_desarrollo = ?";
		$params = array($this->tipo_desarrollo, $this->descripcion, $this->id_tipo_desarrollo);
		return Database::executeRow($sql, $params);
	}
	public function deleteTipo_desarrollo(){
		$sql = "DELETE FROM tipo_desarrollo WHERE id_tipo_desarrollo = ?";
		$params = array($this->id_tipo_desarrollo);
		return Database::executeRow($sql, $params);
	}
}
?>