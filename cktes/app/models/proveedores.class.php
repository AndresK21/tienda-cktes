<?php
class Proveedor extends Validator{
	//Declaración de propiedades
	private $id_proveedor = null;
    private $proveedor = null;
    private $id_estado = null;

    //Métodos para sobrecarga de propiedades
    public function setId_proveedor($value){
		if($this->validateId($value)){
			$this->id_proveedor = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_proveedor(){
		return $this->id_proveedor;
    }
    
	public function setProveedor($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->proveedor = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getProveedor(){
		return $this->proveedor;
    }

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

	//Metodos para el manejo del CRUD
	public function getProveedores(){
		$sql = "SELECT id_proveedor, proveedor, id_estado FROM proveedores ORDER BY id_proveedor";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProveedor($value){
		$sql = "SELECT id_proveedor, proveedor, estado FROM proveedores INNER JOIN estado USING(id_estado) WHERE proveedor LIKE ? ORDER BY id_proveedor";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createProveedor(){
		$sql = "INSERT INTO proveedores(proveedor id_estado) VALUES (?, ?)";
		$params = array($this->proveedor, $this->id_estado);
		return Database::executeRow($sql, $params);
	}
	public function readProveedor(){
		$sql = "SELECT proveedor, id_estado FROM proveedores WHERE id_proveedor = ? ORDER BY id_proveedor";
		$params = array($this->id_proveedor);
		$proveedor = Database::getRow($sql, $params);
		if($proveedor){
            $this->proveedor = $proveedor['proveedor'];
            $this->id_estado = $proveedor['id_estado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProveedor(){
		$sql = "UPDATE proveedores SET proveedor = ?, id_estado = ? WHERE id_proveedor = ?";
		$params = array($this->proveedor, $this->id_estado, $this->id_proveedor);
		return Database::executeRow($sql, $params);
	}
	public function deleteProveedor(){
		$sql = "DELETE FROM proveedores WHERE id_provedor = ?";
		$params = array($this->id_proveedor);
		return Database::executeRow($sql, $params);
	}
}
?>