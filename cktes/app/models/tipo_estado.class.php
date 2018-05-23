<?php
class Tipo_estado extends Validator{
	//Declaración de propiedades
	private $id_tipo_estado = null;
    private $tipo_estado = null;

    //Métodos para sobrecarga de propiedades
    public function setId_tipo_estado($value){
		if($this->validateId($value)){
			$this->id_tipo_estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo_estado(){
		return $this->id_tipo_estado;
    }
    
	public function setTipo_estado($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->tipo_estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo_estado(){
		return $this->tipo_estado;
    }

	//Metodos para el manejo del CRUD
	public function getTipo_estados(){
		$sql = "SELECT id_tipo_estado, tipo_estado FROM tipo_estado ORDER BY id_tipo_estado";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searcTipo_estado($value){
		$sql = "SELECT id_tipo_estado, tipo_estado FROM tipo_estado WHERE tipo_estado LIKE ? ORDER BY id_tipo_estado";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function creatTipo_estado(){
		$sql = "INSERT INTO tipo_estado(tipo_estado) VALUES (?)";
		$params = array($this->tipo_estado);
		return Database::executeRow($sql, $params);
	}
	public function reaTipo_estado(){
		$sql = "SELECT tipo_estado FROM tipo_estado WHERE id_tipo_estado = ? ORDER BY idtipo_estado";
		$params = array($this->id_tipo_estado);
		$tipo_estado = Database::getRow($sql, $params);
		if(tipo_estado){
            $this->tipo_estado = tipo_estado['tipo_estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updatTipo_estado(){
		$sql = "UPDATE tipo_estado SET tipo_estado = ? WHERE id_tipo_estado = ?";
		$params = array($this->tipo_estado, $this->id_tipo_estado);
		return Database::executeRow($sql, $params);
	}
	public function deletTipo_estado(){
		$sql = "DELETE FROM tipo_estado WHERE id_tipo_estado = ?";
		$params = array($this->id_tipo_estado);
		return Database::executeRow($sql, $params);
	}
}
?>