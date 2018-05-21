<?php
class Detalle extends Validator{
	//Declaración de propiedades
	private $id_detalle = null;
    private $cantidad = null;
    private $id_carrito = null;
    private $id_producto = null;

    //Métodos para sobrecarga de propiedades
    public function setId_detalle($value){
		if($this->validateId($value)){
			$this->id_detalle = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_detalle(){
		return $this->id_detalle;
    }
    
	public function setCantidadd($value){
		if($this->validateAlphanumeric($value, 1, 11)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
    }
    
    public function setId_carrito($value){
		if($this->validateId($value){
			$this->id_carrito = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_caarrito(){
		return $this->id_carrito;
    }
    
    public function setId_producto($value){
		if($this->validateId($value){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_carrito(){
		return $this->id_carrito;
	}

	//Metodos para el manejo del CRUD
	public function getDetalle(){
		$sql = "SELECT id_detalle, cantidad, id_carrito, id_producto FROM detalle_carrito ORDER BY id_detalle";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchDetalle($value){
		$sql = "SELECT id_detalle, cantidad, id_carrito, nombre FROM detalle_carrito INNER JOIN productos USING(id_producto) WHERE cantidad = ? ORDER BY id_detalle";
		$params = array("$value");
		return Database::getRows($sql, $params);
	}
	public function createDetalle(){
		$sql = "INSERT INTO detalle(cantidad, id_carrito, id_producto) VALUES (?, ?, ?)";
		$params = array($this->cantidad, $this->id_carrito, $this->id_producto);
		return Database::executeRow($sql, $params);
	}
	public function readDetalle(){
		$sql = "SELECT cantidad, id_carrito, id_producto FROM detalle_carrito WHERE id_detalle = ? ORDER BY id_detalle";
		$params = array($this->id_detalle);
		$detalle< = Database::getRow($sql, $params);
		if($detalle<){
            $this->cantidad = $detalle<['cantidad'];
            $this->id_carrito = $detalle<['id_carrito'];
            $this->id_producto = $detalle<['id_producto'];
			return true;
		}else{
			return null;
		}
	}
	public function updateDetalle(){
		$sql = "UPDATE detalle_carrito SET cantidad = ?, id_carrito = ?, id_producto = ? WHERE id_detalle = ?";
		$params = array($this->cantidad, $this->id_carrito, $this->, $this->id_carrito, $this->id_detalle);
		return Database::executeRow($sql, $params);
	}
	public function deleteDetalle(){
		$sql = "DELETE FROM detalle WHERE id_detalle = ?";
		$params = array($this->id_detalle);
		return Database::executeRow($sql, $params);
	}
}
?>