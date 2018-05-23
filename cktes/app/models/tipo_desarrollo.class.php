<?php
class Tipo_desarrollo extends Validator{
	//Declaración de propiedades
	private $id_tipo_desarrollo = null;
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
    
	public function setTipo_desarrollo($value){
		if($this->validateAlphanumeric($value, 1, 50)){
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
		$sql = "SELECT id_tipo_desarrollo, tipo_desarrollo FROM tipo_desarrollo ORDER BY id_tipo_desarrollo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchTipo_desasrrollo($value){
		$sql = "SELECT id_tipo_desarrollo, tipo_desarrollo FROM tipo_desarrollo WHERE tipo_desarrollo LIKE ? ORDER BY id_tipo_desarrollo";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createTipo_desasrrollo(){
		$sql = "INSERT INTO tipo_desarrollo(tipo_desarrollo) VALUES (?)";
		$params = array($this->tipo_desarrollo);
		return Database::executeRow($sql, $params);
	}
	public function readTipo_desasrrollo(){
		$sql = "SELECT tipo_desarrollo FROM tipo_desarrollo WHERE id_tipo_desarrollo = ? ORDER BY idtipo_desarrollo";
		$params = array($this->id_tipo_desarrollo);
		$tipo_desarrollo = Database::getRow($sql, $params);
		if($tipo_desarrollo){
            $this->sustrato = $tipo_desarrollo['tipo_desarrollo'];
			return true;
		}else{
			return null;
		}
	}
	public function updateTipo_desasrrollo(){
		$sql = "UPDATE tipo_desarrollo SET tipo_desarrollo = ? WHERE id_tipo_desarrollo = ?";
		$params = array($this->tipo_desarrollo, $this->id_tipo_desarrollo);
		return Database::executeRow($sql, $params);
	}
	public function deleteTipo_desasrrollo(){
		$sql = "DELETE FROM tipo_desarrollo WHERE id_tipo_desarrollo = ?";
		$params = array($this->id_tipo_desarrollo);
		return Database::executeRow($sql, $params);
	}
}
?>