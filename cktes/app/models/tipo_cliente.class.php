<?php
class Tipo_cliente extends Validator{
	//Declaración de propiedades
	private $id_tipo_cliente = null;
	private $tipo_cliente = null;

	//Métodos para sobrecarga de propiedades
	public function setId_tipo($value){
		if($this->validateId($value)){
			$this->id_tipo_cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo(){
		return $this->id_tipo_cliente;
	}
	
	public function setTipo_cliente($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->tipo_cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo_cliente(){
		return $this->tipo_cliente;
	}

	//Metodos para el manejo del CRUD
	public function getTipo_clientes(){
		$sql = "SELECT id_tipo_cliente, tipo_cliente FROM tipo_cliente ORDER BY id_tipo_cliente";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchTipo_cliente($value){
		$sql = "SELECT * FROM tipo_cliente WHERE tipo_cliente LIKE ? ORDER BY id_tipo_cliente";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createTipo_cliente(){
		$sql = "INSERT INTO tipo_cliente(tipo_cliente) VALUES(?)";
		$params = array($this->tipo_cliente);
		return Database::executeRow($sql, $params);
	}
	public function readTipo_cliente(){
		$sql = "SELECT tipo_cliente FROM tipo_cliente WHERE id_tipo_cliente = ?";
		$params = array($this->id_tipo_cliente);
		$tipo = Database::getRow($sql, $params);
		if($tipo){
			$this->tipo_cliente = $tipo['tipo_cliente'];
			return true;
		}else{
			return null;
		}
	}
	public function updateTipo_cliente(){
		$sql = "UPDATE tipo_cliente SET tipo_cliente = ? WHERE id_tipo_cliente = ?";
		$params = array($this->tipo_cliente, $this->id_tipo_cliente,);
		return Database::executeRow($sql, $params);
	}
	public function deleteTipo_cliente(){
		$sql = "DELETE FROM tipo_cliente WHERE id_tipo_cliente = ?";
		$params = array($this->id_tipo_cliente);
		return Database::executeRow($sql, $params);
	}
}
?>