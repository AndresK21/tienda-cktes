<?php
class Manejo extends Validator{
	//Declaración de propiedades
	private $id_manejo = null;
    private $precio_final = null;
    private $id_producto = null;
    private $id_impuesto = null;

    //Métodos para sobrecarga de propiedades
    public function setId_manejo($value){
		if($this->validateId($value)){
			$this->id_manejo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_manejo(){
		return $this->id_manejo;
    }
    
	public function setPrecio($value){
		if($this->validateMoney($value)){
			$this->precio_final = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPrecio(){
		return $this->precio_final;
    }

    public function setId_producto($value){
		if($this->validateId($value)){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_producto(){
		return $this->id_producto;
    }
    
	public function setId_impuesto($value){
		if($this->validateId($value)){
			$this->id_impuesto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_impuesto(){
		return $this->id_impuesto;
	}

	//Metodos para el manejo del CRUD
	public function getManejo(){
		$sql = "SELECT id_manejo, precio_final, id_producto, id_impuesto FROM manejo_impuesto ORDER BY id_manejo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchManejo($value){
		$sql = "SELECT id_manejo, precio_final, productos.nombre, impuestos.nombre FROM manejo_impuesto INNER JOIN productos USING(id_producto) INNER JOIN impuestos USING(id_impuesto) WHERE precio_final = ? ORDER BY id_manejo";
		$params = array("$value");
		return Database::getRows($sql, $params);
	}
	public function createManejo(){
		$sql = "INSERT INTO manejo_impuesto(precio_final, id_producto, id_impuesto) VALUES (?, ?, ?)";
		$params = array($this->precio_final, $this->id_producto, $this->id_impuesto);
		return Database::executeRow($sql, $params);
	}
	public function readManejo(){
		$sql = "SELECT precio_final, id_producto, id_impuesto FROM manejo_impuesto WHERE id_manejo = ? ORDER BY id_manejo";
		$params = array($this->id_manejo);
		$empleado = Database::getRow($sql, $params);
		if($manejo){
            $this->precio_final = $manejo['precio_final'];
            $this->id_producto = $manejo['id_producto'];
            $this->id_impuesto = $manejo['id_impuesto'];
			return true;
		}else{
			return null;
		}
	}
	public function updateManejo(){
		$sql = "UPDATE manejo_impuesto SET precio_final = ?, id_producto = ?, id_impuesto = ? WHERE id_manejo = ?";
		$params = array($this->precio_final, $this->id_producto, $this->id_impuesto, $this->id_manejo);
		return Database::executeRow($sql, $params);
	}
	public function deleteManejo(){
		$sql = "DELETE FROM manejo_impuesto WHERE id_manejo = ?";
		$params = array($this->id_manejo);
		return Database::executeRow($sql, $params);
	}
}
?>