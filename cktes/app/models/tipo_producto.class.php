<?php
class Tipo_producto extends Validator{
	//Declaración de propiedades
	private $id_tipo_producto = null;
    private $tipo_producto = null;

    //Métodos para sobrecarga de propiedades
    public function setId_tipo_producto($value){
		if($this->validateId($value)){
			$this->id_tipo_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo_producto(){
		return $this->id_tipo_producto;
    }
    
	public function setTipo_producto($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->tipo_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipo_producto(){
		return $this->tipo_producto;
    }

	//Metodos para el manejo del CRUD
	public function getTipo_productos(){
		$sql = "SELECT id_tipo_producto, tipo_producto FROM tipo_producto ORDER BY id_tipo_producto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchTipo_producto($value){
		$sql = "SELECT id_tipo_producto, tipo_producto FROM tipo_producto WHERE tipo_producto LIKE ? ORDER BY id_tipo_producto";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createTipo_producto(){
		$sql = "INSERT INTO tipo_producto(tipo_producto) VALUES (?)";
		$params = array($this->tipo_producto);
		return Database::executeRow($sql, $params);
	}
	public function readTipo_producto(){
		$sql = "SELECT tipo_producto FROM tipo_producto WHERE id_tipo_producto = ? ORDER BY id_sutrato";
		$params = array($this->id_tipo_producto);
		$tipo_producto = Database::getRow($sql, $params);
		if($sutrato){
            $this->tipo_producto = $sutrato['tipo_producto'];
			return true;
		}else{
			return null;
		}
	}
	public function updateTipo_producto(){
		$sql = "UPDATE tipo_producto SET tipo_producto = ? WHERE id_tipo_producto = ?";
		$params = array($this->tipo_producto, $this->id_tipo_producto);
		return Database::executeRow($sql, $params);
	}
	public function deleteTipo_producto(){
		$sql = "DELETE FROM tipo_producto WHERE id_tipo_producto = ?";
		$params = array($this->id_tipo_producto);
		return Database::executeRow($sql, $params);
	}
}
?>