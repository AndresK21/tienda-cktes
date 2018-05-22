<?php
class Estado extends Validator{
	//Declaración de propiedades
	private $id_estado = null;
    private $estado = null;
    private $id_tipo_estado = null;

    //Métodos para sobrecarga de propiedades
    public function setId_estado($value){
		if($this->validateId($value)){
			$this->id_estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_estado(){
		return $this->id_estado;
    }
    
	public function setEstado($value){
		if($this->validateAlphanumeric($value, 1, 40)){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
    }

    public function setId_tipo($value){
		if($this->validateId($value)){
			$this->id_tipo_estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo(){
		return $this->id_tipo_estado;
    }
    
	//Metodos para el manejo del CRUD
	public function getEstados(){
		$sql = "SELECT id_estado, estado, id_tipo_estado FROM estado ORDER BY id_estado";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchEstado($value){
		$sql = "SELECT id_estado, estado, id_tipo_estado FROM estado WHERE estado LIKE ? ORDER BY id_estado";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createEstado(){
		$sql = "INSERT INTO estado(estado, id_tipo_estado) VALUES (?, ?)";
		$params = array($this->estado, $this->id_tipo_estado);
		return Database::executeRow($sql, $params);
	}
	public function readEstado(){
		$sql = "SELECT estado, id_tipo_estado FROM estado WHERE id_estado = ? ORDER BY id_estado";
		$params = array($this->id_estado);
		$estado = Database::getRow($sql, $params);
		if($estado){
            $this->nombres = $estado['estado'];
            $this->apellidos = $estado['id_tipo_estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateEstado(){
		$sql = "UPDATE estado SET estado = ?, id_tipo_estado = ? WHERE id_estado = ?";
		$params = array($this->estado, $this->id_tipo_estado, $this->id_estado);
		return Database::executeRow($sql, $params);
	}
	public function deleteEstado(){
		$sql = "DELETE FROM estado WHERE id_estado = ?";
		$params = array($this->id_estado);
		return Database::executeRow($sql, $params);
	}
}
?>