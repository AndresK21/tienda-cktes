<?php
class Presentacion extends Validator{
	//Declaración de propiedades
	private $id_presentacion = null;
    private $presentacion = null;
    private $id_tipo_producto = null;

    //Métodos para sobrecarga de propiedades
    public function setId_presentacion($value){
		if($this->validateId($value)){
			$this->id_presentacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_presentacion(){
		return $this->id_presentacion;
    }
    
	public function setPresentacion($value){
		if($this->validateAlphanumeric($value, 1, 20)){
			$this->presentacion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPresentacion(){
		return $this->presentacion;
    }

    public function setId_tipo($value){
		if($this->validateId($value)){
			$this->id_tipo_productos = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipo(){
		return $this->id_tipo_productos;
    }

	//Metodos para el manejo del CRUD
	public function getPresentaciones(){
		$sql = "SELECT id_presentacion, presentacion, id_tipo_producto FROM presentaciones ORDER BY id_presentacion";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchPresentacion($value){
		$sql = "SELECT id_presentacion, presentacion, tipo_producto FROM presentaciones INNER JOIN tipo_producto USING(id_tipo_producto) WHERE presentacion LIKE ? ORDER BY id_presentacion";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createPresentacion(){
		$sql = "INSERT INTO presentaciones(presentacion, id_tipo_producto) VALUES (?, ?)";
		$params = array($this->presentacion, $this->id_tipo_producto);
		return Database::executeRow($sql, $params);
	}
	public function readPresentacion(){
		$sql = "SELECT presentacion, id_tipo_producto FROM presentaciones WHERE id_presentacion = ? ORDER BY id_presentacion";
		$params = array($this->id_presentacion);
		$presentacion = Database::getRow($sql, $params);
		if($presentacion){
            $this->presentacion = presentaciono['presentacion'];
            $this->id_tipo_producto = $presentacion['id_tipo_producto'];
			return true;
		}else{
			return null;
		}
	}
	public function updatePresentacion(){
		$sql = "UPDATE presentaciones SET presentacion = ?, id_tipo_producto = ? WHERE id_presentacion = ?";
		$params = array($this->presentacion, $this->id_tipo_producto, $this->id_presentacion);
		return Database::executeRow($sql, $params);
	}
	public function deletePresentacion(){
		$sql = "DELETE FROM presentaciones WHERE id_presentacion = ?";
		$params = array($this->id_presentacion);
		return Database::executeRow($sql, $params);
	}
}
?>