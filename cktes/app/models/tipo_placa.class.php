<?php
class Tipo_placa extends Validator{
	//Declaración de propiedades
	private $id_tipo_placa = null;
    private $tipo_placa = null;

    //Métodos para sobrecarga de propiedades
    public function setId_tipo_placa($value){
		if($this->validateId($value)){
			$this->id_tipo_placa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo_placa(){
		return $this->id_tipo_placa;
    }
    
	public function setTipo_placa($value){
		if($this->validateAlphanumeric($value, 1, 30)){
			$this->tipo_placa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo_placa(){
		return $this->tipo_placa;
    }

	//Metodos para el manejo del CRUD
	public function getTipo_placas(){
		$sql = "SELECT id_tipo_placa, tipo_placa FROM tipo_placa ORDER BY id_tipo_placa";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchTipo_placa($value){
		$sql = "SELECT id_tipo_placa, tipo_placa FROM tipo_placa WHERE tipo_placa LIKE ? ORDER BY id_tipo_placa";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createTipo_placa(){
		$sql = "INSERT INTO tipo_placa(tipo_placa) VALUES (?)";
		$params = array($this->tipo_placa);
		return Database::executeRow($sql, $params);
	}
	public function readTipo_placa(){
		$sql = "SELECT tipo_placa FROM tipo_placa WHERE id_tipo_placa = ? ORDER BY id_tipo_placa";
		$params = array($this->id_tipo_placa);
		$tipo_placa = Database::getRow($sql, $params);
		if($tipo_placa){
            $this->tipo_placa = $tipo_placa['tipo_placa'];
			return true;
		}else{
			return null;
		}
	}
	public function updateTipo_placa(){
		$sql = "UPDATE tipo_placa SET tipo_placa = ? WHERE id_tipo_placa = ?";
		$params = array($this->tipo_placa, $this->id_tipo_placa);
		return Database::executeRow($sql, $params);
	}
	public function deleteTipo_placa(){
		$sql = "DELETE FROM tipo_placa WHERE id_tipo_placa = ?";
		$params = array($this->id_tipo_placa);
		return Database::executeRow($sql, $params);
	}
}
?>